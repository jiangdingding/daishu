<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>�༭<? else: ?>���<? endif; ?>��֤</strong></div>
	

	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['attestation_result']['user_id'])) $this->magic_vars['_A']['attestation_result']['user_id'] = ''; echo $this->magic_vars['_A']['attestation_result']['user_id']; ?>" size="30" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������Ŀ��</div>
		<div class="c">
			<select  name="type_id" ><?  if(!isset($this->magic_vars['_A']['attestation_type_list']) || $this->magic_vars['_A']['attestation_type_list']=='') $this->magic_vars['_A']['attestation_type_list'] = array();  $_from = $this->magic_vars['_A']['attestation_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?><option value="<? if (!isset($this->magic_vars['var']['type_id'])) $this->magic_vars['var']['type_id'] = ''; echo $this->magic_vars['var']['type_id']; ?>" <? if (!isset($this->magic_vars['_A']['attestation_result']['type_id'])) $this->magic_vars['_A']['attestation_result']['type_id']='';if (!isset($this->magic_vars['var']['type_id'])) $this->magic_vars['var']['type_id']=''; ;if (  $this->magic_vars['_A']['attestation_result']['type_id'] ==  $this->magic_vars['var']['type_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option> <? endforeach; endif; unset($_from); ?>
			</select>
		</div>
	</div>

	<div class="module_border" >
		<div class="l">�ϴ�ͼƬ��</div>
		<div class="c">
			<input type="file" name="litpic" size="30" class="input_border"/><? if (!isset($this->magic_vars['_A']['attestation_result']['litpic'])) $this->magic_vars['_A']['attestation_result']['litpic']=''; ;if (  $this->magic_vars['_A']['attestation_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['attestation_result']['litpic'])) $this->magic_vars['_A']['attestation_result']['litpic'] = ''; echo $this->magic_vars['_A']['attestation_result']['litpic']; ?>" target="_blank" title="��ͼƬ"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_1.jpg" border="0"  /></a><? endif; ?></div>
	</div>


	<div class="module_border" >
		<div class="l">����:</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['attestation_result']['order'])) $this->magic_vars['_A']['attestation_result']['order'] = '';$_tmp = $this->magic_vars['_A']['attestation_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>

	<div class="module_border" >
		<div class="l">���ݼ��:</div>
		<div class="c">
			<textarea name="content" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['attestation_result']['content'])) $this->magic_vars['_A']['attestation_result']['content'] = ''; echo $this->magic_vars['_A']['attestation_result']['content']; ?></textarea>
		</div>
	
	
	</div>
	
	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['attestation_result']['id'])) $this->magic_vars['_A']['attestation_result']['id'] = ''; echo $this->magic_vars['_A']['attestation_result']['id']; ?>" /><? endif; ?>
		<input type="submit"  name="submit" value="ȷ���ύ" />
		<input type="reset"  name="reset" value="���ñ�" />
	</div>
	</form>
</div>

<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var name = frm.elements['name'].value;
	 var content = frm.elements['content'].value;
	 var errorMsg = '';
	  if (name.length == 0 ) {
		errorMsg += '���������д' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "view"): ?>
<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>֤���鿴</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['attestation_result']['user_id'])) $this->magic_vars['_A']['attestation_result']['user_id'] = ''; echo $this->magic_vars['_A']['attestation_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['_A']['attestation_result']['username'])) $this->magic_vars['_A']['attestation_result']['username'] = ''; echo $this->magic_vars['_A']['attestation_result']['username']; ?></a>
		</div>
	</div>


	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['attestation_result']['type_name'])) $this->magic_vars['_A']['attestation_result']['type_name'] = ''; echo $this->magic_vars['_A']['attestation_result']['type_name']; ?>
		</div>
	</div>


	<div class="module_border">
		<div class="l">֤��ͼƬ��</div>
		<div class="c">
			<a href="<? if (!isset($this->magic_vars['_A']['attestation_result']['litpic'])) $this->magic_vars['_A']['attestation_result']['litpic'] = '';$_tmp = $this->magic_vars['_A']['attestation_result']['litpic'];$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['_A']['attestation_result']['litpic'])) $this->magic_vars['_A']['attestation_result']['litpic'] = '';$_tmp = $this->magic_vars['_A']['attestation_result']['litpic'];$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="100" height="100" /></a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['attestation_result']['content'])) $this->magic_vars['_A']['attestation_result']['content'] = ''; echo $this->magic_vars['_A']['attestation_result']['content']; ?></div>
	</div>

	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['attestation_result']['addtime'])) $this->magic_vars['_A']['attestation_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['attestation_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['attestation_result']['addip'])) $this->magic_vars['_A']['attestation_result']['addip'] = ''; echo $this->magic_vars['_A']['attestation_result']['addip']; ?></div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['attestation_result']['status'])) $this->magic_vars['_A']['attestation_result']['status']=''; ;if (  $this->magic_vars['_A']['attestation_result']['status']==1): ?>
	
	<div class="module_border">
		<div class="l">����:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['attestation_result']['jifen'])) $this->magic_vars['_A']['attestation_result']['jifen'] = ''; echo $this->magic_vars['_A']['attestation_result']['jifen']; ?> ��</div>
	</div>
	
	<div class="module_border">
		<div class="l">��˱�ע:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['attestation_result']['verify_remark'])) $this->magic_vars['_A']['attestation_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['attestation_result']['verify_remark']; ?></div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʱ��:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['attestation_result']['verify_time'])) $this->magic_vars['_A']['attestation_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['attestation_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></div>
	</div>
	<? else: ?>
	<div class="module_title"><strong>��˴�֤��</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/><font color="#009900">���ͨ��</font> <input type="radio" name="status" value="2" checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">ͨ�������û���:</div>
		<div class="c">
			<input type="text" name="jifen" value="<? if (!isset($this->magic_vars['_A']['arrestation_value'])) $this->magic_vars['_A']['arrestation_value'] = ''; echo $this->magic_vars['_A']['arrestation_value']; ?>" size="5"> ��
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['attestation_result']['verify_remark'])) $this->magic_vars['_A']['attestation_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['attestation_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['attestation_result']['id'])) $this->magic_vars['_A']['attestation_result']['id'] = ''; echo $this->magic_vars['_A']['attestation_result']['id']; ?>" />
		<input type="hidden" name="type_name" value="<? if (!isset($this->magic_vars['_A']['attestation_result']['type_name'])) $this->magic_vars['_A']['attestation_result']['type_name'] = ''; echo $this->magic_vars['_A']['attestation_result']['type_name']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['attestation_result']['user_id'])) $this->magic_vars['_A']['attestation_result']['user_id'] = ''; echo $this->magic_vars['_A']['attestation_result']['user_id']; ?>" />
		
		<input type="submit"  name="reset" value="��˴�֤��" />
	</div>
	</form>
	<? endif; ?>
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

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">��ʵ����</td>
			<td class="main_td">��֤����</td>
			<td class="main_td">��֤ͼƬ</td>
			<td class="main_td">��֤״̬</td>
			<td class="main_td">��֤����</td>
			<td class="main_td">��֤���</td>
			<td class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['attestation_list']) || $this->magic_vars['_A']['attestation_list']=='') $this->magic_vars['_A']['attestation_list'] = array();  $_from = $this->magic_vars['_A']['attestation_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
			<td class="main_td1" align="center" ><a href="<? if (!isset($this->magic_vars['item']['litpic'])) $this->magic_vars['item']['litpic'] = '';$_tmp = $this->magic_vars['item']['litpic'];$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" target="_blank" ><img src="<? if (!isset($this->magic_vars['item']['litpic'])) $this->magic_vars['item']['litpic'] = '';$_tmp = $this->magic_vars['item']['litpic'];$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="50" height="50" style="border:1px solid #CCCCCC" /></a></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?><font color="#009900">���ͨ��</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==0): ?><font color="#ff0000">�ȴ����</font><? else: ?>���δͨ��<? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['jifen'])) $this->magic_vars['item']['jifen'] = ''; echo $this->magic_vars['item']['jifen']; ?>��</td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] !=1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">���</a><? else: ?>-<? endif; ?> </td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ��ʵ������<input type="text" name="realname" id="realname" value="<? if (!isset($_REQUEST['realname'])) $_REQUEST['realname'] = ''; echo $_REQUEST['realname']; ?>"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <input type="button" value="����" / onclick="sousuo()">
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
<script>
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>';
var _url = '<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>';

function sousuo(){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var realname = $("#realname").val();
	if (realname!=""){
		sou += "&realname="+realname;
	}
	var status = $("#status").val();
	if (status!=""){
		sou += "&status="+status;
	}
	
	location.href=url+sou+_url;
	
}
</script>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type_list"): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="1" >
	<tr>
		<td class="main_td">��������</td>
		<td class="main_td">����</td>
		<td class="main_td">��Ҫ</td>
		<td class="main_td">��ע</td>
		<td class="main_td">����</td>
		<td class="main_td">״̬</td>
		<td class="main_td">����</td>
	</tr>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_order" method="post">
	<?  if(!isset($this->magic_vars['_A']['attestation_type_list']) || $this->magic_vars['_A']['attestation_type_list']=='') $this->magic_vars['_A']['attestation_type_list'] = array();  $_from = $this->magic_vars['_A']['attestation_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td bgcolor="#ffffff" ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td bgcolor="#ffffff" ><? if (!isset($this->magic_vars['item']['jifen'])) $this->magic_vars['item']['jifen'] = ''; echo $this->magic_vars['item']['jifen']; ?></td>
		<td bgcolor="#ffffff" ><? if (!isset($this->magic_vars['item']['summary'])) $this->magic_vars['item']['summary'] = ''; echo $this->magic_vars['item']['summary']; ?></td>
		<td bgcolor="#ffffff"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td bgcolor="#ffffff"><input name="order[]" size="2" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>"type="text" ><input name="type_id[]" type="hidden" size="2" value="<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>" ></td>
		<td  bgcolor="#ffffff" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>��ͨ<? else: ?><font color=red>�ر�</font><? endif; ?></td>
		<td bgcolor="#ffffff"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_edit&type_id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>">�޸�</a>/<a href="#" onclick="javascript:if(confirm('ȷ��Ҫɾ����?������')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_del&type_id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>'">ɾ��</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
		<td   colspan="7" class="action"><input type="button" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_new<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>'" value="�������" />  <input type="submit" value="�޸�����" /> </td>
	</tr>
	</form>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type_new" ||  $this->magic_vars['_A']['query_type'] == "type_edit"): ?>
<div class="module_add">
	
	<form enctype="multipart/form-data" name="form1" method="post" action="" onsubmit="return check_form();"  >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>�༭<? else: ?>���<? endif; ?>��֤����</strong></div>
	
	<div class="module_border">
		<div class="l">��������:</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['attestation_type_result']['name'])) $this->magic_vars['_A']['attestation_type_result']['name'] = ''; echo $this->magic_vars['_A']['attestation_type_result']['name']; ?>" size="30" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����:</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['attestation_type_result']['order'])) $this->magic_vars['_A']['attestation_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['attestation_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
			<input type="radio" name="status" value="0"  <? if (!isset($this->magic_vars['_A']['attestation_type_result']['status'])) $this->magic_vars['_A']['attestation_type_result']['status']=''; ;if (  $this->magic_vars['_A']['attestation_type_result']['status'] == 0): ?>checked="checked"<? endif; ?>/> �ر�<input type="radio" name="status" value="1"  <? if (!isset($this->magic_vars['_A']['attestation_type_result']['status'])) $this->magic_vars['_A']['attestation_type_result']['status']='';if (!isset($this->magic_vars['_A']['attestation_type_result']['status'])) $this->magic_vars['_A']['attestation_type_result']['status']=''; ;if (  $this->magic_vars['_A']['attestation_type_result']['status'] ==1 || $this->magic_vars['_A']['attestation_type_result']['status'] ==""): ?>checked="checked"<? endif; ?>/>��ͨ
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">Ĭ�ϻ���:</div>
		<div class="c">
			<input type="text" name="jifen" value="<? if (!isset($this->magic_vars['_A']['attestation_type_result']['jifen'])) $this->magic_vars['_A']['attestation_type_result']['jifen'] = '';$_tmp = $this->magic_vars['_A']['attestation_type_result']['jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"2");echo $_tmp;unset($_tmp); ?>" /
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��Ҫ˵��:</div>
		<div class="c">
			<textarea name="summary" cols="55" rows="6" ><? if (!isset($this->magic_vars['_A']['attestation_type_result']['summary'])) $this->magic_vars['_A']['attestation_type_result']['summary'] = ''; echo $this->magic_vars['_A']['attestation_type_result']['summary']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע:</div>
		<div class="c">
			<textarea name="remark" cols="55" rows="6" ><? if (!isset($this->magic_vars['_A']['attestation_type_result']['remark'])) $this->magic_vars['_A']['attestation_type_result']['remark'] = ''; echo $this->magic_vars['_A']['attestation_type_result']['remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_submit" >
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "type_edit"): ?><input type="hidden" name="type_id" value="<? if (!isset($this->magic_vars['_A']['attestation_type_result']['type_id'])) $this->magic_vars['_A']['attestation_type_result']['type_id'] = ''; echo $this->magic_vars['_A']['attestation_type_result']['type_id']; ?>" /><? endif; ?>
		<input type="submit" value="ȷ���ύ" />
		<input type="reset" name="reset" value="���ñ�" />
	</div>
	</form>
</div>


<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '�������Ʊ�����д' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="realname"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	 
		<tr >
			
			<td width="*" class="main_td">�û�����</td>
			<td class="main_td">��ʵ����</td>
			<td class="main_td">�Ա�</td>
			<td class="main_td">����</td>
			<td class="main_td">����</td>
			<td class="main_td">֤������</td>
			<td class="main_td">֤������</td>
			<td class="main_td">����</td>
			<td class="main_td">���֤ͼƬ</td>
			<td class="main_td">״̬</td>
			<td class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['user_real_list']) || $this->magic_vars['_A']['user_real_list']=='') $this->magic_vars['_A']['user_real_list'] = array();  $_from = $this->magic_vars['_A']['user_real_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['nation'])) $this->magic_vars['item']['nation'] = '';$_tmp = $this->magic_vars['item']['nation'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['birthday'])) $this->magic_vars['item']['birthday'] = '';$_tmp = $this->magic_vars['item']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d ");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['card_type'])) $this->magic_vars['item']['card_type'] = '';$_tmp = $this->magic_vars['item']['card_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"card_type");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['area'])) $this->magic_vars['item']['area'] = '';$_tmp = $this->magic_vars['item']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['card_pic1'])) $this->magic_vars['item']['card_pic1']=''; ;if (  $this->magic_vars['item']['card_pic1']!=""): ?><a href="<? if (!isset($this->magic_vars['item']['card_pic1'])) $this->magic_vars['item']['card_pic1'] = ''; echo $this->magic_vars['item']['card_pic1']; ?>" target="_blank">����</a><? else: ?>��<? endif; ?>| <? if (!isset($this->magic_vars['item']['card_pic2'])) $this->magic_vars['item']['card_pic2']=''; ;if (  $this->magic_vars['item']['card_pic2']!=""): ?><a  href="<? if (!isset($this->magic_vars['item']['card_pic2'])) $this->magic_vars['item']['card_pic2'] = ''; echo $this->magic_vars['item']['card_pic2']; ?>" target="_blank">����</a><? else: ?>��<? endif; ?></td>
			<!--
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['card_pic1'])) $this->magic_vars['item']['card_pic1']=''; ;if (  $this->magic_vars['item']['card_pic1']!=""): ?><a href="<? if (!isset($this->magic_vars['item']['card_pic1'])) $this->magic_vars['item']['card_pic1'] = ''; echo $this->magic_vars['item']['card_pic1']; ?>"  onclick='tipsWindown("���֤����ͼƬ","img:<? if (!isset($this->magic_vars['item']['card_pic1'])) $this->magic_vars['item']['card_pic1'] = ''; echo $this->magic_vars['item']['card_pic1']; ?>",500,430,"true","","true","img")'>����</a><? else: ?>��<? endif; ?>| <? if (!isset($this->magic_vars['item']['card_pic2'])) $this->magic_vars['item']['card_pic2']=''; ;if (  $this->magic_vars['item']['card_pic2']!=""): ?><a  href="#"  onclick='tipsWindown("���֤����ͼƬ","img:<? if (!isset($this->magic_vars['item']['card_pic2'])) $this->magic_vars['item']['card_pic2'] = ''; echo $this->magic_vars['item']['card_pic2']; ?>",500,430,"true","","true","img")'>����</a><? else: ?>��<? endif; ?></td>
			-->
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['real_status'])) $this->magic_vars['item']['real_status']=''; ;if (  $this->magic_vars['item']['real_status']==2): ?><font color="#00ffff">�ȴ����</font><? else: ?><font color="#009900">���ͨ��</font><? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['real_status'])) $this->magic_vars['item']['real_status']=''; ;if (  $this->magic_vars['item']['real_status']!=1): ?><a href="javascript:void(0)" onclick='tipsWindown("��ʵ�������","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/audit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=realname",500,230,"true","","true","text");'>���</a><? else: ?>-<? endif; ?> </td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" <? if (!isset($_REQUEST['real_status'])) $_REQUEST['real_status']=''; ;if (  $_REQUEST['real_status']==1): ?> selected="selected"<? endif; ?>>��ͨ��</option><option value="0" <? if (!isset($_REQUEST['real_status'])) $_REQUEST['real_status']=''; ;if (  $_REQUEST['real_status']=="0"): ?> selected="selected"<? endif; ?>>δͨ��</option></select> <input type="button" value="����" / onclick="sousuo()">
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
<script>
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/realname';

function sousuo(){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var status = $("#status").val();
	if (status!=""){
		sou += "&real_status="+status;
	}
	
	location.href=url+sou;
	
}
</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "vip"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">�û���</td>
		<td width="*" class="main_td">�ͷ�����</td>
		<th width="" class="main_td">���ʱ��</th>
		<th width="" class="main_td">�û�����</th>
		<th width="" class="main_td">��¼����</th>
		<th width="" class="main_td">״̬</th>
		<th width="" class="main_td">�Ƿ�ɷ�</th>
		<td width="" class="main_td">����</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['user_vip_list']) || $this->magic_vars['_A']['user_vip_list']=='') $this->magic_vars['_A']['user_vip_list'] = array();  $_from = $this->magic_vars['_A']['user_vip_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['kefu_username'])) $this->magic_vars['item']['kefu_username'] = ''; echo $this->magic_vars['item']['kefu_username']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['logintime'])) $this->magic_vars['item']['logintime'] = ''; echo $this->magic_vars['item']['logintime']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status']==2): ?>vip���<? else: ?>VIP��Ա<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vip_money'])) $this->magic_vars['item']['vip_money']=''; ;if (  $this->magic_vars['item']['vip_money']==""): ?>��<? else: ?><? if (!isset($this->magic_vars['item']['vip_money'])) $this->magic_vars['item']['vip_money'] = ''; echo $this->magic_vars['item']['vip_money']; ?>Ԫ<? endif; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/vipview&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">��˲鿴</a> </td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="10" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/vip&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var kefu = $("#kefu").val();
			var keywords = $("#keywords").val();
			location.href=url+"&keywords="+keywords+"&kefu="+kefu;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				�û�����<input type="text" name="keywords" id="keywords" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"/> 	�ͷ��û�����<input type="text" name="kefu" id="kefu" value="<? if (!isset($_REQUEST['kefu'])) $_REQUEST['kefu'] = ''; echo $_REQUEST['kefu']; ?>"/> <input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="10" class="page">
		<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
		</td>
	</tr>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "vipview"): ?>
<div class="module_add">
	
	<form enctype="multipart/form-data" name="form1" method="post" action="" onsubmit="return check_form();"  >
	<div class="module_title"><strong>VIP��˲鿴</strong></div>
	
	<div class="module_border">
		<div class="l">�û���:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = ''; echo $this->magic_vars['_A']['user_result']['username']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���:</div>
		<div class="c">
			<input type="radio" value="1" name="vip_status" />���ͨ�� <input type="radio" value="0" name="vip_status" checked="checked" />��˲�ͨ�� 
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ע:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['vip_remark'])) $this->magic_vars['_A']['user_result']['vip_remark'] = ''; echo $this->magic_vars['_A']['user_result']['vip_remark']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="vip_verify_remark" cols="55" rows="6" ><? if (!isset($this->magic_vars['_A']['user_result']['vip_verify_remark'])) $this->magic_vars['_A']['user_result']['vip_verify_remark'] = ''; echo $this->magic_vars['_A']['user_result']['vip_verify_remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_submit" >
	<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['user_result']['user_id'])) $this->magic_vars['_A']['user_result']['user_id'] = ''; echo $this->magic_vars['_A']['user_result']['user_id']; ?>" />
		<input type="submit" value="ȷ���ύ" />
		<input type="reset" name="reset" value="���ñ�" />
	</div>
	</form>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="all"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	 
		<tr >
			
			<td width="*" class="main_td">�û�����</td>
			<td class="main_td">��ʵ����</td>
			<td class="main_td">ʵ����֤</a></td>
			<td class="main_td">������֤</a></td>
			<td class="main_td" width="220"> �ֻ���֤</td>
			<td class="main_td">��Ƶ��֤</td>
			<td class="main_td">�ֳ���֤</td>
			<td class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['user_all_list']) || $this->magic_vars['_A']['user_all_list']=='') $this->magic_vars['_A']['user_all_list'] = array();  $_from = $this->magic_vars['_A']['user_all_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['real_status'])) $this->magic_vars['item']['real_status']=''; ;if (  $this->magic_vars['item']['real_status']==2): ?><a href="javascript:void(0)" onclick='tipsWindown("��ʵ�������","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/audit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=realname",500,230,"true","","true","text");'><font color="#FF0000">�ȴ����</font></a><? if (!isset($this->magic_vars['item']['real_status'])) $this->magic_vars['item']['real_status']=''; ;elseif (  $this->magic_vars['item']['real_status']==1): ?><font color="#009900">���ͨ��</font><? else: ?><font color="#cccccc">û������</font><? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['email_status'])) $this->magic_vars['item']['email_status']=''; ;if (  $this->magic_vars['item']['email_status']==2): ?><a href="javascript:void(0)" onclick='tipsWindown("������֤���","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/audit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=email",500,230,"true","","true","text");'><font color="#FF0000">�ȴ����</font></a><? if (!isset($this->magic_vars['item']['email_status'])) $this->magic_vars['item']['email_status']=''; ;elseif (  $this->magic_vars['item']['email_status']==1): ?><font color="#009900">���ͨ��</font><? else: ?><font color="#cccccc">û������</font><? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['phone_status'])) $this->magic_vars['item']['phone_status']=''; ;if (  $this->magic_vars['item']['phone_status']>1): ?><font color="#999999">[�ֻ���<? if (!isset($this->magic_vars['item']['phone_status'])) $this->magic_vars['item']['phone_status'] = ''; echo $this->magic_vars['item']['phone_status']; ?>]</font> <a href="javascript:void(0)" onclick='tipsWindown("�ֻ���֤���","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/audit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=phone",500,230,"true","","true","text");'><font color="#FF0000">�ȴ����</font></a><? if (!isset($this->magic_vars['item']['phone_status'])) $this->magic_vars['item']['phone_status']=''; ;elseif (  $this->magic_vars['item']['phone_status']==1): ?><font color="#999999">[�ֻ���<? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?>]</font><font color="#009900">���ͨ��</font><? else: ?><font color="#cccccc">û������</font><? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['video_status'])) $this->magic_vars['item']['video_status']=''; ;if (  $this->magic_vars['item']['video_status']==2): ?><a href="javascript:void(0)" onclick='tipsWindown("��Ƶ��֤���","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/audit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=video",500,230,"true","","true","text");'><font color="#FF0000">�ȴ����</font></a><? if (!isset($this->magic_vars['item']['video_status'])) $this->magic_vars['item']['video_status']=''; ;elseif (  $this->magic_vars['item']['video_status']==1): ?><font color="#009900">���ͨ��</font><? else: ?><font color="#cccccc">û������</font><? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['scene_status'])) $this->magic_vars['item']['scene_status']=''; ;if (  $this->magic_vars['item']['scene_status']==0): ?><a href="javascript:void(0)" onclick='tipsWindown("�ֳ����","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/audit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><font color="#FF0000">�ȴ����</font></a><? if (!isset($this->magic_vars['item']['scene_status'])) $this->magic_vars['item']['scene_status']=''; ;elseif (  $this->magic_vars['item']['scene_status']==1): ?><font color="#009900">���ͨ��</font><? else: ?><font color="#cccccc">û������</font><? endif; ?></td>
			<td class="main_td1" align="center" ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/jifen&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">�����޸�</a></td>
			
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> ��ʵ������<input type="text" name="realname" id="realname" value="<? if (!isset($_REQUEST['realname'])) $_REQUEST['realname'] = ''; echo $_REQUEST['realname']; ?>"/> ״̬<select id="type" ><option value="">ȫ��</option>
			<option value="phone" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="phone"): ?> selected="selected"<? endif; ?>>�ֻ���֤</option>
			<option value="video" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="video"): ?> selected="selected"<? endif; ?>>��Ƶ��֤</option>
			<option value="realname" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="realname"): ?> selected="selected"<? endif; ?>>ʵ����֤</option>
			<option value="email" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="email"): ?> selected="selected"<? endif; ?>>������֤</option>
			<option value="scene" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="scene"): ?> selected="selected"<? endif; ?>>�ֳ���֤</option>
			
			</select> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</table>
	<script>
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/all';

function sousuo(){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var realname = $("#realname").val();
	if (realname!=""){
		sou += "&realname="+realname;
	}
	var type = $("#type").val();
	if (type!=""){
		sou += "&type="+type;
	}
	
	location.href=url+sou;
	
}
</script>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "viewall"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">�û���</td>
		<td width="*" class="main_td">��ʵ����</td>
		<th width="" class="main_td">ʵ����֤</th>
		<th width="" class="main_td">������֤</th>
		<th width="" class="main_td">�ֻ���֤</th>
		<th width="" class="main_td">�Ƿ�VIP</th>
		<th width="" class="main_td">���ʱ��</th>
		<td width="" class="main_td">����</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['viewall_list']) || $this->magic_vars['_A']['viewall_list']=='') $this->magic_vars['_A']['viewall_list'] = array();  $_from = $this->magic_vars['_A']['viewall_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['real_status'])) $this->magic_vars['item']['real_status']=''; ;if (  $this->magic_vars['item']['real_status']==1): ?>����֤<? else: ?><font color="#FF0000">δ��֤</font><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['email_status'])) $this->magic_vars['item']['email_status']=''; ;if (  $this->magic_vars['item']['email_status']==1): ?>����֤<? else: ?><font color="#FF0000">δ��֤</font><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['phone_status'])) $this->magic_vars['item']['phone_status']=''; ;if (  $this->magic_vars['item']['phone_status']==1): ?>����֤<? else: ?><font color="#FF0000">δ��֤</font><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status']==1): ?>VIP��Ա<? else: ?>��ͨ��Ա<? endif; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view_all&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">�鿴ȫ������</a> </td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="10" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/viewall';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var realname = $("#realname").val();
			var keywords = $("#keywords").val();
			location.href=url+"&keywords="+keywords+"&realname="+realname;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				�û�����<input type="text" name="keywords" id="keywords" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"/> ������<input type="text" name="realname" id="realname" value="<? if (!isset($_REQUEST['realname'])) $_REQUEST['realname'] = ''; echo $_REQUEST['realname']; ?>"/> <input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="10" class="page">
		<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
		</td>
	</tr>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "view_all"): ?>
<div class="module_add">
	
	<div class="module_title"><strong>�û���Ϣ�鿴</strong></div>
	
	<div class="module_border">
		<div class="l">�û���:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = ''; echo $this->magic_vars['_A']['user_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��½����:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['logintime'])) $this->magic_vars['_A']['user_result']['logintime'] = ''; echo $this->magic_vars['_A']['user_result']['logintime']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����¼ʱ��:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['lasttime'])) $this->magic_vars['_A']['user_result']['lasttime'] = '';$_tmp = $this->magic_vars['_A']['user_result']['lasttime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="l">ע��ʱ��:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['addtime'])) $this->magic_vars['_A']['user_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['user_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_title"><strong>ʵ����֤��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">��ʵ���� :</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['user_result']['realname'])) $this->magic_vars['_A']['user_result']['realname'] = ''; echo $this->magic_vars['_A']['user_result']['realname']; ?>
		</div>
		<div class="l">�Ա� :</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['sex'])) $this->magic_vars['_A']['user_result']['sex']=''; ;if (  $this->magic_vars['_A']['user_result']['sex']==1): ?>��<? else: ?>Ů<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">֤������:</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['user_result']['card_type'])) $this->magic_vars['_A']['user_result']['card_type'] = '';$_tmp = $this->magic_vars['_A']['user_result']['card_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"card_type");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="l">֤������:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['card_id'])) $this->magic_vars['_A']['user_result']['card_id'] = ''; echo $this->magic_vars['_A']['user_result']['card_id']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����:</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['user_result']['area'])) $this->magic_vars['_A']['user_result']['area'] = '';$_tmp = $this->magic_vars['_A']['user_result']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="l">���֤ͼƬ:</div>
		<div class="c">
			<a href="<? if (!isset($this->magic_vars['_A']['user_result']['card_pic1'])) $this->magic_vars['_A']['user_result']['card_pic1'] = ''; echo $this->magic_vars['_A']['user_result']['card_pic1']; ?>" target="_blank">����</a> | <a href="<? if (!isset($this->magic_vars['_A']['user_result']['card_pic2'])) $this->magic_vars['_A']['user_result']['card_pic2'] = ''; echo $this->magic_vars['_A']['user_result']['card_pic2']; ?>" target="_blank">����</a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����:</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['user_result']['nation'])) $this->magic_vars['_A']['user_result']['nation'] = '';$_tmp = $this->magic_vars['_A']['user_result']['nation'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="l">����:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['birthday'])) $this->magic_vars['_A']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_A']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['real_status'])) $this->magic_vars['_A']['user_result']['real_status']=''; ;if (  $this->magic_vars['_A']['user_result']['real_status']==1): ?>��ͨ����֤<? else: ?>δͨ����֤ <? endif; ?>
		</div>
	</div>
	
	<div class="module_title"><strong>������֤��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">���� :</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['user_result']['email'])) $this->magic_vars['_A']['user_result']['email'] = ''; echo $this->magic_vars['_A']['user_result']['email']; ?>
		</div>
		
	</div>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['email_status'])) $this->magic_vars['_A']['user_result']['email_status']=''; ;if (  $this->magic_vars['_A']['user_result']['email_status']==1): ?>������ͨ����֤<? else: ?>δͨ����֤<? endif; ?>
		</div>
	</div>
	<div class="module_title"><strong>��Ƶ��֤</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['video_status'])) $this->magic_vars['_A']['user_result']['video_status']=''; ;if (  $this->magic_vars['_A']['user_result']['video_status']==1): ?>��ͨ����Ƶ��֤<? if (!isset($this->magic_vars['_A']['user_result']['video_status'])) $this->magic_vars['_A']['user_result']['video_status']=''; ;elseif (  $this->magic_vars['_A']['user_result']['video_status']==2): ?>��Ƶ��֤������<? else: ?>δͨ����Ƶ��֤ <? endif; ?>
		</div>
	</div>
	<div class="module_title"><strong>�ֳ���֤</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['scene_status'])) $this->magic_vars['_A']['user_result']['scene_status']=''; ;if (  $this->magic_vars['_A']['user_result']['scene_status']==1): ?>��ͨ���ֳ���֤<? if (!isset($this->magic_vars['_A']['user_result']['scene_status'])) $this->magic_vars['_A']['user_result']['scene_status']=''; ;elseif (  $this->magic_vars['_A']['user_result']['scene_status']==2): ?>�ֳ���֤������<? else: ?>δͨ���ֳ���֤ <? endif; ?>
		</div>
	</div>
	<div class="module_title"><strong>�ֻ���֤��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">�ֻ��� :</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['user_result']['phone'])) $this->magic_vars['_A']['user_result']['phone'] = '';$_tmp = $this->magic_vars['_A']['user_result']['phone'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['phone_status'])) $this->magic_vars['_A']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_A']['user_result']['phone_status']==1): ?>�ֻ���ͨ����֤<? else: ?>δͨ����֤ <? endif; ?>
		</div>
	</div>
	
	
	<div class="module_title"><strong>VIP��֤��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">���뱸ע:</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['user_result']['vip_verify_remark'])) $this->magic_vars['_A']['user_result']['vip_verify_remark'] = ''; echo $this->magic_vars['_A']['user_result']['vip_verify_remark']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['vip_status'])) $this->magic_vars['_A']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_A']['user_result']['vip_status']==1): ?>VIP��Ա<? else: ?>δͨ�� <? endif; ?>
		</div>
	</div>
	<div class="module_title"><strong>�û�������Ϣ</strong></div>
	
	<div class="module_border">
				<div class="w">����״����</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['marry'])) $this->magic_vars['_A']['userinfo_result']['marry'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['marry'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
		
				<div class="w">�� Ů��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['child'])) $this->magic_vars['_A']['userinfo_result']['child'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['child'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">ѧ ����</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['education'])) $this->magic_vars['_A']['userinfo_result']['education'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['education'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">�����룺</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['income'])) $this->magic_vars['_A']['userinfo_result']['income'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['income'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">�� ����</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['shebao'])) $this->magic_vars['_A']['userinfo_result']['shebao'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['shebao'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">�籣���Ժţ�</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['shebaoid'])) $this->magic_vars['_A']['userinfo_result']['shebaoid'] = ''; echo $this->magic_vars['_A']['userinfo_result']['shebaoid']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">ס��������</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['housing'])) $this->magic_vars['_A']['userinfo_result']['housing'] = ''; echo $this->magic_vars['_A']['userinfo_result']['housing']; ?>
				</div>
				<div class="w">�Ƿ񹺳���</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['car'])) $this->magic_vars['_A']['userinfo_result']['car'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['car'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">���ڼ�¼��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['late'])) $this->magic_vars['_A']['userinfo_result']['late'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['late'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_title"><strong>��������</strong></div>
			<div class="module_border">
				<div class="w">������ַ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_address'])) $this->magic_vars['_A']['userinfo_result']['house_address'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_address']; ?>
				</div>
				<div class="w">���������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_area'])) $this->magic_vars['_A']['userinfo_result']['house_area'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_area']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">������ݣ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_year'])) $this->magic_vars['_A']['userinfo_result']['house_year'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['house_year'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">����״����</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_status'])) $this->magic_vars['_A']['userinfo_result']['house_status'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_status']; ?> Ԫ
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">����Ȩ��1��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_holder1'])) $this->magic_vars['_A']['userinfo_result']['house_holder1'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_holder1']; ?> ��Ȩ�ݶ�<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_right1'])) $this->magic_vars['_A']['userinfo_result']['house_right1'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_right1']; ?>
				</div>
				<div class="w">����Ȩ��2��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_holder2'])) $this->magic_vars['_A']['userinfo_result']['house_holder2'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_holder2']; ?> ��Ȩ�ݶ�<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_right2'])) $this->magic_vars['_A']['userinfo_result']['house_right2'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_right2']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">���������ڰ�����, ����д��</div>
				<div class="h">
					�������ޣ�<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_loanyear'])) $this->magic_vars['_A']['userinfo_result']['house_loanyear'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_loanyear']; ?> ÿ�¹��� <? if (!isset($this->magic_vars['_A']['userinfo_result']['house_loanprice'])) $this->magic_vars['_A']['userinfo_result']['house_loanprice'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_loanprice']; ?> Ԫ
				</div>
				<div class="w">��Ƿ������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_balance'])) $this->magic_vars['_A']['userinfo_result']['house_balance'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_balance']; ?> Ԫ
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">�������У�</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['house_bank'])) $this->magic_vars['_A']['userinfo_result']['house_bank'] = ''; echo $this->magic_vars['_A']['userinfo_result']['house_bank']; ?>
				</div>
			</div>
			
			<div class="module_title"><strong>��˾����</strong></div>
			<div class="module_border">
				<div class="w">��˾���ƣ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_name'])) $this->magic_vars['_A']['userinfo_result']['company_name'] = ''; echo $this->magic_vars['_A']['userinfo_result']['company_name']; ?>
				</div>
				<div class="w">��˾���ʣ�</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_type'])) $this->magic_vars['_A']['userinfo_result']['company_type'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['company_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">��˾��ҵ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_industry'])) $this->magic_vars['_A']['userinfo_result']['company_industry'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['company_industry'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">��������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_jibie'])) $this->magic_vars['_A']['userinfo_result']['company_jibie'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['company_jibie'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">ְ λ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_office'])) $this->magic_vars['_A']['userinfo_result']['company_office'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['company_office'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">����ʱ�䣺</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_worktime1'])) $this->magic_vars['_A']['userinfo_result']['company_worktime1'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['company_worktime1'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>  ��<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_worktime2'])) $this->magic_vars['_A']['userinfo_result']['company_worktime2'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['company_worktime2'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">�������ޣ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_workyear'])) $this->magic_vars['_A']['userinfo_result']['company_workyear'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['company_workyear'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">�����绰��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_tel'])) $this->magic_vars['_A']['userinfo_result']['company_tel'] = ''; echo $this->magic_vars['_A']['userinfo_result']['company_tel']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">��˾��ַ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_address'])) $this->magic_vars['_A']['userinfo_result']['company_address'] = ''; echo $this->magic_vars['_A']['userinfo_result']['company_address']; ?>
				</div>
				<div class="w">��˾��վ��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_weburl'])) $this->magic_vars['_A']['userinfo_result']['company_weburl'] = ''; echo $this->magic_vars['_A']['userinfo_result']['company_weburl']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">��˾��ע˵����</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['company_reamrk'])) $this->magic_vars['_A']['userinfo_result']['company_reamrk'] = ''; echo $this->magic_vars['_A']['userinfo_result']['company_reamrk']; ?>
				</div>
			</div>
			
			<div class="module_title"><strong>˽Ӫҵ������</strong></div>
			<div class="module_border">
				<div class="w">˽Ӫ��ҵ���ͣ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_type'])) $this->magic_vars['_A']['userinfo_result']['private_type'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['private_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">�������ڣ�</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_date'])) $this->magic_vars['_A']['userinfo_result']['private_date'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['private_date'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">��Ӫ������</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_place'])) $this->magic_vars['_A']['userinfo_result']['private_place'] = ''; echo $this->magic_vars['_A']['userinfo_result']['private_place']; ?>
				</div>
				<div class="w">���</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_rent'])) $this->magic_vars['_A']['userinfo_result']['private_rent'] = ''; echo $this->magic_vars['_A']['userinfo_result']['private_rent']; ?>Ԫ
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">���ڣ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_term'])) $this->magic_vars['_A']['userinfo_result']['private_term'] = ''; echo $this->magic_vars['_A']['userinfo_result']['private_term']; ?> ��
				</div>
				<div class="w">˰���ţ�</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_taxid'])) $this->magic_vars['_A']['userinfo_result']['private_taxid'] = ''; echo $this->magic_vars['_A']['userinfo_result']['private_taxid']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">���̵ǼǺţ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_commerceid'])) $this->magic_vars['_A']['userinfo_result']['private_commerceid'] = ''; echo $this->magic_vars['_A']['userinfo_result']['private_commerceid']; ?>
				</div>
				<div class="w">ȫ��ӯ��/����</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_income'])) $this->magic_vars['_A']['userinfo_result']['private_income'] = ''; echo $this->magic_vars['_A']['userinfo_result']['private_income']; ?> Ԫ����ȣ�
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">��Ա������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['private_employee'])) $this->magic_vars['_A']['userinfo_result']['private_employee'] = ''; echo $this->magic_vars['_A']['userinfo_result']['private_employee']; ?>  ��
				</div>
			</div>
			<div class="module_title"><strong>����״��</strong></div>
			<div class="module_border">
				<div class="w">ÿ���޵�Ѻ�����</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['finance_repayment'])) $this->magic_vars['_A']['userinfo_result']['finance_repayment'] = ''; echo $this->magic_vars['_A']['userinfo_result']['finance_repayment']; ?> Ԫ
				</div>
				<div class="w">���з�����</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['finance_property'])) $this->magic_vars['_A']['userinfo_result']['finance_property'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['finance_property'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">ÿ�·��ݰ��ҽ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['finance_amount'])) $this->magic_vars['_A']['userinfo_result']['finance_amount'] = ''; echo $this->magic_vars['_A']['userinfo_result']['finance_amount']; ?> Ԫ
				</div>
				<div class="w">����������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['finance_car'])) $this->magic_vars['_A']['userinfo_result']['finance_car'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['finance_car'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">ÿ���������ҽ�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['finance_caramount'])) $this->magic_vars['_A']['userinfo_result']['finance_caramount'] = ''; echo $this->magic_vars['_A']['userinfo_result']['finance_caramount']; ?> Ԫ
				</div>
				<div class="w">ÿ�����ÿ������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['finance_creditcard'])) $this->magic_vars['_A']['userinfo_result']['finance_creditcard'] = ''; echo $this->magic_vars['_A']['userinfo_result']['finance_creditcard']; ?> Ԫ
				</div>
			</div>
			<div class="module_title"><strong>��ϵ��ʽ</strong></div>
			<div class="module_border">
				<div class="w">��ס�ص绰��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['tel'])) $this->magic_vars['_A']['userinfo_result']['tel'] = ''; echo $this->magic_vars['_A']['userinfo_result']['tel']; ?>
				</div>
			
				<div class="w">�ֻ����룺</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['phone'])) $this->magic_vars['_A']['userinfo_result']['phone'] = ''; echo $this->magic_vars['_A']['userinfo_result']['phone']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">��ס����ʡ�У�</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['area'])) $this->magic_vars['_A']['userinfo_result']['area'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="w">��ס���ʱࣺ</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['post'])) $this->magic_vars['_A']['userinfo_result']['post'] = ''; echo $this->magic_vars['_A']['userinfo_result']['post']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">�־�ס��ַ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['address'])) $this->magic_vars['_A']['userinfo_result']['address'] = ''; echo $this->magic_vars['_A']['userinfo_result']['address']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">�ڶ���ϵ��������</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['linkman1'])) $this->magic_vars['_A']['userinfo_result']['linkman1'] = ''; echo $this->magic_vars['_A']['userinfo_result']['linkman1']; ?>
				</div>
				<div class="w">�ڶ���ϵ�˹�ϵ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['relation1'])) $this->magic_vars['_A']['userinfo_result']['relation1'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['relation1'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">�ڶ���ϵ����ϵ�绰��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['tel1'])) $this->magic_vars['_A']['userinfo_result']['tel1'] = ''; echo $this->magic_vars['_A']['userinfo_result']['tel1']; ?>
				</div>
				<div class="w">�ڶ���ϵ����ϵ�ֻ���</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['phone1'])) $this->magic_vars['_A']['userinfo_result']['phone1'] = ''; echo $this->magic_vars['_A']['userinfo_result']['phone1']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">������ϵ��������</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['linkman2'])) $this->magic_vars['_A']['userinfo_result']['linkman2'] = ''; echo $this->magic_vars['_A']['userinfo_result']['linkman2']; ?>
				</div>
				<div class="w">������ϵ�˹�ϵ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['relation2'])) $this->magic_vars['_A']['userinfo_result']['relation2'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['relation2'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">������ϵ����ϵ�绰��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['tel2'])) $this->magic_vars['_A']['userinfo_result']['tel2'] = ''; echo $this->magic_vars['_A']['userinfo_result']['tel2']; ?>
				</div>
				<div class="w">������ϵ����ϵ�ֻ���</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['phone2'])) $this->magic_vars['_A']['userinfo_result']['phone2'] = ''; echo $this->magic_vars['_A']['userinfo_result']['phone2']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">������ϵ��������</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['linkman3'])) $this->magic_vars['_A']['userinfo_result']['linkman3'] = ''; echo $this->magic_vars['_A']['userinfo_result']['linkman3']; ?>
				</div>
				<div class="w">������ϵ�˹�ϵ��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['relation3'])) $this->magic_vars['_A']['userinfo_result']['relation3'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['relation3'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">������ϵ����ϵ�绰��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['tel3'])) $this->magic_vars['_A']['userinfo_result']['tel3'] = ''; echo $this->magic_vars['_A']['userinfo_result']['tel3']; ?>
				</div>
				<div class="w">������ϵ����ϵ�ֻ���</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['phone3'])) $this->magic_vars['_A']['userinfo_result']['phone3'] = ''; echo $this->magic_vars['_A']['userinfo_result']['phone3']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">MSN��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['msn'])) $this->magic_vars['_A']['userinfo_result']['msn'] = ''; echo $this->magic_vars['_A']['userinfo_result']['msn']; ?>
				</div>
				<div class="w">QQ��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['qq'])) $this->magic_vars['_A']['userinfo_result']['qq'] = ''; echo $this->magic_vars['_A']['userinfo_result']['qq']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="w">������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['wangwang'])) $this->magic_vars['_A']['userinfo_result']['wangwang'] = ''; echo $this->magic_vars['_A']['userinfo_result']['wangwang']; ?>
				</div>
			</div>
			<div class="module_title"><strong>��ż����</strong></div>
			<div class="module_border">
				<div class="l">��ż������</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_name'])) $this->magic_vars['_A']['userinfo_result']['mate_name'] = ''; echo $this->magic_vars['_A']['userinfo_result']['mate_name']; ?>
				</div>
				<div class="l">ÿ��н��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_salary'])) $this->magic_vars['_A']['userinfo_result']['mate_salary'] = ''; echo $this->magic_vars['_A']['userinfo_result']['mate_salary']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="l">�ƶ��绰��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_phone'])) $this->magic_vars['_A']['userinfo_result']['mate_phone'] = ''; echo $this->magic_vars['_A']['userinfo_result']['mate_phone']; ?>
				</div>
				<div class="l">��λ�绰��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_tel'])) $this->magic_vars['_A']['userinfo_result']['mate_tel'] = ''; echo $this->magic_vars['_A']['userinfo_result']['mate_tel']; ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="l">������λ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_type'])) $this->magic_vars['_A']['userinfo_result']['mate_type'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['mate_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
				<div class="l">ְλ��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_office'])) $this->magic_vars['_A']['userinfo_result']['mate_office'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['mate_office'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="l">��λ��ַ��</div>
				<div class="h">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_address'])) $this->magic_vars['_A']['userinfo_result']['mate_address'] = ''; echo $this->magic_vars['_A']['userinfo_result']['mate_address']; ?>
				</div>
				<div class="l">�����룺</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['mate_income'])) $this->magic_vars['_A']['userinfo_result']['mate_income'] = ''; echo $this->magic_vars['_A']['userinfo_result']['mate_income']; ?>
				</div>
			</div>
			<div class="module_title"><strong>������Ϣ</strong></div>
			<div class="module_border">
				<div class="l">����������</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['ability'])) $this->magic_vars['_A']['userinfo_result']['ability'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['ability'];$_tmp = $this->magic_modifier("nl2br",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="l">���˰��ã�</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['interest'])) $this->magic_vars['_A']['userinfo_result']['interest'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['interest'];$_tmp = $this->magic_modifier("nl2br",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="module_border">
				<div class="l">����˵����</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_A']['userinfo_result']['others'])) $this->magic_vars['_A']['userinfo_result']['others'] = '';$_tmp = $this->magic_vars['_A']['userinfo_result']['others'];$_tmp = $this->magic_modifier("nl2br",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "jifen"): ?>
<form method="post">
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">�û���</td>
		<td width="*" class="main_td">��ʵ����</td>
		<th width="" class="main_td">��֤����</th>
		<th width="" class="main_td">��֤����</th>
		<th width="" class="main_td">��ע</th>
		<th width="" class="main_td">���ʱ��</th>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['jifen_result']) || $this->magic_vars['_A']['jifen_result']=='') $this->magic_vars['_A']['jifen_result'] = array();  $_from = $this->magic_vars['_A']['jifen_result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?><input type="hidden" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" name="id[]" /></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></td>
		<td class="main_td1" align="center"><input type="text" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = ''; echo $this->magic_vars['item']['value']; ?>" size="5" name="val[]" /></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr >
		<td colspan="7"><input type="submit" value="�޸Ļ���" /></td>
	</tr>
</table>
</form>
<? endif; ?>