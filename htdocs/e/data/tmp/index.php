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
    <meta name="keywords" content="灯光设计_城市亮化_照明设计">
    <meta name="description" content="深光照明设计有限公司成立于2007年,注册资金100万,前身是深光照明工作室，是一家综合实力强的专业照明工程设计公司，总部位于深圳.公司成立十来年先后为保利、恒大、万达、华能电气、TCL、万科地产等多家境内外企业成功提供了照明设计方案；深光照明力争做真正为客户提供优秀设计，让灯光与建筑完美融合的专业照明设计公司。">
    <meta name="author" content="YY-MO">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link rel="stylesheet" type="text/css" href="/skin/ziyong/Css/lib2.css">
    <link rel="stylesheet" type="text/css" href="/skin/ziyong/Css/style.2041.css">
    <link rel="stylesheet" type="text/css" href="/skin/ziyong/Css/bwhite.css" id="themeCssPath">
    <link rel="stylesheet" type="text/css" href="/skin/ziyong/Css/2323.css">
    <script type="text/javascript" src="/skin/ziyong/Scripts/jquery.min.js"></script>
    <script type="text/javascript" src="/skin/ziyong/Scripts/org.1494058893.js" data-main="indexMain"></script>
    <script type="text/javascript" src="/skin/ziyong/Scripts/2041.js"></script>
    <script>document.domain = "uemo.net";</script>
    <title>灯光设计_城市亮化_照明设计—深光照明设计</title></head>

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

<div id="indexPage" class="ff_indexPage" data-scroll-ease="Expo.easeInOut" data-scroll-speed="1" data-control="0" data-control-wheel="0" data-singlescreen="0">
<div id="topSlider" class="mslider module">
    <div class="content_wrapper">
        <div class="content_list owl-carousel owl-theme" data-slider-height="500" data-slider-auto="1" data-slider-mode="3" data-slider-pause="5" data-slider-ease="ease-out" data-slider-speed="1" style="height:500px">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <div class="item_block">
                <div class="item_bg image" data-thumb="http://resources.jsmo.xin/templates/upload/2041/201703/1490687229663_80x80.jpg" style="background-image:url(<?=$bqr['titlepic']?>)"></div>
            </div>
            <?php
}
}
?>
        </div>
        <div class="sliderArrow">
            <div></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/js/swiper-3.4.2.min.css">
<script type="text/javascript" src="/js/swiper-3.4.2.jquery.min.js"></script>
<style>
    .banner{ display: none}
    .banner,.banner img{ width: 100%;}
</style>
<div class="banner swiper-container" >
    <div class="swiper-wrapper">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <div class="swiper-slide">

            <img src="<?=$bqr['titlepic']?>">

        </div>
        <?php
}
}
?>
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>
</div>

<script>
    $(function(){

        if($(window).width()<640){
            $(".banner").show();
            $("#topSlider").hide()
            var newsswiper=new Swiper ('.banner', {
                direction: 'horizontal',
                //slidesPerView : 4,//'auto'
                // 如果需要分页器
                pagination: '.banner .swiper-pagination',
                //slidesOffsetBefore:0,
                //spaceBetween:10,
                // 如果需要前进后退按钮
                //prevButton: '.top-contro .prev',
                //nextButton: '.top-contro .next',
                paginationClickable: true,


            })
        }


    })
</script>
<!--关于我们开始-->
<div class="mcustomize module horizontal tril" style="">
    <div class="bgmask"></div>
    <div class="module_container">
        <div class="container_content">
            <div class="contentbody">
                <div class="wrapper">
                    <div class="header wow">
                        <p class="title">关于我们</p>
                        <p class="subtitle">ABOUT US</p></div>
                    <div class="description wow">
                        <p style="text-align: center;">
                            <span style="font-size: 14px;">深光照明设计有限公司成立于2007年,注册资金100万,前身是深光照明工作室，是一家综合实力强的专业照明工程设计公司，总部位于深圳.公司成立十来年先后为保利、恒大、万达、华能电气、TCL、万科地产等多家境内外企业成功提供了照明设计方案；深光照明力争做真正为客户提供优秀设计，让灯光与建筑完美融合的专业照明设计公司。与更多客户分享照明成就的价值，同时也分享设计带来的快乐，是深光照明设计公司存在的意义。</span></p>
                        <p>
                      <span style="font-size: 14px;">
                        <br/></span>
                        </p>
                        <p style="text-align: center;">
                            <a class="more" href="/guanyu/jianjie/" target="_blank">MORE</a></p>
                    </div>
                </div>
            </div>
            <div class="mediabody wow">
              
                    <div class="image" style="background-image:url(/skin/ziyong/Images/149007689617.jpg)"></div>
                    <div class="mask"></div>
                    <div class="link_icon">
                        <i class="fa fa-link" aria-hidden="true"></i>
                    </div>
            
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--关于我们结束-->
<!--案例开始-->
<div class="mlist project module" style="
        ">
    <div class="bgmask"></div>
    <div class="module_container wide">
        <div class="container_header wow">
            <p class="title">案例</p>
            <p class="subtitle">/ PROJECT</p></div>
        <div class="container_category wow movedx" data-movedx-mid="2" data-movedx-distance="15">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classname,classpath,classid from phome_enewsclass where bclassid=4 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <?php
$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址

?>
            <a href="<?=$classurl?>" >
                <span><?=$bqr[classname]?></span></a>
            <?php
}
}
?>
        </div>
        <div class="container_content">
            <div class="content_wrapper">
                <div class="content_list movedx" data-movedx-mid="2" data-movedx-distance="15">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,16,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <div  class="item_block wow" style="animation-delay:.0s">
                        <a href="<?=$bqsr['titleurl']?>" class="item_link" onclick="window.location.href='<?=$bqsr['titleurl']?>'">
                            <img src="<?=$bqr['titlepic']?>" />
                            <div class="item_wrapper">
                                <div class="item_info move">
                                    <p class="title ellipsis"><?=$bqr['title']?></p>
                                    <p class="subtitle ellipsis"><?=$bqr['ftitle']?></p></div>
                                <i class="icon iconfont icon-add"></i>
                            </div>
                        </a>
                    </div>
                    <?php
}
}
?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--案例结束-->
<!--领域开始-->
<div class="mlist service_tabs module" style="
        ">
    <div class="bgmask"></div>
    <div class="module_container wide">
        <div class="container_header wow">
            <p class="title">领域</p>
            <p class="subtitle">/ SERVICE</p></div>
        <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15">

        </div>
        <div class="container_content">
            <div class="content_wrapper">
                <div class="tab_content_wrapper">
                    <div class="tab_content">
                        <div class="tab_indexs">
                            <div class="fnums nums_item" data-current="0">
                                <div>
                                    <span>0</span>
                                    <span>1</span>
                                    <span>2</span></div>
                            </div>
                            <div class="tnums nums_item">
                                <div>
                                    <span>0</span>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                    <span>4</span>
                                    <span>5</span>
                                    <span>6</span>
                                    <span>7</span>
                                    <span>8</span>
                                    <span>9</span></div>
                            </div>
                            <div class="nums_item">
                                <div>
                                    <span>/</span></div>
                            </div>
                        </div>
                        <div class="sliderWrapper" data-slider-num="1">
                            <div class="content_list">
                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,8,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <div  class="item_block">
                                    <div class="item_wrapper">
                                        <div class="item_info">
                                            <p class="title ellipsis"><?=$bqr['title']?></p>
                                            <p class="subtitle ellipsis"><?=$bqr['ftitle']?></p>
                                            <div class="description">
                                                <?=$bqr['newsinfo']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
}
}
?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab_button">
                    <div class="content_list">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,8,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <div  class="item_block wow" style="animation-delay:.0s">
                            <a href="javascript:;" class="item_link">
                                <div class="item_wrapper">
                                    <div class="item_img">
                                        <img src="<?=$bqr['titlepic']?>" /></div>
                                    <div class="item_info">
                                        <p class="nums">0<?=$bqno?> /</p>
                                        <p class="title ellipsis"><?=$bqr['title']?></p>
                                        <p class="subtitle ellipsis"><?=$bqr['ftitle']?></p></div>
                                </div>
                            </a>
                        </div>
                        <?php
}
}
?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--领域结束-->





<div class="mcounter module " style=" ">
    <div class="bgmask"></div>
    <div id="counterBgdx" style="position:absolute; width:100%; height:100%"></div>
    <div class="module_container">
        <div class="container_content">
            <ul class="content_list">
                <li>
                    <div>
                        <p class="number">
                            <span class="counterDX" data-counter-value="2008">2008</span>
                            <span class="unit">年</span></p>
                        <p class="title">成立</p></div>
                </li>
                <li>
                    <div>
                        <p class="number">
                            <span class="counterDX" data-counter-value="10">10</span>
                            <span class="unit">+</span></p>
                        <p class="title">年领域</p></div>
                </li>
                <li>
                    <div>
                        <p class="number">
                            <span class="counterDX" data-counter-value="200">200</span>
                            <span class="unit">+</span></p>
                        <p class="title">客户</p></div>
                </li>
                <li>
                    <div>
                        <p class="number">
                            <span class="counterDX" data-counter-value="1000">1000</span>
                            <span class="unit">+</span></p>
                        <p class="title">案例</p></div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="mlist team module" style="
        ">
    <div class="bgmask"></div>
    <div class="module_container">
        <div class="container_header wow">
            <p class="title">团队精英</p>
            <p class="subtitle">/ TEAM</p></div>
        <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15">

        </div>
        <div class="container_content">
            <div class="content_wrapper slider" data-slider-num='{"0":{"nav":0,"items":2},"1180":{"items":4}}' data-slider-loop="1">
                <div class="content_list">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(13,8,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <div  class="item_block wow" style="animation-delay:.0s">
                        <a href="<?=$bqsr['titleurl']?>" class="item_link" target="_blank">
                            <div class="item_img">
                                <img src="<?=$bqr['titlepic']?>" />
                                <div class="rectborder"></div>
                                <i class="icon iconfont icon-add"></i>
                            </div>
                            <div class="item_wrapper">
                                <div class="item_info">
                                    <p class="title ellipsis"><?=$bqr['title']?></p>
                                    <p class="subtitle"><?=$bqr['ftitle']?></p></div>
                            </div>
                        </a>
                    </div>
                    <?php
}
}
?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="mlist news module" style="
        ">
    <div class="bgmask"></div>
    <div class="module_container">
        <div class="container_header wow">
            <p class="title">新闻</p>
            <p class="subtitle">/ NEWS</p></div>
        <div class="container_category wow movedx" data-movedx-mid="2" data-movedx-distance="15">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classname,classpath,classid from phome_enewsclass where bclassid=6 order by myorder,classid asc ",0,24,0);
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
            <a href="<?=$classurl?>" >
                <span><?=$bqr[classname]?></span></a>

            <?php
}
}
?>
        </div>
        <div class="container_content">
            <div class="content_wrapper">
                <div class="content_list">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <div id="news_item_<?=$bqno-1?>" class="item_block wow first" style="animation-delay:.0s">
                        <a href="<?=$bqsr['titleurl']?>" class="item_img" target="_blank">
                            <img src="<?=$bqr['titlepic']?>" />
                            <div class="rectborder"></div>
                            <i class="icon iconfont icon-add"></i>
                        </a>
                        <div class="item_wrapper">
                            <div class="item_info">
                                <a href="<?=$bqsr['titleurl']?>" target="_blank">
                                    <p class="title"><?=$bqr['title']?></p></a>
                                <p class="subtitle ellipsis"><?=format_datetime($bqr[newstime],'Y-m-d')?></p>
                                <div class="description"></div></div>

                            <a href="<?=$bqsr['titleurl']?>" target="_blank" class="more">MORE
                                <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <?php
}
}
?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="mlist imagelink module" style="
        ">
    <div class="bgmask"></div>
    <div class="module_container">
        <div class="container_header wow">
            <p class="title">合作伙伴</p>
            <p class="subtitle">/ PARTNER</p></div>
        <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15">

        </div>
        <div class="container_content">
            <div class="content_wrapper">
                <ul class="content_list">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(14,24,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li  class="item_block wow" style="animation-delay:.0s">
                        <a href="<?=$bqr['dizhi']?>" target="_blank" class="item_img" title="MSN">
                            <img src="<?=$bqr['titlepic']?>" /></a>
                    </li>
                    <?php
}
}
?>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div id="mcontact" class="module" style=" ">
    <div class="module_container">
        <div class="container_header wow">
            <p class="title">联系</p>
            <p class="subtitle">/ CONTACT</p></div>
        <div class="container_content">
            <div class="content_wrapper">
                <div id="contactlist">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <div id="contactinfo" class="wow">
                        <h3 class="ellipsis"><?=$bqr['title']?></h3>
                        <p class="ellipsis">地址：<?=$bqr['dizhi']?></p>
                        <p class="ellipsis">邮编：<?=$bqr['ren']?></p>
                        <p class="ellipsis">电话：<?=$bqr['tel']?></p>
                        <p class="ellipsis">手机：<?=$bqr['tel']?></p>
                        <p class="ellipsis">传真：<?=$bqr['fax']?></p>
                        <p class="ellipsis">邮箱：<?=$bqr['email']?></p>
                        <div>
                            <a class="fl" target="_blank" href="<?=$bqr['kefu']?>">
                                <i class="fa fa-weibo"></i>
                            </a>
                            <a class="fl" target="_blank" href="tencent://message/?uin=<?=$bqr['qq']?>&Site=uemo&Menu=yes">
                                <i class="fa fa-qq"></i>
                            </a>
                            <a id="mpbtn" class="fl" target="_blank" href="<?=$bqr['img']?>">
                                <i class="fa fa-weixin"></i>
                            </a>
                        </div>
                    </div>
                    <?php
}
}
?>
                    <div id="contactform" class="wow">
                        <form name="feedback" method="post" enctype="multipart/form-data" action="/../e/enews/index.php">
                            <input name="bid" value="1" type="hidden">
                            <input type="hidden" name="ecmsfrom" value="9">
                            <input name="enews" type="hidden" value="AddFeedback">
                            <p>
                                <input type="text" class="inputtxt" name="title" placeholder="姓名" autocomplete="off" /></p>
                            <p>
                                <input type="text" class="inputtxt" name="email" placeholder="邮箱" autocomplete="off" /></p>
                            <p>
                                <input type="text" class="inputtxt" name="tel" placeholder="电话" autocomplete="off" /></p>
                            <p>
                                <textarea class="inputtxt" name="content" placeholder="内容" autocomplete="off"></textarea>
                            </p>
                            <p>
                                <input class="inputtxt submit" type="submit" value="提交" /></p>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="/skin/ziyong/Scripts/stat.js" type="text/javascript"></script>
</div>
<script type="text/javascript" src="//s.union.360.cn/191810.js" async defer></script>
</body>

</html>