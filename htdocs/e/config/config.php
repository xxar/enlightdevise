<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);
$ecms_config=array();

//数据库设置
$ecms_config['db']['usedb']='mysql';	//数据库类型
$ecms_config['db']['dbver']='5.0';	//数据库版本
$ecms_config['db']['dbserver']='sdm204855621.my3w.com';	//数据库登录地址
$ecms_config['db']['dbport']='';	//端口，不填为按默认
$ecms_config['db']['dbusername']='sdm204855621';	//数据库用户名
$ecms_config['db']['dbpassword']='final881204';	//数据库密码
$ecms_config['db']['dbname']='sdm204855621_db';	//数据库名
$ecms_config['db']['setchar']='utf8';	//设置默认编码
$ecms_config['db']['dbchar']='utf8';	//数据库默认编码
$ecms_config['db']['dbtbpre']='phome_';	//数据表前缀
$dbtbpre=$ecms_config['db']['dbtbpre'];	//数据表前缀
$ecms_config['db']['showerror']=1;	//显示SQL错误提示(0为不显示,1为显示)


//页面编码设置
$ecms_config['sets']['pagechar']='utf-8';	//安装帝国CMS的编码版本
$ecms_config['sets']['setpagechar']=1;	//页面默认字符集,0=关闭 1=开启
$ecms_config['sets']['elang']='gb';	//语言包

//后台相关配置
$ecms_config['esafe']['openonlinesetting']=3;	//开启后台在线配置参数(0为关闭,1为开启防火墙配置,2为开启安全配置,3为全开启)
$ecms_config['esafe']['openeditdttemp']=1;	//开启后台在线修改动态模板(0为关闭,1为开启)

//易通行系统配置
$ecms_config['epassport']['open']=0;	//是否开启易通行系统(1为开启，0为关闭)

//其它配置
$ecms_config['sets']['txtpath']=ECMS_PATH.'d/txt/';	//文本型数据存放目录
$ecms_config['sets']['saveurlimgclearurl']=0;	//远程保存图片自动去除图片的链接(0为保留,1为去除)
$ecms_config['sets']['deftempid']=0;	//默认模板组ID
$ecms_config['sets']['selfmoreportid']=0;	//当前网站访问端ID,0为主访问端



//-------EmpireCMS.Seting.member-------

//会员系统相关配置
$ecms_config['member']['tablename']="{$dbtbpre}enewsmember";	//会员表
$user_tablename=$ecms_config['member']['tablename'];	//会员表
$ecms_config['member']['changeregisterurl']="ChangeRegister.php";    //多会员组中转注册地址
$ecms_config['member']['registerurl']="";							//会员注册地址
$ecms_config['member']['loginurl']="";								//会员登录地址
$ecms_config['member']['quiturl']="";								//会员退出地址
$ecms_config['member']['chmember']=0;//是否使用原版会员表信息,0为原版,1为非原版
$ecms_config['member']['pwtype']=2;//密码保存形式,0为md5,1为明码,2为双重加密,3为16位md5
$ecms_config['member']['regtimetype']=1;//注册时间保存格式,0为正常时间,1为数值型
$ecms_config['member']['regcookietime']=0;//注册后登录保存时间(秒)
$ecms_config['member']['defgroupid']=0;//注册时会员组ID(ecms的会员组,0为后台默认)
$ecms_config['member']['saltnum']=6;//SALT随机码字符数
$ecms_config['member']['utfdata']=0;//数据是否是GBK编码,0为正常数据,1为GBK编码

$ecms_config['memberf']['userid']='userid';//用户ID字段
$ecms_config['memberf']['username']='username';//用户名字段
$ecms_config['memberf']['password']='password';//密码字段
$ecms_config['memberf']['rnd']='rnd';//随机密码字段
$ecms_config['memberf']['email']='email';//邮箱字段
$ecms_config['memberf']['registertime']='registertime';//注册时间字段
$ecms_config['memberf']['groupid']='groupid';//会员组字段
$ecms_config['memberf']['userfen']='userfen';//积分字段
$ecms_config['memberf']['userdate']='userdate';//有效期字段
$ecms_config['memberf']['money']='money';//帐户余额字段
$ecms_config['memberf']['zgroupid']='zgroupid';//到期转向会员组字段
$ecms_config['memberf']['havemsg']='havemsg';//提示短消息字段
$ecms_config['memberf']['checked']='checked';//审核状态字段
$ecms_config['memberf']['salt']='salt';//SALT加密字段
$ecms_config['memberf']['userkey']='userkey';//用户密钥字段

//-------EmpireCMS.Seting.member-------




//-------EmpireCMS.Seting.area-------

//后台安全设置
$ecms_config['esafe']['loginauth']='shixun';	//登录认证码,如果设置登录需要输入此认证码才能通过
$ecms_config['esafe']['ecookiernd']='00afhbTqblgQFmz0CWHDFeNNGfRi7J';	//后台登录COOKIE认证码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['esafe']['ckhloginip']=0;	//后台是否验证登录IP,0为不验证,1为验证
$ecms_config['esafe']['ckhsession']=0;	//后台是否启用SESSION验证,0为不验证,1为验证
$ecms_config['esafe']['ckhanytime']=0;	//后台随时认证码变更周期,单位:秒(0为不启用)
$ecms_config['esafe']['theloginlog']=0;	//是否记录登陆日志(0为记录,1为不记录)
$ecms_config['esafe']['thedolog']=0;		//是否记录操作日志(0为记录,1为不记录)
$ecms_config['esafe']['ckfromurl']=2;	//是否启用来源地址验证,0为不验证,1为全部验证,2为后台验证,3为前台验证
$ecms_config['esafe']['ckhash']=0;	//启用后台来源认证码,0为金刚模式验证,1为刺猬模式验证,2为关闭验证

//COOKIE设置
$ecms_config['cks']['ckdomain']='';		//cookie作用域
$ecms_config['cks']['ckpath']='/';		//cookie作用路径
$ecms_config['cks']['ckvarpre']='wbgoq';		//前台cookie变量前缀
$ecms_config['cks']['ckadminvarpre']='kmrod';		//后台cookie变量前缀
$ecms_config['cks']['ckrnd']='5HfscTOnP2x6IwpL3vn0YdE3EEk8Gc';	//COOKIE验证随机码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndtwo']='iKUJJloVmhHiiB1JdKX2rwEqBjYkxw';	//COOKIE验证随机码2(填写10~50个任意字符，最好多种字符组合)

//网站防火墙配置
$ecms_config['fw']['eopen']=0;	//开启防火墙(0为关闭,1为开启)
$ecms_config['fw']['epass']='';	//防火墙加密密钥(填写10~50个任意字符，最好多种字符组合)
$ecms_config['fw']['adminloginurl']='';	//允许后台登陆的域名,设置后必须通过这个域名才能访问后台
$ecms_config['fw']['adminhour']='';	//允许登陆后台的时间：0~23小时，多个时间点用半角逗号格开
$ecms_config['fw']['adminweek']='';	//允许登陆后台的星期：星期0~6，多个星期用半角逗号格开
$ecms_config['fw']['adminckpassvar']='';	//后台预登陆验证变量名
$ecms_config['fw']['adminckpassval']='';	//后台预登陆认证码
$ecms_config['fw']['cleargettext']='';	//屏蔽提交敏感字符，多个用半角逗号格开

//-------EmpireCMS.Seting.area-------


//文件类型
$ecms_config['sets']['tranpicturetype']=',.jpg,.gif,.png,.bmp,.jpeg,';	//图片
$ecms_config['sets']['tranflashtype']=',.swf,.flv,.dcr,';	//FLASH
$ecms_config['sets']['mediaplayertype']=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,';	//mediaplayer
$ecms_config['sets']['realplayertype']=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer




//***************** 以下部分为缓存，不用设置 **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'灯光设计_城市亮化_照明设计—深光照明设计',
'newsurl'=>'/',
'filetype'=>'|.gif|.jpg|.swf|.rar|.zip|.mp3|.wmv|.txt|.doc|.png|.mp4|',
//自定义变量开始
'gs'=>'深圳市深光照明设计有限公司',
'lxr'=>'李磊',
'tel'=>'0755-83220224',
'sj'=>'18682063660',
'qq'=>'277606696',
'yx'=>'277606696@qq.com',
'dz'=>'深圳市福田区沙头街道福强路金地工业区133栋',
'yb'=>'518000',
'cz'=>'0755-83220224',
'bq'=>' 深圳市深光照明设计有限公司 版权信息',
'wz'=>'www.szsgzm.com ',
'bah'=>'粤ICP备17111536号',
'bzgg'=>'本站公告：本站公告',
//自定义变量结束
'filesize'=>20480,
'relistnum'=>16,
'renewsnum'=>100,
'min_keyboard'=>1,
'max_keyboard'=>20,
'search_num'=>1,
'search_pagenum'=>1,
'newslink'=>0,
'checked'=>0,
'searchtime'=>1,
'loginnum'=>5,
'logintime'=>60,
'addnews_ok'=>0,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>40,
'smalltextlen'=>160,
'defaultgroupid'=>1,
'fileurl'=>'/d/file/',
'install'=>0,
'phpmode'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'f1BMkN71MmTANAVw3kcE',
'filechmod'=>1,
'loginkey_ok'=>0,
'tbname'=>'news',
'limittype'=>0,
'redodown'=>1,
'downsofttemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]',
'reuserpagenum'=>50,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>1,
'qaddtransize'=>50,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>5,
'markimg'=>'../data/mark/maskdef.gif',
'marktext'=>'',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>1,
'php_outtime'=>0,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>10,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>1,
'searchtempvar'=>1,
'showinfolevel'=>0,
'navfh'=>'>',
'spicwidth'=>105,
'spicheight'=>118,
'spickill'=>1,
'jpgquality'=>80,
'markpct'=>65,
'redoview'=>24,
'reggetfen'=>0,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>0,
'filepath'=>'',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>0,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'textpagelistnum'=>6,
'memberlistlevel'=>0,
'ebakcanlistdb'=>0,
'keytog'=>2,
'keytime'=>30,
'keyrnd'=>'UNCf3mqBGgl0MAQqmcYcBrhcniT9y5',
'checkdorepstr'=>',0,0,0,0,',
'regkey_ok'=>0,
'opengetdown'=>0,
'gbkey_ok'=>0,
'fbkey_ok'=>0,
'newaddinfotime'=>0,
'classnavs'=>'<a href=\"/huandengpian/\">幻灯片</a>&nbsp;|&nbsp;<a href=\"/xiangmu/\">案例</a>&nbsp;|&nbsp;<a href=\"/fuwu/\">领域</a>&nbsp;|&nbsp;<a href=\"/guanyu/\">关于</a>&nbsp;|&nbsp;<a href=\"/xinwen/\">新闻</a>&nbsp;|&nbsp;<a href=\"/lianxi/\">联系</a>&nbsp;|&nbsp;<a href=\"/zhaopin/\">招聘</a>&nbsp;|&nbsp;<a href=\"/jieshao/\">功能介绍</a>',
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>10,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>0,
'hlistinfonum'=>30,
'qlistinfonum'=>25,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>0,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>1,
'usetags'=>',1,2,3,4,5,6,7,8,',
'chtags'=>'',
'tagslistnum'=>25,
'closeqdt'=>0,
'settop'=>0,
'qlistinfomod'=>0,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'indexpagedt'=>0,
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>0,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>'',
'fieldandtop'=>0,
'fieldandclosetb'=>'',
'filedatatbs'=>',1,',
'filedeftb'=>1,
'pldeftb'=>1,
'plurl'=>'/e/pl/',
'plkey_ok'=>1,
'plface'=>'||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||',
'plf'=>'',
'pldatatbs'=>',1,',
'defpltempid'=>1,
'pl_num'=>12,
'plgroupid'=>0,
'closelisttemp'=>'',
'chclasscolor'=>'#99C4E3',
'timeclose'=>'',
'timeclosedo'=>'',
'ipaddinfonum'=>0,
'ipaddinfotime'=>0,
'rewriteinfo'=>'',
'rewriteclass'=>'',
'rewriteinfotype'=>'',
'rewritetags'=>'',
'rewritepl'=>'',
'memberconnectnum'=>0,
'closehmenu'=>'',
'indexaddpage'=>0,
'modmemberedittran'=>0,
'modinfoedittran'=>0,
'deftempid'=>0);
//------------e_public

//moreports
$emoreport_r=array();
//moreports


//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>14);
$etable_r['company']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>12);


$emod_r=array();
$emod_r[35]=Array('mid'=>35,
'mname'=>'招聘',
'qmname'=>'招聘',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,newsinfo,daxiao,special.field,newstime,',
'qenter'=>',',
'listtempf'=>',title,ftitle,newsinfo,daxiao,newstime,',
'tempf'=>',title,ftitle,newsinfo,daxiao,newstime,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'caneditf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,newsinfo,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|tuji,1,3,1|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|16|',
'tid'=>1,
'tbname'=>'news');
$emod_r[37]=Array('mid'=>37,
'mname'=>'日志',
'qmname'=>'日志',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,newsinfo,special.field,newstime,',
'qenter'=>',',
'listtempf'=>',title,newsinfo,newstime,',
'tempf'=>',title,newsinfo,newstime,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,newsinfo,',
'canaddf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'caneditf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,newsinfo,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|tuji,1,3,1|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|17|',
'tid'=>1,
'tbname'=>'news');
$emod_r[32]=Array('mid'=>32,
'mname'=>'团队',
'qmname'=>'团队',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,newsinfo,tuji,special.field,titlepic,',
'qenter'=>',',
'listtempf'=>',title,ftitle,newsinfo,tuji,titlepic,',
'tempf'=>',title,ftitle,newsinfo,tuji,titlepic,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,',
'cj'=>',title,',
'canaddf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'caneditf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,newsinfo,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|tuji,1,3,1|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|13|',
'tid'=>1,
'tbname'=>'news');
$emod_r[14]=Array('mid'=>14,
'mname'=>'项目',
'qmname'=>'产品',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,newsinfo,special.field,titlepic,smalltext,',
'qenter'=>',',
'listtempf'=>',title,ftitle,newsinfo,titlepic,smalltext,',
'tempf'=>',title,ftitle,newsinfo,titlepic,smalltext,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,',
'cj'=>',title,ftitle,newsinfo,tuji,daxiao,newstime,titlepic,smalltext,newstext,',
'canaddf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'caneditf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,newsinfo,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|tuji,1,3,1|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|10|18|19|20|21|',
'tid'=>1,
'tbname'=>'news');
$emod_r[12]=Array('mid'=>12,
'mname'=>'公共信息',
'qmname'=>'公共信息',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,tel,fax,email,dizhi,ren,img,qq,kefu,',
'qenter'=>',',
'listtempf'=>',title,titlepic,tel,fax,email,dizhi,ren,img,qq,kefu,',
'tempf'=>',title,titlepic,ren,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,iinfo,qq,kefu,',
'canaddf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,iinfo,qq,kefu,',
'caneditf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,iinfo,qq,kefu,',
'tbmainf'=>',kefu,qq,title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',kefu,qq,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',bottom,iinfo,content,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,img,img1,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|1|',
'tid'=>9,
'tbname'=>'company');
$emod_r[15]=Array('mid'=>15,
'mname'=>'关于我们',
'qmname'=>'',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,bottom,',
'qenter'=>',',
'listtempf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,',
'tempf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,bottom,',
'canaddf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,',
'caneditf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,',
'tbmainf'=>',kefu,qq,title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',kefu,qq,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',bottom,iinfo,content,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,img,img1,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|11|12|',
'tid'=>9,
'tbname'=>'company');
$emod_r[13]=Array('mid'=>13,
'mname'=>'幻灯片',
'qmname'=>'幻灯片',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,dizhi,',
'qenter'=>',',
'listtempf'=>',title,titlepic,dizhi,',
'tempf'=>',title,titlepic,dizhi,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,titlepic,content,',
'canaddf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,',
'caneditf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,',
'tbmainf'=>',kefu,qq,title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',kefu,qq,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',bottom,iinfo,content,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,img,img1,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|2|14|',
'tid'=>9,
'tbname'=>'company');
$emod_r[20]=Array('mid'=>20,
'mname'=>'最新动态',
'qmname'=>'最新动态',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,newsinfo,special.field,newstime,titlepic,smalltext,',
'qenter'=>',',
'listtempf'=>',title,newsinfo,newstime,titlepic,smalltext,',
'tempf'=>',title,newsinfo,newstime,titlepic,smalltext,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,newsinfo,newstime,titlepic,smalltext,writer,',
'canaddf'=>',title,ftitle,newsinfo,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'caneditf'=>',title,ftitle,newsinfo,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,newsinfo,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|tuji,1,3,1|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|15|',
'tid'=>1,
'tbname'=>'news');
$emod_r[34]=Array('mid'=>34,
'mname'=>'联系我们',
'qmname'=>'',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,tel,fax,email,dizhi,img,img1,',
'qenter'=>',',
'listtempf'=>',title,titlepic,tel,fax,email,dizhi,img,img1,',
'tempf'=>',title,titlepic,tel,fax,email,dizhi,img,img1,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,iinfo,qq,kefu,',
'caneditf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,iinfo,qq,kefu,',
'tbmainf'=>',kefu,qq,title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',kefu,qq,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',bottom,iinfo,content,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,img,img1,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|11|',
'tid'=>9,
'tbname'=>'company');
$emod_r[24]=Array('mid'=>24,
'mname'=>'合作伙伴',
'qmname'=>'合作伙伴',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,dizhi,',
'qenter'=>',',
'listtempf'=>',title,titlepic,dizhi,',
'tempf'=>',title,titlepic,dizhi,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,titlepic,',
'canaddf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,iinfo,',
'caneditf'=>',title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,content,iinfo,',
'tbmainf'=>',kefu,qq,title,titlepic,newstime,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'tbdataf'=>',',
'tobrf'=>',',
'dohtmlf'=>',kefu,qq,tel,fax,email,dizhi,bottom,ren,img,img1,iinfo,content,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',bottom,iinfo,content,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,img,img1,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|39|40|41|',
'tid'=>9,
'tbname'=>'company');
$emod_r[36]=Array('mid'=>36,
'mname'=>'服务',
'qmname'=>'',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,newsinfo,special.field,titlepic,',
'qenter'=>',',
'listtempf'=>',title,ftitle,newsinfo,titlepic,',
'tempf'=>',title,ftitle,newsinfo,titlepic,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,titlepic,',
'canaddf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'caneditf'=>',title,ftitle,newsinfo,tuji,daxiao,geshi,xiazai,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,xiazai,daxiao,geshi,newsinfo,tuji,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,newsinfo,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|tuji,1,3,1|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|3|',
'tid'=>1,
'tbname'=>'news');


//-------EmpireCMS.Public.Cache-------

?>