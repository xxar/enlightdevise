<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//查询SQL，如果要显示自定义字段记得在SQL里增加查询字段
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,userid,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlepic,title from {$dbtbpre}ecms_".$class_r[$classid][tbname]."_doc".$ewhere." order by ".$doorder." limit $offset,$line";
$sql=$empire->query($query);
//返回头条和推荐级别名称
$ftnr=ReturnFirsttitleNameList(0,0);
$ftnamer=$ftnr['ftr'];
$ignamer=$ftnr['igr'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="adminstyle/<?=$loginadminstyleid?>/adminstyle.css" type="text/css">
<script src="adminstyle/<?=$loginadminstyleid?>/jquery-1.7.1.min.js"></script>
<title>管理归档</title>
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }
</script>
</head>
<body>
<div class="breadCrumb">位置&nbsp;>>&nbsp;
  <?=$url?>
  <div class="fr"><a href="AddClass.php?enews=EditClass&classid=<?=$classid?><?=$ecms_hashur['ehref']?>">栏目设置</a>&nbsp;&nbsp;/&nbsp;&nbsp; <a href="AddInfoClass.php?enews=AddInfoClass&newsclassid=<?=$classid?><?=$ecms_hashur['ehref']?>">增加采集</a>&nbsp;&nbsp;/&nbsp;&nbsp; <a href="ListInfoClass.php<?=$ecms_hashur['whehref']?>">管理采集</a>&nbsp;&nbsp;/&nbsp;&nbsp; <a href="ecmschtml.php?enews=ReAllNewsJs&from=<?=$phpmyself?><?=$ecms_hashur['href']?>">刷新所有信息JS</a></div>
</div>
<div class="menubut">
  <input type=button name=button value="增加信息" onClick="self.location.href='AddNews.php?enews=AddNews&ecmsnfrom=1<?=$addecmscheck?>&bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$ecms_hashur['ehref']?>'">
</div>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tabborder">
  <form name="form2" method="GET" action="ListInfoDoc.php">
    <?=$ecms_hashur['eform']?>
    <tr>
      <td width="60%" class="sel-height"><div class="fl">
          <input name="keyboard" type="text" id="keyboard2" value="<?=$keyboard?>" size="16">
          <select name="show">
            <option value="0" selected>不限字段</option>
            <?=$searchoptions_r['select']?>
          </select>
          <?=$stts?>
          <input type="submit" name="Submit2" value="搜索">
          <input name="sear" type="hidden" id="sear2" value="1">
          <input name="bclassid" type="hidden" id="bclassid" value="<?=$bclassid?>">
          <input name="classid" type="hidden" id="classid" value="<?=$classid?>">
          <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
        </div></td>
      <td width="40%" title="增加信息后使用本操作将信息显示到前台" class="sel-height"></td>
    </tr>
  </form>
</table>
<br>
<form name="listform" method="post" action="ecmsinfo.php" onsubmit="return confirm('确认要执行此操作？');">
  <?=$ecms_hashur['form']?>
  <input type=hidden name=classid value=<?=$classid?>>
  <input type=hidden name=bclassid value=<?=$bclassid?>>
  <input type=hidden name=enews value=DelInfoDoc_all>
  <input type=hidden name=doing value=1>
  <input name="ecmsdoc" type="hidden" id="ecmsdoc" value="0">
  <input name="docfrom" type="hidden" id="docfrom" value="<?=$phpmyself?>">
  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="tabnav">
    <tr>
      <td width="10%" ><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$ecms_hashur['ehref']?>">已发布</a></div></td>
      <td width="10%" ><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?>&ecmscheck=1<?=$ecms_hashur['ehref']?>">待审核</a></div></td>
      <td width="10%" class="cur"><div align="center"><a href="ListInfoDoc.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>">归档</a></div></td>
      <td width="70%">&nbsp;</td>
    </tr>
  </table>
  <div class="box"> <a href="InfoDoc.php<?=$ecms_hashur['whehref']?>" target="_blank">批量归档信息</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ReHtml/ChangeData.php<?=$ecms_hashur['whehref']?>" target=_blank>更新数据</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=../../ target=_blank>预览首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=$classurl?>" target=_blank>预览栏目</a> </div>
  
  <div class="tabbox">
  <table cellspacing='0'>
    <!-- Table Header -->
    <thead>
      <tr>
        <th>选择
          </td>
        <th><a href='ListInfoDoc.php?<?=$search1?>&myorder=4'><u>ID</u></a>
          </td>
        <th>标题
          </td>
        <th>发布者
          </td>
        <th><a href='ListInfoDoc.php?<?=$search1?>&myorder=1'><u>发布时间</u></a>
          </td>
      </tr>
    </thead>
    <!-- Table Header --> 
    
    <!-- Table Body -->
    <tbody class="jqtbody">
      <?php
	while($r=$empire->fetch($sql))
	{
		//状态
		$st='';
		if($r[istop])//置顶
		{
			$st.="<font color=red>[顶".$r[istop]."]</font>";
		}
		if($r[isgood])//推荐
		{
			$st.="<font color=red>[".$ignamer[$r[isgood]-1]."]</font>";
		}
		if($r[firsttitle])//头条
		{
			$st.="<font color=red>[".$ftnamer[$r[firsttitle]-1]."]</font>";
		}
		//时间
		$truetime=date("Y-m-d H:i:s",$r[truetime]);
		$lastdotime=date("Y-m-d H:i:s",$r[lastdotime]);
		$oldtitle=$r[title];
		$r[title]=stripSlashes(sub($r[title],0,50,false));
		$titleurl=sys_ReturnBqTitleLink($r);
		//会员投稿
		if($r[ismember])
		{
			$r[username]="<a href='member/AddMember.php?enews=EditMember&userid=".$r[userid].$ecms_hashur['ehref']."' target='_blank'><font color=red>".$r[username]."</font></a>";
		}
		//签发
		$qf="";
		if($r[isqf])
		{
			$qfr=$empire->fetch1("select checktno,tstatus from {$dbtbpre}enewswfinfo where id='$r[id]' and classid='$r[classid]' limit 1");
			if($qfr[checktno]=='100')
			{
				$qf="(<font color='red'>已通过</font>)";
			}
			elseif($qfr[checktno]=='101')
			{
				$qf="(<font color='red'>返工</font>)";
			}
			elseif($qfr[checktno]=='102')
			{
				$qf="(<font color='red'>已否决</font>)";
			}
			else
			{
				$qf="(<font color='red'>$qfr[tstatus]</font>)";
			}
			$qf="<a href='#ecms' onclick=\"window.open('workflow/DoWfInfo.php?classid=$r[classid]&id=$r[id]".$addecmscheck.$ecms_hashur['ehref']."','','width=600,height=520,scrollbars=yes');\">".$qf."</a>";
		}
		//标题图片
		$showtitlepic="";
		if($r[titlepic])
		{
			$showtitlepic="<a href='".$r[titlepic]."' title='预览标题图片' target=_blank><img src='../data/images/showimg.gif' border=0></a>";
		}
		//未生成
		$myid=$r['id'];
		if(empty($r[havehtml]))
		{
		$myid="<a title='未生成'><b>".$r[id]."</b></a>";
		}
	?>
      <tr id=news<?=$r[id]?> class="jqtr">
        <td><input name="id[]" type="checkbox" id="id[]" value="<?=$r[id]?>"></td>
        <td><?=$myid?></td>
        <td class="tablink"><div align="left">
            <?=$st?>
            <a href='<?=$titleurl?>' target=_blank title="<?=$oldtitle?>">
            <?=$r[title]?>
            </a>
            <?=$showtitlepic?>
            <?=$qf?>
          </div></td>
        <td><?=$r[username]?></td>
        <td><a href="#ecms" title="<? echo"增加时间：".$truetime."\r\n最后修改：".$lastdotime;?>">
          <?=date("Y-m-d H:i:s",$r[newstime])?>
          </a></td>
      </tr>
      <?
	}
	?>
      <tr>
        <td colspan="1"><input type=checkbox name=chkall value=on onClick=CheckAll(this.form)>
          &nbsp;&nbsp;全选</td>
        <td colspan="4"><div align="left">
            <input type="submit" name="Submit3" value="删除" onClick="document.listform.enews.value='DelInfoDoc_all';document.listform.action='ecmsinfo.php';">
            <input type="submit" name="Submit11" value="还原归档" onClick="document.listform.enews.value='InfoToDoc';document.listform.doing.value='1';document.listform.action='ecmsinfo.php';">
          </div></td>
      </tr>
      <tr>
        <td colspan="5"><div class="fr">
            <?=$returnpage?>
          </div>
      </tr>
      <tr>
        <td colspan="5"><font color="#bd5a35">备注：发布者红色为会员投稿；信息ID粗体为未生成.</font></td>
      </tr>
  </table>
  </div>
</form>
</body>
</html>