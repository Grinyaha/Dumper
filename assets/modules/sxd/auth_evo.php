<?php
// Sypex Dumper 2 authorization file for Evolution CMS 1.4.x
$path = '../../../manager/includes/config.inc.php';
include_once($path);
session_name($site_sessionname);
session_start();

if(isset($_SESSION['modx.session.created.time']) && 
	isset($_SESSION['modx.mgr.session.cookie.lifetime']) && 
	($_SESSION['modx.mgr.session.cookie.lifetime'] == 0 || time() < $_SESSION['modx.session.created.time'] + $_SESSION['modx.mgr.session.cookie.lifetime'])  && 
	!empty($_SESSION['mgrPermissions']['bk_manager'])){
	
	//if($this->connect($database_server, '', $database_user, $database_password)){
		// evolution
		$this->CFG['my_db'] = trim($dbase, '`');
		$this->CFG['my_user'] = $database_user;
		$this->CFG['my_pass'] = $database_password;
		//$this->CFG['exitURL'] = '../manager/';
		$auth = 1;
	//}
}
?>