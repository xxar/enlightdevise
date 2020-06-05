<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content="Daivor"/>
    <meta name="robots" content="all"/>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="/skin/ziyong/images/bt_03.png" type="image/x-icon">
    <link rel="stylesheet" href="/skin/ziyong/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/skin/ziyong/css/htmleaf-demo.css">
    <link rel="stylesheet" href="/skin/ziyong/css/swiper.min.css">
    <title><?=$grpagetitle?></title>
</head>
<body>
<header>
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
    <div class="bao back2">
        <div class="wiNer">
            <div class="top">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=4 ",0,24,0);
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
$bgcolor="a2";
}
?>
                <a href="<?=$classurl?>" class="<?=$bgcolor?>"><?=$bqr[classname]?></a>
                <?php
}
}
?>
                <b><?=$class_r[$grbclassid][classname]?></b>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="bao pad4">
        <div class="wiNer">
            <div class="xqy">
                <h2 class="bt6">评审团</h2>
                <div class="rwJj">
                    <div class="rwJj_l">
                        <img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="">
                    </div>
                    <div class="rwJj_r">
                        <div class="bt7">
                            <b><?=$ecms_gr[title]?></b>
                            <i>[!--ftitle--]</i>
                            <span><img src="/skin/ziyong/images/84_03.png" alt="">人物简介</span>
                        </div>
                        <span class="work2">
                          [!--newsinfo--]
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bao back1">
        <div class="wiNer rel pad1">
            <span class="bt8">相关推荐</span>
            <ul class="ul1">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',4,0,0,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="<?=$bqsr['titleurl']?>">
                        <img src="<?=$bqr['titlepic']?>" alt="">
                        <span>
                            <b><?=$bqr['title']?></b>
                            <i><?=$bqr['ftitle']?></i>
                            <span><?=$bqr['smalltext']?></span>
                        </span>
                    </a>
                </li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</section>
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
    <script src="/skin/ziyong/Scripts/stat.js" type="text/javascript"></script>
</div>
<script type="text/javascript" src="//s.union.360.cn/191810.js" async defer></script>
</body>

</html>
<script src="/skin/ziyong/js/jquery-1.11.3.js"></script>
<script src="/skin/ziyong/js/swiper.min.js"></script>
<script src="/skin/ziyong/js/biuJq.js"></script>
<script>
    var swiper = new Swiper('.swiper-container1', {
        pagination: '.swiper-p1',
        nextButton: '.swiper-button-next1',
        prevButton: '.swiper-button-prev1',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween:0,
        loop: true,
        speed:1000,
        autoplay: 5000,
        autoplayStopOnLast:false,
        autoplayDisableOnInteraction:false
    });
</script>
<script>
    window._bd_share_config = {
        share : [
            {
                "tag" : "share_1",
                "bdSize" : 16,
                "bdCustomStyle":'/skin/ziyong/css/style.css'
            }
        ]
    };

    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api//skin/ziyong/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
</body>
</html>