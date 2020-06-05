<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?></td>
        </tr>
      </table></td>
</tr>
</table>
<div id="footer">
    <p>
        <span class="ellipsis">深光照明设计有限公司  备案号：粤ICP备17111536号   电话：18682063660 COPYRIGHT (?) 2017 由 <a target="_blank" href="http://www.shixun.co" style="color: #999999;">世迅互联</a> 提供技术支持</span>
        <a class="beian" href="" style="color: #363636;vertical-align: top;margin-left: 10px;display: inline-block;" target="_blank"></a>
    </p>
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