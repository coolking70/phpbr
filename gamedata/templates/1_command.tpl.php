<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<input type="hidden" name="mode" value="command">
<input type="hidden" id="command" name="command" value="">
<input type="hidden" id="moveto" name="moveto" value="">
<input type="hidden" id="itemcmd" name="itemcmd" value="">
<input type="hidden" id="sp_cmd" name="sp_cmd" value="">
<input type="hidden" id="teamcmd" name="teamcmd" value="">
<input type="hidden" id="cp_cmd" name="cp_cmd" value="">
现在想要做什么？<br /><br />
<table>
<tr>
<td class="td1" width="40px">
<div>
道具
</div>
</td>
<td class="td2" width="240px">
<div>
<? if($pdata['itms1']) { ?>
<div class="itmbtn" onclick=$('command').value='itm1';postCommand(); "><?=$pdata['itm1']?>/<?=$pdata['itme1']?>/<?=$pdata['itms1']?> >>使用</div>
<? } else { ?>
<div class="itmbtn"> </div>
<? } if($pdata['itms2']) { ?>
<div class="itmbtn" onclick=$('command').value='itm2';postCommand(); "><?=$pdata['itm2']?>/<?=$pdata['itme2']?>/<?=$pdata['itms2']?> >>使用</div>
<? } else { ?>
<div class="itmbtn"> </div>
<? } if($pdata['itms3']) { ?>
<div class="itmbtn" onclick=$('command').value='itm3';postCommand(); "><?=$pdata['itm3']?>/<?=$pdata['itme3']?>/<?=$pdata['itms3']?> >>使用</div>
<? } else { ?>
<div class="itmbtn"> </div>
<? } if($pdata['itms4']) { ?>
<div class="itmbtn" onclick=$('command').value='itm4';postCommand(); "><?=$pdata['itm4']?>/<?=$pdata['itme4']?>/<?=$pdata['itms4']?> >>使用</div>
<? } else { ?>
<div class="itmbtn"> </div>
<? } if($pdata['itms5']) { ?>
<div class="itmbtn" onclick=$('command').value='itm5';postCommand(); "><?=$pdata['itm5']?>/<?=$pdata['itme5']?>/<?=$pdata['itms5']?> >>使用</div>
<? } else { ?>
<div class="itmbtn"> </div>
<? } if($pdata['itms6']) { ?>
<div class="itmbtn" onclick=$('command').value='itm6';postCommand(); "><?=$pdata['itm6']?>/<?=$pdata['itme6']?>/<?=$pdata['itms6']?> >>使用</div>
<? } else { ?>
<div class="itmbtn"> </div>
<? } ?>
</div>
</td>
</tr>
<tr>
<td class="td1">
<div>
包裹
</div>
</td>
<td class="td2">
<div>
<div class="cmdbtn" onclick=$('command').value='itemmain';$('itemcmd').value='itemmix';postCommand(); ">道具合成</div>
<div class="cmdbtn" onclick=$('command').value='itemmain';$('itemcmd').value='itemdrop';postCommand(); ">道具丢弃</div>
<div class="cmdbtn"  onclick=$('command').value='itemmain';$('itemcmd').value='itemmerge';postCommand(); ">整理包裹</div>
<div class="cmdbtn"  onclick=$('command').value='itemmain';$('itemcmd').value='itemoff';postCommand(); ">卸下装备</div>
</div>
</td>
</tr>
<tr>
<td class="td1">
<div>
修整
</div>
</td>
<td class="td2">
<div>
<div class="cmdbtn"  onclick=$('command').value='rest1';postCommand(); ">睡眠</div>
<div class="cmdbtn"  onclick=$('command').value='rest2';postCommand(); ">治疗</div>
<? if(in_array('HOSPITAL',$mapdata[$pdata['pls']]['function'])) { ?>
<div class="cmdbtn"  onclick=$('command').value='rest3';postCommand(); ">静养</div>
<? } ?>
</div>
</td>
</tr>
<tr>
<td class="td1">
<div>
特殊
</div>
</td>
<td class="td2">
<div>
<? if(in_array('SHOP',$mapdata[$pdata['pls']]['function'])) { ?>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_shop';postCommand(); ">进入商店</div>
<? } ?>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_pose';postCommand(); ">基础姿态</div>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_tac';postCommand(); ">应战策略</div>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_inf';postCommand(); ">包扎伤口</div>
<? if($pdata['type'] == 0) { ?>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_tech';postCommand(); ">学习技能</div>
<? } if($pdata['club'] == 7) { ?>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_adtsk';postCommand(); ">武器带电</div>
<? } if($pdata['club'] == 8) { ?>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_poison';postCommand(); ">检查毒物</div>
<? } if($pdata['club'] == 8) { ?>
<div class="cmdbtn"  onclick=$('command').value='special';$('sp_cmd').value='sp_adtsk';postCommand(); ">武器淬毒</div>
<? } ?>
</div>
</td>
</tr>
<tr>
<td class="td1">
<div>
队伍
</div>
</td>
<td class="td2">
<div>
<? if($gamestate < 40 && $pdata['type'] == 0) { if(empty($pdata['teamID'])) { ?>
<div class="cmdbtn"  onclick=$('command').value='team';$('teamcmd').value='teammake';postCommand(); ">组建队伍</div>
<div class="cmdbtn"  onclick=$('command').value='team';$('teamcmd').value='teamjoin';postCommand(); ">加入队伍</div>
<? } else { ?>
<div class="cmdbtn"  onclick=$('command').value='team';$('teamcmd').value='teamquit';postCommand(); ">脱离队伍</div>
<? } } ?>
</div>
</td>
</tr>
<tr>
<td class="td1">
<div>
同伴
</div>
</td>
<td class="td2">
<div>
<? if($pdata['company'] > 0 && $cdata['hp'] > 0 && $companysystem) { ?>
<div class="cmdbtn"  onclick=$('command').value='switch';postCommand(); ">交换操控角色</div>
<div class="cmdbtn"  onclick=$('command').value='company';$('cp_cmd').value='senditem';postCommand(); ">递送物品</div>
<? } ?>
</div>
</td>
</tr>
</table>
</div>