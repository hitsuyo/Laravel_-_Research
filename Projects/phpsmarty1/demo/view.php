<?php
// https://www.youtube.com/watch?v=fN2TS6n4h0A
// use database
// https://www.hostinger.com/tutorials/how-to-use-php-to-insert-data-into-mysql-database

require '../libs/Smarty.class.php';
$smarty = new Smarty;
include("config.php");

// if(isset($_POST['submit']))
// {
    // use PDO to work with data 
    $mysqli_query = $dbo->prepare("select * from user");
    $mysqli_query->execute();
    while($res=$mysqli_query->fetch()){
        $data[]=$res; // add to array
    }
    if(isset($_GET['del']))
    {
        $mysqli_query = $dbo->prepare("delete from user where id = '".$_GET['del']."' ");
        $mysqli_query->execute();
        header("location:view.php");
    }
    
    
    $smarty->assign('user', $data);
    $smarty->display('view.tpl');
// }

?>