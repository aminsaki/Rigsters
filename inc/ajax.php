<?php
add_action('wp_ajax_rigster_id','rigster_id');


function rigster_id()
{
    $pid=$_POST['pid'];
    global $wpdb;
    $wpdb->query("DELETE FROM  `wp_careerexperiences`  WHERE uid={$pid} LIMIT 1");
    $wpdb->query("DELETE FROM  `wp_educationalrecords`  WHERE uid={$pid} LIMIT 1");
    $res=$wpdb->query("DELETE FROM  `wp-rigster`  WHERE uid={$pid} LIMIT 1");
    if($res){
        die("متقاضی مورد نظر شما با موفقعیت حذف شده");
    }
    die("خطایی رخ داده است لطفا بعدا امتحان کنید");
}