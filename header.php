<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Rocky Routes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<header>

<div class="header-container">
    <?php if ( get_header_image() && is_front_page() ) : ?>
        <div id="site-header-image" >
            <img alt="" src="<?php header_image(); ?>" >
        </div>
    <?php endif; ?>
    <div>
    <nav id="nav-bar">
        <div id="header-logo">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
            ?>
        </div>
    
        <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
    </nav>
            </div>
</div>

</header>

<body <?php body_class(  ); ?> >
