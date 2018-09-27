<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Rocky Routes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<header>
<?php if ( get_header_image() ) : ?>
    <div id="site-header" style="background: url(<?php echo( get_header_image() ); ?>) no-repeat bottom center" class="header_image">
<?php endif; ?>

 <nav id="nav-bar">
			<ul>
				<li class="header-logo">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                    </li>
				<li class="header-item push-right" ><a class="nav-link" href="#coffee">Coffee</a></li>
				<li class="header-item"><a class="nav-link" href="#origin">Origin</a></li>
				<li class="header-item"><a class="nav-link" href="#order">Order</a></li>
			</ul>
      </nav>
      
      <h1 id="header">
<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<p><?php bloginfo('description'); ?></p>
                    </div>

</header>

<body>
