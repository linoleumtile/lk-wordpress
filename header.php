<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <!--Styles-->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    </head>
<body>
  <div id="wrap">
    <!-- Navbar
    ================================================== -->
 <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse collapse">
          <ul class="nav">

              <?php 
    wp_nav_menu( array(
        'menu'       => 'top_menu',
        'depth'      => 2,
        'container'  => false,
        'menu_class' => 'nav',
        'fallback_cb' => 'wp_page_menu',
        //Process nav menu using our custom nav walker
        'walker' => new twitter_bootstrap_nav_walker())
    );
?>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--container-->
    </div><!--navbar-inner-->
  </div><!--navbar-->
     
<!--end navbar-->

<!-- Subhead
================================================== -->
<header class="jumbotron masthead" id="overview">
    <h1><a class="plain" href="/wordpress/home" alt="home"><?php echo '' . get_bloginfo('name'); ?></a></h1>
    <h4 class="fancy"><?php echo '' . get_bloginfo ( 'description' );  ?></h4>
</header>
<!--end subhead-->

<div class="container">