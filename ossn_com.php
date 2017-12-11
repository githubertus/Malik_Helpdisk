<?php
/**
 * @Name HelpDisk
 *
 * @package ossn Component
 * @author Malik Umer Farooq
 * @copyright 2017 Malik Corporation Private limited
 * @license   General Public Licence https://my-mos.com/public/terms/ 
 * @link      https://my-mos.com/public/
 */
define('Helpdisk', ossn_route()->com . 'Helpdisk/');
require_once(Helpdisk . 'classes/Helpdisk.php');
function ossn_Helpdisk_init() {
	ossn_extend_view('css/ossn.default', 'helpdisk/css');
	ossn_extend_view('js/opensource.socialnetwork', 'helpdisk/js');
	if(ossn_isAdminLoggedin()) {
			ossn_register_com_panel('helpdisk', 'settings');
			ossn_register_action('helpdisk/add', Helpdisk . 'actions/edit.php');
			ossn_register_action('helpdisk/delete', Helpdisk . 'actions/delete.php');
			ossn_register_action('helpdisk/add', Helpdisk . 'actions/add.php'); 
			ossn_register_page('HelpAdd', 'helpdisk_page_handler_admin');
		function helpdisk_page_handler_admin() {
             $params['title'] = ossn_print('helpdisk:help');
             $title = $params['title'];
             $contents = array('content' => ossn_plugin_view('helpdisk/add', $params),);
             $content = ossn_set_page_layout('contents', $contents);
             echo ossn_view_page($title, $content);
		}
	}		
	ossn_register_action('Help/search', Helpdisk . 'actions/helpsearch.php');
		ossn_register_page('Help', 'helpdisk_page_handler');
		ossn_register_menu_link('Help', ossn_print('helpdisk:help'), ossn_site_url('Help'), 'footer');	
		function helpdisk_page_handler() {
             $params['title'] = ossn_print('helpdisk:help');
             $title = $params['title'];
             $contents = array('content' => ossn_plugin_view('pages/page', $params),);
            $content = ossn_set_page_layout('contents', $contents);
             echo ossn_view_page($title, $content);
		}		
		
}
ossn_register_callback('ossn', 'init', 'ossn_Helpdisk_init');
