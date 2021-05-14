
<?php
class Loginmodel extends BaseModel{
    const TABLE = 'users';
    public $pw;
    //lấy thông tin người dùng
    public function user($users=''){
        
        $sql = "SELECT * FROM `users`";
        $query = $this->_query($sql);
        $arr_user = [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($arr_user, $row);
        }
        $column_by_user = $this->searchFor($users   ,'user',$arr_user);
        
        if ($value = $arr_user[$column_by_user]??['pw'=>'']){
            $this->pw =$value['pw']; 
        }
        else{
            $this->pw = '';
        }
        
    }
}