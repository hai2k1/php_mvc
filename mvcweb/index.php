<?php
    require('./controllers/Basecontroller.php');
    require ('./core/Database.php');
    require('./model/Basemodel.php');
    $controllername = ucfirst((strtolower($_REQUEST['controller']) ?? 'wellcome'). "controller");
    $acctionName = $_REQUEST['action'] ?? 'index'; 
    require ('./controllers/'.$controllername.'.php');
    $controllerOject = new $controllername;
    $controllerOject -> $acctionName();
?>
