<!DOCTYPE html >
<!--STATUS OK-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��������̨������½</title>
<link rel="shortcut icon" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/favicon.png" />
<link href="/themes/admin/style/css/index.css" rel="stylesheet"
	type="text/css">
</head>

<body>
	<!--warp-bg start-->
	<div class="warp-bg">
		<div class="logo warp">
			<a href="/index.php" target="_blank"><img
				src="/themes/ruizhict/style/css/img/logo.png" alt="������" /> </a>
			<p>
				<img src="./themes/admin/style/images/bar.gif" />
			</p>
		</div>

	</div>
	<!--warp-bg end-->

	<!--box-bg start-->
	<div class="box-bg">
		<div class="box warp">
			<form id="form1" name="form1" method="post"
				action="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=login" onsubmit="return check_login();">



		<table width="400" height="160px" border="0" cellpadding="0" cellspacing="0">
		    <tr>
            <td width="150" height="29" colspan="2" align="center"><? if (!isset($this->magic_vars['login_msg'])) $this->magic_vars['login_msg']=''; ;if (  $this->magic_vars['login_msg']!=""): ?><font color="#FF0000" size="2"><? if (!isset($this->magic_vars['login_msg'])) $this->magic_vars['login_msg'] = ''; echo $this->magic_vars['login_msg']; ?></font><? endif; ?></td>
            <td width="*"></td>
          </tr>
          <tr>
            <td width="120" height="35" align="center">�û�����</td>
            <td width="190"><input name="username" type="text" size="20" maxlength="20" tabindex="1" style="width:145px;"/></td>
            <td rowspan="2" align="left"><input width="47" height="51" type="image" src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/login_button.gif" /></td>
          </tr>
          <tr>
            <td width="120" height="35" align="center">��&nbsp;&nbsp;�룺</td>
            <td width="190"><input name="password" type="password" size="21" maxlength="20"  tabindex="2" style="width:145px;"/></td>
            </tr>
          <tr>
            <td width="120" height="35" align="center">��֤�룺</td>
            <td width="190"><input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/><img src="plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:right" /></td>
          </tr>
        </table>


<!-- 				<ul>
					<li><? if (!isset($this->magic_vars['login_msg'])) $this->magic_vars['login_msg']=''; ;if (  $this->magic_vars['login_msg']!=""): ?><font color="#FF0000" size="2"><? if (!isset($this->magic_vars['login_msg'])) $this->magic_vars['login_msg'] = ''; echo $this->magic_vars['login_msg']; ?></font><? endif; ?></li>
					<li><span>�ʺţ�</span><input type="text" class="zh"
						id="user_name" name="username" tabindex="1001"
						onfocus="addCss('user_name');" onblur="rm('user_name');" value="" />
					</li>
					<li><span class="word">���룺</span><input type="password"
						id="user_pass" class="key" name="password" value=""
						tabindex="1002" onfocus="addCss('user_pass');"
						onblur="rm('user_pass');" />
					</li>
					<li class="false"><span class="yzm">��֤�룺</span><input
						name="valicode" type="text" size="11" maxlength="4" tabindex="3" />&nbsp;<img
						src="plugins/index.php?q=imgcode" alt="���ˢ��"
						onClick="this.src='plugins/index.php?q=imgcode&t=' + Math.random();"
						align="absmiddle" style="cursor:pointer" /></li>
					<li class="haoy" id='but'><input type="submit" value=" "
						id=submitthis onmouseover="toggleClass();" onmouseout="toggle();" />
					</li>
				</ul>
 -->

			</form>
		</div>
	</div>
	<!--box-bg end-->
	<div class="bottom-bg">
		<p>
			Copyright <span>&copy;</span> 2013-
			<script type="text/javascript">document.write(new Date().getFullYear())</script>
			������
		</p>
	</div>
</body>
</html>