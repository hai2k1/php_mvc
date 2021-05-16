<?php
class Logincontroller extends BaseController{
    private $LoginModel;
    
    public function __construct() {
       
        $this->loadModel('Loginmodel');
        $this->LoginModel = new Loginmodel;
    }
    public function index(){
        $name = 'hai201';
        $level = '1';
        $thongbao = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $user = $_POST['user'];
            $pw_post = $_POST['pw'];
            $this->LoginModel->user($user);
            $pw = $this->LoginModel->pw;
            $new_user = isset($_POST['new_user'])?? '';
            $new_pw = isset($_POST['new_pw'])?? '';
            $new_email = isset($_POST['new_email'])?? '';
            $users = $this->LoginModel->users;
            if ($users==$user) {
                $thongbao = 'tài khoản đã tồn tại';     
            }
            else{
                $thongbao = 'đang kí thành công';
                $this->LoginModel->dangky($new_user,$new_pw,$new_email);
            }
            //sử lí cookie
            if($pw==$pw_post){
                setcookie($name, $level, time() + (86400 * 30), "/");
            }
        }
        // sử lí đăng nhập
        if(isset($_COOKIE['hai201'])=='hai201'){
            header("Location: http://localhost/mvcweb/index.php?controller=product&action=index" );
            return $this->view('front-end.product.index');
        }
        else{
            return $this->view('front-end.Login.index');
        }
        
    }
    public function logout(){
        $name = 'hai201';
        $level = '1';
        setcookie($name, $level, time() - 36000, "/");
        header("Location: http://localhost/mvcweb/index.php?controller=login&action=index" );
    }
}