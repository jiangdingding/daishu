<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>

<!-- ������� -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/user_index.css" />

<!--�û����ĵ�����Ŀ ��ʼ-->
<div class="container clearfix" style="margin-top: 15px;">

	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left"><? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?></div>
	<!--��ߵĵ��� ����-->

	<!--�ұߵ����� ��ʼ-->
	<div class="user_right ">
		<div class="user_right_l ">
			<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==0): ?>
			<div class="user_help" id="user_amange"  style="margin:5px;">
				<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if ( $this->magic_vars['_G']['user_result']['real_status']==0): ?><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>�����㣺�㻹û�н���ʵ����֤��<a
					href="/index.php?user&q=code/user/realname"><strong>���Ƚ���ʵ����֤</strong>
				</a><? endif; ?>
				<span style="float:right;padding-right:5px;"><a href="#" onclick='$("#user_amange").hide();'><font
						>�ر�</font> </a> </span>
			</div>
			<? endif; ?>

			<!-- �û���� -->
			<div class="user_right_lmain">
				<div class="user_right_img">
					<img src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" height="90" class="picborder" /><br />
					<a href="index.php?user&q=code/user/avatar"><font
						color="#234d89">[����ͷ��]</font> </a>
				</div>
				<div class="user_right_txt">
					<ul>
						<li><span>���õȼ���</span><? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = '';$_tmp = $this->magic_vars['_U']['user_cache']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?>
							&nbsp;&nbsp;&nbsp; <a href="/index.php?user&q=code/user/credit"><font
								color="#234d89">�鿴����</font> </a></li>
						<li style="overflow: hidden">
							<div class="floatl" style="float: left;">
								<span> ��&nbsp;&nbsp;&nbsp; ֤��</span>
							</div> <a href="/index.php?user&q=code/user/realname"><div
									class="credit_pic_card_<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>"
									title="<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==1): ?>ʵ������֤<? else: ?>δʵ����֤<? endif; ?>"></div>
						</a> <a href="/index.php?user&q=code/user/phone_status"><div
									class="credit_pic_phone_<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']>=1): ?>1<? else: ?>0<? endif; ?>"
									title="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==1): ?>�ֻ�����֤<? else: ?>�ֻ�δ��֤<? endif; ?>"></div>
						</a> <a href="/index.php?user&q=code/user/email_status"><div
									class="credit_pic_email_<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['email_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>"
									title="<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status']=''; ;if (  $this->magic_vars['_G']['user_result']['email_status']==1): ?>��������֤<? else: ?>����δ��֤<? endif; ?>"></div>
						</a> <a href="/index.php?user&q=code/user/video_status"><div
									class="credit_pic_video_<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>"
									title="<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status']=''; ;if (  $this->magic_vars['_G']['user_result']['video_status']==1): ?>��Ƶ����֤<? else: ?>��Ƶδ��֤<? endif; ?>"></div>
						</a> <a href="/vip/index.html"><div
									class="credit_pic_vip_<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?>1<? else: ?>0<? endif; ?>"
									title="<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?>VIP<? else: ?>��ͨ��Ա<? endif; ?>"></div>
						</a> <a href="/index.php?user&q=code/user/scene_status"><div
									class="credit_pic_scene_<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['scene_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>"
									title="<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status']=''; ;if (  $this->magic_vars['_G']['user_result']['scene_status']==1): ?>��ͨ���ֳ���֤<? else: ?>δͨ���ֳ���֤<? endif; ?>"></div>
						</a>
						</li>

						<li><a href="/index.php?user&q=code/account/recharge_new"><font
								color="#234d89">�˺ų�ֵ</font> </a>&nbsp;&nbsp; <a
							href="/index.php?user&q=code/borrow/limitapp&type=credit"><font
								color="#234d89">�������ö��</font> </a> &nbsp;&nbsp;<a
							href="/index.php?user&q=code/borrow/limitapp&type=vouch"><font
								color="#234d89">���뵣�����</font> </a></li>
						<li><span>VIP ���ޣ� <a href="/vip/index.html"><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if ( $this->magic_vars['_G']['user_result']['vip_status']==1): ?><? if (!isset($this->magic_vars['_G']['user_result']['vip_verify_time'])) $this->magic_vars['_G']['user_result']['vip_verify_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
									��
									<? if (!isset($this->magic_vars['_G']['user_result']['vip_verify_time'])) $this->magic_vars['_G']['user_result']['vip_verify_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_verify_time']+60*60*24*365;$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif ( $this->magic_vars['_G']['user_result']['vip_status']==-1): ?>VIP�����<? else: ?><font
									color="#999999">����VIP</font></font><? endif; ?>
							</a></li>
						<li><span>ϵͳ��֪��</span><a
							href="/index.php?user&q=code/message"><font color="#234d89"><? if (!isset($this->magic_vars['_U']['user_cache']['message'])) $this->magic_vars['_U']['user_cache']['message'] = ''; echo $this->magic_vars['_U']['user_cache']['message']; ?></font>
								��δ����Ϣ</a>&nbsp; &nbsp; <a href="/index.php?user&q=code/user/request"><? if (!isset($this->magic_vars['_U']['user_cache']['friends_apply'])) $this->magic_vars['_U']['user_cache']['friends_apply'] = ''; echo $this->magic_vars['_U']['user_cache']['friends_apply']; ?>
								����������</a></li>
						<li><span>�ϴε�¼IP��<? if (!isset($this->magic_vars['_G']['user_result']['upip'])) $this->magic_vars['_G']['user_result']['upip'] = ''; echo $this->magic_vars['_G']['user_result']['upip']; ?> -
								�ϴε�¼ʱ�䣺<? if (!isset($this->magic_vars['_G']['user_result']['uptime'])) $this->magic_vars['_G']['user_result']['uptime'] = '';$_tmp = $this->magic_vars['_G']['user_result']['uptime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></span></li>
					</ul>
				</div>
			</div>

			<!-- �û��˻���Ϣ��� -->
			<div class="index-middle-r i-news-w block-r"
				style="width: 738px; margin-top: 5px;">
				<div class="block-title clearfix"
					style="background: #375eb7; color: #FFF;">
					<font style="padding-top: 0px;">�˺����� <? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if ( $this->magic_vars['_G']['user_result']['vip_status']==1): ?><? else: ?>(<a href="/vip/index.html"><font
							color="#FFF">����VIP��Ա</font> </a>
					</font>)<? endif; ?></font>
				</div>
				<div class="i-news-c" style="padding: 0px;">

					<table class="fdjz_table" cellpadding="0" cellspacing="0"
						border="0">
						<? $data = array('user_id'=>'0','var'=>'acc','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
						<thead>
							<tr>
								<td class="first">�˻��ܶ�</td>
								<td>�������</td>
								<td>�����ܶ�</td>
								<td class="last"><font><font>�����ܶ�</font> </font></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['acc']['total'])) $this->magic_vars['acc']['total'] = '';$_tmp = $this->magic_vars['acc']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> <a
									href="index.php?user&q=code/account/log">��¼</a> | <a
									href="index.php?user&q=code/account">����</a></td>
								<td>��<? if (!isset($this->magic_vars['acc']['use_money'])) $this->magic_vars['acc']['use_money'] = '';$_tmp = $this->magic_vars['acc']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> &nbsp;<a
									href="index.php?user&q=code/account/cash_new">[����] </a> <a
									href="index.php?user&q=code/account/recharge_new">[��ֵ]</a></td>
								<td>��<? if (!isset($this->magic_vars['acc']['no_use_money'])) $this->magic_vars['acc']['no_use_money'] = '';$_tmp = $this->magic_vars['acc']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection'] = '';$_tmp = $this->magic_vars['acc']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>

						<thead>
							<tr>
								<td class="first">������Ϣ</td>
								<td>������ս��</td>
								<td>�������ʱ��</td>
								<td class="last"><font><font>��׬��Ϣ</font> </font></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['acc']['collection_interest0'])) $this->magic_vars['acc']['collection_interest0'] = '';$_tmp = $this->magic_vars['acc']['collection_interest0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['acc']['new_collection_account'])) $this->magic_vars['acc']['new_collection_account'] = '';$_tmp = $this->magic_vars['acc']['new_collection_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td><? if (!isset($this->magic_vars['acc']['new_collection_time'])) $this->magic_vars['acc']['new_collection_time'] = '';$_tmp = $this->magic_vars['acc']['new_collection_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?> <a
									href="index.php?user&q=code/borrow/gathering&status=0">[������ϸ]</a>
								</td>
								<td class="last">��<? if (!isset($this->magic_vars['acc']['collection_interest1'])) $this->magic_vars['acc']['collection_interest1'] = '';$_tmp = $this->magic_vars['acc']['collection_interest1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>


						<thead>
							<tr>
								<td class="first">��׬����</td>
								<td>����ܶ�</td>
								<td>�����ܶ�</td>
								<td class="last"><font><font>����������</font> </font></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['acc']['award_add'])) $this->magic_vars['acc']['award_add'] = '';$_tmp = $this->magic_vars['acc']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num'] = '';$_tmp = $this->magic_vars['acc']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['acc']['new_repay_account'])) $this->magic_vars['acc']['new_repay_account'] = '';$_tmp = $this->magic_vars['acc']['new_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>


						<thead>
							<tr>
								<td class="first">�������ʱ��</td>
								<td>���ۻ��</td>
								<td>���ö��</td>
								<td class="last"><font><font>�������ö��</font> </font></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first"><? if (!isset($this->magic_vars['acc']['new_repay_time'])) $this->magic_vars['acc']['new_repay_time'] = '';$_tmp = $this->magic_vars['acc']['new_repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
									<a href="index.php?user&q=code/borrow/repaymentplan">[������ϸ]</a>
								</td>
								<td>��<? if (!isset($this->magic_vars['_U']['user_cache']['vip_money'])) $this->magic_vars['_U']['user_cache']['vip_money']='';if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_U']['user_cache']['vip_money']=="" && $this->magic_vars['_G']['user_result']['vip_status']==1): ?><? if (!isset($this->magic_vars['_G']['system']['con_vip_money'])) $this->magic_vars['_G']['system']['con_vip_money'] = ''; echo $this->magic_vars['_G']['system']['con_vip_money']; ?><? else: ?>0<? endif; ?></td>
								<td>��<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = '';$_tmp = $this->magic_vars['acc']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = '';$_tmp = $this->magic_vars['acc']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>


						<thead>
							<tr>
								<td class="first">�������</td>
								<td>���ý������</td>
								<td>Ͷ�ʵ������</td>
								<td class="last"><font><font>����Ͷ�ʵ������</font> </font></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = '';$_tmp = $this->magic_vars['acc']['borrow_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = '';$_tmp = $this->magic_vars['acc']['borrow_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['acc']['tender_vouch'])) $this->magic_vars['acc']['tender_vouch'] = '';$_tmp = $this->magic_vars['acc']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['acc']['tender_vouch_use'])) $this->magic_vars['acc']['tender_vouch_use'] = '';$_tmp = $this->magic_vars['acc']['tender_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>
						<? unset($_magic_vars);unset($data); ?>
					</table>
				</div>
			</div>


			<!-- �������� -->
			<div class="index-middle-r i-news-w block-r"
				style="width: 738px; margin-top: 5px;">
				<div class="block-title clearfix"
					style="background: #375eb7; color: #FFF;">
					<span class="fl">��������</span>
				</div>
				<div class="i-news-c">


					<div class="process-wrapper">
						<div>�������</div>
						<ul>
							<li class="process-item current"><a target="_blank"
								href="/?user&amp;q=code/userinfo">��д��ϸ��Ϣ</a></li>
							<li class="process-item"><a target="_blank"
								href="/?user&amp;q=code/attestation">�ϴ�����֤��</a></li>
							<li class="process-item"><a target="_blank"
								href="/vip/index.html">����VIP</a></li>
							<li class="process-item"><a target="_blank"
								href="/publish/index.html">���������Ϣ</a></li>
							<li class="process-item"><a target="_blank"
								href="/?user&amp;q=code/borrow/repayment">���ɹ�</a></li>
							<li style="clear: both;"></li>
						</ul>

					</div>


					<div class="process-wrapper">
						<div>Ͷ������</div>
						<ul>
							<li class="process-item current"><a target="_blank"
								href="/?user&amp;q=code/userinfo">��д��ϸ��Ϣ</a></li>
							<li class="process-item"><a target="_blank"
								href="/?user&amp;q=code/user/realname">ʵ����֤</a></li>
							<li class="process-item"><a target="_blank"
								href="/vip/index.html">����VIP</a></li>
							<li class="process-item"><a target="_blank"
								href="/invest/index.html">Ͷ����</a></li>
							<li class="process-item"><a target="_blank"
								href="/?user&amp;q=code/borrow/success">�ȴ����ջ���</a></li>
							<li style="clear: both;"></li>
						</ul>

					</div>

				</div>

			</div>

			<div class="index-middle-r i-news-w block-r"
				style="width: 738px; margin-top: 5px;">
				<div class="block-title clearfix"
					style="background: #375eb7; color: #FFF;">
					<span class="fl">�������������</span>
				</div>
				<div class="i-news-c">
					<ul>
						<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/userinfo/userinfo.class.php');$this->magic_vars['var'] = userinfoClass::GetOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
						<li><span><a
								href="/index.php?user&q=code/userinfo/building"><? if (!isset($this->magic_vars['var']['building_status'])) $this->magic_vars['var']['building_status']=''; ;if ( $this->magic_vars['var']['building_status']==1): ?>����д<? else: ?>δ��д<? endif; ?>
							</a> </span>��������</li>
						<li><span><a
								href="/index.php?user&q=code/userinfo/company"><? if (!isset($this->magic_vars['var']['company_status'])) $this->magic_vars['var']['company_status']=''; ;if ( $this->magic_vars['var']['company_status']==1): ?>����д<? else: ?>δ��д<? endif; ?>
							</a> </span>��λ����</li>
						<li><span><a
								href="/index.php?user&q=code/userinfo/firm"><? if (!isset($this->magic_vars['var']['firm_status'])) $this->magic_vars['var']['firm_status']=''; ;if ( $this->magic_vars['var']['firm_status']==1): ?>����д<? else: ?>δ��д<? endif; ?>
							</a> </span>˽Ӫҵ��</li>
						<li><span><a
								href="/index.php?user&q=code/userinfo/finance"><? if (!isset($this->magic_vars['var']['finance_status'])) $this->magic_vars['var']['finance_status']=''; ;if ( $this->magic_vars['var']['finance_status']==1): ?>����д<? else: ?>δ��д<? endif; ?>
							</a> </span>����״��</li>
						<li><span><a
								href="/index.php?user&q=code/userinfo/contact"><? if (!isset($this->magic_vars['var']['contact_status'])) $this->magic_vars['var']['contact_status']=''; ;if ( $this->magic_vars['var']['contact_status']==1): ?>����д<? else: ?>δ��д<? endif; ?>
							</a> </span>��ϵ��ʽ</li>
						<li><span><a
								href="/index.php?user&q=code/userinfo/edu"><? if (!isset($this->magic_vars['var']['edu_status'])) $this->magic_vars['var']['edu_status']=''; ;if ( $this->magic_vars['var']['edu_status']==1): ?>����д<? else: ?>δ��д<? endif; ?>
							</a> </span>��������</li>
						<!--<li><span>����д</span><a href="/index.php?user&q=code/userinfo/building">��������</a></li>-->
					</ul>
					<? unset($_magic_vars);unset($data); ?>
				</div>
			</div>

			<div class="index-middle-r i-news-w block-r"
				style="width: 738px; margin-top: 5px;">
				<div class="block-title clearfix"
					style="background: #375eb7; color: #FFF;">
					<span class="fl">���Ѷ�̬</span>
				</div>
				<div class="i-news-c">
					<ul class="i-news_title">
						<? $this->magic_vars['query_type']='GetUserTrend';$data = array('limit'=>'15','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetUserTrend($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						<li><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?> - <a
							href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" target="_blank"><font
								color="#234d89"><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></font> </a> <? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?>
						</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					</ul>
				</div>
			</div>
			
			
			

		</div>

	</div>
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->

<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>
