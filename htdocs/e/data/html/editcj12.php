<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>网站标题</td><td bgcolor=ffffff><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table>
</td></tr><tr><td bgcolor=ffffff>logo</td><td bgcolor=ffffff>
<input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>发布时间</td><td bgcolor=ffffff>
<input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td></tr><tr><td bgcolor=ffffff>电话</td><td bgcolor=ffffff><input name="tel" type="text" id="tel" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[tel]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>传真</td><td bgcolor=ffffff>
<input name="fax" type="text" id="fax" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[fax]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>邮箱</td><td bgcolor=ffffff>
<input name="email" type="text" id="email" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[email]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>地址</td><td bgcolor=ffffff>
<textarea name="dizhi" cols="60" rows="10" id="dizhi"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[dizhi]))?></textarea>
</td></tr><tr><td bgcolor=ffffff>底部内容</td><td bgcolor=ffffff><?=ECMS_ShowEditorVar("bottom",$ecmsfirstpost==1?"":stripSlashes($r[bottom]),"Default","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>邮编</td><td bgcolor=ffffff>
<input name="ren" type="text" id="ren" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ren]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>二维码</td><td bgcolor=ffffff>
<input name="img" type="text" id="img" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[img]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=img<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>图片2</td><td bgcolor=ffffff>
<input name="img1" type="text" id="img1" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[img1]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=img1<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td bgcolor=ffffff>内容</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("content",$ecmsfirstpost==1?"":stripSlashes($r[content]),"Default","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>首页简介</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("iinfo",$ecmsfirstpost==1?"":stripSlashes($r[iinfo]),"Default","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>QQ</td><td bgcolor=ffffff>
<input name="qq" type="text" id="qq" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[qq]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>微博</td><td bgcolor=ffffff>
<input name="kefu" type="text" id="kefu" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[kefu]))?>" size="">
</td></tr>