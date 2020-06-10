<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Root Multipurpose Landing Page Template">
    <meta name="keywords" content="Root HTML Template, Root Landing Page, Landing Page Template">
   
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700%7CRoboto:300,400,500%7CMuli:300,400" rel="stylesheet">
   
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/animate.css'; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/owl.carousel.css'; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/owl.theme.css'; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/magnific-popup.css'; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/ionicons.min.css'; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/style.css'; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css'; ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.min.css'; ?>" type="text/css" media="screen">
  </head>

    <div class="wrapper">
      <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">root </a>
          </div>
          <div class="navbar-right">
               <a href="#buy" class="btn btn-nav page-scroll wow fadeInDown" data-wow-delay="0.3s"><span>Buy Now</span></a>
                </div>
                <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'collapse navbar-collapse navbar-right', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav','theme_location'=>'header-menu') ); 
                ?>
               
                
           
        </div>
      </nav><!-- /.navbar-collapse -->