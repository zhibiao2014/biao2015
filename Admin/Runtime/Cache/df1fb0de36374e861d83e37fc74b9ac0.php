<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.form.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() { 
  $('#form1').ajaxForm({
	  success:function(data){
		  var s = "";
		  if(data.status == 1){
			 s = "<strong><font color='green'>"+data.info+"</font></strong>";
			 }else{
				 s = "<strong><font color='red'>"+data.info+"</font></strong>";
				 }
		  $('#result').html(s).show();
		  setTimeout(function(){$('#result').html('').hide();},3000);
		  },
	  dataType:'json'
	  }); 
}); 
</script>
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="99%" border="0" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6">
  <tr> 
    <td height="19" colspan="6" background="__PUBLIC__/admin/images/tbg.gif" bgcolor="#E7E7E7">
    	<table width="96%" border="0" cellspacing="1" cellpadding="1">
        <tr> 
          <td width="30%" style="padding-left:10px;"><strong>权限设定</strong><font color="red">(请按项目、模块、操作设定权限)</font></td>
          <td width="70%" align="right">
          <b><u>项目授权</u></b> | 
          	<b><a href="__URL__/module/rid/<?php echo ($rid); ?>"><u>模块授权</u></a></b> |
            <b><a href="__URL__/operating/rid/<?php echo ($rid); ?>"><u>操作授权</u></a></b>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <form method="post" id="form1" name="form1" action="__URL__/setProject">
 <input type="hidden" name="ajax" value="1" />
  <tr bgcolor="#F7F8ED"> 
    <td height="24" colspan="6" >
			当前角色：
            <select name='userrole' onchange="location.href = '__URL__/project/rid/'+this.options[this.selectedIndex].value;">
                
                <?php echo ($rolelist); ?>
			    </select>
            </td>
  </tr>
  <tr bgcolor="#FBFCE2" align="center"> 
    <td height="24" width="5%">选择</td>
    <td width="15%">显示名</td>
    <td width="5%">选择</td>
    <td width="15%">显示名</td>
    <td width="5%">选择</td>
    <td width="15%">显示名</td>
  </tr>
  
  <?php echo ($nodelist); ?>

    <tr bgcolor="#F7F8ED"> 
      <td height="24" colspan="6">
      	<a href="javascript:selOrNoSel('tables[]')" class="coolbg">全选/反选</a>
        &nbsp; 
        <input type="submit" name="submit" value=" 提交 " class="coolbg np" />
        <span id="result" style="padding-left:10px;display:none;"></span>
      </td>
  </tr>
   </form>

</table>
</body>
</html>