<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=10;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板 - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$bname?>" />
<meta name="description" content="<?=$bname?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<!-- 页头 -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%">
<!-- 登录 -->
<script>
document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
</script>
</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">加入收藏</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">设为首页</a> | <a href="/e/member/cp/">会员中心</a> | <a href="/e/DoInfo/">我要投稿</a> | <a href="/e/web/?type=rss2" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="/"><img src="/skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="/skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- 导航tab选项卡 -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global"><ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="/">首页</a></li>
        <li id="tabnav_btn_1" onmouseover="tabit(this)"><a href="/news/">新闻中心</a></li>
        <li id="tabnav_btn_2" onmouseover="tabit(this)"><a href="/download/">下载中心</a></li>
        <li id="tabnav_btn_3" onmouseover="tabit(this)"><a href="/movie/">影视频道</a></li>
        <li id="tabnav_btn_4" onmouseover="tabit(this)"><a href="/shop/">网上商城</a></li>
        <li id="tabnav_btn_5" onmouseover="tabit(this)"><a href="/flash/">FLASH频道</a></li>
        <li id="tabnav_btn_6" onmouseover="tabit(this)"><a href="/photo/">图片频道</a></li>
        <li id="tabnav_btn_7" onmouseover="tabit(this)"><a href="/article/">文章中心</a></li>
        <li id="tabnav_btn_8" onmouseover="tabit(this)"><a href="/info/">分类信息</a></li>
      </ul></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>现在的位置：<a href=../../../>首页</a>&nbsp;>&nbsp;<?=$bname?>
</td>
</tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
	<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
			<tr>
				<td align="center" bgcolor="#E1EFFB"><strong><?=$bname?></strong></td>
			</tr>
			<tr>
				<td align="left" valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
							<td height="100%" valign="top" bgcolor="#FFFFFF"> 
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#F4F9FD" class="tableborder">
										<tr class="header">
											<td width="55%" height="23">发布者: <?=$r[name]?> </td>
											<td width="45%">发布时间: <?=$r[lytime]?> </td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23" colspan="2"><table border="0" width="100%" cellspacing="1" cellpadding="8" bgcolor='#cccccc'>
													<tr>
														<td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> <?=$r[lytext]?> </td>
													</tr>
												</table>
												
<?
if($r[retext])
{
?>

												<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
													<tr>
														<td><img src="../../data/images/regb.gif" width="18" height="18" /><strong><font color="#FF0000">回复:</font></strong> <?=$r[retext]?> </td>
													</tr>
												</table>
												
<?
}
?> </td>
										</tr>
									</table>
								<br />
								
<?
}
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1">
									<tr>
										<td>分页: <?=$listpage?></td>
									</tr>
								</table>
								<form action="../../enews/index.php" method="post" name="form1" id="form1">
									<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1"class="tableborder">
										<tr class="header">
											<td colspan="2" bgcolor="#F4F9FD"><strong>请您留言:</strong></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="20%">姓名:</td>
											<td width="722" height="23"><input name="name" type="text" id="name" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系邮箱:</td>
											<td height="23"><input name="email" type="text" id="email" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系电话:</td>
											<td height="23"><input name="mycall" type="text" id="mycall" /></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>留言内容(*):</td>
											<td height="23"><textarea name="lytext" cols="60" rows="12" id="lytext"></textarea></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23">&nbsp;</td>
											<td height="23"><input type="submit" name="Submit3" value="提交" />
											<input type="reset" name="Submit22" value="重置" />
											<input name="enews" type="hidden" id="enews" value="AddGbook" /></td>
										</tr>
									</table>
								</form></td>
						</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table></td>
</tr>
</table>
<div id="footer">
    <div class="info">
        深光照明设计有限公司 Copyright © 2017-2020 粤ICP备17111536号  
        <span class="to">
            联系人： 李先生
            <span class="tel">电话：<a href="tel:18682063660">18682063660</a></span>
        </span>
    </div>
</div>
[e:loop={1,1,0,0}]
<div id="shares">
    <a href="<?=$bqr['kefu']?>" target="_blank" id="sweibo">
        <i class="fa fa-weibo"></i>
    </a>
    <a href="javascript:;" id="sweixin">
        <i class="fa fa-mobile"></i>
    </a>
    <a href="javascript:;" id="gotop">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
<div class="fixed" id="fixed_weixin">
    <div class="fixed-container">
        <img src="<?=$bqr['img']?>">
        <p>扫描二维码分享到微信</p>
    </div>
</div>
<div id="online_open">
    <i class="fa fa-comments-o"></i>
</div>
<div id="online_lx">
    <div id="olx_head">在线咨询
        <i class="fa fa-times fr" id="online_close"></i></div>
    <ul id="olx_qq">
        <li>
            <a href="tencent://message/?uin=<?=$bqr['qq']?>&Site=uelike&Menu=yes">
                <i class="fa fa-qq"></i><?=$bqr['qq']?></a>
        </li>
    </ul>
    <div id="olx_tel">
        <div>
            <i class="fa fa-phone"></i>联系电话</div>
        <p><?=$bqr['tel']?>
            <br /></p></div>
</div>
<a id="openAssist" href="javascript:;">
    <i class="icon iconfont icon-add"></i>
</a>
<div id="assistBtn">
    <a href="javascript:;" onclick="$('html,body').scrollTop(0);return false;">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="tel:<?=$bqr['tel']?>">
        <i class="fa fa-phone"></i>
    </a>
    <a href="mqqwpa://im/chat?chat_type=wpa&uin=&version=1">
        <i class="fa fa-qq"></i>
    </a>
</div>
[/e:loop]
<div class="hide">
    <script src="/skin/ziyong/Scripts/stat.js" type="text/javascript"></script>
</div>
<script type="text/javascript" src="//s.union.360.cn/191810.js" async defer></script>
</body>

</html>
</body>
</html>
<?php
db_close();
$empire=null;
?>