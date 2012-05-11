<?php
/*
Plugin Name: Dell Cloud Connect
Plugin URI: http://marketing.dell.com/cloudcomputing-widget
Description: Adds a widget to display the latest news and information from the most influential cloud computing blogs.
Version: 0.2.0
Author: Dell
Author URI: http://www.dell.com


Installing
1. Copy cloud_connect folder to your plugins folder /wp-content/plugins/
2. Activate it through the plugin management screen.
3. Go to Appearance->Widgets and drag and drop the widget to wherever you want to show it.
*/


define('DELL_CONNECT_DIVISION', 'cloudcomputing');
define('DELL_CONNECT_PLUGIN_NAME', 'Dell Cloud Connect');
define('DELL_CONNECT_SETTINGS_MENU_TITLE', 'Cloud Connect Setting');
define('DELL_CONNECT_WIDGET_TITLE', 'The Latest From Cloud Computing');

define('DELL_CONNECT_PLUGIN_URL',  WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)));
define('DELL_CONNECT_PLUGIN_PATH', WP_CONTENT_DIR.'/plugins/'.plugin_basename(dirname(__FILE__)));

require(DELL_CONNECT_PLUGIN_PATH . '/connect.php');