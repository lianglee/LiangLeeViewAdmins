<?php
/** Liang Lee View Admins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package Liang Lee Framework
 * @subpackage LiangLeeViewAdmins
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File settings.php
 */ 
$plug_ver = LiangLee_version('LiangLeeViewAdmins');
$plug_rel = LiangLee_release('LiangLeeViewAdmins');
 
echo Lianglee_view('LiangLeeViewAdmins','form/admin');  
?>	  
<hr/>
  <?php 
echo "Version: ".$plug_ver; 
echo '<br/>';
echo 'Release: '.$plug_rel;
echo '<br/>';
echo elgg_echo('lianglee:copyr:12');  
echo '<br/>';
echo '<br/>';
?>