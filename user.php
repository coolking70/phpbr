<?php

define('CURSCRIPT', 'user');

require './include/common.inc.php';
require './include/user.func.php';

if(!$cuser||!$cpass) { gexit($_ERROR['no_login'],__file__,__line__); }

$result = $db->query("SELECT * FROM {$tablepre}users WHERE username='$cuser'");
if(!$db->num_rows($result)) { gexit($_ERROR['login_check'],__file__,__line__); }
$udata = $db->fetch_array($result);
if($udata['password'] != $cpass) { gexit($_ERROR['wrong_pw'], __file__, __line__); }
if($udata['groupid'] <= 0) { gexit($_ERROR['user_ban'], __file__, __line__); }

if(!isset($mode)){
	$mode = 'show';
}

if($mode == 'edit') {
	$gamedata=Array();$gamedata['innerHTML']['info'] = '';
	if($opass && $npass && $rnpass){
		$pass_right = true;
		$pass_check = pass_check($npass,$rnpass);
		if($pass_check!='pass_ok'){
			$gamedata['innerHTML']['info'] .= $_ERROR[$pass_check].'<br />';
			$pass_right = false;
		}
		$opass = md5($opass);
		$npass = md5($npass);
		if($opass != $udata['password']){
			$gamedata['innerHTML']['info'] .= $_ERROR['wrong_pw'].'<br />';
			$pass_right = false;
		}
		if($pass_right){
			gsetcookie('pass',$npass);
			$passqry = "`password` ='$npass',";
			$gamedata['innerHTML']['info'] .= $_INFO['pass_success'].'<br />';
		}else{
			$passqry = '';
			$gamedata['innerHTML']['info'] .= $_INFO['pass_failure'].'<br />';
		}
	}else{
		$passqry = '';
		$gamedata['innerHTML']['info'] .= $_INFO['pass_failure'].'<br />';
	}
	
	$db->query("UPDATE {$tablepre}users SET gender='$gender', icon='$icon',{$passqry}motto='$motto',  killmsg='$killmsg', lastword='$lastword' WHERE username='$cuser'");
	if($db->affected_rows()){
		$gamedata['innerHTML']['info'] .= $_INFO['data_success'];
	}else{
		$gamedata['innerHTML']['info'] .= $_INFO['data_failure'];
	}
	
	$gamedata['value']['opass'] = $gamedata['value']['npass'] = $gamedata['value']['rnpass'] = '';
	if(isset($error)){$gamedata['innerHTML']['error'] = $error;}
	ob_clean();
	$jgamedata = compatible_json_encode($gamedata);
	echo $jgamedata;
	ob_end_flush();
	
} else {
	//$ustate = 'edit';
	extract($udata);
	$iconarray = get_iconlist($icon);
	$select_icon = $icon;
	include template('user');
}

?> 