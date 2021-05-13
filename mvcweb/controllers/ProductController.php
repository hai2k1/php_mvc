<?php
class Productcontroller extends Basecontroller{
    private $productmodel;
    public function __construct() {
        $this->loadModel('Productmodel');
        $this->productmodel = new ProductModel; 
    }
    
    public function index() {
        $products = $this->productmodel->getAll(['id','name'],);
        return $this->view('front-end.products.index');
        [
            'products'=>$products
        ];
        
    }
}
