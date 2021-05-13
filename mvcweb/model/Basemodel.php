<?php
class Basemodel extends Database{
    protected $connect;
    public function __construct(){
        $this->connect = $this ->connect();
        
    }
    //lấy tất cả dữ liệu
    public function all($Table,$select = ['*'],$limit =15){
        $column = implode(',',$select);
       $sql = "SELECT $column FROM $Table LIMIT $limit ";
       $query=$this->_query($sql);
       while($row = mysqli_fetch_assoc($query)){
           
       }
    }
    //thêm dữ liệu
    public function find($id){
        
    }
    //update dữ liệu
    public function store(){
        
    }
    //xóa dữ liệu
    public function delete(){
        
    }
    public function _query($sql){
       return mysqli_query($this->connect,$sql);
    }
    //tìm kiếm dữ liệu bằng dữ liệu nhỏ
    public function searchFor($value,$name, $array) {
        foreach ($array as $key => $val) {
            if ($val[$name] === $value) {
                return $key;
            }
        }
        return null;
     }
}   