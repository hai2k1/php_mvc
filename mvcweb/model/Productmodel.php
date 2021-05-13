
<?php
class Productmodel extends BaseModel{
    const TABLE = 'product';
    public function getAll($select = ['*'],$limit =15){
        $this->all(self::TABLE,$select,$limit);
    }
    public function findbyid($id){

    }
}