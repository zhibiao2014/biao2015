<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#isadmin").change(function(){
			if($(this).val() == "1")
			{
				$("#roletr").hide();
				$("#emailtr").attr("bgcolor","#FFFFFF");
			}
			else if($(this).val() == "0")
			{
				$("#roletr").show();
				$("#emailtr").attr("bgcolor","#F9FAF3");
			}
		});
	});
</script>
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" align="center" cellspacing="1" cellpadding="1" bgcolor="#D6D6D6">
  <tr>
    <td height="19" background="__PUBLIC__/admin/images/tbg.gif" bgcolor="#E7E7E7"> 
      <table width="96%" border="0" cellspacing="0" cellpadding="1">
        <tr> 
          <td width="24%" style="padding-left:10px;"><b><strong>新增帐号</strong></b> </td>
          <td width="76%" align="right"><strong><a href="__GROUP__/Users/index"><u>管理帐号</u></a></strong></td>
        </tr>
      </table></td>
</tr>
<tr>
    <td height="215" align="center" valign="top" bgcolor="#FFFFFF">
	<form name="form1" action="__URL__/addsave" method="post">
  <table width="100%" border="0" cellspacing="1" cellpadding="1">
          <tr> 
            <td width="16%" height="30" align="center">用户登录ID：</td>
            <td width="84%"  style="text-align:left;"><input name="username" type="text" id="userid" size="16" style="width:200px" /></td>
          </tr>
         
          <tr bgcolor="#F9FAF3"> 
            <td height="30" align="center">用户密码：</td>
            <td style="text-align:left;"><input name="pwd" type="password" id="pwd" size="16" style="width:200px" /> </td>
          </tr>
          <tr > 
            <td height="30" align="center">确认密码：</td>
            <td style="text-align:left;"><input name="confirmpwd" type="password" id="confirmpwd" size="16" style="width:200px" /> </td>
          </tr>
          <tr bgcolor="#F9FAF3"> 
            <td height="30" align="center" >是否是管理员：</td>
            <td style="text-align:left;">
			    <select name='isadmin' style='width:50px' id="isadmin">
                <option value='0' selected="selected">否</option>
                <option value='1' >是</option>
			  </select>
              (注:管理员是系统默认角色，选择"是"后不需要指定用户角色)
            </td>
          </tr>
          <tr id="roletr" > 
            <td height="30" align="center">角色：</td>
            <td style="text-align:left;">
			    <select name='userrole' style='width:200px'>
                <option value='0' selected="selected">选择用户角色</option>
                <?php echo ($rolelist); ?>
			    </select>
			    【<a href='__GROUP__/Role/index'><u>用户角色设定</u></a>】
            </td>
          </tr>
          <tr id="emailtr" bgcolor="#F9FAF3"> 
            <td height="30" align="center" >Email：</td>
            <td style="text-align:left;"><input name="email" type="text" id="email" size="16" style="width:200px" /> &nbsp;</td>
          </tr>
          <tr> 
            <td height="30">&nbsp;</td>
            <td><input type="submit" name="Submit" value=" 提交 " class="coolbg np" />&nbsp;<input type="button" name="back" onclick="location='__GROUP__/Users/index'" value=" 返回 " class="coolbg np" /></td>
          </tr>
        </table>
      </form>
	  </td>
</tr>
</table>
</body>
</html>