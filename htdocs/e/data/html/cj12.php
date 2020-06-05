<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>网站标题正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>logo正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--titlepic--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_titlepic]" type="text" id="add[qz_titlepic]" value="<?=stripSlashes($r[qz_titlepic])?>"> 
        <input name="add[save_titlepic]" type="checkbox" id="add[save_titlepic]" value=" checked"<?=$r[save_titlepic]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_titlepic]" cols="60" rows="10" id="add[zz_titlepic]"><?=ehtmlspecialchars(stripSlashes($r[zz_titlepic]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_titlepic]" type="text" id="titlepic5" value="<?=stripSlashes($r[z_titlepic])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发布时间正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>电话正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--tel--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_tel]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_tel]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_tel]" type="text" id="add[z_tel]" value="<?=stripSlashes($r[z_tel])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>传真正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--fax--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_fax]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_fax]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_fax]" type="text" id="add[z_fax]" value="<?=stripSlashes($r[z_fax])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>邮箱正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--email--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_email]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_email]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_email]" type="text" id="add[z_email]" value="<?=stripSlashes($r[z_email])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>地址正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--dizhi--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_dizhi]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_dizhi]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_dizhi]" type="text" id="add[z_dizhi]" value="<?=stripSlashes($r[z_dizhi])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>底部内容正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--bottom--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_bottom]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_bottom]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_bottom]" type="text" id="add[z_bottom]" value="<?=stripSlashes($r[z_bottom])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>邮编正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ren--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ren]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ren]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ren]" type="text" id="add[z_ren]" value="<?=stripSlashes($r[z_ren])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>二维码正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--img--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_img]" type="text" id="add[qz_img]" value="<?=stripSlashes($r[qz_img])?>"> 
        <input name="add[save_img]" type="checkbox" id="add[save_img]" value=" checked"<?=$r[save_img]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_img]" cols="60" rows="10" id="add[zz_img]"><?=ehtmlspecialchars(stripSlashes($r[zz_img]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_img]" type="text" id="img5" value="<?=stripSlashes($r[z_img])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>图片2正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--img1--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_img1]" type="text" id="add[qz_img1]" value="<?=stripSlashes($r[qz_img1])?>"> 
        <input name="add[save_img1]" type="checkbox" id="add[save_img1]" value=" checked"<?=$r[save_img1]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_img1]" cols="60" rows="10" id="add[zz_img1]"><?=ehtmlspecialchars(stripSlashes($r[zz_img1]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_img1]" type="text" id="img15" value="<?=stripSlashes($r[z_img1])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>内容正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--content--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_content]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_content]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_content]" type="text" id="add[z_content]" value="<?=stripSlashes($r[z_content])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>首页简介正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--iinfo--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_iinfo]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_iinfo]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_iinfo]" type="text" id="add[z_iinfo]" value="<?=stripSlashes($r[z_iinfo])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>QQ正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--qq--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_qq]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_qq]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_qq]" type="text" id="add[z_qq]" value="<?=stripSlashes($r[z_qq])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>微博正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--kefu--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_kefu]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_kefu]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_kefu]" type="text" id="add[z_kefu]" value="<?=stripSlashes($r[z_kefu])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
