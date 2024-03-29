<?php
/** Liang Lee View Admins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeeViewAdmins
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File start.php
 */
 
elgg_register_event_handler('init', 'system', 'LiangLeeViewAdmins');

/**
 * Register Plugin Settings
 *
 * @access admin
 */
function LiangLeeViewAdmins() {
//C�idan xi�ng Guanli(register a menu item in admin panel)
elgg_register_admin_menu_item('administer', 'leeadmins', 'users');
//C�idan xi�ng (register a page handler)
if(elgg_get_plugin_setting("LeeadminsAll_page", "LiangLeeViewAdmins") && elgg_get_plugin_setting("LeeadminsAll_page", "LiangLeeViewAdmins") == 1){elgg_register_page_handler('administrators', 'Lee_admins_page_handler');}
//register menu item entry
if(elgg_get_plugin_setting("LeeadminsAll_menu", "LiangLeeViewAdmins") && elgg_get_plugin_setting("LeeadminsAll_menu", "LiangLeeViewAdmins") == 1){$url = elgg_get_site_url().'administrators';$item = new ElggMenuItem('LiangLeeViewAdmins', elgg_echo('liang:lee:view:admins:page'), $url);elgg_register_menu_item('site', $item);}
//D�i b�nsh� xi�ng j�ny�ng, r�guo m�iyou zhaod�o
if (!elgg_is_active_plugin('LiangleeFramework')) {if (elgg_is_admin_logged_in()) {register_error(elgg_echo('lianglee:framewrok:miss'));}}  
}
/**
 * Register Main Function
 *
 * @access admin
 */
function Lianglee_admins_all($show ,$params = array()){
$admins = elgg_get_admins();foreach ($admins as $admin) {if($params['icons'] == true){$body = elgg_view_entity_icon($admin, 'tiny', array('use_hover' => 'true'));}if($params['names'] == true){$names = $admin->name;}$view = elgg_view_image_block($body, $names);if($show == 1){echo $view;}}
}
/**
 * Register Page handler
 *
 * @access public
 */
function Lee_admins_page_handler($page) {
$base_dir = elgg_get_plugins_path() . 'LiangLeeViewAdmins/pages';
if (!isset($page[0])) {$page = array('view');}
	switch ($page[0]) {
		case "view":
			include "$base_dir/view.php";
			break;	
		default:
			return false;	
		}
	return true;
}