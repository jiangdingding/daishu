<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<!--�û�ע�� ��ʼ-->
<div class="user_action_main topborder" id="user_action_mainavatar">
	<div class="zcbigtitle">

		<strong>���ע��</strong>

	</div>
	<div class="regimg">
		<img class="img" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/zc_step3.png" />
	</div>
	<!--�û�ע����� ��ʼ-->

	<div class="registercontent1">
		<!--�û�ע����� ��ʼ-->
		<div class="user_action_reg_left">
			<!--�û�ע�� ��ʼ-->
			<div class="user_action_reg_top"></div>
			<div class="user_action_reg_submit">
				<div class="user_action_reg_a3"></div>
				<table border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td height="45" align="center" valign="middle"><br />
							 <? 
 require_once(ROOT_PATH.'plugins/avatar/configs.php');
require_once(ROOT_PATH.'plugins/avatar/avatar.class.php');
$objAvatar = new Avatar();
echo $objAvatar->uc_avatar($this->magic_vars['_G']['user_id'], 'virtual');
?></td>
					</tr>
				</table>
				<a style="position: relative;left:50px; font-size:14px;"
					href="/index.php?user&q=action/reg_avatar&jump=true">��������ϴ�ͷ��������������û�����</a>

			</div>
			<div class="user_action_reg_foot"></div>
		</div>
		<!--�û�ע���ұ� ��ʼ-->
		<? $this->magic_include(array('file' => "user_reg_right.html", 'vars' => array()));?>
		<!--�û�ע���ұ� ����-->
	</div>
</div>
<!--�û�ע�� ����-->


<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>
