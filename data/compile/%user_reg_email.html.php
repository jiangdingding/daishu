<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/register.css" />
<!--用户注册 开始-->
<div class="user_action_main topborder" id="mailverify">
	<div class="zcbigtitle">

		<strong>免费注册</strong>

	</div>
	<div class="regimg">
		<img class="img" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/zc_step2.png" />
	</div>
	<!--用户注册左边 开始-->

	<div class="registercontent1">
		<div class="user_action_reg_left">
			<!--用户注册 开始-->
			<div class="user_action_reg_top"></div>
			<div class="user_action_reg_submit">
				<div class="user_action_reg_a1"></div>
				<div class="user_action_reg_form" style="width:100%;text-align:center;">
					<strong><? if (!isset($this->magic_vars['_U']['sendemail'])) $this->magic_vars['_U']['sendemail'] = ''; echo $this->magic_vars['_U']['sendemail']; ?></strong> 将收到一封认证邮件，请查收。 成功认证后，你就可以使用站内功能。<br />
					<br /><br /> <a href="<? if (!isset($this->magic_vars['_U']['emailurl'])) $this->magic_vars['_U']['emailurl'] = ''; echo $this->magic_vars['_U']['emailurl']; ?>" target="_blank"><img
						src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/renzheng.png"
						 />
					</a><br />
					<br /> 如果没有收到邮箱，请点击此 <a href="javascript:void(0);"
						onclick='tipsWindown("邮件激活","url:get?index.php?user&q=action/reg_send_email",300,100,"true","","true","text")'><font
						color="#FF0000">重新激活</font>
					</a>你的邮箱。<br /> </br>
      				<a href="/index.php?user&q=action/reg_email&jump=true">如果不想认证，请点击这里跳过去</a>     	
				</div>
			</div>
			<div class="user_action_reg_foot"></div>
		</div>
		<? $this->magic_include(array('file' => "user_reg_right.html", 'vars' => array()));?>
	</div>
</div>
<!--用户注册 结束-->

<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>

