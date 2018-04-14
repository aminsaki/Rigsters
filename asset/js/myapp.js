jQuery(document).ready(function($){

 jQuery("tbody #Rig_delete_id").on('click',function(){


         var el=$(this);
         var pid=el.data('id');
         // var loader=$('#vip_loader');
         // loader.fadeIn(300);
         $.ajax({
             url:ajaxurl,
             type:'post',
             data:{
                 action:'rigster_id',
                 pid:pid
             },
             success:function(response){
                 alert(response);
             },
             error:function(error){
                 alert(error);
             }
         });
         return false;

  });///end Rig_delete_id

 });///end document