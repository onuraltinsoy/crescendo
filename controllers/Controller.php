<?php
session_start();
function CrcClass($class_name) {
        require_once $class_name . '.php';
}
spl_autoload_register('CrcClass');

// Include autoloader
require dirname(__FILE__) . '/../vendor/autoload.php';
require dirname(__FILE__) . '/../config/database.php';
require dirname(__FILE__) . '/../config/config.php';



class Controller{

    public function render($path, $data = NULL){
        
        $smarty = new Smarty();
        
        if(isset($data)){
            foreach($data as $key=>$value){
                $smarty->assign($key, $value);
            }
        }
        $smarty->display(dirname(__FILE__) . '/../views/' . $path . '.tpl');
    }
    
    public function redirect($path){
        $config = new Config();
        $path = $config->hostname . '/?r=' . $path;
        header('location: ' . $path);
    }
    
    public function auth(){
        if(isset($_SESSION['username']) && isset($_SESSION['id'])){
            return true;
        }else{
            return false;
        }
    }
    
    public function setHeader($path){
        $path = __DIR__ . '/../layouts/' . $path . '/header.php';
        require_once $path;
    }
    
    public function setFooter($path){
        $path = __DIR__ . '/../layouts/' . $path . '/footer.php';
        require_once $path;
    }
    
    public function uploadImage($file, $path){
        if($file['type'] == 'image/jpeg' || $file['type'] == 'image/png'){
            $filename = md5($file['name']) . time() . '.jpg';
            $filepath = __DIR__ . '/../assets/img/' . $path . '/';
            move_uploaded_file($file['tmp_name'], $filepath . $filename);
            $_POST['picture'] = $filename;
        }else{
            $error = 'Only JPEG or PNG Image';
        }
    }
    
    public function createSlug($string, $i=1) {

    $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-','ı'=>'i','İ'=>'i','ğ'=>'g','Ğ'=>'g','ş'=>'s','Ş'=>'s','ü'=>'u'
    );

    // -- Remove duplicated spaces
    $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);

    // -- Returns the slug
    $slug = strtolower(strtr($string, $table));
    $control = Post::find('all',array('conditions'=>array('slug=?', $slug)));
    if(!empty($control)){
        $i++;
        $stringArr = explode(' ', $string);
        
        if(is_numeric(end($stringArr)))
            array_pop($stringArr);
        
        $string = implode(' ', $stringArr);
        $string .= ' ' . $i;
        return self::createSlug($string, $i);
    }else{
        return $slug;
    }


    }
    
    public function cmp($a, $b)
    {
        if ($a->id == $b->id) {
            return 0;
        }
        return ($a->id > $b->id) ? -1 : 1;
    }
}