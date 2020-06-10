<?php
/*add_theme_support( 'menus' );*/


function register_header_menu() {
	register_nav_menu('header-menu',__( 'Header menu' ));
	
  }
  
  add_action( 'init', 'register_header_menu' );

  function register_footer_menu() {

	register_nav_menu('footer-menu',__( 'Footer menu' ));
  }
  
  add_action( 'init', 'register_footer_menu' );

  

  




 
