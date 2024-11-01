<?php
/*
Plugin Name: WS Maintenance Mode
Version: 1.0
Plugin URI: https://wordpress.org/plugins/ws-maintenance-mode/
Author: WebShouters
Author URI: http://www.webshouters.com/
Description: This plugin provides easily create a maintenance mode page for your WordPress site. 
Text Domain: ws-maintenance-mode
Domain Path: /languages
License: GPL3 
*/

if(!defined('ABSPATH')) exit;
if(!class_exists('WS_MAINTENANCE_MODE'))
{
    class WS_MAINTENANCE_MODE
    {
    	
        function __construct()
        {
            define( 'WS_MAINTENANCE_MODE_VERSION', '1.0' );
			define( 'WS_MAINTENANCE_MODE_PLUGIN', __FILE__ );
			define( 'WS_MAINTENANCE_MODE_PLUGIN_BASENAME', plugin_basename( WS_MAINTENANCE_MODE_PLUGIN ) );
			define( 'WS_MAINTENANCE_MODE_PLUGIN_NAME', trim( dirname( WS_MAINTENANCE_MODE_PLUGIN_BASENAME ), '/' ) );
			define( 'WS_MAINTENANCE_MODE_PLUGIN_DIR', untrailingslashit( dirname( WS_MAINTENANCE_MODE_PLUGIN ) ) );
			
            load_plugin_textdomain('ws-maintenance-mode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/'); 
            add_action('template_redirect', array($this, 'ws_template_redirect'));
        }
		function check_is_valid_page() {
            return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
        }
        function ws_template_redirect()
        {
            if(is_user_logged_in()){
                /*do not display maintenance page if user id logged in*/
            }
            else
            {
                if( !is_admin() && !$this->check_is_valid_page()){
                	 /*display maintenance page*/
                    $this->maintenance_page();
                }
            }
        }
        function maintenance_page()
        {
            header('HTTP/1.0 503 Service Unavailable');
            include_once("includes/template/tmpl.php");
            die();
        }
    }
    $ws_maintenance_mode= new WS_MAINTENANCE_MODE();
}
