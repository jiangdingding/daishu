<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<!-- ������� -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/user_index.css" />

<!--�û����ĵ�����Ŀ ��ʼ-->
<div class="container clearfix" style="margin-top:15px;">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--��ߵĵ��� ����-->
	
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="header-menu">
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
			<ul>
				<li class="title" >�ͻ�����</li>
				<li ><a href="index.php?user&q=code/user/myuser">�ҵĿͷ�</a></li>
				<li ><a href="index.php?user&q=code/borrow/myuser">�ͻ����</a></li>
			</ul>
			<? else: ?>
			<ul>
				<li class="title" ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">֤����Ϣ </a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?> class="current"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">֤������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="one"): ?> class="current"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/one">���������ϴ�</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="more"): ?> class="current"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/more">��������ϴ�</a></li>
			</ul>
			<? endif; ?>
		</div>
		
		
		
		<!--�ռ��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?>
	
		<div class="user_right_main">
			<form action="" method="post" id="form1">
			<table  class="products_table">
				<tr class="head" >
				<th>˵����Ϣ </th>
				<th>��������</th>
				<th>�ϴ�ʱ�� </th>
				<th>���ʱ��</th>
				<th>���˵��</th>
				<th>���� </th>
				<th>״̬</th>
				<th>����</th>
				</tr>
			<? $this->magic_vars['query_type']='GetList';$data = array('showpage'=>'3','var'=>'loop','user_id'=>'0','epage'=>'20','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/attestation/attestation.class.php');$this->magic_vars['magic_result'] = attestationClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
				<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
				<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = '';$_tmp = $this->magic_vars['item']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['jifen'])) $this->magic_vars['item']['jifen'] = '';$_tmp = $this->magic_vars['item']['jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ��</td>
				<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>δ���<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>���ʧ��<? else: ?>�����<? endif; ?></td>
				
				<td><a href="<? if (!isset($this->magic_vars['item']['litpic'])) $this->magic_vars['item']['litpic'] = '';$_tmp = $this->magic_vars['item']['litpic'];$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" target="_blank">�鿴</a></td>
				
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>
				<div class="page">
					<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
				</div>
				
				<? unset($_magic_vars); ?>
			</form>	
			<!--�ռ��� ����-->
		</div>
		<!--�ҵĿͻ� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
	
		<div class="user_right_main">
			<form action="" method="post" id="form1">
			<table  class="products_table">
				<tr class="head" >
				<th>˵����Ϣ </th>
				<th>��������</th>
				<th>�ϴ�ʱ�� </th>
				<th>���ʱ��</th>
				<th>���˵��</th>
				<th>���� </th>
				<th>״̬</th>
				</tr>
				<? $this->magic_vars['query_type']='GetList';$data = array('kefu_userid'=>$this->magic_vars['_G']['user_id'],'var'=>'item','limit'=>'all','user_id'=>$_REQUEST['user_id']);$default = '';  include_once(ROOT_PATH.'modules/attestation/attestation.class.php');$this->magic_vars['magic_result'] = attestationClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
				<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
				<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
				<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = '';$_tmp = $this->magic_vars['item']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td><? if (!isset($this->magic_vars['item']['jifen'])) $this->magic_vars['item']['jifen'] = '';$_tmp = $this->magic_vars['item']['jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ��</td>
				<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>δ���<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>���ʧ��<? else: ?>�����<? endif; ?></td>
				
				
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</table>
			</form>	
			<!--�ҵĿͻ� ����-->
		</div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="one"): ?>
		<div class="user_right_main">
			<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
			<div class="user_help"><font color="#FF0000">*</font> �����Ǳ��˵��������<br />
			<font color="#FF0000">*</font> ��ʵ ��Ч<br /></div>
			<div class="user_right_border">
				<div class="l">�����ϴ���</div>
				<div class="c">
					<input type="file" name="litpic" /> �ϴ�����ͼƬΪ1M���ϴ��ĸ�ʽΪjpg.gif
				</div>
			</div>
			<div class="user_right_border">
				<div class="l">�ϴ����ͣ�</div>
				<div class="c">
					<select name="type_id">
					<?  if(!isset($this->magic_vars['_U']['attestation_type_list']) || $this->magic_vars['_U']['attestation_type_list']=='') $this->magic_vars['_U']['attestation_type_list'] = array();  $_from = $this->magic_vars['_U']['attestation_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
					<option value="<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></option>
					<? endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</div>
			<div class="user_right_border">
				<div class="l">��ע˵����</div>
				<div class="c">
					<textarea cols="50" rows="5" name="name"></textarea>
				</div>
			</div>
			
			<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			</div>
		</div>
			<div class="user_right_border">
				<div class="e"></div>
				<div class="c">
					<input class="button_blue_small" type="submit"  value="ȷ���ύ" size="30" /> 
				</div>
			</div>
			</form>
			<div class="user_right_foot">
			* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
			</div>
		</div>
			<script>
				function check_form(){
					 var frm = document.forms['form1'];
					 var file = frm.elements['litpic'].value;
					 var errorMsg = '';
					  if (file.length == 0 ) {
						errorMsg += '* ͼƬ����Ϊ��' + '\n';
					  }
					 
					  if (errorMsg.length > 0){
						alert(errorMsg); return false;
					  } else{  
						return true;
					}
				
				}
			</script>
			<!--�޸ĵ�¼���� ����-->
			
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="more"): ?>
		<div class="user_right_main">
			<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
			<div class="user_help"><font color="#FF0000">*</font> �����Ǳ��˵��������<br />
					<font color="#FF0000">*</font> ��ʵ ��Ч<br />
			</div>
			
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="700" height="500">
  <param name="movie" value="/plugins/swfupload/swfupload.swf?config=/index.php%3fplugins%26ac=swfupload%26code=attestation" />
  <param name="quality" value="high" />
  <embed src="/plugins/swfupload/swfupload.swf?config=/index.php%3fplugins%26ac=swfupload%26code=attestation" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="700" height="500"></embed>
</object>
			
			<div class="user_right_border">
				<div class="e"></div>
				<div class="c" style="padding-left: 90px;">
					<input class="button_blue_small" type="submit"  value="ȷ���ύ" size="30" /> 
				</div>
			</div>
			</form>
	</div>
	
	
	
		<? endif; ?>
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->
<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>