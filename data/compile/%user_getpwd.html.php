<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/register.css" />
<!--用户注册 开始-->
<div class="user_action_main topborder" id="mailverify">

	<div class="zcbigtitle">

		<strong>取回密码</strong>

	</div>

	<!--用户注册左边 开始-->
	<div class="registercontent1">
		<!--用户注册 开始-->
		<div class="user_action_reg_left">
		<div class="user_action_getpwd_top"></div>
		<div class="user_action_reg_submit" style="padding-top:0;padding-left:20px;">
			<form action="" method="post" name="formUser" >
			<div class="user_action_reg_form">
				<p><? if (!isset($this->magic_vars['_U']['getpwd_msg'])) $this->magic_vars['_U']['getpwd_msg']=''; ;if (  $this->magic_vars['_U']['getpwd_msg']==""): ?>请填写你的邮箱和密码进行密码的重置<? else: ?><font color="#FF0000"><? if (!isset($this->magic_vars['_U']['getpwd_msg'])) $this->magic_vars['_U']['getpwd_msg'] = ''; echo $this->magic_vars['_U']['getpwd_msg']; ?></font><? endif; ?></p>
				<p>
				  电子邮箱：
				  <input  maxLength=32  class="user_aciton_input1" name=email id=email>
				</p>
				<p>
				  用&nbsp;&nbsp;户&nbsp;&nbsp;名：
				  <input maxLength=15  class="user_aciton_input1" name=username id=username h >
				</p>
				<p>
				  验&nbsp;&nbsp;证&nbsp;&nbsp;码：
				  <span><input maxLength=4  class="user_aciton_input" name=valicode id=valicode align="top"></span>
				   <span >
				   <img src="/plugins/index.php?q=imgcode&height=23" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&height=23&t=' + Math.random();"  />
				   </span>
				</p>
				<p  align="left">
				<span> <input type="submit" class="button_blue"  value="提交"/></span>
				</p>	
			</div>
		
		</div>
		<div class="user_action_reg_foot"></div>
	</div>
	
	<!--用户注册右边 开始-->
	<? $this->magic_include(array('file' => "user_reg_right.html", 'vars' => array()));?>
	<!--用户注册右边 结束-->
</div>
</div>
</div>
<!--用户注册 结束-->


<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>