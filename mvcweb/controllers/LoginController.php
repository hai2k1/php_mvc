<?php

class Logincontroller extends BaseController{
    private $LoginModel;
    
    public function __construct() {
       
        $this->loadModel('Loginmodel');
        $this->LoginModel = new Loginmodel;
    }
    public function index(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $user = $_POST['user'];
            $pw_post = $_POST['pw'];
            $this->LoginModel->user($user);
            $pw = $this->LoginModel->pw;
            if($pw==$pw_post){
                return $this->view('front-end.Login.loginthanhcong');
            }
        }
           
            return $this->view('front-end.Login.index');
    }

}