<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<!-- ������� -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/user_index.css" />
<!-- ���������  �����ʽ-->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/safe_table.css"/>

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
			<ul>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list" ||  $this->magic_vars['_U']['query_type']=="view"): ?> class="current"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">�ռ���</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="sented" ||  $this->magic_vars['_U']['query_type']=="viewed"): ?> class="current"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/sented">�ѷ���</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="sent"): ?> class="current"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/sent">����Ϣ</a></li>
			</ul>
		</div>
		
		
		
		<!--�ռ��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?>
		<div class="user_main_title1" style="padding-bottom:10px"><input class="button_blue_small" type="button"  value="ɾ��" onclick="on_submit('<? if (!isset($this->magic_vars['_G']['query_url'])) $this->magic_vars['_G']['query_url'] = ''; echo $this->magic_vars['_G']['query_url']; ?>/sented',1)" /> <input class="button_blue_small" type="button" value="����Ѷ�" onclick="on_submit('<? if (!isset($this->magic_vars['_G']['query_url'])) $this->magic_vars['_G']['query_url'] = ''; echo $this->magic_vars['_G']['query_url']; ?>/sented',2)"/> <input class="button_blue_small" type="button" value="���δ��" onclick="on_submit('<? if (!isset($this->magic_vars['_G']['query_url'])) $this->magic_vars['_G']['query_url'] = ''; echo $this->magic_vars['_G']['query_url']; ?>/sented',3)"/></div>
		<div class="user_right_main">
			<form action="" method="post" id="form1">
			<table class="products_table">
				<tr class="head" >
				<th><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/><input type="hidden" name="type" id="type" value="0" /></th>
				<th><div class="icon_xin_no"></div></th>
				<th>������ </th>
				<th>����</th>
				<th>����ʱ�� </th>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['message_list']) || $this->magic_vars['_U']['message_list']=='') $this->magic_vars['_U']['message_list'] = array();  $_from = $this->magic_vars['_U']['message_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
				<td><input type="checkbox" name="id[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"/></td>
				<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><div class="icon_xin_yes"></div><? else: ?><div class="icon_xin_no"></div><? endif; ?></td>
				<td><? if (!isset($this->magic_vars['item']['sent_username'])) $this->magic_vars['item']['sent_username'] = '';$_tmp = $this->magic_vars['item']['sent_username'];$_tmp = $this->magic_modifier("default",$_tmp,"admin");echo $_tmp;unset($_tmp); ?></td>
				<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/view&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><strong><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></strong><? else: ?><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?><? endif; ?></a></td>
				<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
				</div>
			</form>	
			<!--�ռ��� ����-->
		</div>
		
		<!--������ ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="sented"): ?>
		<div class="user_main_title1" style="padding-bottom:10px"><input type="button"  class="button_blue_small" value="ɾ��" onclick="on_submit('<? if (!isset($this->magic_vars['_G']['query_url'])) $this->magic_vars['_G']['query_url'] = ''; echo $this->magic_vars['_G']['query_url']; ?>/sented',1)" /></div>
		<form action="" method="post" id="form1">
		<div class="user_right_main">
			<table  class="products_table">
				<tr class="head" >
				<th><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></th>
				<th>�ռ��� </th>
				<th>����</th>
				<th>����ʱ�� </th>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['message_list']) || $this->magic_vars['_U']['message_list']=='') $this->magic_vars['_U']['message_list'] = array();  $_from = $this->magic_vars['_U']['message_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
				<td><input type="checkbox" name="id[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"/></td>
				<td><? if (!isset($this->magic_vars['item']['receive_username'])) $this->magic_vars['item']['receive_username'] = '';$_tmp = $this->magic_vars['item']['receive_username'];$_tmp = $this->magic_modifier("default",$_tmp,"admin");echo $_tmp;unset($_tmp); ?></td>
				<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/viewed&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></a></td>
				<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
				</div>
				<input type="hidden" name="type" id="type" value="0" />
			</form>	
			
			<!--������ ����-->
		</div>
		<!--������ ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="sent"): ?>
		<form method="post" action="" >
		<div class="user_right_border">
			<div class="l">�����ˣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?> (<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>)
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">�ռ��ˣ�</div>
			<div class="c">
				<input type="text" name="receive_user" value="<? if (!isset($_REQUEST['receive'])) $_REQUEST['receive'] = ''; echo $_REQUEST['receive']; ?>" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">���⣺</div>
			<div class="c">
				<input type="text" name="name"  />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">���ݣ�</div>
			<div class="c">
				<textarea name="content" rows="7" cols="50"></textarea>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input name="sented" type="checkbox" value="1" />���浽������
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit"   value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot">
		* ��ܰ��ʾ�����Ҫ�͹���Ա������Ϣ�������뷢����admin
		</div>
		
		
		<!--�鿴 ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="view"): ?>
		<div class="user_main_title1" style="padding-bottom:10px"><input type="button" class="button_blue_small" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>'" value="����" /> <input type="button" class="button_blue_small" value="ɾ��" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['_U']['message_result']['id'])) $this->magic_vars['_U']['message_result']['id'] = ''; echo $this->magic_vars['_U']['message_result']['id']; ?>'"/></div>
		<form method="post" action="" >
		<div class="user_right_border">
			<div class="l">���⣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['name'])) $this->magic_vars['_U']['message_result']['name'] = ''; echo $this->magic_vars['_U']['message_result']['name']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����ˣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['sent_username'])) $this->magic_vars['_U']['message_result']['sent_username'] = '';$_tmp = $this->magic_vars['_U']['message_result']['sent_username'];$_tmp = $this->magic_modifier("default",$_tmp,"admin");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">����ʱ�䣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['addtime'])) $this->magic_vars['_U']['message_result']['addtime'] = '';$_tmp = $this->magic_vars['_U']['message_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ݣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['content'])) $this->magic_vars['_U']['message_result']['content'] = ''; echo $this->magic_vars['_U']['message_result']['content']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ظ���</div>
			<div class="c">
				<textarea name="content" rows="7" cols="50"></textarea>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_U']['message_result']['id'])) $this->magic_vars['_U']['message_result']['id'] = ''; echo $this->magic_vars['_U']['message_result']['id']; ?>" />
				<input class="button_blue_small" type="submit"  value="�ظ�"  /> 
			</div>
		</div>
		</form>
		<!--�鿴 ����-->
		
		<!--�鿴 ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="viewed"): ?>
		<div class="user_main_title1" ><input type="button" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/sented'" value="����" /> <input type="button" value="ɾ��" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/deled&id=<? if (!isset($this->magic_vars['_U']['message_result']['id'])) $this->magic_vars['_U']['message_result']['id'] = ''; echo $this->magic_vars['_U']['message_result']['id']; ?>'"/></div>
		<div class="user_right_border">
			<div class="l">���⣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['name'])) $this->magic_vars['_U']['message_result']['name'] = ''; echo $this->magic_vars['_U']['message_result']['name']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ռ��ˣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['receive_username'])) $this->magic_vars['_U']['message_result']['receive_username'] = '';$_tmp = $this->magic_vars['_U']['message_result']['receive_username'];$_tmp = $this->magic_modifier("default",$_tmp,"admin");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">����ʱ�䣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['addtime'])) $this->magic_vars['_U']['message_result']['addtime'] = '';$_tmp = $this->magic_vars['_U']['message_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ݣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['message_result']['content'])) $this->magic_vars['_U']['message_result']['content'] = ''; echo $this->magic_vars['_U']['message_result']['content']; ?>
			</div>
		</div>
		
		<!--�鿴 ����-->
		
		<? endif; ?>
	</div>
</div>
<!--�û����ĵ�����Ŀ ����-->
<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>