<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<form name="login" method="post" action="">
	<div class="con_box_t10">
	
		<div class="login_bor">
			<div class="logintitle">�����������ƽ̨</div>
			<div style="border: 2px solid #CED7DE;">
			<div style="width:340px;margin-top:50px;">
				<table width="100%" border="0" cellpadding="0" cellspacing="0"
					class="tab_log">
					<tr>
						<td class="td1">�˺ţ�</td>

						<td class="td2"> <input class="lo_text" type="text"
							id="keywords" name="keywords" maxlength="64" value="�û���/������е�¼"
							onFocus="if(value==defaultValue){value='';this.style.color='#000'}"
							onBlur="if(!value){value=defaultValue;this.style.color='#999'}"
							style="color:#999"></td>
					</tr>
					<tr>
						<td class="td1">�� �룺</td>
						<td class="td2"><input class="lo_text" type="password"
							name="password" id="password" maxlength="16" /></td>
					</tr>

					<tr>
						<td class="td1">��֤�룺</td>
						<td class="td2"><input class="lo_text" name="valicode"
							type="text" size="8" maxlength="4" style="  width:96px;height:25px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
							src="/plugins/index.php?q=imgcode" alt="���ˢ��"
							onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();"
							align="absmiddle" style="cursor:pointer" /></td>
					</tr>
					<tr>
						<td class="td1">Cookie��</td>
						<td class="td2" ><select name="cookietime"
							class="baochunshijian">
								<option value="15">����15����</option>
								<option value="30">����30����</option>
								<option value="60" selected="selected">����1Сʱ</option>
								<option value="180">����3Сʱ</option>
								<option value="360">����6Сʱ</option>
								<option value="1440">����1��</option>
								<option value="4320">����3��</option>
								<option value="7200">����5��</option>

						</select>
						</td>

					</tr>
					<tr>
						<td style="margin-left:17px;margin-top:5px;"><input
							type="submit" class="button_blue" align="absmiddle"  value="��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¼"/> <span>&nbsp;&nbsp;&nbsp;
								<a href="/?user&q=action/getpwd" style="color:#026CCF">�������룿</a>
						</span></td>
					</tr>
				</table>
			</div>
			<div class="zhuce">
				<a href="/?user&q=action/reg">û���ʺţ�����ע��!</a>
			</div>
			</div>
		</div>

		<div style="clear:both"></div>
	</div>
</form>
<div style="width=1368px;height:70px;margin:0;margin-bottom:0px;background-color:#F2F6FA;">
<div class="diannaobubiao"></div>
</div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
