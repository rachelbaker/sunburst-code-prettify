<?php
/*
Plugin Name: Sunburst Code Prettify
Plugin URI: http://www.rachelbaker.me/code
Description: Uses Google's Prettify with the Sunburst syntax theme to elegantly highlight code
Version: 2.0
Author: Rachel Baker
Author URI: http://www.rachelbaker.me
Author Email: rachel@rachelbaker.me
License:

GNU GPL v3 License
Copyright (C) 2012 Plugged In Consulting, Inc

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see http://www.gnu.org/licenses/.
  
*/

   
  /*--------------------------------------------*
   * Loading the needed CSS and JS Files
   *--------------------------------------------*/

function sunprettify_style_loader() {
        $sunprettify_styleurl = plugins_url('sunburst-prettify.css', __FILE__);
        $sunprettify_stylefile = WP_PLUGIN_DIR . '/sunburst-code-prettify/sunburst-prettify.css';
            wp_register_style('sunprettify_css', $sunprettify_styleurl);
            wp_enqueue_style( 'sunprettify_css');   
    } 
    

function sunprettify_script_loader() {
         $sunprettify_scripturl = plugins_url('prettify.js', __FILE__);
        $sunprettify_scriptfile = WP_PLUGIN_DIR . '/sunburst-code-prettify/prettify.js';
           wp_register_script('sunprettify_js', $sunprettify_scripturl, '', '', true);
           wp_enqueue_script( 'sunprettify_js');
    } 

add_action('wp_print_scripts', 'sunprettify_script_loader');
add_action('wp_print_styles', 'sunprettify_style_loader'); 