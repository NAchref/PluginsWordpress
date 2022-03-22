<?php 
/**
 * Copyright 2022 By Nefzaoui Achref
 */



//Basic security access methode of your website files(always Secure your access)

if( ! defined('ABSPATH') ) {
  die;
}

defined('ABSPATH') or die('Hey you cant access this file, you silly human!');


if( ! function_exists('add_action')){
  echo 'Hey you cant access this file, you silly human!';
  exit;
}

//Create class
class NefachrefPlugin{

  function activate(){

  }

  function desactivate(){
    
  }

  function uninstall(){
    
  }

/*  function __construct(){

  }
  function method1(){

  }
  function method2(){

  }*/
}

if (class_exists('NefachrefPlugin')){
  $nefachrefPlugin = new NefachrefPlugin();
}

//activation
register_activation_hook(__FILE__,array($nefachrefPlugin,'activate'));

add_action('init','function_name');

//desactivation
register_desactivation_hook(__FILE__,array($nefachrefPlugin,'desactivate'));

//uninstall








?>
