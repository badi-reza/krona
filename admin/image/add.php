<?php
require_once "funtions/fun.php";
if (isset($_POST['btn'])){
    $img = $_FILES['img'];
    $img_rep = uploadImage($img);
    $add = addImage($img_rep);
}
?>

<h1 class="pageLables" style="padding: 10px">افزودن عکس </h1>
<div class="row">

    <div class="col-md-6 " style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white;

 margin-top:150px ; padding:10px ; "
    >
        <form role="form" method="post" enctype="multipart/form-data">

            <label>عکس خود را انتخاب کنید</label>
            <input type="file" class="form-control-file" name="img">
</br>
            <button type="submit" class="btn btn-primary" name="btn">ثبت</button>
        </form>
    </div>

