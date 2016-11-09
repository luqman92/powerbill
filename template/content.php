<?php

$mod=htmlentities(@$_GET['mod']);
$halaman="mod/$mod.php";

if(!file_exists($halaman) || empty($mod)){
	include "mod/home.php";
}else{
	include "$halaman";
}

?>