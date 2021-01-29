<?php
require_once "funtions/fun.php";
$list = listNws();
?>

<div class="row">

    <div class="container" style="border: 1px solid white ; border-radius:10px ; margin: auto; background:white;

  padding:10px ; ">

        <table class="table">
            <thead>
            <tr>
                <th style="width: 200px;">عنوان خبر</th>
                <th style="width: 10px;">دسته بندی</th>
                <th style="width: 700px;">توضیحات</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <?php
            foreach ($list as $item):
            ?>

                <tbody>

                <tr>
                    <td><?php echo $item['name']?></td>
                    <td><?php echo $item['cat']?></td>
                    <td><?php echo $item['text']?></td>
                    <td><a href="index.php?m=news&l=delete&id=<?php echo $item['id']?>"> <i class="fa fa-2x fa-trash" style="color: red" aria-hidden="true"> </a></td>
                    <td><a href="index.php?m=news&l=edit&id=<?php echo $item['id']?>"><i class="fa fa-2x fa-edit" style="color: green" aria-hidden="true"> </a></td>
                </tr>

                </tbody>
            <?php
            endforeach;
            ?>

        </table>
    </div>

</div>
