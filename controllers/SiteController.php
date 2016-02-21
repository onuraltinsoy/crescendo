<?php
class SiteController extends Controller{
    
    public $layouts = 'default';
    
    public function index(){
        $posts = Post::find('all', array('limit'=>4, 'order'=>'id desc'));
        parent::render('site/index', array('posts'=>$posts));
    }
    
}