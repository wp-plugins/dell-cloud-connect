<?php
/*
Plugin Name: <%= pluginName %>
Plugin URI: <%= url %>
Description: Adds a widget to display the latest news and information from the most influential healthcare blogs.
Version: <%= version %>
Author: Dell
Author URI: http://www.dell.com


Installing
1. Copy healthcare_connect folder to your plugins folder /wp-content/plugins/
2. Activate it through the plugin management screen.
3. Go to Appearance->Widgets and drag and drop the widget to wherever you want to show it.
*/


define('DELL_CONNECT_DIVISION', '<%= slug %>');
define('DELL_CONNECT_PLUGIN_NAME', '<%= pluginName %>');
define('DELL_CONNECT_SETTINGS_MENU_TITLE', '<%= menuTitle %>');
define('DELL_CONNECT_WIDGET_TITLE', '<%= widgetTitle %>');

define('DELL_CONNECT_PLUGIN_URL',  WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)));
define('DELL_CONNECT_PLUGIN_PATH', WP_CONTENT_DIR.'/plugins/'.plugin_basename(dirname(__FILE__)));

require(DELL_CONNECT_PLUGIN_PATH . '/connect.php');