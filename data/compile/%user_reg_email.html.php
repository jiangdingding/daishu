<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/register.css" />
<!--�û�ע�� ��ʼ-->
<div class="user_action_main topborder" id="mailverify">
	<div class="zcbigtitle">

		<strong>���ע��</strong>

	</div>
	<div class="regimg">
		<img class="img" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/zc_step2.png" />
	</div>
	<!--�û�ע����� ��ʼ-->

	<div class="registercontent1">
		<div class="user_action_reg_left">
			<!--�û�ע�� ��ʼ-->
			<div class="user_action_reg_top"></div>
			<div class="user_action_reg_submit">
				<div class="user_action_reg_a1"></div>
				<div class="user_action_reg_form" style="width:100%;text-align:center;">
					<strong><? if (!isset($this->magic_vars['_U']['sendemail'])) $this->magic_vars['_U']['sendemail'] = ''; echo $this->magic_vars['_U']['sendemail']; ?></strong> ���յ�һ����֤�ʼ�������ա� �ɹ���֤����Ϳ���ʹ��վ�ڹ��ܡ�<br />
					<br /><br /> <a href="<? if (!isset($this->magic_vars['_U']['emailurl'])) $this->magic_vars['_U']['emailurl'] = ''; echo $this->magic_vars['_U']['emailurl']; ?>" target="_blank"><img
						src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/renzheng.png"
						 />
					</a><br />
					<br /> ���û���յ����䣬������ <a href="javascript:void(0);"
						onclick='tipsWindown("�ʼ�����","url:get?index.php?user&q=action/reg_send_email",300,100,"true","","true","text")'><font
						color="#FF0000">���¼���</font>
					</a>������䡣<br /> </br>
      				<a href="/index.php?user&q=action/reg_email&jump=true">���������֤��������������ȥ</a>     	
				</div>
			</div>
			<div class="user_action_reg_foot"></div>
		</div>
		<? $this->magic_include(array('file' => "user_reg_right.html", 'vars' => array()));?>
	</div>
</div>
<!--�û�ע�� ����-->

<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>

