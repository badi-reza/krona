<?php
require_once "funtions/fun.php";
if (isset($_POST['btn'])){
    $data = $_POST['nws'];
    $add = addNws($data);
}
?>

<h1 class="pageLables" style="padding: 10px">افزودن اخبار </h1>
<div class="row">

    <div class="col-md-6 " style="border: 1px solid blue ; border-radius:10px ; margin: auto; background:white;

 margin-top:150px ; padding:10px ; "
    >
        <form role="form" method="post">
            <div class="form-group col-lg-4 col-lg-offset-2">
                <label for="txt">عنوان خبر را وارد کنید:</label>
                <input type="text" class="form-control" id="txt" placeholder="عنوان خبر"
                       name="nws[name]"
                >
            </div>

            <div class="form-group col-lg-4 col-lg-offset-2">
                <label >دسته بندی اخبار:  </label>
                <select  class="form-control"  name="nws[cat]">

                    <?php

                    $list = listctg();
                    foreach ($list as $value){
                        echo "<option value=\"$value[id]\" >$value[title]</option>";
                    }

                    ?>

                </select>
            </div>

            <div class="form-group  col-lg-offset-2">
                <label > توضیحات: </label>
                <textarea class="form-control"  rows="3" name="nws[text]"></textarea>
            </div>

            <button type="submit" class="btn btn-primary col-lg-1" name="btn" style="margin-right: 10px">ثبت</button>
        </form>
    </div>
</div>