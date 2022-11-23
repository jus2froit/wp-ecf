<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
    <div id="website-logo">
        <?php if(has_custom_logo()) : ?>
            <div id="home-link">
            <?php the_custom_logo(); ?>
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>
        <?php else : ?>
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php endif; ?>
        <nav id="navigation">
            <?php
            wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_id' => 'primary-menu',
            )
            );
            ?>
        </nav>
    </div>