<?php
/** Liang Lee View Admins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeeViewAdmins
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File view.php
 */
$content = elgg_view('LiangLeeViewAdmins/fetch/page'); 

$title = elgg_echo('liang:lee:view:admins:page');
$body = elgg_view_layout('content', array(
	'content' => $content,
	'title' => $title,
	'sidebar' => false,
	'filter_override' => false
));

echo elgg_view_page($title, $body);
