<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$charset?>">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv='expires' content='0'>
<title> 莱 卡 大 逃 杀 </title>
<? if(isset($extrahead)) { ?>
<?=$extrahead?>
<? } if($allowcsscache) { ?>
<link rel="stylesheet" type="text/css" id="css" href="gamedata/cache/style_<?=STYLEID?>.css">
<? } else { ?>
<style type="text/css" id="css">
<? include template('css'); ?>
</style>
<? } ?>
</style>
<script type="text/javascript" src="include/common.js"></script>
<script type="text/javascript" src="include/game.js"></script>
<script type="text/javascript" src="include/json.js"></script>
</head>
<BODY>
<div class="title" >莱 卡 大 逃 杀</div>

<div class="headerlink" >
<a href="index.php">>>首页</a>
<? if(isset($cuser) && isset($cpass)) { ?>
<a href="user.php">>>帐号资料</a>
<? } else { ?>
<a href="register.php">>>账号注册</a>
<? } ?>
<a href="game.php">>>进入游戏</a>
<a href="map.php">>>战场地图</a>
<a href="news.php">>>进行状况</a>
<a href="alive.php">>>当前幸存</a>
<a href="winner.php">>>历史优胜</a>
<a href="rank.php">>>玩家排行</a>
<a href="help.php">>>游戏帮助</a>
<a href="admin.php">>>游戏管理</a>
<a href="<?=$homepage?>" target="_blank">>>官方网站</a>

</div>
<div>
 
 