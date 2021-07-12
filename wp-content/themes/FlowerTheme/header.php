<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
    <?php wp_head();?>

  </head>
  <body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark header-menu">
            <div class="container">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">LogoCorporativo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php 
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbarNav',
                            'menu_class'        => 'navbar-nav ml-auto',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker()
                        ) );
                    ?>
					<div class="">
						<i class="fas fa-shopping-cart"></i>
						<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
						<?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – 
						<?php echo WC()->cart->get_cart_total(); ?></a>
					</div>
                    <!-- <div class="collapse navbar-collapse" id="navbarNav">
                        <div class = "navbar-nav ml-auto">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#">Shop</a>
                            <a class="nav-link" href="#">About Us</a>
                            <a class="nav-link" href="#">Contact</a>
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </nav>
    </header>

                <!-- <div class="collapse navbar-collapse" id="navbarNav">
                    <div class = "navbar-nav ml-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Shop</a>
                        <a class="nav-link" href="#">About Us</a>
                        <a class="nav-link" href="#">Contact</a>
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div> -->