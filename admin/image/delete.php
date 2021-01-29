<?php
require_once 'funtions/fun.php';
$id = $_GET['id'];
$delImg = deleteImg($id);
if ($delImg){
    header("location:index.php?m=image&l=list");
}

?>