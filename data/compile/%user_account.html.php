<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<!-- ������� -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/user_index.css" />

<script>
var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";

function sousuo(){
	var _url = "";
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var dotime2 = $("#dotime2").val();
	var type = $("#type").val();
	var type = $("#type").val();
	if (username!=null){
		 _url += "&username="+username;
	}
	if (keywords!=null){
		 _url += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 _url += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 _url += "&dotime2="+dotime2;
	}
	if (type!=null){
		 _url += "&type="+type;
	}
	location.href=url+_url;
}
/*���������  20130829*/
var item = 1;
function showSubitem(item_no){
	item = item_no;
	
	var item_div = $("#sub_item");
	var subitem1 = $("#subitem1");
	var subitem2 = $("#subitem2");
	var subitem3 = $("#sub_item3");
	var subitem4 = $("#sub_item4");
	
	if(item==1){
		
		$("#subitem1").addClass("active");
		$("#subitem2").removeClass();
		$("#subitem3").removeClass();
		$("#subitem4").removeClass();
		
		$("#account_history").show();
		$("#personal_account").hide();
		$("#invest_account").hide();
		$("#borrow_account").hide();
	}else if(item==2){
		$("#subitem2").addClass("active");
		$("#subitem1").removeClass();
		$("#subitem3").removeClass();
		$("#subitem4").removeClass();
		
		$("#personal_account").show();
		$("#account_history").hide();
		$("#invest_account").hide();
		$("#borrow_account").hide();
	}else if(item==3){
		$("#subitem3").addClass("active");
		$("#subitem1").removeClass();
		$("#subitem2").removeClass();
		$("#subitem4").removeClass();
		
		$("#account_history").hide();
		$("#personal_account").hide();
		$("#invest_account").show();
		$("#borrow_account").hide();
	}else if(item==4){
		$("#subitem4").addClass("active");
		$("#subitem1").removeClass();
		$("#subitem2").removeClass();
		$("#subitem3").removeClass();
		
		$("#account_history").hide();
		$("#personal_account").hide();
		$("#invest_account").hide();
		$("#borrow_account").show();
	}
	
}
</script>


<!--�û����ĵ�����Ŀ ��ʼ-->
<div class="container clearfix" style="margin-top:15px;">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--��ߵĵ��� ����-->
	<!--�ҵ��˻���Ϣ  -->
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="header-menu">
			<ul>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">�ʻ�����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="bank"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bank">�����˺�</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="recharge_new"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/recharge_new">�ʻ���ֵ</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="recharge"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/recharge">��ֵ��¼</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="cash_new"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash_new">�ʻ�����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="cash"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash">���ּ�¼</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="log"): ?> class="current"<? endif; ?>><a  style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/log">�ʽ���ϸ</a></li>
			</ul>
		</div>
		
		<div class="user_right_main">
		<!--�ʽ�ʹ�ü�¼�б� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="log"): ?>
		<div  style="height:30px; padding-top:7px;padding-bottom:10px;"> 
		��¼ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		<? $result = $this->magic_vars['_G']['_linkage']['account_type']; echo "<select name='type' id=type >"; echo "<option value=''>ȫ��</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['type']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?> <input class="button_blue_small" value="����" type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" /> 
		
		</div>	
		�ܼƣ���<? if (!isset($this->magic_vars['_U']['account_num'])) $this->magic_vars['_U']['account_num'] = '';$_tmp = $this->magic_vars['_U']['account_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
			  <form action="" method="post">
			<table  class="products_table">
				<tr class="head">
					<th width="80px">����</th>
					<th width="50px">�������</th>
					<th>�ܽ��</th>
					<th>���ý��</th>
					<th>������</th>
					<th>���ս��</th>
					<th >���׶Է�</th>
					<th width="120px">��¼ʱ��</th>
					<th width="140px">��ע��Ϣ</th>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_log_list']) || $this->magic_vars['_U']['account_log_list']=='') $this->magic_vars['_U']['account_log_list'] = array();  $_from = $this->magic_vars['_U']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = ''; echo $this->magic_vars['item']['collection']; ?></td>
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['to_user'])) $this->magic_vars['item']['to_user'] = ''; echo $this->magic_vars['item']['to_user']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"admin");echo $_tmp;unset($_tmp); ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					<td width="130"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>
				<div class="page">
					<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
				</div>
			</form>	
		
		<!--�ʽ�ʹ�ü�¼�б� ����-->
		
		<!--��ֵ��¼�б� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="recharge"): ?>
		<div class="user_help">�ɹ���ֵ&nbsp;<? if (!isset($this->magic_vars['_U']['account_log']['recharge_success'])) $this->magic_vars['_U']['account_log']['recharge_success'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>&nbsp;Ԫ�����ϳɹ���ֵ&nbsp;<? if (!isset($this->magic_vars['_U']['account_log']['recharge_online'])) $this->magic_vars['_U']['account_log']['recharge_online'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_online'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>&nbsp;Ԫ�����³ɹ���ֵ&nbsp;<? if (!isset($this->magic_vars['_U']['account_log']['recharge_downline'])) $this->magic_vars['_U']['account_log']['recharge_downline'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_downline'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>&nbsp;Ԫ���ֶ��ɹ���ֵ&nbsp;<? if (!isset($this->magic_vars['_U']['account_log']['recharge_shoudong'])) $this->magic_vars['_U']['account_log']['recharge_shoudong'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_shoudong'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>&nbsp;Ԫ
</div>
		<form action="" method="post">
		<table  class="products_table">
			<tr class="head" >
			<th>����</th>
			<th>֧����ʽ</th>
			<th>��ֵ���</th>
			<th>��ע</th>
			<th>��ֵʱ��</th>
			<th>״̬</th>
			<th>����ע</th>
			</tr>
			<? $this->magic_vars['query_type']='GetRechargeList';$data = array('showpage'=>'3','var'=>'loop','user_id'=>'0','epage'=>'20','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetRechargeList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?>���ϳ�ֵ<? else: ?>���³�ֵ<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['payment_name'])) $this->magic_vars['item']['payment_name'] = '';$_tmp = $this->magic_vars['item']['payment_name'];$_tmp = $this->magic_modifier("default",$_tmp,"�ֶ���ֵ");echo $_tmp;unset($_tmp); ?></td>
			<td><font color="#FF0000">��<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></font></td>
			<td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> ��ֵ�ɹ� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>��ֵʧ��<? endif; ?></td>
			
			<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = '';$_tmp = $this->magic_vars['item']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
				</div>
			<? unset($_magic_vars); ?>
		</form>	
		<!--��ֵ��¼�б� ����-->
		
		<!--���ּ�¼�б� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="cash"): ?>
		<div class="user_help">�ɹ�����<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['money'])) $this->magic_vars['_U']['cash_log']['cash_success']['money'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ�����ֵ���<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['credited'])) $this->magic_vars['_U']['cash_log']['cash_success']['credited'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['credited'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ��������<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['fee'])) $this->magic_vars['_U']['cash_log']['cash_success']['fee'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ
</div>
			<form action="" method="post">
		<table  class="products_table">
				<tr class="head">
					<th>��������</th>
					<th>�����˺�</th>
					<th>�����ܶ�</th>
					<th>���˽��</th>
					<th>������</th>
					<th>����ʱ��</th>
					<th>״̬</th>
					<th>����</th>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_cash_list']) || $this->magic_vars['_U']['account_cash_list']=='') $this->magic_vars['_U']['account_cash_list'] = array();  $_from = $this->magic_vars['_U']['account_cash_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['credited'])) $this->magic_vars['item']['credited'] = '';$_tmp = $this->magic_vars['item']['credited'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>��<? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = '';$_tmp = $this->magic_vars['item']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>	
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> ���ֳɹ� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>����ʧ�� <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>�û�ȡ��<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark']=''; ;if (  $this->magic_vars['item']['verify_remark']!=""): ?><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = ''; echo $this->magic_vars['item']['verify_remark']; ?><? else: ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><a href="#" onclick="javascript:if(confirm('ȷ��Ҫȡ������������')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash_cancel&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ȡ������</a><? else: ?>-<? endif; ?><? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>
				<div class="page">
					<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
				</div>
			</form>	
		<!--���ּ�¼�б� ����-->
		
		<!--�˺ų�ֵ ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="recharge_new"): ?>
		<div class="user_help"><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��ֹ���ÿ����֡���ٽ��׵���Ϊ,һ�����ֽ����Դ���,�����������ڣ������տ�����˻�������ֹͣ����,���п���Ӱ��������ü�¼��
</div>
		<div class="user_right_border">
			<div class="l">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�˺ţ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
			</div>
		</div>
		<form action="" method="post" name="form1"  onsubmit = "return check();" >
		<div id="returnpay">
		<div class="user_right_border">
			<div class="l">��ֵ��ʽ��</div>
			<div class="c">
				<input type="radio" name="type"  id="type"  class="input_border" checked="checked" onclick="change_type(1)" value="1"  /> ���ϳ�ֵ 
				&nbsp;&nbsp;&nbsp;<input type="radio" name="type"  id="type" class="input_border"  value="2"  onclick="change_type(2)" /> ���³�ֵ 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��ֵ��</div>
			<div class="c">
				<input type="text" name="money"  class="input_border" value="" size="10" onkeyup="commit(this);" maxlength="9" /> Ԫ 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="realacc">ʵ�����ˣ�<font color="#FF0000" id="real_money">0</font> Ԫ</span>
			</div>
		</div>
		<div id="type_net">
			<div class="user_right_border">
				<div class="l">��ֵ���ͣ�</div>
				<div class="c">
					<?  if(!isset($this->magic_vars['_U']['account_payment_list']) || $this->magic_vars['_U']['account_payment_list']=='') $this->magic_vars['_U']['account_payment_list'] = array();  $_from = $this->magic_vars['_U']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']!="offline"): ?>
					<input type="radio" name="payment1"  class="input_border" checked="checked" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" id="payment1"  /> <? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?> <input type="hidden" name="payname<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" />(<? if (!isset($this->magic_vars['var']['description'])) $this->magic_vars['var']['description'] = ''; echo $this->magic_vars['var']['description']; ?>) <br />
					<? endif; ?>
					<? endforeach; endif; unset($_from); ?>
				</div>
			</div>
		</div>
		
		<div id="type_now" class="dishide">
			<div class="user_right_border">
				<div class="l">��ֵ���У�</div>
					<?  if(!isset($this->magic_vars['_U']['account_payment_list']) || $this->magic_vars['_U']['account_payment_list']=='') $this->magic_vars['_U']['account_payment_list'] = array();  $_from = $this->magic_vars['_U']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']=="offline"): ?>
				<div class="c">
					<input type="radio" name="payment2"  class="input_border" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"  /><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>  
				</div>
				<div class="explain">
					<span class="span-red">*</span>
					<span class="explain_text"><? if (!isset($this->magic_vars['var']['description'])) $this->magic_vars['var']['description'] = ''; echo $this->magic_vars['var']['description']; ?></span>
				</div>
					<? endif; ?>
					<? endforeach; endif; unset($_from); ?>
				
			</div>
			<div class="user_right_border">
				<div class="l">�˵���ˮ�ţ�</div>
				<div class="c">
					<input type="text" name="remark"  class="input_border" value="" size="30" />
				</div>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			</div>
		</div>
		<div class="user_right_border" style="text-align:center;">			
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
		</div>
		</form>
		</div>
		
		
		
		
		<script>
		function check(){
			var aa = "";
			aa = $("input[name=type][checked]").val();
			if(aa == 2){
				//if (!ctype()){
					//alert('��ѡ���ֵ������');
				//return false;
				//}
			}
		}
			function change_type(type){
				
				if (type==2){
					$("#type_net").addClass("dishide");
					$("#type_now").removeClass();
					$("#realacc").hide();
				}else{
					$("#type_now").addClass("dishide");
					$("#type_net").removeClass();
					
					$("#realacc").show();
				}
				
			}
		function payment (){
	 		var type = GetRadioValue("type");
			if (type==1){
				$("#returnpay").html("<font color='red'>�뵽�򿪵���ҳ���ֵ</font>");
				
			}
			
		}
		function ctype(){
		var resualt=false;
		
			alert(document.form1.payment2.length);
			for(var i=0;i<document.form1.payment2.length;i++)
			{
				
				if(document.form1.payment2[i].checked)
				{
				  resualt=true;
				}
			}
			return resualt;
		}
        function commit(obj) {
            if (parseFloat(obj.value) > 0 ) 
            {
//                var realMoney = Math.round(parseFloat(obj.value)) / 100;

//                if (realMoney > 50) realMoney = 50;

//                document.getElementById("hspanReal").innerText = Math.round(parseFloat(obj.value)*10)/10 - realMoney;
                var realMoney=parseFloat(obj.value);
                if(realMoney>=5000)
                {
                    document.getElementById("real_money").innerText = realMoney - 50;
                }
                else 
                {
                    document.getElementById("real_money").innerText = parseInt(realMoney*0.99*100)/100;
                }
            }else{
				 var realMoney=parseFloat(obj.value);
                 document.getElementById("real_money").innerText = realMoney ;
			}
        }
    </script>
		
		<div class="user_right_foot">
		* ��ܰ��ʾ���������г�ֵ�����������ĵȴ�,��ֵ�ɹ����벻Ҫ�ر������,��ֵ�ɹ��󷵻�<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>,��ֵ�����ܴ��������ʺš���������,����������ϵ
		</div>
		
		<!--�˺ų�ֵ ����-->
		
		
		<!--�����˺� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="bank"): ?>
		<div class="user_help"><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��ֹ���ÿ����֡���ٽ��׵���Ϊ,һ�����ֽ����Դ���,�����������ڣ������տ�����˻�������ֹͣ����,���п���Ӱ��������ü�¼��
</div>
		<div class="user_right_border">
			<div class="l">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['realname'])) $this->magic_vars['_U']['account_bank_result']['realname'] = ''; echo $this->magic_vars['_U']['account_bank_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�˺ţ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['email'])) $this->magic_vars['_U']['account_bank_result']['email'] = ''; echo $this->magic_vars['_U']['account_bank_result']['email']; ?>
			</div>
		</div>
		
		<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank']=''; ;if (  $this->magic_vars['_U']['account_bank_result']['bank']!=""): ?>
		<div class="user_right_border">
			<div class="l">�������У�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = '';$_tmp = $this->magic_vars['_U']['account_bank_result']['bank'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���������ƣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['branch'])) $this->magic_vars['_U']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_U']['account_bank_result']['branch']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����˺ţ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['account'])) $this->magic_vars['_U']['account_bank_result']['account'] = ''; echo $this->magic_vars['_U']['account_bank_result']['account']; ?>
			</div>
		</div>
		<? endif; ?>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">�������У�</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=bank&nid=account_bank&value=<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = ''; echo $this->magic_vars['_U']['account_bank_result']['bank']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������֧�����ƣ�</div>
			<div class="c">
				<input style="width:200px" type="text" name="branch" value="<? if (!isset($this->magic_vars['_U']['account_bank_result']['branch'])) $this->magic_vars['_U']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_U']['account_bank_result']['branch']; ?>" />
			</div>
			<div class="explain">
				<span class="span-red">*</span>
				<span class="explain_text">**����**֧��**������Ӫҵ��(�磺�Ϻ���������֧�пؽ�·����),������޷�ȷ��,�������µ����Ŀ������пͷ�����ѯ�ʡ� </span>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����˺ţ�</div>
			<div class="c">
				<input style="width:200px" type="text" name="account" value="<? if (!isset($this->magic_vars['_U']['account_bank_result']['account'])) $this->magic_vars['_U']['account_bank_result']['account'] = ''; echo $this->magic_vars['_U']['account_bank_result']['account']; ?>" />
			</div>
			<div class="explain">
				<span class="span-red">*</span>
				<span class="explain_text">�ر����ѣ��������п��ŵĿ�������������Ϊ��<? if (!isset($this->magic_vars['_U']['account_bank_result']['realname'])) $this->magic_vars['_U']['account_bank_result']['realname'] = ''; echo $this->magic_vars['_U']['account_bank_result']['realname']; ?>��, ���������˺ű�����д��ȷ,�������������ʽ𽫴��ڷ��ա� ���Ҫ�޸ı���Ҫ��ȫ, �����κ�ʱ���޸��������������������п��š�</span>
			</div>
		</div>
		
		<div class="user_right_border" style="text-align:center;">
				<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" />
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
		</div>
		</form>
		<div class="user_right_foot">
		* ��ܰ��ʾ����ֹ���ÿ�����
		</div>
		<!--�����˺� ����-->
		
		
		<!--���� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="cash_new"): ?>
		<div class="user_help">ע��1����������Ҫȡ�����,���ǽ���1��3��������(���ҽڼ��ճ���)֮�ڽ�Ǯת������վ����д�������ʺš� <br />
			  2�����㼱��Ҫ��Ǯת������ʺŻ���24Сʱ֮����վδ��Ǯת�뵽��������ʺ�,����ϵ�ͷ����ġ� <br />
			  3��ȷ�����������ʺŵ�������������վ�ϵ���ʵ����һ�¡� <br />
			  4����Ǯ�����ʺ�ʱ�ᷢһ��վ����֪ͨ�㡣 <br />
			  5��ÿ�����ֽ������10Ԫ���ϡ� <br />
			  6��ÿ�����ֽ����߲��ܳ���44980Ԫ���ϡ� <br />
			  7����Ŀǰ����ȡ����߶����<font color="#FF0000"><? if (!isset($this->magic_vars['_G']['user_cache']['use_money'])) $this->magic_vars['_G']['user_cache']['use_money']=''; ;if (  $this->magic_vars['_G']['user_cache']['use_money']>44980): ?>44980<? else: ?><? if (!isset($this->magic_vars['_G']['user_cache']['use_money'])) $this->magic_vars['_G']['user_cache']['use_money'] = ''; echo $this->magic_vars['_G']['user_cache']['use_money']; ?><? endif; ?>Ԫ</font>�� <br />
		</div>
		<form action="" method="post" onsubmit="return check_form()" name="form1">
		<div class="user_right_border">
			<div class="l">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�˻���</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����ܶ</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['no_use_money'])) $this->magic_vars['_G']['user_result']['no_use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���ֵ����У�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = '';$_tmp = $this->magic_vars['_U']['account_bank_result']['bank'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?> <? if (!isset($this->magic_vars['_U']['account_bank_result']['branch'])) $this->magic_vars['_U']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_U']['account_bank_result']['branch']; ?> <? if (!isset($this->magic_vars['_U']['account_bank_result']['account'])) $this->magic_vars['_U']['account_bank_result']['account'] = ''; echo $this->magic_vars['_U']['account_bank_result']['account']; ?> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������룺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['paypassword'])) $this->magic_vars['_U']['account_bank_result']['paypassword']=''; ;if (  $this->magic_vars['_U']['account_bank_result']['paypassword']==""): ?><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>&q=code/user/paypwd"><font color="#FF0000">��������һ��֧������</font></a><? else: ?><input type="password" name="paypassword" /><? endif; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���ֽ�</div>
			<div class="c">
				<input type="text" name="money" />
			</div>
			<div class="explain">
				<span>����10ԪС��44980Ԫ</span>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			</div>
		</div>
		<div class="user_right_border" style="text-align:center;">
				<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" />
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
		</div>
		</form>
		<div class="user_right_foot">
		* ��ܰ��ʾ����ֹ���ÿ�����
		</div>
		
<script>
var use_money = <? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;

function check_form(){
	 var frm = document.forms['form1'];
	 var paypassword = frm.elements['paypassword'].value;
	 var money = frm.elements['money'].value;
	 var errorMsg = '';
	  if (paypassword.length == 0 ) {
		errorMsg += '���������Ľ�������' + '\n';
	  }
	  if (money.length == 0 ) {
		errorMsg += '������������ֽ��' + '\n';
	  }
	 if (money <10 || money >44980) {
		errorMsg += '���ֽ��Ҫ����10Ԫ����44980' + '\n';
	  }

	 if (money >use_money) {
		errorMsg += '�������ֽ��������еĿ������' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>

		<!--���� ����-->
				<? else: ?>
				
				<? $this->magic_vars['day7'] = time()-6*60*60*24;?>
				<? $this->magic_vars['nowtime'] = time();?>
				
		<div style="height:30px; padding-top:7px;padding-bottom:10px;"> 
		����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		<input class="button_blue_small" value="����" type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />
		</div>	

 		<div class="tab-bar" style="margin-top:10px;margin-bottom:10px;">
          <ul>
          		<li id="subitem1" class="active"  onclick="showSubitem(1)"><a >�ʽ��¼</a></li>
          		<li  id="subitem2" onclick="showSubitem(2)"><a >�����ʽ�����</a></li>
				<li id="subitem3"  onclick="showSubitem(3)"><a >Ͷ���ʽ�����</a></li>
				<li  id="subitem4" onclick="showSubitem(4)"><a >�����ʽ�����</a></li>
 <!--   		<li class="active"><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/account_history">�ʽ��¼</a></li>
          		<li ><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/personal_account">�����ʽ�����</a></li>
				<li ><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/invest_account">Ͷ���ʽ�����</a></li>
				<li ><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_account">�����ʽ�����</a></li>
  -->      
          </ul>
        </div>
		
		<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
		
		<div id="sub_item" ></div>
			<!-- �����ʽ������� -->
			<div id="personal_account" class="index-middle-r i-news-w block-r"
				style="display:none;width: 700px; margin-top: 5px;">
				<div class="block-title clearfix" 
					style="background: #375eb7; width:740px;color: #FFF;">
					<font style="padding-top: 0px;">�����ʽ����� </font>
				</div>
				<div class="i-news-c" style="padding: 0px;">

					<table class="fdjz_table" cellpadding="0" cellspacing="0"
						border="0">
						<thead>
							<tr>
								<td class="first">�˻��ܶ�</td>
								<td>�������</td>
								<td>�����ܶ�</td>
								<td class="last"><font><font>Ͷ�궳���ܶ�</font> </font></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['total'])) $this->magic_vars['var']['total'] = '';$_tmp = $this->magic_vars['var']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td><font color="#FF0000">��<? if (!isset($this->magic_vars['var']['use_money'])) $this->magic_vars['var']['use_money'] = '';$_tmp = $this->magic_vars['var']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></td>
								<td>��<? if (!isset($this->magic_vars['var']['no_use_money'])) $this->magic_vars['var']['no_use_money'] = '';$_tmp = $this->magic_vars['var']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>

						<thead>
							<tr>
								<td class="first">��ֵ�ɹ��ܶ�</td>
								<td>���ֳɹ��ܶ�</td>
								<td>���߳�ֵ�ܶ�</td>
								<td class="last"><font><font>���³�ֵ�ܶ�</font> </font></td>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success'] = '';$_tmp = $this->magic_vars['var']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['cash_success']['money'])) $this->magic_vars['var']['cash_success']['money'] = '';$_tmp = $this->magic_vars['var']['cash_success']['money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['recharge_online'])) $this->magic_vars['var']['recharge_online'] = '';$_tmp = $this->magic_vars['var']['recharge_online'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['var']['recharge_downline'])) $this->magic_vars['var']['recharge_downline'] = '';$_tmp = $this->magic_vars['var']['recharge_downline'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>


						<thead>
							<tr>
								<td class="first">�ֶ���ֵ�ܶ�</td>
								<td>��������</td>
								<td>��ֵ������</td>
								<td class="last"><font><font>����������</font> </font></td>
							</tr>
						</thead>		
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['recharge_shoudong'])) $this->magic_vars['var']['recharge_shoudong'] = '';$_tmp = $this->magic_vars['var']['recharge_shoudong'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['fee'])) $this->magic_vars['var']['fee'] = ''; if (!isset($this->magic_vars['var']['recharge_fee'])) $this->magic_vars['var']['recharge_fee'] = '';$_tmp = $this->magic_vars['var']['fee']+$this->magic_vars['var']['recharge_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['fee'])) $this->magic_vars['var']['fee'] = '';$_tmp = $this->magic_vars['var']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['var']['recharge_fee'])) $this->magic_vars['var']['recharge_fee'] = '';$_tmp = $this->magic_vars['var']['recharge_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>


						<thead>
							<tr>
								<td class="first">��߶��</td>
								<td>��Ͷ��</td>
								<td>���ö��</td>
								<td class="last"></td>
							</tr>
						</thead>			
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['amount'])) $this->magic_vars['var']['amount'] = '';$_tmp = $this->magic_vars['var']['amount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��500</td>
								<td>��<? if (!isset($this->magic_vars['var']['use_amount'])) $this->magic_vars['var']['use_amount'] = '';$_tmp = $this->magic_vars['var']['use_amount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last"></td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
				
			<!-- Ͷ���ʽ������� -->
			<div id="invest_account" class="index-middle-r i-news-w block-r"
				style="display:none;width: 700px; margin-top: 5px;">
				<div class="block-title clearfix"
					style="background: #375eb7; color: #FFF;">
					<font style="padding-top: 0px;">Ͷ���ʽ����� </font>
				</div>
				<div class="i-news-c" style="padding: 0px;">

					<table class="fdjz_table" cellpadding="0" cellspacing="0"
						border="0">
						<thead>
							<tr>
								<td class="first">Ͷ���ܶ�</td>
								<td>����ܶ�</td>
								<td>���������ܶ�</td>
								<td class="last"><font><font>�������ܶ�</font> </font></td>
							</tr>
						</thead>					
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['invest_account'])) $this->magic_vars['var']['invest_account'] = '';$_tmp = $this->magic_vars['var']['invest_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['success_account'])) $this->magic_vars['var']['success_account'] = '';$_tmp = $this->magic_vars['var']['success_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add'] = '';$_tmp = $this->magic_vars['var']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['var']['collection_wait'])) $this->magic_vars['var']['collection_wait'] = '';$_tmp = $this->magic_vars['var']['collection_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>

						<thead>
							<tr>
								<td class="first">�����ս��</td>
								<td>��������Ϣ</td>
								<td>�ѻ����ܶ�</td>
								<td class="last"><font><font>�ѻ��ս��</font> </font></td>
							</tr>
						</thead>					
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['collection_capital0'])) $this->magic_vars['var']['collection_capital0'] = '';$_tmp = $this->magic_vars['var']['collection_capital0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['collection_interest0'])) $this->magic_vars['var']['collection_interest0'] = '';$_tmp = $this->magic_vars['var']['collection_interest0'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['collection_yes'])) $this->magic_vars['var']['collection_yes'] = '';$_tmp = $this->magic_vars['var']['collection_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['var']['collection_capital1'])) $this->magic_vars['var']['collection_capital1'] = '';$_tmp = $this->magic_vars['var']['collection_capital1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>


						<thead>
							<tr>
								<td class="first">�ѻ�����Ϣ</td>
								<td>��վ�渶�ܶ�</td>
								<td>���ڷ�������</td>
								<td class="last"><font><font>��ʧ��Ϣ�ܶ�</font> </font></td>
							</tr>
						</thead>	
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['collection_interest1'])) $this->magic_vars['var']['collection_interest1'] = '';$_tmp = $this->magic_vars['var']['collection_interest1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['num_late_repay_account'])) $this->magic_vars['var']['num_late_repay_account'] = '';$_tmp = $this->magic_vars['var']['num_late_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['late_collection'])) $this->magic_vars['var']['late_collection'] = '';$_tmp = $this->magic_vars['var']['late_collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['var']['num_late_interes'])) $this->magic_vars['var']['num_late_interes'] = '';$_tmp = $this->magic_vars['var']['num_late_interes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>


						<thead>
							<tr>
								<td class="first">����տ�����</td>
								<td></td>
								<td></td>
								<td class="last"></td>
							</tr>
						</thead>			
						<tbody>
							<tr>
								<td class="first"><? if (!isset($this->magic_vars['var']['collection_repaytime'])) $this->magic_vars['var']['collection_repaytime'] = '';$_tmp = $this->magic_vars['var']['collection_repaytime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
								<td></td>
								<td></td>
								<td class="last"></td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>

						<!-- �����ʽ������� -->
			<div id="borrow_account" class="index-middle-r i-news-w block-r"
				style="display:none;width: 700px; margin-top: 5px;">
				<div class="block-title clearfix"
					style="background: #375eb7; color: #FFF;">
					<font style="padding-top: 0px;">�����ʽ����� </font>
				</div>
				<div class="i-news-c" style="padding: 0px;">

					<table class="fdjz_table" cellpadding="0" cellspacing="0"
						border="0">
						<thead>
							<tr>
								<td class="first">����ܶ�</td>
								<td>�ѻ��ܶ�</td>
								<td>δ���ܶ�</td>
								<td class="last"><font><font>�������</font> </font></td>
							</tr>
						</thead>	
						<tbody>
							<tr>
								<td class="first">��<? if (!isset($this->magic_vars['var']['borrow_num'])) $this->magic_vars['var']['borrow_num'] = '';$_tmp = $this->magic_vars['var']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['borrow_num1'])) $this->magic_vars['var']['borrow_num1'] = '';$_tmp = $this->magic_vars['var']['borrow_num1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td>��<? if (!isset($this->magic_vars['var']['wait_payment'])) $this->magic_vars['var']['wait_payment'] = '';$_tmp = $this->magic_vars['var']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td class="last"><? if (!isset($this->magic_vars['var']['borrow_times'])) $this->magic_vars['var']['borrow_times'] = '';$_tmp = $this->magic_vars['var']['borrow_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>

						<thead>
							<tr>
								<td class="first">�������</td>
								<td>��������</td>
								<td>�����������</td>
								<td class="last"><font><font>���Ӧ������</font> </font></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="first"><? if (!isset($this->magic_vars['var']['payment_times'])) $this->magic_vars['var']['payment_times'] = '';$_tmp = $this->magic_vars['var']['payment_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td><? if (!isset($this->magic_vars['var']['borrow_repay0'])) $this->magic_vars['var']['borrow_repay0'] = '';$_tmp = $this->magic_vars['var']['borrow_repay0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
								<td><? if (!isset($this->magic_vars['var']['new_repay_time'])) $this->magic_vars['var']['new_repay_time'] = '';$_tmp = $this->magic_vars['var']['new_repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
								<td class="last">��<? if (!isset($this->magic_vars['var']['new_repay_account'])) $this->magic_vars['var']['new_repay_account'] = '';$_tmp = $this->magic_vars['var']['new_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
			
				<? unset($_magic_vars);unset($data); ?>
	
		<table  class="products_table" id="account_history">
		<tr class="head">
		<th width=70px>����</th>
		<th >�ɹ����+</th>
		<th >���������-</th>
		<th >��֤��-</th>
		<th >����-</th>
		<th width=40px>Ͷ��-</th>
		<th >�����ܶ�+</th>
		<th >Ͷ�꽱��+</th>
		<th width=40px>����-</th>
		<th width=40px>��ֵ+</th>
		<th width=40px>����-</th>
		</tr>
			<? $this->magic_vars['query_type']='GetLogCount';$data = array('var'=>'var','dotime1'=>$_REQUEST['dotime1'],'dotime2'=>$_REQUEST['dotime2'],'user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetLogCount($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr  <? if (!isset($this->magic_vars['var']['i'])) $this->magic_vars['var']['i']=''; ;if (  $this->magic_vars['var']['i']%2==1): ?> class="tr1"<? endif; ?>>
				
					<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?></td>
					<td <? if (!isset($this->magic_vars['var']['borrow_success'])) $this->magic_vars['var']['borrow_success']=''; ;if (  $this->magic_vars['var']['borrow_success']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['borrow_success'])) $this->magic_vars['var']['borrow_success'] = '';$_tmp = $this->magic_vars['var']['borrow_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['borrow_fee'])) $this->magic_vars['var']['borrow_fee']=''; ;if (  $this->magic_vars['var']['borrow_fee']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['borrow_fee'])) $this->magic_vars['var']['borrow_fee'] = '';$_tmp = $this->magic_vars['var']['borrow_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td  <? if (!isset($this->magic_vars['var']['margin'])) $this->magic_vars['var']['margin']=''; ;if (  $this->magic_vars['var']['margin']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['margin'])) $this->magic_vars['var']['margin'] = '';$_tmp = $this->magic_vars['var']['margin'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td  <? if (!isset($this->magic_vars['var']['award_lower'])) $this->magic_vars['var']['award_lower']=''; ;if (  $this->magic_vars['var']['award_lower']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['award_lower'])) $this->magic_vars['var']['award_lower'] = '';$_tmp = $this->magic_vars['var']['award_lower'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender']=''; ;if (  $this->magic_vars['var']['tender']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['collection'])) $this->magic_vars['var']['collection']=''; ;if (  $this->magic_vars['var']['collection']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['collection'])) $this->magic_vars['var']['collection'] = '';$_tmp = $this->magic_vars['var']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add']=''; ;if (  $this->magic_vars['var']['award_add']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add'] = '';$_tmp = $this->magic_vars['var']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['invest_repayment'])) $this->magic_vars['var']['invest_repayment']=''; ;if (  $this->magic_vars['var']['invest_repayment']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['invest_repayment'])) $this->magic_vars['var']['invest_repayment'] = '';$_tmp = $this->magic_vars['var']['invest_repayment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['recharge'])) $this->magic_vars['var']['recharge']=''; ;if (  $this->magic_vars['var']['recharge']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['recharge'])) $this->magic_vars['var']['recharge'] = '';$_tmp = $this->magic_vars['var']['recharge'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success']=''; ;if (  $this->magic_vars['var']['recharge_success']!=""): ?> style="color:#FF0000"<? endif; ?>>��<? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success'] = '';$_tmp = $this->magic_vars['var']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				
		</table>	

			<? endif; ?>
	</div>
	<!--�ұߵ����� ����-->
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->


<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>
