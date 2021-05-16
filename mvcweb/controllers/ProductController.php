<?php
class Productcontroller extends Basecontroller{
    private $productmodel;
    public function __construct() {
        $this->loadModel('Productmodel');
        $this->productmodel = new ProductModel; 
    }
    
    public function index() {
        $tentimkiem = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $tentimkiem = $_POST['timkiem'];
        }
            
        $this->productmodel->findbyname($tentimkiem);
        $products= $this->productmodel->name;
        return $this->view('front-end.products.index',[
            'products'=>$products
        ]);
    }
}
