<?php
function Rig_dashboard_page()
 {
   if(! current_user_can('manage_options'))
   {
       wp_die('متاسفانه شما اجازه‌ی بازدید از این صفحه را ندارید. ');
   }
      config_url_rigster();

 }

function config_url_rigster()
{
     if(!empty($_POST)):

        $post_method= $_POST['rigsters'];

      switch ($post_method){

          case 'edit_rigster':
               include RIG_INCAD_DIR . "edit_rigsterus.php";
          break;
          default:
//              include  RIG_INCAD_DIR ."show_rigsterus.php";
              include RIG_INCAD_DIR . "edit_rigsterus.php";

              break;
      }
     else:
         include RIG_INCAD_DIR . "edit_rigsterus.php";

//       include  RIG_INCAD_DIR ."show_rigsterus.php";
     endif; #endif isset $_Get
}
?>