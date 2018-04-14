<div class="container-fluid">
<table class=" table table-responsive table-bordered mypanel">
    <thead>
    <tr>
        <th>ردیف</th>
        <th>نام و نام خانوادگی</th>
        <th>عملیات</th>
    </tr>
    </thead>
    <tbody>
    <?php
    global $wpdb;
    $users= $wpdb->get_results("SELECT * FROM `wp_rigster`");
    //        $wpdb->show_errors();
    //        $wpdb->print_error();
    $i=1;
    foreach($users as $user):
        ?>

         <tr>
            <td><?= $i++;?></td>
            <td><?= $user->name_fmaily; ?></td>
            <td>
                <button href="#" id="Rig_delete_id" data-id="<?php echo $user->uid;?>"  class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                   <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $user->uid; ?>">
                    <button  type="submit" name="rigsters" value="edit_rigster" class="btn btn-success"><i class="glyphicon glyphicon-eye-open"></i></button>
                 </form>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>

</table>
</div>