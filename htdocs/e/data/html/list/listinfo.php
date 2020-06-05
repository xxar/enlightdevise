<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
//查询SQL，如果要显示自定义字段记得在SQL里增加查询字段
$query="select id,classid,isurl,titleurl,isqf,havehtml,istop,isgood,firsttitle,ismember,userid,username,plnum,totaldown,onclick,newstime,truetime,lastdotime,titlepic,title from ".$infotb.$ewhere." order by ".$doorder." limit $offset,$line";
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
<title>管理信息</title>
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

function GetSelectId(form)
{
  var ids='';
  var dh='';
  for (var i=0;i<form.elements.length;i++)
  {
	var e = form.elements[i];
	if (e.name == 'id[]')
	{
	   if(e.checked==true)
	   {
       		ids+=dh+e.value;
			dh=',';
	   }
	}
  }
  return ids;
}

function PushInfoToSp(form)
{
	var id='';
	id=GetSelectId(form);
	if(id=='')
	{
		alert('请选择要推送的信息');
		return false;
	}
	window.open('sp/PushToSp.php?<?=$ecms_hashur['ehref']?>&classid=<?=$classid?>&id='+id,'PushToSp','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
}

function PushInfoToZt(form)
{
	var id='';
	id=GetSelectId(form);
	if(id=='')
	{
		alert('请选择要推送的信息');
		return false;
	}
	window.open('special/PushToZt.php?<?=$ecms_hashur['ehref']?>&classid=<?=$classid?>&id='+id,'PushToZt','width=360,height=500,scrollbars=yes,left=300,top=150,resizable=yes');
}
</script>
</head>
<body>
<!--面包屑-->
<div class="breadCrumb">位置&nbsp;>>&nbsp;
  <?=$url?>
  <div class="fr"><a href="AddClass.php?enews=EditClass&classid=<?=$classid?><?=$ecms_hashur['ehref']?>">栏目设置</a>&nbsp;&nbsp;/&nbsp;&nbsp; <a href="AddInfoClass.php?enews=AddInfoClass&newsclassid=<?=$classid?><?=$ecms_hashur['ehref']?>">增加采集</a>&nbsp;&nbsp;/&nbsp;&nbsp; <a href="ListInfoClass.php<?=$ecms_hashur['whehref']?>">管理采集</a></div>
</div>
<!--按钮菜单-->
<div class="menubut">
  <input type=button name=button value="增加信息" onClick="self.location.href='AddNews.php?enews=AddNews&ecmsnfrom=1<?=$addecmscheck?>&bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$ecms_hashur['ehref']?>'">
  &nbsp;
  <input type="button" name="Submit4" value="刷新首页" onclick="self.location.href='ecmschtml.php?enews=ReIndex<?=$ecms_hashur['href']?>'">
  &nbsp;
  <input type="button" name="Submit4" value="刷新所有信息JS" onclick="window.open('ecmschtml.php?enews=ReAllNewsJs&from=<?=$phpmyself?><?=$ecms_hashur['href']?>','','');">
</div>
<!--搜索和刷新-->
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tabborder">
  <form name="searchinfo" method="GET" action="ListNews.php">
    <?=$ecms_hashur['eform']?>
    <tr>
      <td width="60%" class="sel-height"><div class="fl">
          <select name="showspecial" id="showspecial">
            <option value="0"<?=$showspecial==0?' selected':''?>>不限属性</option>
            <option value="1"<?=$showspecial==1?' selected':''?>>置顶</option>
            <option value="2"<?=$showspecial==2?' selected':''?>>推荐</option>
            <option value="3"<?=$showspecial==3?' selected':''?>>头条</option>
            <option value="7"<?=$showspecial==7?' selected':''?>>投稿</option>
            <option value="5"<?=$showspecial==5?' selected':''?>>签发</option>
            <option value="8"<?=$showspecial==8?' selected':''?>>我的信息</option>
          </select>
          <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>" size="16">
          <select name="show">
            <option value="0" selected>不限字段</option>
            <?=$searchoptions_r['select']?>
          </select>
          <?=$stts?>
          <select name="infolday" id="infolday">
            <option value="1"<?=$infolday==1?' selected':''?>>全部时间</option>
            <option value="86400"<?=$infolday==86400?' selected':''?>>1 天</option>
            <option value="172800"<?=$infolday==172800?' selected':''?>>2 
            天</option>
            <option value="604800"<?=$infolday==604800?' selected':''?>>一周</option>
            <option value="2592000"<?=$infolday==2592000?' selected':''?>>1 
            个月</option>
            <option value="7948800"<?=$infolday==7948800?' selected':''?>>3 
            个月</option>
            <option value="15897600"<?=$infolday==15897600?' selected':''?>>6 
            个月</option>
            <option value="31536000"<?=$infolday==31536000?' selected':''?>>1 
            年</option>
          </select>
          <input type="submit" name="Submit2" value="搜索">
          <input name="sear" type="hidden" id="sear" value="1">
          <input name="bclassid" type="hidden" id="bclassid" value="<?=$bclassid?>">
          <input name="classid" type="hidden" id="classid" value="<?=$classid?>">
          <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
        </div></td>
      <td width="40%" title="增加信息后使用本操作将信息显示到前台" class="sel-height"><div class="fr">
          <select name="dore">
            <option value="1">刷新当前栏目</option>
            <option value="2">刷新首页</option>
            <option value="3">刷新父栏目</option>
            <option value="4">刷新当前栏目与父栏目</option>
            <option value="5">刷新父栏目与首页</option>
            <option value="6" selected>刷新当前栏目、父栏目与首页</option>
          </select>
          <input type="button" name="Submit12" value="提交" onclick="self.location.href='ecmsinfo.php?<?=$ecms_hashur['href']?>&enews=AddInfoToReHtml<?=$addecmscheck?>&classid=<?=$classid?>&dore='+document.searchinfo.dore.value;">
        </div></td>
    </tr>
  </form>
</table>
<br>
<form name="listform" method="post" action="ecmsinfo.php" onsubmit="return confirm('确认要执行此操作？');">
  <?=$ecms_hashur['form']?>
  <input type=hidden name=classid value=<?=$classid?>>
  <input type=hidden name=bclassid value=<?=$bclassid?>>
  <input type=hidden name=enews value=DelNews_all>
  <input type=hidden name=doing value=0>
  <input name="ecmsdoc" type="hidden" id="ecmsdoc" value="0">
  <input name="docfrom" type="hidden" id="docfrom" value="<?=$phpmyself?>">
  <input name="ecmscheck" type="hidden" id="ecmscheck" value="<?=$ecmscheck?>">
  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="tabnav">
    <tr>
      <td width="15%"<?=$indexchecked==1?' class="cur"':' bgcolor="#C9F1FF"'?> title="已发布信息总数：<?=$classinfos?>"><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$ecms_hashur['ehref']?>">已发布 (
          <?=$classinfos?>
          )</a></div></td>
      <td width="15%"<?=$indexchecked==0?' class="cur"':' bgcolor="#C9F1FF"'?> title="待审核信息总数：<?=$classckinfos?>"><div align="center"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?>&ecmscheck=1<?=$ecms_hashur['ehref']?>">待审核 (
          <?=$classckinfos?>
          )</a></div></td>
      <td width="15%" bgcolor="#C9F1FF"><div align="center"><a href="ListInfoDoc.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>">归档</a></div></td>
      <td width="55%">&nbsp;</td>
    </tr>
  </table>
    <!--栏目相关链接-->
  <div class="box">
    <div class="fl"><a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&sear=1&showspecial=8<?=$ecms_hashur['ehref']?>">我的信息</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&sear=1&showspecial=5<?=$ecms_hashur['ehref']?>">签发信息</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&sear=1&showspecial=7<?=$ecms_hashur['ehref']?>">投稿信息</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&showretitle=1&srt=1<?=$ecms_hashur['ehref']?>" title="查询重复标题，并保留一条信息">查询重复标题A</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ListNews.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&showretitle=1&srt=0<?=$ecms_hashur['ehref']?>" title="查询重复标题的信息(不保留信息)">查询重复标题B</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ecmsinfo.php?bclassid=<?=$bclassid?>&classid=<?=$classid?><?=$addecmscheck?>&enews=SetAllCheckInfo<?=$ecms_hashur['href']?>" title="本栏目所有信息全设为审核状态" onclick="return confirm('确认要操作?');">审核栏目全部信息</a></div>
    <div class="fr"><a href="openpage/AdminPage.php?leftfile=<?=urlencode('../file/FileNav.php'.$ecms_hashur['whehref'])?>&mainfile=<?=urlencode('../file/ListFile.php?type=9&classid='.$classid.$ecms_hashur['ehref'])?>&title=<?=urlencode('管理附件')?><?=$ecms_hashur['ehref']?>" target="_blank">管理附件</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="ReHtml/ChangeData.php<?=$ecms_hashur['whehref']?>" target=_blank>更新数据</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=../../ target=_blank>预览首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=$classurl?>" target=_blank>预览栏目</a></div>
  </div>
  <!--Tab列表数据-->
  <div class="tabbox">
    <table cellspacing='0'>
      <!-- Table Header -->
      <thead>
        <tr>
          <th>选择</th>
          <th><a href='ListNews.php?<?=$search1?>&myorder=4'>ID</a></th>
          <th>标题</th>
          <th>发布者</th>
          <th><a href='ListNews.php?<?=$search1?>&myorder=1'>发布时间</a></th>
          <th><a href='ListNews.php?<?=$search1?>&myorder=3'>点击</a></th>
          <th><a href='ListNews.php?<?=$search1?>&myorder=2'>评论</a></th>
          <th>操作</th>
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
		//审核
		if(empty($indexchecked))
		{
			$checked=" title='未审核' style='background:#99C4E3'";
			$titleurl="ShowInfo.php?classid=$r[classid]&id=$r[id]".$addecmscheck.$ecms_hashur['ehref'];
		}
		else
		{
			$checked="";
			$titleurl=sys_ReturnBqTitleLink($r);
		}
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
		$myid="<a href='ecmschtml.php?enews=ReSingleInfo&classid=$r[classid]&id[]=".$r[id].$ecms_hashur['href']."'>".$r['id']."</a>";
		if(empty($r[havehtml]))
		{
			$myid="<a href='ecmschtml.php?enews=ReSingleInfo&classid=$r[classid]&id[]=".$r[id].$ecms_hashur['href']."' title='未生成'><b>".$r[id]."</b></a>";
		}
	?>
        <tr id=news<?=$r[id]?> class="jqtr">
          <td><input name="id[]" type="checkbox" id="id[]" value="<?=$r[id]?>"<?=$checked?>>
            <input name="infoid[]" type="hidden" value="<?=$r['id']?>"></td>
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
          <td title="<? echo"增加时间：".$truetime."\r\n最后修改：".$lastdotime;?>"><input name="newstime[]" type="text" value="<?=date("Y-m-d H:i:s",$r[newstime])?>" size="13"></td>
          <td><a title="下载次数:<?=$r[totaldown]?>">
            <?=$r[onclick]?>
            </a></td>
          <td><a href="pl/ListPl.php?id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>" target=_blank title="管理评论"><u>
            <?=$r[plnum]?>
            </u></a></td>
          <td class="tablink"><a href="AddNews.php?enews=EditNews&id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>">修改</a>&nbsp;/&nbsp;<a href="#empirecms" onclick="window.open('info/EditInfoSimple.php?enews=EditNews&id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['ehref']?>','EditInfoSimple','width=700,height=700,scrollbars=yes,resizable=yes');">简改</a>&nbsp;/&nbsp;<a href="ecmsinfo.php?enews=DelNews&id=<?=$r[id]?>&classid=<?=$classid?>&bclassid=<?=$bclassid?><?=$addecmscheck?><?=$ecms_hashur['href']?>" onClick="return confirm('确认要删除？');">删除</a></td>
        </tr>
        <?
	}
	?>
        <tr>
          <td><div align="center"><input type=checkbox name=chkall value=on onClick="CheckAll(this.form)"></div></td>
          <td colspan="7" class="sel-height"><div align="left">
              <input type="submit" name="Submit3" value="删除" onClick="document.listform.enews.value='DelNews_all';document.listform.action='ecmsinfo.php';">
              <?php
		  if($ecmscheck)
		  {
		  ?>
              <input type="submit" name="Submit8" value="审核" onClick="document.listform.enews.value='CheckNews_all';document.listform.action='ecmsinfo.php';">
              <?php
		  }
		  else
		  {
		  ?>
              <input type="submit" name="Submit9" value="取消审核" onClick="document.listform.enews.value='NoCheckNews_all';document.listform.action='ecmsinfo.php';">
              <input type="submit" name="Submit8" value="刷新" onClick="document.listform.enews.value='ReSingleInfo';document.listform.action='ecmschtml.php';">
              <input type="button" name="Submit112" value="推送" onClick="PushInfoToSp(this.form);">
              <?php
		  }
		  ?>
              <select name="isgood" id="isgood">
                <option value="0">不推荐</option>
                <?=$ftnr['igname']?>
              </select>
              <input type="submit" name="Submit82" value="推荐" onClick="document.listform.enews.value='GoodInfo_all';document.listform.doing.value='0';document.listform.action='ecmsinfo.php';">
              <select name="firsttitle" id="firsttitle">
                <option value="0">取消头条</option>
                <?=$ftnr['ftname']?>
              </select>
              <input type="submit" name="Submit823" value="头条" onClick="document.listform.enews.value='GoodInfo_all';document.listform.doing.value='1';document.listform.action='ecmsinfo.php';">
              <input type="submit" name="Submit11" value="归档" onClick="document.listform.enews.value='InfoToDoc';document.listform.doing.value='0';document.listform.action='ecmsinfo.php';">
              <select name="istop" id="select">
                <option value="0">不置顶</option>
                <option value="1">一级置顶</option>
                <option value="2">二级置顶</option>
                <option value="3">三级置顶</option>
                <option value="4">四级置顶</option>
                <option value="5">五级置顶</option>
                <option value="6">六级置顶</option>
                <option value="7">七级置顶</option>
                <option value="8">八级置顶</option>
                <option value="9">九级置顶</option>
              </select>
              <input type="submit" name="Submit7" value="置顶" onClick="document.listform.enews.value='TopNews_all';document.listform.action='ecmsinfo.php';">
              <input type="submit" name="Submit7" value="修改时间" onClick="document.listform.enews.value='EditMoreInfoTime';document.listform.action='ecmsinfo.php';">
              <input type="button" name="Submit52" value="推送至专题" onClick="PushInfoToZt(this.form);">
            </div></td>
        </tr>
        <tr>
          <td  colspan="3"><?=$returnpage?></td>
          <td  colspan="7" class="sel-height"><div align="right"> <span id="moveclassnav"></span>
              <input type="submit" name="Submit5" value="移动" onClick="document.listform.enews.value='MoveNews_all';document.listform.action='ecmsinfo.php';">
              <input type="submit" name="Submit6" value="复制" onClick="document.listform.enews.value='CopyNews_all';document.listform.action='ecmsinfo.php';">
            </div></td>
        </tr>
        <tr>
          <td colspan="8"><font color="#c10">备注：多选框蓝色为未审核信息；发布者红色为会员投稿；信息ID粗体为未生成,点击ID可刷新页面.</font></td>
        </tr>
      </tbody>
      <!-- Table Body -->
    </table>
  </div>
</form>
<IFRAME frameBorder="0" id="showclassnav" name="showclassnav" scrolling="no" src="ShowClassNav.php?ecms=3<?=$ecms_hashur['ehref']?>" style="HEIGHT:0;VISIBILITY:inherit;WIDTH:0;Z-INDEX:1"></IFRAME>
</body>
</html>