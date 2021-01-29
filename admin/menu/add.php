<?php
require_once "funtions/fun.php";
if (isset($_POST['btn'])){
    $data = $_POST['frm'];
    $add = addctg($data);
}
?>

<h1 class="pageLables" style="padding: 10px">افزودن منو جدید</h1>
<div class="row">

    <div class="col-md-6 " style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white;

 margin-top:150px ; padding:10px ; "
    >
<form role="form" method="post">
    <div class="form-group col-lg-4 col-lg-offset-2">
        <label for="txt">عنوان منو را وارد کنید:</label>
        <input type="text" class="form-control" id="txt" placeholder="عنوان منو"
        name="frm[title]"
        >
    </div>


    <label for="exampleInputPassword1" style="margin-right: 10px">وضعیت نمایش:</label>
    <div class="radio" style="margin-right: 10px;">
        <label>
            <input type="radio" id="optionsRadios1"
            name="frm[status]" value="1"
            >فعال
        </label>
    </div>
    <div class="radio" style="margin-right: 10px">
        <label>
            <input type="radio" id="optionsRadios1"
                   name="frm[status]" value="0"
            > غیر فعال
        </label>
    </div>
    <div class="form-group col-lg-4 col-lg-offset-2">
        <label for="txt">ترتیب نمایش را وارد کنید:</label>
        <input type="text" class="form-control" id="txt" placeholder="ترتیب نمایش"
               name="frm[odr]"
        >
    </div>

    <button type="submit" class="btn btn-primary col-lg-1" name="btn" style="margin-right: 10px">ثبت</button>
</form>
</div>
</div>