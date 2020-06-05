<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>标题</td><td bgcolor=ffffff><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
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
</table></td></tr><tr><td bgcolor=ffffff>副标题</td><td bgcolor=ffffff><input name="ftitle" type="text" size=60 id="ftitle" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ftitle]))?>">
</td></tr><tr><td bgcolor=ffffff>内容</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("newsinfo",$ecmsfirstpost==1?"":stripSlashes($r[newsinfo]),"Default","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>图集</td><td bgcolor=ffffff><script>
function domvadd_tuji()
{
	var i;
	var str='';
	var oldi=0;
	var j=0;
	var addnum=0;
	addnum=parseInt(document.add.mvaddnum_tuji.value);
	oldi=parseInt(document.add.mveditnum_tuji.value);
	for(i=1;i<=addnum;i++)
	{
		j=i+oldi;
		str=str+'<tr><td align="center"><input type="text" name="tuji_1[]" id="tuji_1_'+j+'" value=""><a onclick="window.open(\'ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$id?>&sinfo=1&doing=1&field=tuji_1_'+j+'<?=$ecms_hashur['ehref']?>\',\'\',\'width=700,height=550,scrollbars=yes\');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr>';
	}
	document.getElementById("mvadd_tuji").innerHTML="<table width='100%' border=0 cellspacing=1 cellpadding=3>"+str+"</table>";
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
        <tr><td align="center">图片</td></tr>
      </table>
	</td>
  </tr>
  <tr> 
    <td>
    <?php
    if($ecmsfirstpost==1)
    {
    ?>
		<table width='100%' border=0 cellspacing=1 cellpadding=3>
		<?php
		$editnum=4;
		for($i=1;$i<=$editnum;$i++)
		{
		?>
			<tr><td align="center"><input type="text" name="tuji_1[]" id="tuji_1_<?=$i?>" value="" >
						<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$id?>&sinfo=1&doing=1&field=tuji_1_<?=$i?><?=$ecms_hashur['ehref']?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片">
						<img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td>
			</tr>
		<?php
		}
		?>
		</table>
    <?php
    }
    else
    {
		$editnum=0;
		if($r['tuji'])
		{
			$r['tuji']=stripSlashes($r['tuji']);
			?>
			<table width='100%' border=0 cellspacing=1 cellpadding=3>
			<?php
			//录入项
			$j=0;
			$mvf_record=explode('||||||',$r['tuji']);
			$mvf_count=count($mvf_record);
			for($i=0;$i<$mvf_count;$i++)
			{
				$j=$i+1;
				$mvf_field=explode("::::::",$mvf_record[$i]);
				?>
				<tr><td align="center">
								<input type="text" name="tuji_1[]" id="tuji_1_<?=$j?>" value="<?=$mvf_field[0]?>"> 
								<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$id?>&sinfo=1&doing=1&field=tuji_1_<?=$j?><?=$ecms_hashur['ehref']?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片">
						<img src="../data/images/changeimg.gif" border="0" align="absbottom"></a>
								<input type="hidden" name="tuji_mvid[]" id="tuji_mvid_<?=$j?>" value="<?=$j?>">
								<input type="checkbox" name="tuji_mvdelid[]" id="tuji_mvdelid_<?=$j?>" value="<?=$j?>">删</td>
				</tr>
				<?php
			}
			?>
			</table>
			<?php
			$editnum=$j;
		}
    }
    ?>
    </td>
  </tr>
  <tr> 
    <td height="25">扩展数量: <input name="mveditnum_tuji" type="hidden" id="mveditnum_tuji" value="<?=$editnum?>">
      <input name="mvnum_tuji" type="hidden" id="mvnum_tuji" value="3">
      <input name="mvmust_tuji" type="hidden" id="mvmust_tuji" value="1">
      <input name="mvaddnum_tuji" type="text" id="mvaddnum_tuji" value="1" size="6"> <input type="button" name="Submit5" value="输出" onclick="javascript:domvadd_tuji();"></td>
  </tr>
  <tr> 
    <td id="mvadd_tuji"></td>
  </tr>
</table></td></tr><tr><td bgcolor=ffffff>文件大小</td><td bgcolor=ffffff>
<input name="daxiao" type="text" id="daxiao" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[daxiao]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>发布时间</td><td bgcolor=ffffff><input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td bgcolor=ffffff>图片</td><td bgcolor=ffffff><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr><tr><td bgcolor=ffffff>内容简介</td><td bgcolor=ffffff>
<textarea name="smalltext" cols="60" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td bgcolor=ffffff>新闻正文</td><td bgcolor=ffffff><span style="color:#f00;">(*)</span>
<script type="text/javascript" src="/e/data/ecmseditor/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/e/data/ecmseditor/ueditor/ueditor.all.js"></script>
<script type="text/javascript" charset="utf-8" src="/e/data/ecmseditor/ueditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" href="/e/data/ecmseditor/ueditor/themes/default/ueditor.css">
<script type="text/plain" id="myEditor" name="newstext" style="width:99%;height:450px;"> 
<?=$ecmsfirstpost==1?"":stripSlashes($r[newstext])?> 
</script>
<script type="text/javascript"> 
var editor = new baidu.editor.ui.Editor(); 
editor.render("myEditor"); 
editor.classid = <?=$classid?>; 
editor.filepass = <?=$filepass?>; 
</script>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
<tr>
<td bgcolor="#FFFFFF">
<input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>关键字替换&nbsp;&nbsp;
<input name="copyimg" type="checkbox" id="copyimg" value="1">远程保存图片(
<input name="mark" type="checkbox" id="mark" value="1"><a href="SetEnews.php" target="_blank">加水印</a>)&nbsp;&nbsp;
<input name="copyflash" type="checkbox" id="copyflash" value="1">远程保存FLASH(地址前缀：
<input name="qz_url" type="text" id="qz_url" size="">)
</td>
</tr>
<tr>
<td bgcolor="#FFFFFF">
<input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1">图片链接转为下一页&nbsp;&nbsp;
<input name="autopage" type="checkbox" id="autopage" value="1">自动分页,每
<input name="autosize" type="text" id="autosize" value="5000" size="5">个字节为一页&nbsp;&nbsp; 取第
<input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">张上传图为标题图片(
<input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">缩略图: 宽
<input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">*高
<input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">)
</td>
</tr>
</table></td></tr>