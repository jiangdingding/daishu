 <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<script>
	alert("�㻹û�е�¼�����ȵ�¼");
	location.href='/index.php?user&q=action/login';
</script>
<? endif; ?> <? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']!=1): ?>
<script>
	alert("�㻹ûͨ��ʵ����֤�������ܷ�����");
	location.href='/index.php?user&q=code/user/realname';
</script>
<? endif; ?> <? if (!isset($this->magic_vars['_G']['user_result']['credit'])) $this->magic_vars['_G']['user_result']['credit']=''; ;if (  $this->magic_vars['_G']['user_result']['credit'] < 30): ?>
<script>
alert("�������û��ֻ�δ��30�֣������ϴ�������֤");
location.href="/index.php?user&q=code/user/realname";
</script>

<? endif; ?> 

<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/borrow_list.css" rel="stylesheet" type="text/css" />

<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($_REQUEST['article_id'])) $_REQUEST['article_id']=''; ;if (  $_REQUEST['type']=="" &&  $_REQUEST['article_id']==""): ?>

<div class="clearfix index-middle" id="clearfix_index-middle" style="margin: 20px auto 0;">
	
  	<div style="padding-left:130px;">
  	<div><span>��ѡ�񻹿ʽ��</span></div>
  	
	<div class="borrow_box" >
		<div>
			<strong>�������½��</strong>
		</div>
		<div>���ȶϢ�����м���</div>
		<div style="padding-top:40px;text-align:center;">
			<a href="/publish/index.html?type=month"><img
				src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/borrow_yue.jpg" align="" />
			</a>
		</div>
	</div>

	<div class="borrow_box">
		<div>
			<strong>�����������</strong>
		</div>
		<div>���ȶϢ�����м���</div>
		<div style="padding-top:40px;text-align:center;">
			<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/borrow_ji.jpg" align="" />
		</div>
	</div>

	<div class="borrow_box">
		<div>
			<strong>�����������</strong>
		</div>
		<div>���ȶϢ�����м���</div>
		<div style="padding-top:40px;text-align:center;">
			<a href="/publish/index.html?type=vouch"><img
				src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/borrow_danbao.jpg" align="" />
			</a>
		</div>
	</div>
	</div>

</div>
<? else: ?> <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="vouch"): ?>
<!--
	<? if (!isset($this->magic_vars['_G']['user_result']['borrow_vouch'])) $this->magic_vars['_G']['user_result']['borrow_vouch']=''; ;if (  $this->magic_vars['_G']['user_result']['borrow_vouch']==0): ?>
	<script>
		alert("��û��Ȩ�޷������꣬����ͷ���ϵ");
		location.href='/borrow/index.html';
	</script>
	<? endif; ?>
	-->
<? endif; ?> <? $data = array('article_id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id'],'id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetOnes($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
<!--����Ŀ ��ʼ-->

	<div class="main-part box-shadow-white" id="page_wraper" style="margin-top:15px;">
		
		<div class="wrap950 header_site_sub" >
			<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $_REQUEST['type']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?> <font
				color="#FF0000">�����ڽ���ǵ����꣬�����꽫�����е�����ȵ��û����е������ȵ�����������Զ������Ͷ��</font>
			 <? else: ?> <? endif; ?>
		</div>
		<!--����Ŀ ����-->
		<form name="form1" method="post"
			action="/index.php?user&q=code/borrow/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id']=''; ;if (  $this->magic_vars['var']['user_id']==""): ?>add<? else: ?>update<? endif; ?>"  enctype="multipart/form-data"
			onsubmit="return check_form();">
			<!--�����Ϣ ��ʼ-->
			<div class="wrap950 list_1">
				<div class="block-title">�����Ϣ</div>
				<div class="content">
					<div class="module_border">
						<div class="w">�����Ϣ��</div>
						<div class="c"><? $result = $this->magic_vars['_G']['_linkage']['borrow_use']; echo "<select name='use' id=use >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['use']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
						<div class="sco">˵�����ɹ���ľ�����;��</div>
					</div>

					<div class="module_border">
						<div class="w">������ޣ�</div>
						<div class="c"><? $result = $this->magic_vars['_G']['_linkage']['borrow_time_limit']; echo "<select name='time_limit' id=time_limit >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['time_limit']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
						<div class="sco">���ɹ���,�����Լ����µ�ʱ����������</div>
					</div>

					<div class="module_border">
						<div class="w">���ʽ��</div>
						<div class="c"><? $result = $this->magic_vars['_G']['_linkage']['borrow_style']; echo "<select name='style' id=style >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['style']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
						<div class="sco">���·��ڻ�����ָ�����߽��ɹ���ÿ�»���Ϣ��</div>
					</div>

					<div class="module_border">
						<div class="w">����ܽ�</div>
						<div class="c">
							<input type="text" name="account" id="account"
								value="<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>"
								onkeyup="value=value.replace(/[^0-9]/g,'')" />
						</div>
						<div class="sco">�����Ӧ��500Ԫ��50,000Ԫ֮�䡣���ױ��־�Ϊ����ҡ����ɹ���,
							���2����
							,��ȡ��ǰ�����<? if (!isset($this->magic_vars['_G']['system']['con_borrow_fee'])) $this->magic_vars['_G']['system']['con_borrow_fee'] = ''; echo $this->magic_vars['_G']['system']['con_borrow_fee']*100; ?>%�Ĺ����,������������ϵ�ÿ������0.2%�����,����10%��Ϊ��֤��,�����������,��վ�ⶳ10%�ı�֤��</div>
					</div>

					<div class="module_border">
						<div class="w">�����ʣ�</div>
						<div class="c">
							<input type="text" name="apr" value="<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>"
								onkeyup="value=value.replace(/[^0-9.]/g,'')" /> %
						</div>
						<div class="sco">1��6���£�������������������22.4%������23.24%������6���¡�12���½�����������������24.24%����25.24%
						</div>
					</div>

					<div class="module_border">
						<div class="w">���Ͷ���</div>
						<div class="c"><? $result = $this->magic_vars['_G']['_linkage']['borrow_lowest_account']; echo "<select name='lowest_account' id=lowest_account >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['lowest_account']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
						</div>
						<div class="sco">����Ͷ���߶�һ�������Ͷ���ܶ������</div>
					</div>

					<div class="module_border">
						<div class="w">���Ͷ���ܶ</div>
						<div class="c"><? $result = $this->magic_vars['_G']['_linkage']['borrow_most_account']; echo "<select name='most_account' id=most_account >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['most_account']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
						<div class="sco">����Ͷ���߶�һ�������Ͷ���ܶ������</div>
					</div>

					<div class="module_border">
						<div class="w">��Чʱ�䣺</div>
						<div class="c"><? $result = $this->magic_vars['_G']['_linkage']['borrow_valid_time']; echo "<select name='valid_time' id=valid_time >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['valid_time']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
						<div class="sco">���ô˴ν�����ʵ����������ʽ��ȴﵽ100%��ֱ�ӽ�����վ�ĸ���</div>
					</div>

				</div>
				<div class="foot"></div>
			</div>
			<!--�����Ϣ ����-->


			<!--Ͷ�꽱�� ��ʼ-->
			<div class="wrap950 list_1">
				<div class="block-title">Ͷ�꽱��</div>
				<div class="content">
					<div class="module_border">
						<div class="w">
							<input type="radio" name="award" id="award" value="0"
								<? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==0 ||  $this->magic_vars['var']['award']== ""): ?> checked="checked"
								<? endif; ?> onclick="change_j(0)">�����ý���
						</div>
						<div class="c"></div>
						<div class="sco">����������˽��������ᶳ�����ʻ�����Ӧ���˻������Ҫ���ý�������ȷ�������ʻ����㹻
							���˻���</div>
					</div>

					<div class="module_border">
						<div class="w">
							<input type="radio" name="award" id="award" value="1"
								<? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1): ?> checked="checked"
								<? endif; ?> onclick="change_j(1)" />���̶�����̯������
						</div>
						<div class="c">
							<input type="text" name="part_account"
								value="<? if (!isset($this->magic_vars['var']['part_account'])) $this->magic_vars['var']['part_account'] = ''; echo $this->magic_vars['var']['part_account']; ?>" size="5" <? if (!isset($this->magic_vars['var']['part_account'])) $this->magic_vars['var']['part_account']=''; ;if (  $this->magic_vars['var']['part_account']==""): ?>disabled="disabled" <? endif; ?>/>Ԫ
						</div>
						<div class="sco">���ܵ���5Ԫ,���ܸ����ܱ�Ľ���2%�����뱣������Ԫ��Ϊ��λ���������ñ��α��Ҫ����������Ͷ���û����ܽ�
						</div>
					</div>

					<div class="module_border">
						<div class="w">
							<input type="radio" name="award" id="award" value="2"
								<? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==2): ?> checked="checked"
								<? endif; ?> onclick="change_j(2)" />��Ͷ�������������
						</div>
						<div class="c">
							<input type="text" name="funds" value="<? if (!isset($this->magic_vars['var']['funds'])) $this->magic_vars['var']['funds'] = ''; echo $this->magic_vars['var']['funds']; ?>" size="5"
								<? if (!isset($this->magic_vars['var']['funds'])) $this->magic_vars['var']['funds']=''; ;if (  $this->magic_vars['var']['funds']== ""): ?>disabled="disabled" <? endif; ?>/>%
						</div>
						<div class="sco">��Χ��0.1%~6% ���������ñ��α��Ҫ����������Ͷ���û��Ľ���������</div>
					</div>

					<div class="module_border">
						<div class="w">
							<input type="checkbox" name="is_false" value="1"
								<? if (!isset($this->magic_vars['var']['is_false'])) $this->magic_vars['var']['is_false']=''; ;if (  $this->magic_vars['var']['is_false']==1): ?> checked="checked"
								<? endif; ?>  <? if (!isset($this->magic_vars['var']['is_false'])) $this->magic_vars['var']['is_false']=''; ;if (  $this->magic_vars['var']['is_false']!=1): ?>disabled= "disabled"<? endif; ?>/>���ʧ��ʱҲͬ��������
						</div>
						<div class="c"></div>
						<div class="sco">�������ѡ�˴�ѡ�����δ�������ʧ��ʱͬ���ά����Ͷ���û������û�й�ѡ�����ʧ��ʱ��ѽ������ⶳ���˻���
						</div>
					</div>

				</div>
				<div class="foot"></div>
			</div>
			<!--Ͷ�꽱�� ����-->

			<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $_REQUEST['type']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>

			<!--�������� ��ʼ-->
			<div class="wrap950 list_1">
				<div class="block-title">��������</div>
				<div class="content">
					<div class="module_border">
						<div class="w">����������</div>
						<div class="c">
							<input name="vouch_award" type="text" value="<? if (!isset($this->magic_vars['var']['vouch_award'])) $this->magic_vars['var']['vouch_award'] = ''; echo $this->magic_vars['var']['vouch_award']; ?>"
								size="6" />%
						</div>
						<div class="sco">��������������Ҫ���İٷֱȸ������ˣ������100��������3%�������˽��50������50*3%=1.5</div>
					</div>
					<div class="module_border">
						<div class="w">ָ�������ˣ�</div>
						<div class="c">
							<input name="vouch_user" type="text" value="<? if (!isset($this->magic_vars['var']['vouch_user'])) $this->magic_vars['var']['vouch_user'] = ''; echo $this->magic_vars['var']['vouch_user']; ?>" /><input
								name="is_vouch" type="hidden" value="1" />
						</div>
						<div class="sco">ָ���������������|������Ϊ�ձ�ʾ�����˶����Ե���</div>
					</div>
				</div>
				<div class="foot"></div>
			</div>
			<!--�������� ����-->
			<? endif; ?>

			<!--�ʻ���Ϣ�������� ��ʼ-->
			<div class="wrap950 list_1">
				<div class="block-title">�ʻ���Ϣ��������</div>
				<div class="content">
					<div class="module_border">
						<div class="w">
							�����ҵ��ʻ��ʽ����<input type="checkbox" name="open_account" value="1"
								checked="checked" disabled="disabled" />
						</div>
						<div class="sco">��������ϴ�ѡ�����ʵʱ�������ʻ��ģ��˻��ܶ�����������ܶ</div>
					</div>

					<div class="module_border">
						<div class="w">
							�����ҵĽ���ʽ����<input type="checkbox" name="open_borrow" value="1"
								checked="checked" disabled="disabled" />
						</div>
						<div class="sco">��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�����ܶ�ѻ����ܶδ�����ܶ�ٻ��ܶ�����ܶ</div>
					</div>

					<div class="module_border">
						<div class="w">
							�����ҵ�Ͷ���ʽ����<input type="checkbox" name="open_tender" value="1"
								<? if (!isset($this->magic_vars['var']['open_tender'])) $this->magic_vars['var']['open_tender']=''; ;if (  $this->magic_vars['var']['open_tender']==1): ?> checked="checked" <? endif; ?>/>
						</div>
						<div class="sco">��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�Ͷ���ܶ���ջ��ܶ���ջ��ܶ</div>
					</div>

					<div class="module_border">
						<div class="w">
							�����ҵ����ö����� <input type="checkbox" name="open_credit" value="1"
								checked="checked" disabled="disabled" />
						</div>

						<div class="sco">��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�������ö�ȡ�������ö�ȡ�</div>
					</div>

				</div>
				<div class="foot"></div>
			</div>
			<!--�ʻ���Ϣ�������� ����-->

			<!--�ʻ���Ϣ�������� ��ʼ-->
			<div class="wrap950 list_1">
				<div class="block-title">Ͷ�����ϸ˵��</div>
				<div class="content">
					<div class="module_border">
						<div class="w">���⣺</div>
						<div>
							<input type="text" name="name" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" size="50" />
						</div>
						<div class="sco">��д���ı��⣬д��һ���ܽ�ļ���Ҳ��һ��</div>
					</div>

					<div class="module_border">
						<div class="w">��Ϣ��</div>
						<div>
							<textarea name="content" id="content" style="display:none;"><? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content']=''; ;if (  $this->magic_vars['var']['content']!=""): ?><? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?><? else: ?><P>������飺 </P>
<P>&nbsp;</P>
<P></P>
<P>�ҵ�ÿ��������ϸ��</P>
<P>��������ÿ�����룺<FONT color=#ff6600>��0</FONT><BR>����������ż���룺<FONT
										color=#ff6600>��0</FONT><BR>���������������룺<FONT color=#ff6600>��0</FONT>
								</P>
<P>
									<FONT color=#ff6600></FONT><BR>&nbsp;</P>
<P>�ҵ�ÿ��֧����ϸ</P>
<P>������������,ס�ޣ�<FONT color=#ff6600>��0</FONT><BR>������������,������<FONT
										color=#ff6600>��0</FONT><BR>��������ʳƷ��<FONT color=#ff6600>��0</FONT><BR>���������绰���ֻ������磺<FONT
										color=#ff6600>��0</FONT><BR>������������������<FONT color=#ff6600>��0</FONT>
								</P>
<P>
									<FONT color=#ff6600></FONT><BR>&nbsp;</P>
<P>�����ط���</P>
<P>����������������<FONT color=#ff6600>���д���</FONT><BR>������������ܶ<FONT
										color=#ff6600>��0</FONT>(�ѻ����ܶ�:<FONT color=#ff6600>��0</FONT>�������ܶ�:<FONT
										color=#ff6600>��0</FONT>)<BR>���������Ƿ��й����ڻ��<FONT
										color=#ff6600>��</FONT>(���ڴ���:<FONT color=#ff6600>0</FONT>��)</P>
<P>
									<BR>&nbsp;</P>
<P>վ�ڹ����û�����</P>
<P>����ϣ�</P><? endif; ?></textarea>
							<iframe
								src="/plugins/editor/sinaeditor/editor.htm?id=content&ReadCookie=0"
								frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No"
								width="640" height="460"></iframe>
						</div>
					</div>
				</div>
				<div class="foot"></div>
			</div>
			<!--�ʻ���Ϣ�������� ����-->
			<!--�ʻ���Ϣ�������� ��ʼ-->
			<div class="wrap950 list_1">
				<div class="content" align="center">
					<input type="hidden" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" name="id" /> <input
						name="valicode" type="text" size="11" maxlength="4" tabindex="3" />&nbsp;<img
						src="/plugins/index.php?q=imgcode" alt="���ˢ��"
						onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();"
						align="absmiddle" style="cursor:pointer" />  <input class="button_blue_small" type="submit" value="����ݸ�"
						name="submit" /><input class="button_blue_small" type="submit"
						value="ȷ���ύ" name="submit" />
				</div>
				<div class="foot"></div>
			</div>
		</form>
</div>
<? unset($_magic_vars);unset($data); ?>
<script>
<? $data = array('user_id'=>'0','var'=>'acc','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
	<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $_REQUEST['type']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>
	alert("��Ľ������Ϊ<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?>Ԫ,�㻹�ܽ�<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?>Ԫ");
	var max_account = <? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?>;
	<? else: ?>
	alert("��Ľ�����ö��Ϊ<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = ''; echo $this->magic_vars['acc']['credit']; ?>Ԫ,�㻹�ܽ�<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?>Ԫ");
	var max_account = <? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?>;
	<? endif; ?>
<? unset($_magic_vars);unset($data); ?>
var max_fax =<? if (!isset($this->magic_vars['_G']['system']['con_max_fee'])) $this->magic_vars['_G']['system']['con_max_fee'] = '';$_tmp = $this->magic_vars['_G']['system']['con_max_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"20");echo $_tmp;unset($_tmp); ?>;
var max_apr =<? if (!isset($this->magic_vars['_G']['system']['con_borrow_apr'])) $this->magic_vars['_G']['system']['con_borrow_apr'] = '';$_tmp = $this->magic_vars['_G']['system']['con_borrow_apr'];$_tmp = $this->magic_modifier("default",$_tmp,"22.18");echo $_tmp;unset($_tmp); ?>;



function check_form(){
	var frm = document.forms['form1'];
	 var account = frm.elements['account'].value;
	 var title = frm.elements['name'].value;
	 var style = frm.elements['style'].value;
	 var content = frm.elements['content'].value;
	 var time_limit = frm.elements['time_limit'].value;
	 var award = get_award_value();
	 var part_account = frm.elements['part_account'].value;
	 var funds = frm.elements['funds'].value;
	 var apr = frm.elements['apr'].value;
	 var valicode = frm.elements['valicode'].value;
	 var most_account = frm.elements['most_account'].value;
	 var use = frm.elements['most_account'].value;
	 var lowest_account = frm.elements['lowest_account'].value;
	
	 var errorMsg = '';
	  if (account.length == 0 ) {
		errorMsg += '- �ܽ���Ϊ��' + '\n';
	  }
	  if (account<500 || account>50000) {
		errorMsg += '- ������С��500�Ҳ��ܴ���50000' + '\n';
	  }
	  
	  if (account>max_account) {
		errorMsg += '- ������Ķ��Ϊ'+account+',��Ŀ��ö��Ϊ'+max_account+',�벻Ҫ�����˿��ö��\n';
	  }
	  if (apr.length == 0 ) {
		errorMsg += '- ���ʲ���Ϊ��' + '\n';
	  }
	  
	  if (time_limit >=1 && time_limit<=6 && apr>23.24) {
		errorMsg += '- 1��6���µ������ʲ��ܳ���23.24%' + '\n';
	  }else if (time_limit >6  && apr>25.24) {
		errorMsg += '- 6��12���µ������ʲ��ܳ���'+max_fax+'%' + '\n';
	  }
	  
	  if (apr<0 ||apr>max_apr) {
		errorMsg += '- ���ʲ��ܴ���'+max_apr+'%' + '\n';
	  }
	  
	  if (award==1 && (part_account=="" || part_account<5 || part_account>account*0.02)) {
		errorMsg += '- �̶�����̯�������ܵ���5Ԫ,���ܸ����ܱ�Ľ���2%' + '\n';
	  }
	  if (award==2 && (funds =="" || funds<0.1 || funds>6)) {
		errorMsg += '- Ͷ�����������0.1%~6% ' + '\n';
	  }
	  if (most_account!=0 && parseInt(most_account)<parseInt(lowest_account)){
		  errorMsg += '- Ͷ��������С����С���' + '\n';
	  }
	  if (title.length == 0 ) {
		errorMsg += '- ���ⲻ��Ϊ��' + '\n';
	  }
	  if (content.length == 0 ) {
		errorMsg += '- ���ݲ���Ϊ��' + '\n';
	  }
	  if (valicode.length == 0 ) {
		errorMsg += '- ��֤�벻��Ϊ��' + '\n';
	  }
	
	var awa = "";
			for(var i=0;i<form1.award.length;i++){   
			   if(form1.award[i].checked){
				 awa =  form1.award[i].value;
				}
			} 
	if(awa==1){
		if (part_account==""){
			errorMsg += '- �̶���̯������������Ϊ�� ' + '\n';
		}
	}
	if(awa==2){
		if (funds==""){
			errorMsg += '- Ͷ���������������Ϊ�� ' + '\n';
		}
	}
	
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }

}
function get_award_value()
{
    var form1 = document.forms['form1'];
    
    for (i=0; i<form1.award.length; i++)    {
        if (form1.award[i].checked)
        {
           return form1.award[i].value;
        }
    }
}
function change_j(type){
	var frm = document.forms['form1'];
	if (type==0){
		frm.elements['part_account'].disabled = "disabled";
		frm.elements['funds'].disabled = "disabled";
		frm.elements['is_false'].disabled = "disabled";
	}else if (type==1){
		frm.elements['part_account'].disabled = "";
		frm.elements['funds'].disabled = "disabled";
		frm.elements['is_false'].disabled = "";
	}else if (type==2){
		frm.elements['part_account'].disabled = "disabled";
		frm.elements['funds'].disabled = "";
		frm.elements['is_false'].disabled = "";
	}
}	
</script>

 <? endif; ?> <? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
