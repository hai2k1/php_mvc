
<?php
class Productmodel extends BaseModel{
    public $name;
    const TABLE = 'product';
    public function getAll($select = ['*'],$limit =15){
        $this->all(self::TABLE,$select,$limit);
    }
    public function findbyname($name=''){
        $sql = "SELECT * FROM `product` WHERE 1";
        $query = $this->_query($sql);
        $arr_sanpham = [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($arr_sanpham, $row); 
        }
        $column_by_name = $this->searchFor(  $name ,'name',$arr_sanpham);
        if(isset($column_by_name)){
            $this->name = $arr_sanpham[$column_by_name];
        }
       
    }
}