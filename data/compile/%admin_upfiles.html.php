<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">�û���</td>
		<td width="*" class="main_td">��ʵ����</td>
		<td width="*" class="main_td">ģ��</td>
		<td width="*" class="main_td">�ļ�����</td>
		<td width="*" class="main_td">�ļ���С</td>
		<td width="*" class="main_td">�ļ�����</td>
		<td width="*" class="main_td">ͼƬ</td>
		<th width="" class="main_td">���ʱ��</th>
		<th width="" class="main_td">IP</th>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['upfiles_list']) || $this->magic_vars['_A']['upfiles_list']=='') $this->magic_vars['_A']['upfiles_list'] = array();  $_from = $this->magic_vars['_A']['upfiles_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['codename'])) $this->magic_vars['item']['codename'] = ''; echo $this->magic_vars['item']['codename']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['filetype'])) $this->magic_vars['item']['filetype'] = ''; echo $this->magic_vars['item']['filetype']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['filesize'])) $this->magic_vars['item']['filesize'] = ''; echo $this->magic_vars['item']['filesize']; ?>K</td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['filename'])) $this->magic_vars['item']['filename'] = ''; echo $this->magic_vars['item']['filename']; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['item']['fileurl'])) $this->magic_vars['item']['fileurl'] = ''; echo $this->magic_vars['item']['fileurl']; ?>" width="50" height="50" /></a></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&quer="+quer+"&username="+username;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/>   <input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="7" class="page">
		<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
		</td>
	</tr>
</table>
