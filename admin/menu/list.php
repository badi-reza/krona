<?php
require_once "funtions/fun.php";

$list = listctg();

?>

<div class="row">

    <div class="container" style="border: 1px solid white ; border-radius:10px ; margin: auto; background:white;

  padding:10px ; ">

    <table class="table">
        <thead>
        <tr>
            <th>عنوان منو</th>
            <th>ترتیب نمایش</th>
            <th>وضعیت</th>
            <th>حذف</th>
            <th>ویرایش</th>
        </tr>
        </thead>

        <?php

        foreach ($list as $value):
        ?>
        <tbody>

        <tr>
            <td><?php echo $value['title']?></td>
            <td><?php echo $value['odr']?></td>
            <td><?php $uu = $value['status'];
            if ($uu>0){
                echo "فعال";
            }else{
                echo "غیر فعال";
            }

            ?></td>
            <td><a href="index.php?m=menu&l=delete&id=<?php echo $value['id']?>"> <i class="fa fa-2x fa-trash" style="color: red" aria-hidden="true"> </a></td>
            <td><a href="index.php?m=menu&l=edit&id=<?php echo $value['id']?>"><i class="fa fa-2x fa-edit" style="color: green" aria-hidden="true"> </a></td>
        </tr>

        </tbody>
        <?php

        endforeach;
        ?>
    </table>
</div>

</div>