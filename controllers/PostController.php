<?php

class PostController extends Controller{
    
    public $layouts = 'default';
    
    public function index(){
        $posts = Post::find('all', array('order' => 'id desc'));
        parent::render('post/index', array('posts' => $posts));
    }
    
    public function view($id){
        $post = Post::find($id);
        parent::render('post/view', array('post'=>$post));
    }
    
    public function myposts(){
        if(parent::auth()){
            $user = User::find($_SESSION['id']);
            $posts = $user->posts;
            usort($posts, 'parent::cmp');
            
            parent::render('post/myposts', array('posts' => $posts));
        }else{
            parent::redirect('site/index');
        }
    }
    
    public function create(){
        if(parent::auth()){
            if($_POST){
                if(isset($_FILES['picture'])){
                    parent::uploadImage($_FILES['picture'], 'post');
                }
                $_POST['slug'] = parent::createSlug($_POST['title']);
                $_POST['user_id'] = $_SESSION['id'];
                
                $post = new POST($_POST);
                
               
                $post->save();
                parent::redirect('post/myposts');
                
            }
            parent::render('post/create');
        }else{
            parent::redirect('site/index');
        }
    }
    
    public function delete($id){
        if(parent::auth()){
            $post = Post::find($id);
            if($post->user_id == $_SESSION['id']){
                $post->delete();
                parent::redirect('post/myposts');
            }else{
                parent::redirect('site/index');
            }
        }else{
            redirect('site/index');
        }
    }
    
    public function update($id){
        if(parent::auth()){
            $post = Post::find($id);
            if($post->user_id == $_SESSION['id']){
                if($_POST){
                if(isset($_FILES['picture'])){
                    parent::uploadImage($_FILES['picture'], 'post');
                }
                
                $post->update_attributes($_POST);
                parent::redirect('post/view&id=' . $post->id);
                
            }
                parent::render('post/update', array('post'=>$post));
            }else{
                parent::redirect('site/index');
            }
        }else{
            parent::redirect('site/index');
        }
    }
}