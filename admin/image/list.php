<?php
require_once "funtions/fun.php";
$list = listImage();
?>

<div class="row">

    <div class="container" style="border: 1px solid white ; border-radius:10px ; margin: auto; background:white;

  padding:10px ; ">

        <table class="table">
            <thead>
            <tr>
                <th >لیست عکس ها</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <?php
            foreach ($list as $item):
                ?>

                <tbody>

                <tr>
                    <td><img width="100" src="<?php echo $item['image']?>" / > </td>
                    <td><a href="index.php?m=image&l=delete&id=<?php echo $item['id']?>"> <i class="fa fa-2x fa-trash" style="color: red" aria-hidden="true"> </a></td>
                    <td><a href="index.php?m=image&l=edit&id=<?php echo $item['id']?>"><i class="fa fa-2x fa-edit" style="color: green" aria-hidden="true"> </a></td>
                </tr>

                </tbody>
            <?php
            endforeach;
            ?>

        </table>
    </div>

</div>
