
<? if (!isset($this->magic_vars['t'])) $this->magic_vars['t']=''; ;if (  $this->magic_vars['t']=="index"): ?>
<div class="module_add">
	<div class="module_title"><strong>����html</strong> -> ��ҳ����</div>
	
	<div class="module_border" >
		<div align="center"><br /><br /><strong>������ҳ����ҳ��Ŀ¼Ϊ��һ������ӵ���ҳλ��</strong><br /><br /><br /></div>
	</div>

	<div class="module_submit" >
		<input value="������ҳģ��" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['url'])) $this->magic_vars['url'] = ''; echo $this->magic_vars['url']; ?>/index&action=do';" />
	</div>
</div>
<? if (!isset($this->magic_vars['t'])) $this->magic_vars['t']=''; ;elseif (  $this->magic_vars['t']=="site"): ?>
<div class="module_add">
	<form action="" method="post">
	<div class="module_title"><strong>����html</strong> -> ��Ŀ����</div>
	
	<div class="module_border">
		<div class="e">ѡ����Ŀ��</div>
		<div class="c">
			<select name="site_id">
			<option value="0">����ȫ����Ŀ</option>
			<?  if(!isset($this->magic_vars['sitelist']) || $this->magic_vars['sitelist']=='') $this->magic_vars['sitelist'] = array();  $_from = $this->magic_vars['sitelist']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<option value="<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>" <? if (!isset($this->magic_vars['result']['pid'])) $this->magic_vars['result']['pid']='';if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['result']['pid'] ==  $this->magic_vars['key']): ?> selected="selected"<? endif; ?> >-<? if (!isset($this->magic_vars['item']['pname'])) $this->magic_vars['item']['pname'] = ''; echo $this->magic_vars['item']['pname']; ?></option>
			<? endforeach; endif; unset($_from); ?>
			</select>
		</div>
	</div>

	<div class="module_border">
		<div class="e">ÿ�δ�������ļ�����</div>
		<div class="c">
			<input type="text" value="50" name="amount" />
		</div>
	</div>

	<div class="module_border">
		<div class="e">�Ƿ��������Ŀ��</div>
		<div class="c">
			<input type="radio" value="1" name="zilanmu" checked="checked" />��������Ŀ <input type="radio" value="0" name="zilanmu" />��������д��Ŀ
		</div>
	</div>

	<div class="module_submit" >
		<input value="������Ŀģ��" type="submit"  />
	</div>
	</form>
</div>
<? endif; ?>