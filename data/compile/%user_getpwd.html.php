<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/register.css" />
<!--�û�ע�� ��ʼ-->
<div class="user_action_main topborder" id="mailverify">

	<div class="zcbigtitle">

		<strong>ȡ������</strong>

	</div>

	<!--�û�ע����� ��ʼ-->
	<div class="registercontent1">
		<!--�û�ע�� ��ʼ-->
		<div class="user_action_reg_left">
		<div class="user_action_getpwd_top"></div>
		<div class="user_action_reg_submit" style="padding-top:0;padding-left:20px;">
			<form action="" method="post" name="formUser" >
			<div class="user_action_reg_form">
				<p><? if (!isset($this->magic_vars['_U']['getpwd_msg'])) $this->magic_vars['_U']['getpwd_msg']=''; ;if (  $this->magic_vars['_U']['getpwd_msg']==""): ?>����д������������������������<? else: ?><font color="#FF0000"><? if (!isset($this->magic_vars['_U']['getpwd_msg'])) $this->magic_vars['_U']['getpwd_msg'] = ''; echo $this->magic_vars['_U']['getpwd_msg']; ?></font><? endif; ?></p>
				<p>
				  �������䣺
				  <input  maxLength=32  class="user_aciton_input1" name=email id=email>
				</p>
				<p>
				  ��&nbsp;&nbsp;��&nbsp;&nbsp;����
				  <input maxLength=15  class="user_aciton_input1" name=username id=username h >
				</p>
				<p>
				  ��&nbsp;&nbsp;֤&nbsp;&nbsp;�룺
				  <span><input maxLength=4  class="user_aciton_input" name=valicode id=valicode align="top"></span>
				   <span >
				   <img src="/plugins/index.php?q=imgcode&height=23" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&height=23&t=' + Math.random();"  />
				   </span>
				</p>
				<p  align="left">
				<span> <input type="submit" class="button_blue"  value="�ύ"/></span>
				</p>	
			</div>
		
		</div>
		<div class="user_action_reg_foot"></div>
	</div>
	
	<!--�û�ע���ұ� ��ʼ-->
	<? $this->magic_include(array('file' => "user_reg_right.html", 'vars' => array()));?>
	<!--�û�ע���ұ� ����-->
</div>
</div>
</div>
<!--�û�ע�� ����-->


<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>