<?php
function Rig_dashboard_page()
{?>
   <table class="table table-responsive table-bordered">
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
        $users= $wpdb->get_results("SELECT * FROM `wp-rigster`");
//        $wpdb->show_errors();
//        $wpdb->print_error();
       $i=1;
        foreach($users as $user):
        ?>
          <tr>
              <td><?= $i++;?></td>
              <td><?= $user->usersname; ?></td>
              <td><a href="#" id="Rig_delete_id" data-id="<?php echo $user->id;?>"  class="btn btn-danger">Delete</a> </td>
          </tr>
          <?php endforeach;?>
        </tbody>

   </table>
<?php }?>