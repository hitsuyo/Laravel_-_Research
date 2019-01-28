<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty;
include("config.php");

$mysqli_query = $dbo->prepare("select * from user where id='".$_GET['id']."'");
// $mysqli_query = $dbo->prepare("select * from user);
$mysqli_query->execute();
$data = $mysqli_query->fetch();



if(isset($_POST['submit']))
{
    $dataInput = [
        'name' => $_POST['name'],
        'city' => $_POST['city'],
        'id' => $_POST['id']
    ];

    $mydbo = $dbo->prepare("update user SET name= :name, city= :city where id= :id ");
    $mydbo->execute($dataInput);
    
    // $mydbo = $dbo->prepare("update user SET name='".$_POST['name']."', city='".$_POST['city']."' where id = '".$_POST['id']."' ");
    // $mydbo->execute();
    
    header("location:view.php");
}

// if(isset($_GET['del']))
// {
//     $mysqli_query = $dbo->prepare("delete from user where id = '".$_GET['del']."' ");
//     $mysqli_query->execute();
//     header("location:view.php");
// }

$smarty->assign('users_edit',$data);
$smarty->display('edit.tpl');
?>

