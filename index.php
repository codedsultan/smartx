<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <?php wp_head(); ?>
<!-- <title>Document</title> -->
<!-- <style>
    :lang(ar){
        direction: rtl;   
    }
</style> -->
</head>

<body <?php body_class('example'); ?>>
    <?php wp_body_open();?>
    <p>hello world</p>
    <?php wp_footer(); ?>
</body>
</html>