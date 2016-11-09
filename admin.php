<?php
session_start();
if(empty($_SESSION['uname']) || empty($_SESSION['pass'])){
header('location:index.php');
}else{
include_once "template/main-template.php";
}
?>