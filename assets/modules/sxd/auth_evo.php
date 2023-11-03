<?php
// Sypex Dumper 2 authorization file for Evolution CMS 1.4.x

$path = str_replace('assets/modules/sxd','', __DIR__); //for unix
$path = str_replace('assets\modules\sxd','', $path); //for windows

$core = '../../../core';
if(!file_exists($core)) {
    include_once('../../../manager/includes/config.inc.php');
    session_name($site_sessionname);
    session_start();

    $db = trim($dbase, '`');
    $dbuser = $database_user;
    $uspass = $database_password;
}
// Sypex Dumper 2 authorization file for Evolution CMS 3.x.x
else {

    define('MODX_API_MODE', true);

    include_once("../../../index.php");

    evo()->db->connect();
    if (empty (evo()->config)) {
        evo()->getSettings();
    }

    $db = Illuminate\Support\Facades\DB::connection()->getConfig('database');
    $dbuser = Illuminate\Support\Facades\DB::connection()->getConfig('username');
    $uspass = Illuminate\Support\Facades\DB::connection()->getConfig('password');

}

if(isset($_SESSION['modx.session.created.time']) &&
    isset($_SESSION['modx.mgr.session.cookie.lifetime']) &&
    ($_SESSION['modx.mgr.session.cookie.lifetime'] == 0 || time() < $_SESSION['modx.session.created.time'] + $_SESSION['modx.mgr.session.cookie.lifetime'])  &&
    !empty($_SESSION['mgrPermissions']['bk_manager'])){


    $this->CFG['my_db'] = $db;
    $this->CFG['my_user'] = $dbuser;
    $this->CFG['my_pass'] = $uspass;
    //$this->CFG['exitURL'] = '../manager/';
    $auth = 1;
}
?>
