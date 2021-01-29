<?php
require_once "funtions/fun.php";
if (isset($_POST['btn'])){
    $data = $_POST['head'];
    $add_head = addHead($data);
}
?>


<h1 class="pageLables" style="padding: 10px">افزودن متن </h1>
<div class="row">

    <div class="col-md-6 " style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white;

 margin-top:150px ; padding:10px ; "
    >
        <form role="form" method="post">

            <div class="form-group  col-lg-offset-2">
                <label > متن اول: </label>
                <textarea class="form-control"  rows="3" name="head[line_one]"></textarea>
            </div>

            <div class="form-group  col-lg-offset-2">
                <label > متن دوم: </label>
                <textarea class="form-control"  rows="3" name="head[line_two]"></textarea>
            </div>

            <div class="form-group  col-lg-offset-2">
                <label > متن سوم: </label>
                <textarea class="form-control"  rows="3" name="head[line_three]"></textarea>
            </div>

            <button type="submit" class="btn btn-primary col-lg-1" name="btn" style="margin-right: 10px">ثبت</button>

        </form>
    </div>
</div>