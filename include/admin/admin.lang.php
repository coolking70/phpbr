<?php


$lang = array
(

	'variable' => '设置选项',
	'value' => '当前值',
	'comment' => '注释',
	'on' => '开启',
	'off' => '关闭',
	
	'dbhost' => '数据库服务器',
	'dbhost_comment' => '数据库服务器地址, 一般为 localhost',
	'dbuser' => '数据库用户名',
	'dbuser_comment' => '数据库账号用户名',
	'dbpw' => '数据库密码',
	'dbpw_comment' => '数据库账号密码',
	'dbname' => '数据库名',
	'dbname_comment' => '数据库名称',
	'authkey' => '游戏加密密钥',
	'authkey_comment' => '必须与插件密钥相同',
	'tablepre' => '表名前缀',
	'tablepre_comment' => '同一数据库安装多个游戏时可改变默认',
	'tablepre_prompt' => '除非您需要在同一数据库安装多个 生存游戏\n 否则,强烈建议您不要修改表名前缀.',
	'moveut' => '服务器时差',
	'moveut_comment' => '如果服务器跟你当地的时间有时差，在此处设置。一般用于国外服务器。当前服务器时间',
	'moveutmin' => '服务器时差（分钟）',
	'moveuthours' => '小时',
	'moveutmins' => '分钟',
	'bbsurl' => '论坛地址',
	'bbsurl_comment' => '安装游戏插件的论坛地址',
	'gameurl' => '游戏程序地址',
	'gameurl_comment' => '用于全屏模式',	
	'username' => '管理员账号',
	'username_comment' => '必须为论坛已存在账号',
	'adminmsg' => '站长留言',
	'adminmsg_comment' => '给用户的公告信息',
	'startmode' => '游戏开始模式',
	'startmode_comment' => '与游戏开始时间配合使用。',
	'starthour' => '游戏开始时间',
	'starthour_comment' => '模式0在“当前游戏管理”里中设置开始时间，<br>模式1为每天开始小时数，<br>模式2为每局结束后的间隔小时数，<br>模式3为每局结束后的间隔分钟数<br>',
	'startmin' => '游戏准备时间',
	'startmin_comment' => '模式2决定整点几分开始，同时也是开始前的准备时间，<br>一般不要在整点时开局，可能出现问题。',
	'iplimit' => 'IP限制',
	'iplimit_comment' => '0为不限制，数字为允许同时存活人数。',
	'newslimit' => '进行状况显示',
	'newslimit_comment' => '进行状况显示条数。',
	'alivelimit' => '生存者显示',
	'alivelimit_comment' => '当前生存者显示条数。',
	'winlimit' => '优胜者显示',
	'winlimit_comment' => '历史优胜者显示条数。',
	'noiselimit' => '枪声间隔',
	'noiselimit_comment' => '可以听到枪声的最大时间，单位 秒。',
	'chatlimit' => '聊天显示',
	'chatlimit_comment' => '游戏内聊天信息显示条数',
	'chatrefresh' => '聊天刷新',
	'chatrefresh_comment' => '聊天信息的刷新速度，单位 毫秒。',
	'chatinnews' => '游戏外聊天显示',
	'chatinnews_comment' => '进行状况中是否显示聊天。0为不显示，数字为显示条数。',
	
	'areahour' => '禁区间隔时间',
	'areahour_comment' => '单位：分钟',
	'areaadd' => '禁区增加数',
	'areaadd_comment' => '每次增加的禁区数量，最小为1',
	'arealimit' => '停止激活禁区数',
	'arealimit_comment' => '注意，是增加禁区的回数，而不是禁区的数量',
	'areaesc' => '自动逃避禁区',
	'areaesc_comment' => '开启后，连斗之前所有玩家自动躲避禁区。适合新手较多，不了解禁区机制的服务器',
	'validlimit' => '激活人数上限',
	'validlimit_comment' => '',
	'combolimit' => '连斗人数',
	'combolimit_comment' => '停止激活后，人数少于此数值则进入连斗',
	'deathlimit' => '连斗人数2',
	'deathlimit_comment' => '停止激活后，死亡人数(包括 npc)大于此数值则进入连斗',
	'splimit' => '体力上限',
	'splimit_comment' => '角色0级的最大体力，体力最大值会随等级增长',
	'hplimit' => '生命上限',
	'hplimit_comment' => '角色0级的最大生命，生命最大值会随等级增长',
	'sleep_time' => '体力恢复时间',
	'sleep_time_comment' => '恢复体力最大值的1%需要的时间，单位：秒。',
	'heal_time' => '生命恢复时间',
	'heal_time_comment' => '恢复生命最大值的1%需要的时间，单位：秒。',
	'teamlimit' => '组队人数上限',
	'teamlimit_comment' => '',
	'antiAFKertime' => '反挂机间隔时间',
	'antiAFKertime_comment' => '手动清除长时间不动的玩家的最小时间间隔，单位分钟。',
	'corpseprotect' => '尸体保护时间',
	'corpseprotect_comment' => '决定角色死亡后经过多久才能被他人遇到或者被凸眼鱼影响，单位秒。',
	'coldtimeon' => '冷却时间启动',
	'coldtimeon_comment' => '决定是否启动冷却时间，防止利用脚本快速提交。',
	'showcoldtimer' => '冷却时间倒计时',
	'showcoldtimer_comment' => '决定是否显示冷却时间的倒计时。',
	'npcchaton' => 'NPC台词开关',
	'npcchaton_comment' => '决定是否显示NPC台词',
	'hack_obbs' => 'hack基础成功率',
	'hack_obbs_comment' => '非电脑社玩家hack的成功率',

	'startmode_0' => '模式0：手动设定',
	'startmode_1' => '模式1：每日定时',
	'startmode_2' => '模式2：整点开始',
	'startmode_3' => '模式3：间隔开始',
	'starttime_0' => '设定时间',
	'starttime_1' => '立即开始',
	'year' => '年',
	'month' => '月',
	'day' => '日',
	'hour' => '时',
	'min' => '分'

);


?>