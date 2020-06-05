<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>名字</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
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
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>副标题</td><td bgcolor='ffffff'><input name="ftitle" type="text" size=60 id="ftitle" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ftitle]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>内容</td><td bgcolor='ffffff'>
<?=ECMS_ShowEditorVar("newsinfo",$ecmsfirstpost==1?"":stripSlashes($r[newsinfo]),"Default","","300","100%")?>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>图集</td><td bgcolor='ffffff'><script>
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
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>图片</td><td bgcolor='ffffff'><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr></table>