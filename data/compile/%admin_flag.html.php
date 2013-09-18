<table width="100%" border="0"  cellspacing="1" bgcolor="#CCCCCC">
	<form method="post" action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/order">
	 <tr>
		  <td  class="main_td" width="15%">属性ID</td>
		  <td class="main_td"> 
				属性名称
		  </td>
		  <td  class="main_td"> 
				排序
		  </td>
		 <td  class="main_td"> 
				操作
		  </td>
		</tr>
		<?  if(!isset($this->magic_vars['result']) || $this->magic_vars['result']=='') $this->magic_vars['result'] = array();  $_from = $this->magic_vars['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			 <tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
                  <td  bgcolor="#FFFFFF">
						<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
                  <td class="main_td1" width="20%"> <? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>
				  </td>
				  <td  class="main_td1"> 
						<input type="text" name="order[]" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" />
				  </td>
				  <td  class="main_td1"> 
						<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['item']['id']>3): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">删除</a><? else: ?>-<? endif; ?>
			</div>
		</div>
		
		
				<? endforeach; endif; unset($_from); ?>
	   <tr  >
			<td  colspan="4" class="submit">
			<input type="submit" value="修改排序"  name="submit" />
			</td>
		</tr>
				
    </form>
 </table>
<div class="module_add">
		<form name="form_flag" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/add"  onsubmit="return check_flag();" >
		<div class="module_title"><strong>添加属性</strong></div>
		<div class="module_border">
			<div class="l">属性名称：</div>
			<div class="c">
				<input name="name" type="text" class="input_border"  size="20"/>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">属性ID：</div>
			<div class="c">
				<input name="nid" type="text" class="input_border"  size="20"/>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">排序：</div>
			<div class="c">
				<input name="order" value="10" type="text" class="input_border"  size="5"/>
			</div>
		</div>
		
		<div class="module_submit"><input type="submit" value="添加属性"  name="submit" /></div>
    </form>
</div>