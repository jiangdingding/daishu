<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û���</td>
			<td width="" class="main_td">��ʵ����</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">���ս��</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_list']) || $this->magic_vars['_A']['account_list']=='') $this->magic_vars['_A']['account_list'] = array();  $_from = $this->magic_vars['_A']['account_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>

<!--���ּ�¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cash"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">��ʵ����</td>
			<td width="" class="main_td">�����˺�</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">֧��</td>
			<td width="" class="main_td">�����ܶ�</td>
			<td width="" class="main_td">���˽��</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_cash_list']) || $this->magic_vars['_A']['account_cash_list']=='') $this->magic_vars['_A']['account_cash_list'] = array();  $_from = $this->magic_vars['_A']['account_cash_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['branch'])) $this->magic_vars['item']['branch'] = ''; echo $this->magic_vars['item']['branch']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['credited'])) $this->magic_vars['item']['credited'] = ''; echo $this->magic_vars['item']['credited']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?></td>	
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> ��ͨ�� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>���ܾ�<? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���/�鿴</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		<input type="button" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash&status=<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>&type=excel'" value="�����б�" />
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--���ּ�¼�б� ����-->


<!--������� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "cash_view"): ?>
<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>�������/�鿴</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['username'])) $this->magic_vars['_A']['account_cash_result']['username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['username']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">�������У�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['bank_name'])) $this->magic_vars['_A']['account_cash_result']['bank_name'] = ''; echo $this->magic_vars['_A']['account_cash_result']['bank_name']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">����֧�У�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['branch'])) $this->magic_vars['_A']['account_cash_result']['branch'] = ''; echo $this->magic_vars['_A']['account_cash_result']['branch']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">�����˺ţ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['account'])) $this->magic_vars['_A']['account_cash_result']['account'] = ''; echo $this->magic_vars['_A']['account_cash_result']['account']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����ܶ</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['total'])) $this->magic_vars['_A']['account_cash_result']['total'] = ''; echo $this->magic_vars['_A']['account_cash_result']['total']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���˽�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>���������<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> ������ͨ�� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>���ֱ��ܾ�<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['addtime'])) $this->magic_vars['_A']['account_cash_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_cash_result']['addip'])) $this->magic_vars['_A']['account_cash_result']['addip'] = ''; echo $this->magic_vars['_A']['account_cash_result']['addip']; ?></div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?>
	<div class="module_title"><strong>��˴�������Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="0" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?> checked="checked"<? endif; ?> />�ȴ����  <input type="radio" name="status" value="1" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==1): ?> checked="checked"<? endif; ?>/>���ͨ�� <input type="radio" name="status" value="2" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==2): ?> checked="checked"<? endif; ?>/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">���˽��:</div>
		<div class="c">
			<input type="text" name="credited" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>" size="10">��һ�����ͨ���������ٽ����޸ģ�
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">����:</div>
		<div class="c">
			<input type="text" name="fee" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>" size="5">
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?></textarea>
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['id'])) $this->magic_vars['_A']['account_cash_result']['id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['id']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['user_id'])) $this->magic_vars['_A']['account_cash_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['user_id']; ?>" />
		<input type="submit"  name="reset" value="��˴�������Ϣ" />
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">�����Ϣ��</div>
		<div class="c">
			����ˣ�<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_username'])) $this->magic_vars['_A']['account_cash_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_username']; ?>,���ʱ�䣺<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_time'])) $this->magic_vars['_A']['account_cash_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,��˱�ע��<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_remark'])) $this->magic_vars['_A']['account_cash_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	</form>
</div>

<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var verify_remark = frm.elements['verify_remark'].value;
	 var errorMsg = '';
	  if (verify_remark.length == 0 ) {
		errorMsg += '��ע������д' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>



<!--��ֵ��¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="recharge"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">��ֵ���</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">���˽��</td>
			<td width="" class="main_td">��ֵʱ��</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_recharge_list']) || $this->magic_vars['_A']['account_recharge_list']=='') $this->magic_vars['_A']['account_recharge_list'] = array();  $_from = $this->magic_vars['_A']['account_recharge_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?>���ϳ�ֵ<? else: ?>���³�ֵ<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['payment'])) $this->magic_vars['item']['payment']=''; ;if (  $this->magic_vars['item']['payment']==0): ?>�ֶ���ֵ<? else: ?><? if (!isset($this->magic_vars['item']['payment_name'])) $this->magic_vars['item']['payment_name'] = ''; echo $this->magic_vars['item']['payment_name']; ?><? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?>Ԫ</td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?>Ԫ</td>
			<td ><font color="#FF0000"><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?>Ԫ</font></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><font color="#6699CC">���</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> �ɹ� <? else: ?><font color="#FF0000">ʧ��</font><? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���/�鿴</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		 <A href="?<? if (!isset($this->magic_vars['_A']['query_string'])) $this->magic_vars['_A']['query_string'] = ''; echo $this->magic_vars['_A']['query_string']; ?>&type=excel">������ǰ����</A>
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--��ֵ��¼�б� ����-->
<!--������� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_view"): ?>
<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>��ֵ�鿴</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['account_recharge_result']['user_id'])) $this->magic_vars['_A']['account_recharge_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['_A']['account_recharge_result']['username'])) $this->magic_vars['_A']['account_recharge_result']['username'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['username']; ?></a>
		</div>
	</div>

	<div class="module_border">
		<div class="l">��ֵ���ͣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==1): ?>���ϳ�ֵ<? else: ?>���³�ֵ<? endif; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">֧����ʽ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['payment_name'])) $this->magic_vars['_A']['account_recharge_result']['payment_name'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['payment_name']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ֵ�ܶ</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['money'])) $this->magic_vars['_A']['account_recharge_result']['money'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['money']; ?>Ԫ
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���ã�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['fee'])) $this->magic_vars['_A']['account_recharge_result']['fee'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['fee']; ?>Ԫ
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ʵ�ʵ��ˣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>Ԫ
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�û���ע��</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['remark'])) $this->magic_vars['_A']['account_recharge_result']['remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['remark']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��ˮ�ţ�</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['remark'])) $this->magic_vars['_A']['account_recharge_result']['remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['remark']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>�ȴ����<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (   $this->magic_vars['_A']['account_recharge_result']['status']==1): ?> ��ֵ�ɹ� <? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_recharge_result']['status']==2): ?>��ֵʧ��<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addtime'])) $this->magic_vars['_A']['account_recharge_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_recharge_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addip'])) $this->magic_vars['_A']['account_recharge_result']['addip'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['addip']; ?></div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>
	<div class="module_title"><strong>��˴˳�ֵ��Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
	<input type="radio" name="status" value="1"/>��ֵ�ɹ�   <input type="radio" name="status" value="2"  checked="checked"/>��ֵʧ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">���˽��:</div>
		<div class="c">
			<input type="text" name="total" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>" size="15" readonly="">��һ�����ͨ���������ٽ����޸ģ�
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_recharge_result']['verify_remark'])) $this->magic_vars['_A']['account_recharge_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['verify_remark']; ?></textarea>
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['id'])) $this->magic_vars['_A']['account_recharge_result']['id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['id']; ?>" />
		
		<input type="submit"  name="reset" value="��˴˳�ֵ��Ϣ" />
	</div>
	<? else: ?>
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==2): ?>
	<div class="module_border">
		<div class="l">�����Ϣ��</div>
		<div class="c">
			����ˣ�<? if (!isset($this->magic_vars['_A']['account_result']['verify_username'])) $this->magic_vars['_A']['account_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_result']['verify_username']; ?>,���ʱ�䣺<? if (!isset($this->magic_vars['_A']['account_result']['verify_time'])) $this->magic_vars['_A']['account_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,��˱�ע��<? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	<? endif; ?>
	</form>
</div>

<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var verify_remark = frm.elements['verify_remark'].value;
	 var errorMsg = '';
	  if (verify_remark.length == 0 ) {
		errorMsg += '��ע������д' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>




<!--��ӳ�ֵ��¼ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_new"): ?>

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>��ӳ�ֵ</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			���³�ֵ<input type="hidden" name="type" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />
		</div>
	</div>
	
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="ȷ�ϳ�ֵ" />
	</div>
</form>
</div>

<!--��ӳ�ֵ��¼ ����-->




<!--��ӳ�ֵ��¼ ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "deduct"): ?>

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>���ÿ۳�</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			<select name="type">
				<option value="scene_account">�ֳ���֤����</option>
				<option value="vouch_advanced">�����渶�۷�</option>
				<option value="borrow_kouhui">����˷���ۻ�</option>
				<option value="account_other">����</option>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />���磬�ֳ����ÿ۳�200Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">��֤�룺</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="ȷ���۳�" />
	</div>
</form>
</div>

<!--��ӳ�ֵ��¼ ����-->

<!--�ʽ�ʹ�ü�¼�б� ��ʼ-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="log"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�ܽ��</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">���ý��</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">���ս��</td>
			<td width="" class="main_td">���׶Է�</td>
			<td width="" class="main_td">��¼ʱ��</td>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_log_list']) || $this->magic_vars['_A']['account_log_list']=='') $this->magic_vars['_A']['account_log_list'] = array();  $_from = $this->magic_vars['_A']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"admin");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���/�鿴</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		<? $result = $this->magic_vars['_G']['_linkage']['account_type']; echo "<select name='type' id=type >"; echo "<option value=''>ȫ��</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['type']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?> �û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--�ʽ�ʹ�ü�¼�б� ����-->


<? endif; ?>
<script>
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?>';

function sousuo(){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var status = $("#status").val();
	if (status!="" && status!=null){
		sou += "&status="+status;
	}
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var dotime2 = $("#dotime2").val();
	var type = $("#type").val();
	if (username!=null){
		 sou += "&username="+username;
	}
	if (keywords!=null){
		 sou += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 sou += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 sou += "&dotime2="+dotime2;
	}
	if (type!=null){
		 sou += "&type="+type;
	}
	
	if (sou!=""){
	location.href=url+sou;
	}
}

</script>
