<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/user.js"></script>
<div class="wrap950 t10" id="registerpage">
	<div class="zhuce_bor1">
		<div class="zcbigtitle">

			<strong>���ע��</strong>

		</div>
		<div class="regimg" style="margin-bottom: 20px;">
			<img class="img" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/zc_step1.png" />
		</div>
		<div class="registercontent1">
			<div class="leftregister1">
				<form action="" method="post" name="formUser"
					onsubmit="return userReg();">
					<table  border="0" align="center" cellpadding="0"
						cellspacing="0" class="zc_tab">
						<tr>
							<td class="td1" style="text-align: right;width:80px;">���䣺&nbsp;&nbsp;&nbsp;</td>

							<td class="td2"><div style="float:left;"><input maxLength=32
								onblur="checkEmail(this.value);" class="in_text" name=email
								id=email></div>
								<div style="float:left; margin-left:5px;margin-top:5px;" class=user_action_error id=email_notice>
									<font color="#999999">�뾡����ʹ��QQ����(��֤��)</font>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">�û�����&nbsp;&nbsp;&nbsp;</td>
							<td class="td2"><div style="float:left;"><input maxLength=15
								onblur="checkUsername(this.value);" class="in_text"
								name=username id=username></div>
								<div style="float:left; margin-left:5px;margin-top:5px;width:200px;" class=user_action_error id=username_notice>
									<font color="#999999">����������վ���û���</font></div>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">���룺&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle"><div style="float:left;"><input class="in_text"
								onblur="checkPassword(this.value);" type=password maxLength=16
								name=password id=password></div>
								<div style="float:left; margin-left:5px;margin-top:5px;"class=user_action_error id=password_notice>
									<font color="#999999">������6��16λ����</font></div>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">ȷ�����룺&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle"><div style="float:left;"><input class="in_text"
								onblur="checkConformPassword(this.value);" type=password
								maxLength=16 name=confirm_password id=conform_password></div>
								<div style="float:left; margin-left:5px;margin-top:5px;" class=user_action_error id=conform_password_notice>
									<font color="#999999">���ظ��������������</font>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">��ʵ������&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle"><div style="float:left;"><input class="in_text"
								onblur="checkRealname(this.value);" type=text name="realname"
								id="realname"></div>
								<div style="float:left; margin-left:5px;margin-top:5px;" class=user_action_error id=realname_notice>
									<font color="#999999">����д�����ʵ����</font> <input
										name="invite_userid" type="hidden"
										value="<? if (!isset($_SESSION['reginvite_user_id'])) $_SESSION['reginvite_user_id'] = ''; echo $_SESSION['reginvite_user_id']; ?>" /> <input
										name="type_id" type="hidden" value="2" /></div>
							</td>
						</tr>
						
						<tr>
						<td class="td1" style="text-align: right;width:80px;">��֤�룺&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle">
								<!-- ��֤�� -->
								<input type="text" id="valicode" size="10" /> &nbsp;&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
							</td>
						</tr>
						
						
						
						
						<tr style="width:380px;">
							
							<td colspan="2" align="left" valign="middle" class="tdlast">
								<div class="yinsi">
									<b>*</b> ��������������˽��������д����Ϣ��Ϊ�����ڱ�վ�ķ��� ʹ�ã����ǲ���й¶�����κ���Ϣ���κε�������
								</div></td>
						</tr>
						<!--  <tr>
							<td><br /> <input name="Submit" type="submit" value="��һ��"
								name="Submit" id="submit" class="reg_button"
								style="cursor: pointer" align="absmiddle" disabled="disabled" />
								</div>
							</td>
						</tr>-->
						
						<tr>
							<td colspan="2" align="center" valign="middle"><br />
							<input name="Submit" type="submit" value="��һ��" width="170"
								height="29" name="Submit" id="submit" class="reg_button"
								style="cursor: pointer" align="absmiddle" disabled="disabled" />
							</div>
							</td>
						</tr>
						
						
					</table>
				</form>
			</div>
			<? $this->magic_include(array('file' => "user_reg_right.html", 'vars' => array()));?>
			<!-- 
			<div class="rightregistercontent">
				<div class="content" style="float:right; width:200px;">
					<div class="user_action_button" style=" float:right">
						<ul>
							<div>
								<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_zhuan.gif" />
							</div>
							<span><strong><a href="/invest/index.html">��Ҫ����</a>
							</strong><br /> </span>
						</ul>
						<br />�������ƣ����ż����������ơ����ձ�����Ϣ������10%���ϵ�Ͷ�����档

						<ul>
							<br />
							<div>
								<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_jie.gif" />
							</div>
							<span><strong><a href="/borrow/index.html">��Ҫ���</a>
							</strong><br /> </span>
						</ul>
						<br />������ƣ���ݡ��ͷ��ʡ�����ȫ������ǰ0���á�ȫ�����������顣
					</div>
					<div style="clear:both">
						<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/adv_2.gif" />
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>


<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>