<?php
    require('./controllers/Basecontroller.php');
    require ('./core/Database.php');
    require('./model/Basemodel.php');
    $controllername = ucfirst((strtolower($_REQUEST['controller']) ?? ''). "controller");
    $acctionName = $_REQUEST['action'] ?? 'index'; 
    require ('./controllers/'.$controllername.'.php');
    $controllerOject = new $controllername;
    if($acctionName){
        $controllerOject -> $acctionName();
    }
?>
