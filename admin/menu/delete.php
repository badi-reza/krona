<?php
require_once 'funtions/fun.php';
$id = $_GET['id'];
$delctg = deleteCtg($id);
if ($delctg){
    header("location:index.php?m=menu&l=list");
}

?>