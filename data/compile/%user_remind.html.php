<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>

<!-- 陈亮添加 -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/user_index.css" />

<!--用户中心的主栏目 开始-->
<div class="container clearfix" style="margin-top:15px;">
	<!--左边的导航 开始-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="header-menu">
			
			<ul>
				<li class="current" ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">提醒设置 </a></li>
			</ul>
		</div>
		
		<div class="user_right_main">
		
		<!--提醒设置 开始-->
		<div class="user_help">请勾选设置来收取您所需要的消息提醒。
为了您的交易安全，部分重要信息不能取消接收。 </div>
		<table  class="products_table">
			  <form action="" method="post">
			  <?  if(!isset($this->magic_vars['_U']['remind_list']) || $this->magic_vars['_U']['remind_list']=='') $this->magic_vars['_U']['remind_list'] = array();  $_from = $this->magic_vars['_U']['remind_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td colspan="4" style="font-weight: bold;font-size: 13px;"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
				</tr>
				<?  if(!isset($this->magic_vars['item']['list']) || $this->magic_vars['item']['list']=='') $this->magic_vars['item']['list'] = array();  $_from = $this->magic_vars['item']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
				<tr  >
					<td style="background-color: #FFF"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></td>
					<td style="background-color: #FFF">
						<? if (!isset($this->magic_vars['var']['message'])) $this->magic_vars['var']['message']='';if (!isset($this->magic_vars['var']['message'])) $this->magic_vars['var']['message']=''; ;if (  $this->magic_vars['var']['message']==1 ||  $this->magic_vars['var']['message']==2): ?><input type="hidden"  <? if (!isset($this->magic_vars['var']['message'])) $this->magic_vars['var']['message']=''; ;if (  $this->magic_vars['var']['message']==1): ?>checked="checked"<? endif; ?> name="message_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>"  value="1" /><span disabled><? else: ?><span><? endif; ?>
						<input type="checkbox"  <? if (!isset($this->magic_vars['var']['message'])) $this->magic_vars['var']['message']='';if (!isset($this->magic_vars['var']['message'])) $this->magic_vars['var']['message']=''; ;if (  $this->magic_vars['var']['message']==1 ||  $this->magic_vars['var']['message']==3): ?>checked="checked"<? endif; ?> name="message_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" id="message_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" value="1" />
						<label for=message_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>>站内信提醒</label></span> 
					</td>
					<td style="background-color: #FFF">
					<? if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email']='';if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email']=''; ;if (  $this->magic_vars['var']['email']==1 ||  $this->magic_vars['var']['email']==2): ?><input type="hidden"  <? if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email']=''; ;if (  $this->magic_vars['var']['email']==1): ?>checked="checked"<? endif; ?> name="email_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" value="1" /><span disabled><? else: ?><span><? endif; ?>
						<input type="checkbox"  <? if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email']='';if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email']=''; ;if (  $this->magic_vars['var']['email']==1 ||  $this->magic_vars['var']['email']==3): ?>checked="checked"<? endif; ?> name="email_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" id="email_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" value="1" />
						<label for=email_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>>邮件提醒 </label></span> </td>
					<td style="background-color: #FFF">
					<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone']='';if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone']=''; ;if (  $this->magic_vars['var']['phone']==1 ||  $this->magic_vars['var']['phone']==2): ?><input type="hidden"  <? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone']=''; ;if (  $this->magic_vars['var']['phone']==1): ?>checked="checked"<? endif; ?> name="phone_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>"  value="1" /><span disabled><? else: ?><span><? endif; ?>
						<input type="checkbox"  <? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone']='';if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone']=''; ;if (  $this->magic_vars['var']['phone']==1 ||  $this->magic_vars['var']['phone']==3): ?>checked="checked"<? endif; ?> name="phone_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" id="phone_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" value="1" />
						<label for=phone_<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>>手机提醒</label></span> </td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
			<? endforeach; endif; unset($_from); ?>
				
		</table>
		<div class="user_submit" style="text-align:center;padding-top:10px;">
				<input type="hidden" name="type" value="1" />
				<input class="button_blue_small" type="submit" name="name"  value="确认提交" size="30" /> 
			
		</div>
		</form>
		
		<div class="user_right_foot">
		* 温馨提示：如果手机短信功能没空的话，所有的短信功能将不能使用
		</div>
		<!--提醒设置 结束-->
	</div>
		
</div>
</div>
<!--用户中心的主栏目 结束-->
<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>