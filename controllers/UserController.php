<?php
class UserController extends Controller{

    public function login(){
        if(parent::auth()){
            parent::redirect('site/index');
        }else{
            $error = '';
            if($_POST){
                $config = new Config();
                if($_POST['action'] == 'login'){
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $user = User::find('all', array('conditions'=>array('email=?', $email)));
                    if(!empty($user)){
                        if(hash_hmac('sha256', $password, $config->secretKey) == $user[0]->password){
                            $_SESSION['username'] = $user[0]->username;
                            $_SESSION['id'] = $user[0]->id;
                            parent::redirect('site/index');
                        }else{
                            $error = 'Wrong Password!';
                        }
                    }else{
                        $error = 'Wrong Username!';
                    }
                }
                
                if($_POST['action'] == 'register'){
                    unset($_POST['action']);
                    $_POST['password'] = hash_hmac('sha256', $_POST['password'], $config->secretKey);
                    $user = new User($_POST);
                    try{
                        $user->save();
                        parent::redirect('site/index');
                    }catch(Exception $e){
                        if(strstr($e->getMessage(), 'Duplicate entry') == true)
                            $error = 'Username or Email Has Been Previously Registered';
                    }
                    
                }
            }
            parent::render('user/login', array('error'=>$error));
        }
    }
    
    public function logout(){
        session_destroy();
        parent::redirect('site/index');
    }
    
    public function update($id){
        if(parent::auth()){
            if($_SESSION['id'] == $id){
                $user = User::find($id);
                
                if($_POST){
                    if($_FILES['picture']){
                        parent::uploadImage($_FILES['picture'], 'user');
                    }
                    try{
                        $user->update_attributes($_POST);
                        $_SESSION['username'] = $_POST['username'];
                        parent::redirect('site/index');
                    }catch(Exception $e){
                        if(strstr($e->getMessage(), 'Duplicate entry') == true)
                            $error = 'Username or Email Has Been Previously Registered';
                    }
                    
                }

                parent::setHeader('default');
                parent::render('user/update', array('user'=>$user, 'error'=>isset($error) ? $error : ''));
                parent::setFooter('default');
            }else{
                parent::redirect('site/index');
            }
        }else{
            parent::redirect('site/index');
        }
    }
}