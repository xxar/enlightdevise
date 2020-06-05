<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="agent-pc theme-b theme-bwhite">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="YY-MO">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" type="text/css" href="[!--news.url--]skin/ziyong/Css/lib2.css">
    <link rel="stylesheet" type="text/css" href="[!--news.url--]skin/ziyong/Css/style.2041.css">
    <link rel="stylesheet" type="text/css" href="[!--news.url--]skin/ziyong/Css/bwhite.css" id="themeCssPath">
    <link rel="stylesheet" type="text/css" href="[!--news.url--]skin/ziyong/Css/2323.css">
    <script type="text/javascript" src="[!--news.url--]skin/ziyong/Scripts/jquery.min.js"></script>
    <script type="text/javascript" src="[!--news.url--]skin/ziyong/Scripts/org.1494058893.js" data-main="baseMain"></script>
    <script type="text/javascript" src="[!--news.url--]skin/ziyong/Scripts/2041.js"></script>
    <script>document.domain = "uemo.net";</script>
    <title>[!--pagetitle--]</title></head>

<body id="longPage" class="gh0 longPage">
<div id="header">
    <div class="wrapper">
        <div class="content">
            <div id="headTop">
                <a href="/" id="logo">
                    <img src="<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?=$bqr['titlepic']?>
<?php
}
}
?>" height="44" /></a>
                <div id="hcontact" class="fr">
                    <i class="fa fa-phone"></i>
                    <p>8888888888
                        <br />
                        <a href="mailto:jsmo@jsmo.xin">jsmo@jsmo.xin</a></p>
                </div>
                <div id="openBtn" class="fl btn">
                    <div class="lcbody">
                        <div class="lcitem top">
                            <div class="rect top"></div>
                        </div>
                        <div class="lcitem bottom">
                            <div class="rect bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="navWrapper">
                <div class="content">
                    <p class="search_but" style="display:none">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </p>
                    <ul class="nav movedx" data-movedx-mid="1">
                        <li class="navitem">
                            <a class="active" href="/" target="_self">
                                <span data-title="首页">首页</span></a>
                        </li>

                        <?php
$cid = $GLOBALS[navclassid];
$fid = $class_r[$GLOBALS[navclassid]][bclassid];
if($class_r[$GLOBALS[navclassid]][bclassid]==0){
$classid=$GLOBALS['navclassid'];
$classname=$class_r[$classid][classname];
}else{
$classid=$class_r[$GLOBALS[navclassid]][bclassid];
$classname=$class_r[$classid][classname];
}

   $ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from phome_enewsclass where classid in(3,4,5,6,7,8,9) and showclass=0 order by myorder limit 100',20,24,0);    
   $bqno=0;
   $syasd="";
    while($bqr=$empire->fetch($ecms_bq_sql))
{
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
$bgcolor="";
if($bqr[classid]==$cid||$bqr[classid]==$fid)//当前栏目ID
{
$bgcolor="active";
} 

$bgcolor1="";
if($bqr[classid]==5||$bqr[classid]==9)//当前栏目ID
{
$bgcolor1="<i class='fa fa-angle-down'></i>";
} 


?>

<li class="navitem">
                            <a class="<?=$bgcolor?>" href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>" target="">
                                <span data-title="<?=$bqr[classname]?>"><?=$bqr[classname]?></span>
                                <?=$bgcolor1?>
                            </a>
    
    <?php
        $ecms_bq_sql2=sys_ReturnEcmsLoopBq("select classid,classname,classpath from phome_enewsclass where bclassid='$bqr[classid]' order by myorder limit 100",20,24,0);
        if($bqr2=$empire->fetch($ecms_bq_sql2))//二级
    {

    ?>
    <ul class="subnav">
        <?php
       $ecms_bq_sql2=sys_ReturnEcmsLoopBq("select classid,classname,classpath from phome_enewsclass where bclassid='$bqr[classid]' order by myorder limit 100",20,24,0);
        
        $bqno2=0;
        while($bqr2=$empire->fetch($ecms_bq_sql2))//二级
        {
        $bqsr2=sys_ReturnEcmsLoopStext($bqr2);
        $bqno2++;

        ?>

         
           
 <li>
                                    <a href="<?=$public_r[newsurl]?><?=$bqr2[classpath]?>" target="_self"><?=$bqr2[classname]?></a></li>

        <?php
        }
        echo "</ul>";
}
	
        echo "</li>";
}
?>



                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div id="search" style="display:none">
                <div class="s_content">
                    <form>
                        <div class="s_wrapper">
                            <p class="s_submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </p>
                            <input type="text" aria-label="搜索" placeholder="搜索" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" />
                            <p class="s_close">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sitecontent">
<div id="navMini">
    <div id="navMiniTable">
        <div id="navMiniCell">
            <ul class="nav">
                <li class="navitem">
                    <a  href="/" target="_self">首页</a></li>

                <?php
$cid = $GLOBALS[navclassid];
$fid = $class_r[$GLOBALS[navclassid]][bclassid];
if($class_r[$GLOBALS[navclassid]][bclassid]==0){
$classid=$GLOBALS['navclassid'];
$classname=$class_r[$classid][classname];
}else{
$classid=$class_r[$GLOBALS[navclassid]][bclassid];
$classname=$class_r[$classid][classname];
}

   $ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from phome_enewsclass where classid in(3,4,5,6,7,8,9) and showclass=0 order by myorder limit 100',20,24,0);    
   $bqno=0;
   $syasd="";
    while($bqr=$empire->fetch($ecms_bq_sql))
{
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
$bgcolor="";
if($bqr[classid]==$cid||$bqr[classid]==$fid)//当前栏目ID
{
$bgcolor="active";
} 

$bgcolor1="";
if($bqr[classid]==5||$bqr[classid]==9)//当前栏目ID
{
?>
<li class="navitem">
                    <a class="<?=$bgcolor?>" href="javascript:;" target=""><?=$bqr[classname]?>
                        <i class="fa fa-angle-down"></i></a>

<?php
} else{
?>

<li class="navitem">
                    <a class="<?=$bgcolor?>" href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>" target="_self"><?=$bqr[classname]?></a>
<?php
}


?>

    <?php
        $ecms_bq_sql2=sys_ReturnEcmsLoopBq("select classid,classname,classpath from phome_enewsclass where bclassid='$bqr[classid]' order by myorder limit 100",20,24,0);
        if($bqr2=$empire->fetch($ecms_bq_sql2))//二级
    {

    ?>
    <ul class="subnav">
        <?php
       $ecms_bq_sql2=sys_ReturnEcmsLoopBq("select classid,classname,classpath from phome_enewsclass where bclassid='$bqr[classid]' order by myorder limit 100",20,24,0);
        
        $bqno2=0;
        while($bqr2=$empire->fetch($ecms_bq_sql2))//二级
        {
        $bqsr2=sys_ReturnEcmsLoopStext($bqr2);
        $bqno2++;

        ?>

         
           
 <li>
                                    <a href="<?=$public_r[newsurl]?><?=$bqr2[classpath]?>" target="_self"><?=$bqr2[classname]?></a></li>

        <?php
        }
        echo "</ul>";
}
	
        echo "</li>";
}
?>


                <li class="search-but" style=" opacity:0">
                    <a href="#">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>$(function() {
    $('#navWrapper .search_but').click(function() {
        $("#search").show().animate({
                    left: 0,
                    opacity: 1
                },
                500);
        $("#navWrapper").hide();
        $("#headTop").hide();
    });
    $('#search .s_close').click(function() {
        $("#search").show().animate({
                    left: $("#search").width() * 1.2,
                    opcity: 0
                },
                500);
        $("#navWrapper").show();
        $("#headTop").show();
    });
});</script>
<div class="npagePage ff_pageList">
<div id="banner">
    <div style="background-image:url([!--news.url--]skin/ziyong/Images/1493794625327.jpg);"></div>
</div>
<div id="pageTarget" class="module">
    <div class="module_container">
        <div class="container_target wow">您的位置：
            <a href="/">首页</a>
            <i class="fa fa-angle-right"></i>
            <a >[!--class.name--]</a></div>
        <div class="clear"></div>
    </div>
</div>
<div class="content">
<div class="mlist job module" style="
          ">
<div class="bgmask"></div>
<div class="module_container">
<div class="container_category wow movedx" data-movedx-mid="2" data-movedx-distance="15">
    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classname,classpath,classid from phome_enewsclass where bclassid=8 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <?php
$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址
$bgcolor="";
if($bqr[classid]==$GLOBALS[navclassid])//当前栏目ID
{
$bgcolor="active";
}
?>
    <a href="<?=$classurl?>" class="<?=$bgcolor?>">
        <span><?=$bqr[classname]?></span></a>
    <?php
}
}
?>
</div>
<div class="container_content">
<div class="content_wrapper">
<div class="content_list">
<div id="job_item_5" class="item_block head" style="animation-delay:.1s">
    <div class="item_info">
        <p class="title ellipsis">职位名称</p>
        <p class="subtitle ellipsis">职位类别</p>
        <p class="cattitle ellipsis">工作地点</p>
        <p class="date">更新时间</p>
        <p class="more"></p>
    </div>
</div>

    [!--empirenews.listtemp--]
    <!--list.var1-->
    [!--empirenews.listtemp--]

</div>
<div class="clear"></div>
</div>
<div id="pages">
    [!--show.listpage--]
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<div id="footer">
    <p>
        <span class="ellipsis">深光照明设计有限公司  备案号：粤ICP备17111536号   电话：18682063660 COPYRIGHT (?) 2017 由 <a target="_blank" href="http://www.shixun.co" style="color: #999999;">世迅互联</a> 提供技术支持</span>
        <a class="beian" href="" style="color: #363636;vertical-align: top;margin-left: 10px;display: inline-block;" target="_blank"></a>
    </p>
</div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
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
<?php
}
}
?>
<div class="hide">
    <script src="[!--news.url--]skin/ziyong/Scripts/stat.js" type="text/javascript"></script>
</div>
<script type="text/javascript" src="//s.union.360.cn/191810.js" async defer></script>
</body>

</html>