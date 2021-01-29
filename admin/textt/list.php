<?php
require_once "funtions/fun.php";
$list = listHead();
?>
<div class="row">

    <div class="container" style="border: 1px solid white ; border-radius:10px ; margin: auto; background:white;

  padding:10px ; ">

        <table class="table">
            <thead>
            <tr>
                <th > متن اول</th>
                <th >متن دوم</th>
                <th >متن سوم</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>
            </thead>


                <tbody>
                <?php
                foreach ($list as $head):
                ?>
                <tr>
                    <td><?php  echo $head['line_one'] ?></td>
                    <td><?php  echo $head['line_two'] ?></td>
                    <td><?php  echo $head['line_three'] ?></td>
                    <td><a href="index.php?m=textt&l=delete&id=<?php echo $head['id']?>"> <i class="fa fa-2x fa-trash" style="color: red" aria-hidden="true"> </a></td>
                    <td><a href="index.php?m=textt&l=edit&id= <?php echo $head['id']?>"><i class="fa fa-2x fa-edit" style="color: green" aria-hidden="true"> </a></td>
                </tr>

                </tbody>
            <?php

            endforeach;
            ?>

        </table>
    </div>

</div>
