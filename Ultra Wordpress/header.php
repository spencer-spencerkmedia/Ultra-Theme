<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body class="">
  <div class="d-flex container" id="wrapper">
    <nav class="navbar navbar-expanded-md navbar-light bg-light mobile-only">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="https://oswevdproductlink.com/wp-content/uploads/2018/12/everdrylogo.png" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
        	</button>
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <?php
            wp_nav_menu( array(
              'theme_location'  => 'primary',
              'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => false,
              'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
          ?>
          <ul class="navbar-nav mr-auto nav-search">
            <li>
            <form role="search" method="get" id="searchform" action="<?php echo get_site_url(); ?>">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-secondary" id="searchsubmit" type="search"><i class="fa fa-search"></i></button>
                </div>
                <input type="text" value="" name="s" id="s" class="form-control form-control-md" placeholder="Search...">
              </div>
            </form>
            </li>
          </ul>
          </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <div class="bg-light" id="sidebar-wrapper">
      <div class="sidebar-container">
        <div class="sidebar-heading"><a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="https://oswevdproductlink.com/wp-content/uploads/2018/12/everdrylogo.png" /></a></div>
        <ul class="list-group list-group-flush">
          <li class="active">
            <a href="<?php echo get_site_url(); ?>">Home</a>
          </li>
          <li class="">
            <a href="#postSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Shop</a>
            <ul class="collapse list-unstyled" id="postSubmenu">
              <li><a href="https://oswevdproductlink.com/product-category/booklet/">Booklets</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/book/">Books</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/brochure/">Brochures</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/business-card/">Business Cards</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/card/">Cards</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/envelope/">Envelopes</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/form/">Forms</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/label/">Labels</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/letterhead/">Letterheads</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/literature/">Literature</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/collateral/">Marketing Collateral</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/misc/">Misc</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/postcard/">Postcards</a></li>
              <li><a href="https://oswevdproductlink.com/product-category/sign/">Signs</a></li>
              <li><a href="https://oswevdproductlink.com/shop/">View All</a></li>
            </ul>
          </li>
          <li>
            <a href="https://oswevdproductlink.com/marketing-tips/?v=7516fd43adaa">Marketing Tips</a>
          </li>
          <li>
            <a href="">Media Library</a>
          </li>
          <li>
            <a href="">Contact</a>
          </li>

        </ul>
        <hr class="" />

        <form role="search" method="get" id="searchform" action="<?php echo get_site_url(); ?>">
          <div class="input-group">
            <div class="input-group-prepend">
              <button class="btn btn-outline-secondary" id="searchsubmit" type="search"><i class="fa fa-search"></i></button>
            </div>
            <input type="text" value="" name="s" id="s" class="form-control form-control-md" placeholder="Search...">
          </div>
        </form>

        <ul class="list-unstyled">
          <li>
            <a href="#">Delivery</a>
          </li>
          <li>
            <a href="https://oswevdproductlink.com/my-account/">My Account</a>
          </li>
          <li>
            <a class="checkout" href="https://oswevdproductlink.com/checkout"><i class="fas fa-shopping-cart"></i> Checkout</a>
          </li>
        </ul>
        <div class="container blue-footer">
          <h5>Customer Service</h5>
          <p>
            You may contact your Customer Service Representative Jane Doe by phone at (888) 123-4567 or <a href="mailto:doe@oswevdproductlink.com">email</a>
          </p>
          <ul class="list-unstyled">
            <li><a href="">Terms &amp; Conditions</a></li>
          </ul>
        </div>
      </div>

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div class="content-container" id="page-content-wrapper">
