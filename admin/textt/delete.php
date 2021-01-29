<?php
require_once 'funtions/fun.php';
$id = $_GET['id'];
$delHead = deleteHead($id);
if ($delHead){
    header("location:index.php?m=textt&l=list");
}

?>