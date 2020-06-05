<?php
if(!defined('InEmpireCMS'))
{exit();}
?><table width='100%' align='center' cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>姓名</td><td bgcolor='ffffff'>
<input name="name" type="text" id="name" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[name]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>身份证号</td><td bgcolor='ffffff'>
<input name="sheng" type="text" id="sheng" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[sheng]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>法名</td><td bgcolor='ffffff'>
<input name="fa" type="text" id="fa" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[fa]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>性别</td><td bgcolor='ffffff'><input name="sex" type="radio" value="男"<?=$addr[sex]=="男"?' checked':''?>>男<input name="sex" type="radio" value="女"<?=$addr[sex]=="女"?' checked':''?>>女</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>年龄</td><td bgcolor='ffffff'>
<input name="nian" type="text" id="nian" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[nian]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>婚姻状况</td><td bgcolor='ffffff'><select name="hun" id="hun"><option value="已婚"<?=$addr[hun]=="已婚"?' selected':''?>>已婚</option><option value="未婚"<?=$addr[hun]=="未婚"?' selected':''?>>未婚</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>电子邮件</td><td bgcolor='ffffff'>
<input name="you" type="text" id="you" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[you]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>手机</td><td bgcolor='ffffff'>
<input name="tel" type="text" id="tel" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[tel]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>座机</td><td bgcolor='ffffff'>
<input name="zuo" type="text" id="zuo" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[zuo]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>工作单位</td><td bgcolor='ffffff'>
<input name="gong" type="text" id="gong" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[gong]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>常住寺院(出家众)</td><td bgcolor='ffffff'>
<input name="chang" type="text" id="chang" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[chang]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>通讯地址</td><td bgcolor='ffffff'>
<input name="tong" type="text" id="tong" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[tong]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>邮编</td><td bgcolor='ffffff'>
<input name="bian" type="text" id="bian" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[bian]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>学历</td><td bgcolor='ffffff'>
<input name="xue" type="text" id="xue" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($addr[xue]))?>" size="">
</td></tr></table>