 <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<!-- 陈亮添加 -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/user_index.css" />

<!--借款帮助 开始-->
<div class="clearfix index-middle" id="clearfix_index-middle" style="margin: 20px auto 0;">

<div class="block-a">
	<div class="block-title">您的VIP信息</div>
	<div class="content" style="margin:30px;">
		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==0): ?>
		
			<form action="/index.php?user&q=code/user/applyvip" method="post">
				<div class="user_right_border">
					<div class="l">您的状态是：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==0): ?>普通会员<? else: ?><font color="#FF0000">VIP会员,有效时间：</font><? endif; ?>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">用户名：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">姓 名 ：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">邮 箱 ：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">选择客服 ：</div>
					<div class="c">
						<select name="kefu_userid">
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'all','type_id'=>'3,7');$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<option value="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>"><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?>(<? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?>)</option>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</select>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">备 注 ：</div>
					<div class="c">
						<textarea rows="5" cols="50" name="vip_remark"></textarea>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">验证码：</div>
					<div class="c">
						<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
					</div>
				</div>
			
				<div class="user_right_border">
					<div class="l"></div>
					<div class="c">
						<input class="button_blue_small" type="submit" value="我要申请" />
					</div>
				</div>
			</form>
		<? else: ?>
				<div class="user_right_border">
					<div class="l">您的状态是：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==0): ?>普通会员<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vip_status']==2): ?>VIP申请中<? if (!isset($this->magic_vars['_G']['user_result']['isvip'])) $this->magic_vars['_G']['user_result']['isvip']=''; ;elseif (  $this->magic_vars['_G']['user_result']['isvip']=="-1"): ?>VIP申请中,请耐心等待<? else: ?><font color="#FF0000">VIP会员</font><? endif; ?>
					</div>
				</div>
				<? if (!isset($this->magic_vars['_G']['user_result']['isvip'])) $this->magic_vars['_G']['user_result']['isvip']=''; ;if (  $this->magic_vars['_G']['user_result']['isvip']==1): ?>
				<div class="user_right_border">
					<div class="l">有效时间：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['vip_time'])) $this->magic_vars['_G']['user_result']['vip_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> 到 <? if (!isset($this->magic_vars['_G']['user_result']['vip_time'])) $this->magic_vars['_G']['user_result']['vip_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_time']+60*60*24*365;$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
					</div>
				</div>
				<? endif; ?>
				<div class="user_right_border">
					<div class="l">用户名：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">姓 名 ：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">邮 箱 ：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">客 服 ：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_cache']['kefu_realname'])) $this->magic_vars['_G']['user_cache']['kefu_realname'] = ''; echo $this->magic_vars['_G']['user_cache']['kefu_realname']; ?>(<? if (!isset($this->magic_vars['_G']['user_cache']['kefu_username'])) $this->magic_vars['_G']['user_cache']['kefu_username'] = ''; echo $this->magic_vars['_G']['user_cache']['kefu_username']; ?>)
					</div>
				</div>
				<div class="user_right_border">
					<div class="l">备 注 ：</div>
					<div class="c">
						<? if (!isset($this->magic_vars['_G']['user_result']['vip_remark'])) $this->magic_vars['_G']['user_result']['vip_remark'] = ''; echo $this->magic_vars['_G']['user_result']['vip_remark']; ?>
					</div>
				</div>
		</ul>
		<? endif; ?>
	</div>
	<div class="foot"></div>
	<div>
	</div>
	</div>
</div>
<!--借款帮助 结束-->

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>