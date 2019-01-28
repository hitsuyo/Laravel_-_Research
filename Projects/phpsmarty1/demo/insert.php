<?php
require '../libs/Smarty.class.php';
$smarty = new Smarty;
include_once("config.php");


if(isset($_POST['submit']))
{
    // $mysqli_query = $dbo->prepare("insert into user(name, city) values('".$_POST['name']."','".$_POST['city']."') ");
    $mysqli_query = $dbo->prepare("insert into user(name, city) values(:name, :city) ");

    $mysqli_query->bindParam(':name',$_POST['name']);
    $mysqli_query->bindParam(':city',$_POST['city']);
    
    $mysqli_query->execute();
    header("location:view.php"); // show this page aftert submit
    echo "add record successfully";
}




$smarty->display('insert.tpl');
?>

<!-- {config_load file="test.conf sectuion="setup"}
{include file="header.tpl" title="hi"} -->