<?php
require_once 'funtions/fun.php';
$id = $_GET['id'];
$delnws = deleteNws($id);
if ($delnws){
    header("location:index.php?m=news&l=list");
}

?>