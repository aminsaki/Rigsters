<?php
///CSS
wp_register_style('app', RIG_CSS_URL . 'app.css');
wp_enqueue_style('app');
wp_register_style('bootstrap', RIG_CSS_URL . 'bootstrap.min.css');
wp_enqueue_style('bootstrap');
wp_register_style('bootstrap-theme', RIG_CSS_URL . 'bootstrap-theme.min.css');
wp_enqueue_style('bootstrap-theme');
wp_register_style('jquerysctipttop', RIG_DATA_URL . 'jquerysctipttop.css');
wp_enqueue_style('jquerysctipttop.css');
wp_register_style('kamadatepicker', RIG_DATA_URL . 'kamadatepicker.css');
wp_enqueue_style('kamadatepicker');
///JS
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php wp_register_script('bootstrap', RIG_JS_URL . 'bootstrap.js');
wp_enqueue_script('bootstrap');
wp_register_script('freend', RIG_JS_URL . 'freend.js');
wp_enqueue_script('freend');
wp_register_script('kamadatepicker', RIG_DATA_URL . 'kamadatepicker.js');
wp_enqueue_script('kamadatepicker');
?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script type="text/javascript">

    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
