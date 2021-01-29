<?php
require_once "config.php";
function connet(){
    $con = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);
    if ($con->connect_error){
        die("can not connect".$con->connect_error);
    }else{
        mysqli_query($con , "SET NAMES utf8");
        return $con;
    }
}

function addctg($data){
    $con = connet();
    $sql = "INSERT INTO `cat_tbl`( `title`, `status`, `odr`) VALUES ('$data[title]', '$data[status]', '$data[odr]')";
    $query = mysqli_query($con , $sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function listctg(){
    $con = connet();
    $sql = "SELECT * FROM `cat_tbl`";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res[] = $uu;
        }

        return $res;
    }
}

function deleteCtg($id){
    $con = connet();
    $sql = "DELETE FROM `cat_tbl` WHERE `id` = '$id' ";

    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function editCtg($id){
    $con = connet();
    $sql = "SELECT * FROM `cat_tbl` WHERE `id` = '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res = $uu;
        }

        return $res;
    }
}

function updateCtg($id , $data){
    $con = connet();
    $sql = "UPDATE `cat_tbl` SET `title`='$data[title]',`status`='$data[status]',`odr`='$data[odr]' WHERE `id` = '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function addNws($data){
    $con = connet();
    $sql = "INSERT INTO `nws_tbl`(`name`, `cat`, `text`) VALUES ('$data[name]' , '$data[cat]' , '$data[text]')";
    $query = mysqli_query($con , $sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function listNws(){
    $con = connet();
    $sql = "SELECT * FROM `nws_tbl`";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res[] = $uu;
        }

        return $res;
    }
}

function deleteNws($id){
    $con = connet();
    $sql = "DELETE FROM `nws_tbl` WHERE `id` = '$id' ";

    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function editNws($id){
    $con = connet();
    $sql = "SELECT * FROM `nws_tbl` WHERE `id` = '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res = $uu;
        }

        return $res;
    }
}

function updateNws($id , $data){
    $con = connet();
    $sql = "UPDATE `nws_tbl` SET `name`='$data[name]',`cat`='$data[cat]',`text`='$data[text]' WHERE `id` = '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function addHead($data){
    $con = connet();
    $sql = "INSERT INTO `headline_tbl`(`line_one`, `line_two`, `line_three`) VALUES ('$data[line_one]','$data[line_two]','$data[line_three]')";
    $query = mysqli_query($con , $sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function listHead(){
    $con = connet();
    $sql = "SELECT * FROM `headline_tbl`";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res[] = $uu;
        }

        return $res;
    }
}

function deleteHead($id){
    $con = connet();
    $sql = "DELETE FROM `headline_tbl` WHERE `id` = '$id' ";

    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function editHead($id){
    $con = connet();
    $sql = "SELECT * FROM `headline_tbl` WHERE `id` = '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res = $uu;
        }

        return $res;
    }
}

function updateHead($id , $data){
    $con = connet();
    $sql = "UPDATE `headline_tbl` SET `line_one`='$data[line_one]',`line_two`='$data[line_two]',`line_three`='$data[line_three]' WHERE `id`= '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function uploadImage($img){
    $name = $img['name'];
    $array = explode(".",$name);
    $ext = end($array);
    $newname = "img-".rand().".".$ext;
    $to = $img['tmp_name'];
    $from = "image/news/".$newname;
    move_uploaded_file($to,$from);
    return $from;
}

function addImage($img_rep){
    $con = connet();
    $sql = "INSERT INTO `imgg_tbl`(`image`) VALUES ('$img_rep')";
    $query = mysqli_query($con,$sql);

    if ($query){
        return true;
    }else{
        return false;
    }
}

function listImage(){
    $con = connet();
    $sql = "SELECT * FROM `imgg_tbl`";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res[] = $uu;
        }

        return $res;
    }
}

function deleteImg($id){
    $con = connet();
    $sql = "DELETE FROM `imgg_tbl` WHERE `id` = '$id' ";

    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}

function editImg($id){
    $con = connet();
    $sql = "SELECT * FROM `imgg_tbl` WHERE `id` = '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query->num_rows>0){
        while ($uu = mysqli_fetch_assoc($query)){
            $res = $uu;
        }

        return $res;
    }
}

function updateImg($id , $img_rep){
    $con = connet();
    $sql = "UPDATE `imgg_tbl` SET `image`='$img_rep' WHERE `id` = '$id' ";
    $query = mysqli_query($con,$sql);
    if ($query){
        return true;
    }else{
        return false;
    }
}