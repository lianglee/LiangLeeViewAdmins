<?php
/** Liang Lee View Admins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeeViewAdmins
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File admin.php
 */
 
echo elgg_echo("lee:admis",array(elgg_get_site_url().'administrators'));
echo '<br/>';
echo elgg_view('input/dropdown', array('name' => 'params[LeeadminsAll_page]','value' => $vars['entity']->LeeadminsAll_page,'options_values' => array(1 => 'Enable', 0 => 'Disable')));
echo "<br/>";
echo elgg_echo('liang:lee:view:admins:meni');
echo "<br/>";
echo elgg_view('input/dropdown', array('name' => 'params[LeeadminsAll_menu]','value' => $vars['entity']->LeeadminsAll_menu,'options_values' => array(1 => 'Yes', 0 => 'No')));