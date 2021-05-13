<?php

class Logincontroller extends BaseController{
    private $LoginModel;
    
    public function __construct() {
       
        $this->loadModel('Loginmodel');
        $this->LoginModel = new Loginmodel;
    }
    public function index(){
            
            $this->LoginModel->user();
            $pw = $this->LoginModel->pw;
            
            return $this->view('front-end.Login.index');
    }

}