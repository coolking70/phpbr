<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
想购买什么物品？<br><br>
<input type="hidden" name="mode" value="shop">
<input type="hidden" name="shoptype" value="<?=$shop?>">
<input type="radio" name="command" id="menu" value="menu" checked><a onclick=sl('menu'); href="javascript:void(0);" onmouseover="status=' ';return true;">离开商店</a><br>
<input type="radio" name="command" id="shop" value="shop"><a onclick=sl('shop'); href="javascript:void(0);" onmouseover="status=' ';return true;">返回列表</a><br><br>
<? if(is_array($itemdata)) { foreach($itemdata as $idata) { if($idata['sid']) { ?>
<a onclick=sl("<?=$idata['sid']?>"); href="javascript:void(0);" onmouseover="status=' ';return true;"><input type="radio" name="command" id="<?=$idata['sid']?>" value="<?=$idata['sid']?>"><?=$idata['item']?>/<?=$idata['itmk_words']?>/<?=$idata['itme']?>/<?=$idata['itms']?>
<? if($idata['itmsk_words']) { ?>
/<?=$idata['itmsk_words']?>
<? } ?>
 【价:<?=$idata['price']?>,数:<?=$idata['num']?>】</a><br>
<? } } } if($shop==1||$shop==2||$shop==6||$shop==7||$shop==8||$shop==10||$shop==11||$shop==12) { ?>
请输入购买数量：<input type="text" name="buynum" value="1" size="5" maxlength="5">
<? } else { ?>
<input type="hidden" name="buynum" value="1">
<? } ?>