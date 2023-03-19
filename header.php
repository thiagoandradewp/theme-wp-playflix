<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();?>

    <div class="playflix_header">
        <a href="<?php home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-play.svg" alt="Playflix"><br></a>
    
    <div class="playflix_header_menu">
        <?php wp_nav_menu();?>
    </div>

    </div>

</head>
<body>

