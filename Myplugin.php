<?php
/**
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );

//add Menu option
add_actions("admin_menu","addMenu");
function addMenu(){
  add_menu_page("Example Options","Example Options", 4,"example-options","exampleMenu");
  add_submenu_page("example-options","Option 1","Option 1", 4, "example-option-1","Option1");
}

function exampleMenu(){
  echo "hello world"
}

function Option1(){
  echo "this another option plugin"
}


?>
