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
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="userpwd" ||  $this->magic_vars['_U']['query_type']=="paypwd" ||  $this->magic_vars['_U']['query_type']=="protection" ||  $this->magic_vars['_U']['query_type']=="getpaypwd"): ?>
			<ul>
				<!--��ȫ��Ϣ-->
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="userpwd"): ?> class="current"<? endif; ?>><a style="width:120px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/userpwd">��¼����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="paypwd" ||  $this->magic_vars['_U']['query_type']=="getpaypwd"): ?> class="current"<? endif; ?>><a style="width:120px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/paypwd">��������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="protection"): ?> class="current"<? endif; ?>><a style="width:120px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/protection">���뱣��</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="reginvite"  ||  $this->magic_vars['_U']['query_type']=="request" ||  $this->magic_vars['_U']['query_type']=="myfriend" ||  $this->magic_vars['_U']['query_type']=="black"): ?>
			<ul>
				<!--  ���ѹ��� -->
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="reginvite"): ?> class="current"<? endif; ?>><a style="width:120px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/reginvite">�������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="request"): ?> class="current"<? endif; ?>><a style="width:120px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/request">��������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myfriend"): ?> class="current"<? endif; ?>><a style="width:120px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myfriend">�ҵĺ���</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="black"): ?> class="current"<? endif; ?>><a style="width:120px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/black">������</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="credit"): ?>
			<ul>
				<li class="title" ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/credit">���û��ּ�¼</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
			<ul>
				<li class="title" ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myuser">�ͻ�����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="current"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myuser">�ҵĿͷ�</a></li>
				<li ><a href="index.php?user&q=code/borrow/myuser">�ͻ����</a></li>
				<li ><a href="index.php?user&q=code/borrow/myuser_account">ͳ����Ϣ</a></li>
			</ul>
			<? else: ?>
			<ul>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="realname"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/realname">ʵ����֤</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="email_status"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/email_status">������֤</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="phone_status"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/phone_status">�ֻ���֤</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="video_status"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/video_status">��Ƶ��֤</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="scene_status"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/scene_status">�ֳ���֤</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="avatar"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/avatar">ͷ����Ϣ</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="privacy"): ?> class="current"<? endif; ?>><a style="width:104px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/privacy">������˽</a></li>
			</ul>
			<? endif; ?>
		</div>
		
		<div class="user_right_main">
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="avatar"): ?>
		<!--ͷ�� ��ʼ-->
		<div  align="center">
		<div class="user_help">���ϴ�����ͷ��</div>
		<div><img src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /></div>
		<div> <? 
 require_once(ROOT_PATH.'plugins/avatar/configs.php');
require_once(ROOT_PATH.'plugins/avatar/avatar.class.php');
$objAvatar = new Avatar();
echo $objAvatar->uc_avatar($this->magic_vars['_G']['user_id'], 'virtual');
?></div>
		</div>
		<div class="user_right_foot">
		* ��ܰ��ʾ��ͷ�����������֣����У�С
		</div>
		<!--ͷ�� ����-->
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="privacy"): ?>
		<div class="user_help">���ø��˵���˽</div>
		<form action="" method="post">
		
		<div class="block-normal2" style="margin:0 5px 0 5px;">
		<div class="user_main_title">�ҵ���ҳ</div>
			<div class="user_right_border">
				<div class="e">�����б�</div>
				<div class="c">
					<script src="plugins/index.php?q=linkage&nid=yinsi&name=friend&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend'])) $this->magic_vars['_U']['user_privacy']['friend'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend']; ?>"></script>
				</div>
			</div>
		
		<div class="user_right_border">
			<div class="e">�������ۣ�</div>
			<div class="c">
				<script src="plugins/index.php?q=linkage&nid=yinsi&name=friend_comment&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend_comment'])) $this->magic_vars['_U']['user_privacy']['friend_comment'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend_comment']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">����б�</div>
			<div class="c">
				<script src="plugins/index.php?q=linkage&nid=yinsi&name=borrow_list&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['borrow_list'])) $this->magic_vars['_U']['user_privacy']['borrow_list'] = ''; echo $this->magic_vars['_U']['user_privacy']['borrow_list']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">Ͷ���¼��</div>
			<div class="c">
				<script src="plugins/index.php?q=linkage&nid=yinsi&name=loan_log&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['loan_log'])) $this->magic_vars['_U']['user_privacy']['loan_log'] = ''; echo $this->magic_vars['_U']['user_privacy']['loan_log']; ?>"></script>
			</div>
		</div>
			
		<div class="user_main_title">վ����/��Ϊ����</div>
		<div class="user_right_border">
			<div class="e">˭���Ը��ҷ�վ���ţ�</div>
			<div class="c">
				<script src="plugins/index.php?q=linkage&nid=yinsi&name=sent_msg&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['sent_msg'])) $this->magic_vars['_U']['user_privacy']['sent_msg'] = ''; echo $this->magic_vars['_U']['user_privacy']['sent_msg']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">˭�������ҷ��������룺</div>
			<div class="c">
				<script src="plugins/index.php?q=linkage&nid=yinsi&name=friend_request&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend_request'])) $this->magic_vars['_U']['user_privacy']['friend_request'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend_request']; ?>"></script>
			</div>
		</div>
		
		
		<div class="user_main_title">������</div>
		<div class="user_right_border">
			<div class="e">˭���Կ��ҵĺ�������</div>
			<div class="c">
				<select name="look_black" style="width:210px;">
					<option value="0" <? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==0): ?> selected="selected"<? endif; ?>>�������ҵĺ��Ѳ鿴�ҵĺ�����</option>
					<option value="1" <? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==1): ?> selected="selected"<? endif; ?>>�����ҵĺ��Ѳ鿴�ҵĺ�����</option>
					<option value="2"<? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==2): ?> selected="selected"<? endif; ?>>��������ͬ��ĺ��Ѳ鿴�ҵĺ�����</option>
				</select>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">������������ҷ����ţ�</div>
			<div class="c">
				<input type="radio" name="allow_black_sent" value="1" <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==1): ?> checked="checked"<? endif; ?>/> ���� <input type="radio" name="allow_black_sent" value="0"   <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']='';if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==0 ||  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==""): ?> checked="checked"<? endif; ?> /> ������ 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">������������ҷ��ͺ�������</div>
			<div class="c">
				<input type="radio" name="allow_black_request" value="1"  <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_request']==1): ?> checked="checked"<? endif; ?>/> ���� <input type="radio" name="allow_black_request" value="0" <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']='';if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_request']==0 ||  $this->magic_vars['_U']['user_privacy']['allow_black_request']==""): ?> checked="checked"<? endif; ?>/> ������ 
			</div>
		</div>
		</div>
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		
		<div class="user_right_foot">
		* ��ܰ��ʾ���뱣�����Լ�����˽
		</div>
		<!--�˺ų�ֵ ����-->
		
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="userpwd"): ?>
		<!--�޸ĵ�¼���� ��ʼ-->
		<form action="" name="form1" method="post" onsubmit="return check_form()">
		<div class="user_help">�����벻Ҫ̫�򵥣���ɸ���һ�㣬������ĸ+����</div>
		<div class="user_right_border">
			<div class="e">ԭʼ���룺</div>
			<div class="c">
				<input type="password" name="oldpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">�����룺</div>
			<div class="c">
				<input type="password" name="newpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">ȷ�����룺</div>
			<div class="c">
				<input type="password" name="newpassword1" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var oldpassword = frm.elements['oldpassword'].value;
				 var newpassword = frm.elements['newpassword'].value;
				  var newpassword1 = frm.elements['newpassword1'].value;
				 var errorMsg = '';
				  if (oldpassword.length == 0 ) {
					errorMsg += '* ������ɵĵ�¼����' + '\n';
				  }
				  if (newpassword.length == 0 ) {
					errorMsg += '* �����벻��Ϊ��' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* �����볤����6��15֮��' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* �������벻һ��' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>
		<!--�޸ĵ�¼���� ����-->
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="paypwd"): ?>
		<!--�޸İ�ȫ���� ��ʼ-->
		<form action="" name="form1" method="post" onsubmit="return check_form()">
		<div class="user_help">�����벻Ҫ̫�򵥣���ɸ���һ�㣬������ĸ+����</div>
		<div class="user_right_border">
			<div class="l">ԭʼ�������룺</div>
			<div class="c">
				<input type="password" name="oldpassword" /> ������ԭ�������롣(��ʼ������������ע��ʱ�ĵ�¼����һ��)
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">�½������룺</div>
			<div class="c">
				<input type="password" name="newpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">ȷ�Ͻ������룺</div>
			<div class="c">
				<input type="password" name="newpassword1" /> 
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
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> <a href="/index.php?user&q=code/user/getpaypwd">���ǽ������룿</a>
			</div>
		</div>
		</form>
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		<!--�޸İ�ȫ���� ����-->
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var oldpassword = frm.elements['oldpassword'].value;
				 var newpassword = frm.elements['newpassword'].value;
				  var newpassword1 = frm.elements['newpassword1'].value;
				 var errorMsg = '';
				  if (oldpassword.length == 0 ) {
					errorMsg += '* ����������룬���û���趨�������룬�������¼����' + '\n';
				  }
				  if (newpassword.length == 0 ) {
					errorMsg += '* �����벻��Ϊ��' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* �����볤����6��15֮��' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* �������벻һ��' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="getpaypwd"): ?>
		<!--�޸İ�ȫ���� ��ʼ-->
		<? if (!isset($_REQUEST['id'])) $_REQUEST['id']=''; ;if (  $_REQUEST['id']!=""): ?>
		<form action="" name="form1" method="post" onsubmit="return check_form()" >
		<div class="user_help">��������������֧������</div>
		<div class="user_right_border">
			<div class="l">���������룺</div>
			<div class="c">
				<input type="password" name="paypwd" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">����һ���������룺</div>
			<div class="c">
				<input type="password" name="paypwd1" />
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
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var newpassword = frm.elements['paypwd'].value;
				  var newpassword1 = frm.elements['paypwd1'].value;
				 var errorMsg = '';
				  if (newpassword.length == 0 ) {
					errorMsg += '* �����벻��Ϊ��' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* �����볤����6��15֮��' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* �������벻һ��' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>
		<? else: ?>
		<form action="" name="form1" method="post" >
		<div class="user_help">���¼�����һ�</div>
		<div class="user_right_border">
			<div class="l">�������䣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
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
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		</form>
		<? endif; ?>
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		<!--�޸İ�ȫ���� ����-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="protection"): ?>
		<!--���뱣�� ��ʼ-->
		 <form action="" method="post">
		<? if (!isset($this->magic_vars['_U']['answer_type'])) $this->magic_vars['_U']['answer_type']='';if (!isset($this->magic_vars['_G']['user_result']['answer'])) $this->magic_vars['_G']['user_result']['answer']=''; ;if (  $this->magic_vars['_U']['answer_type']=="2" ||  $this->magic_vars['_G']['user_result']['answer'] == ""): ?>
		<div class="user_help">��ѡ��һ���µ��ʺű�������,������𰸡��ʺű�������Ϊ���Ժ����������롢��Ҫ���õȲ�����ʱ��,�ṩ��ȫ���ϡ� </div>
		<div class="user_right_border">
			<div class="l">��ѡ�����⣺</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=question&nid=pwd_protection&isid=false"></script> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">������𰸣�</div>
			<div class="c">
				<input type="text" name="answer" /><input type="hidden" name="type" value="2" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">��֤�룺</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			</div>
		</div>
		<? else: ?>
		<div class="user_help">���Ѿ����������뱣�����ܣ�����������ٽ����޸ġ� </div>
		<div class="user_right_border">
			<div class="l">��ѡ�����⣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['question'])) $this->magic_vars['_G']['user_result']['question'] = '';$_tmp = $this->magic_vars['_G']['user_result']['question'];$_tmp = $this->magic_modifier("linkage",$_tmp,"pwd_protection");echo $_tmp;unset($_tmp); ?> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">������𰸣�</div>
			<div class="c">
				<input type="text" name="answer" /> <input type="hidden" name="type" value="1" />
			</div>
		</div>
		
		<? endif; ?>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		
		</form>
		<!--���뱣�� ����-->
		
		
		<!--�������� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="reginvite"): ?>
		<div class="user_help" > 
			��ܰ��ʾ���벻Ҫ���������Ÿ�����Ϥ����ʿ,��������˴�������Ҫ�����š�<br />
����±ߵ����ӵ�ַ�������ĺ��ѣ��������ͳ������������û���<br />
���������û�������VIP���ҳɹ����ѣ���ô������һ���Ի��30Ԫ����ɡ�<br />
ÿ�½����Ѹ��ѵ�VIP��ɣ�ͨ����վ��ֵ��ʽ���������ϡ� <br />
		</div><br />
		<div class="user_right_border">
			<div class="l">�������ӣ�</div>
			<div class="c">
				<textarea cols="40" rows="3" id="invite">http://<? if (!isset($_SERVER['SERVER_NAME'])) $_SERVER['SERVER_NAME'] = ''; echo $_SERVER['SERVER_NAME']; ?>/index.php?user&q=action/reginvite&u=<? if (!isset($this->magic_vars['_U']['user_inviteid'])) $this->magic_vars['_U']['user_inviteid'] = ''; echo $this->magic_vars['_U']['user_inviteid']; ?></textarea>
			</div>
			<div class="explain" style="width:40px;margin-top:20px;">	
				<input class="button_blue_small" type="button" onclick="doCopy('invite')" value="����" />
			</div>
		</div><br /><br />
		<table  class="products_table">
			  <form action="" method="post">
				<tr class="head" >
					<th  >�����û��� </th>
					<th  >ע��ʱ�� </th>
					<th  >���</th>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsInvite';$data = array('var'=>'loop','user_id'=>'0','showpage'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsInvite($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['invite_money'])) $this->magic_vars['item']['invite_money'] = ''; echo $this->magic_vars['item']['invite_money']; ?>Ԫ</td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
				</div>
				<? unset($_magic_vars); ?>
			</form>	
		
		<script>
		
		function doCopy(id) { 
		  var codeid;
		  codeid=id;
		 if (document.all){
		   var obj;
		   obj=document.getElementById(codeid);
		   window.clipboardData.setData("text",obj.innerText)
		   alert("�������ӵ�ַ���Ƴɹ��������ֱ�Ӹ��Ʒ�����ĺ���");
		 }
		 else{
		   alert("�˹���ֻ����IE����Ч\n\n�����ı�������Ctrl+Aѡ���ٸ���");
		 }
		}

		</script>
		
		<!--�������� ����-->
		
		<!--�������� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="request"): ?>
			  <form action="" method="post">
		<table class="products_table">
				<tr class="head" >
					<th  >�Է�����</th>
					<th  >����ʱ��</th>
					<th  >����˵��</th>
					<th  >����</th>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsRlist';$data = array('var'=>'loop','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsRlist($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
					<td><a href="javascript:void(0)" onclick='tipsWindown("��Ϊ����","url:get?/index.php?user&q=code/user/raddfriend&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>",400,230,"true","","true","text");'>��Ϊ����</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>">ɾ������</a> </td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>
				<div class="page">
					<? if (!isset($this->magic_vars['loop']['show_page'])) $this->magic_vars['loop']['show_page'] = ''; echo $this->magic_vars['loop']['show_page']; ?>
				</div>
				<? unset($_magic_vars); ?>
		
			</form>	
		<!--�������� ����-->
		
		<!--�ҵĺ��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myfriend"): ?>
		
		<div style="height:30px; padding-top:7px;padding-bottom:10px;"> 
		
		&nbsp; &nbsp; &nbsp; �û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>" /> <input class="button_blue_small" value="����" type="button" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')"  />
		</div>
		
			  <form action="" method="post">
		<table  class="products_table">
				<tr class="head" >
					<th  >�Է�����</th>
					<th  >����ʱ��</th>
					<th  >����˵��</th>
					<th  >����</th>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsList';$data = array('var'=>'loop','user_id'=>'0','status'=>'1','showpage'=>'3','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['friends_userid'])) $this->magic_vars['item']['friends_userid'] = ''; echo $this->magic_vars['item']['friends_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = '';$_tmp = $this->magic_vars['item']['content'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">ɾ������</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/blackfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">��Ϊ������</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
				</div>
				<? unset($_magic_vars); ?>
			</form>	
		<!--�ҵĺ��� ����-->
				<script>
var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";

function sousuo(){
	var _url = "";
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var dotime2 = $("#dotime2").val();
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
	location.href=url+_url;
}

</script>

		
		<!--������ ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="black"): ?>
		<!--
		<div style="height:30px; padding-top:7px;"> 
		�������ͣ�<script src="plugins/index.php?q=linkage&nid=friends_type&isid=false"></script>
		&nbsp; &nbsp; &nbsp; �û�����<input type="text" name="" /> <input value="����" type="submit" />
		</div>
		-->
			  <form action="" method="post">
		<table  class="products_table">
				<tr class="head" >
					<th  >�Է�����</th>
					<th  >����</th>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsList';$data = array('var'=>'loop','user_id'=>'0','status'=>'2','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['friends_userid'])) $this->magic_vars['item']['friends_userid'] = ''; echo $this->magic_vars['item']['friends_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?></a></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">ɾ������</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/readdfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">���¼�Ϊ����</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
				</div>
				<? unset($_magic_vars); ?>
			</form>	
		<!--������ ����-->
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="realname"): ?>
		<!--�޸ĵ�¼���� ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==1): ?> 
		<div class="user_help">ע�⣺���Ѿ�ͨ����ʵ����֤����Ҫ�޸�����ͷ���ϵ��</div>
		<div class="user_right_border">
			<div class="l">�û�����</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ʵ������</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �� ��</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']==1): ?>��<? else: ?>Ů<? endif; ?> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �壺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['nation'])) $this->magic_vars['_G']['user_result']['nation'] = '';$_tmp = $this->magic_vars['_G']['user_result']['nation'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ڣ�</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['birthday'])) $this->magic_vars['_G']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_G']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['card_type'])) $this->magic_vars['_G']['user_result']['card_type'] = '';$_tmp = $this->magic_vars['_G']['user_result']['card_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"card_type");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����룺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['card_id'])) $this->magic_vars['_G']['user_result']['card_id'] = ''; echo $this->magic_vars['_G']['user_result']['card_id']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���᣺</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['area'])) $this->magic_vars['_G']['user_result']['area'] = '';$_tmp = $this->magic_vars['_G']['user_result']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">���֤ͼƬ��</div>
			<div class="c">
				<a href="<? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1'] = '';$_tmp = $this->magic_vars['_G']['user_result']['card_pic1'];$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" target="_blank">����</a> | <a href="<? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2'] = '';$_tmp = $this->magic_vars['_G']['user_result']['card_pic2'];$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" target="_blank">����</a>
			</div>
		</div>
		<? else: ?>
		
		<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
		<div class="user_help">ע�⣺��������д���µ����ݣ�һ��ͨ��ʵ����֤������Ϣ�������޸ġ���֤���ù���ͳһ5Ԫ!��Ӧ����û�Ҫ������֤����վ�渶����</div>
		<div class="user_right_border">
			<div class="l">�û�����</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ʵ������</div>
			<div class="c">
				<input type="hidden" name="realname" value="<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>" /><? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �� ��</div>
			<div class="c">
				<input type="radio" name="sex" value="1" <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']='';if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']=="1" ||  $this->magic_vars['_G']['user_result']['sex']==""): ?>checked="checked" <? endif; ?> />�� <input type="radio" name="sex" value="2"  <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']=="2"): ?>checked="checked" <? endif; ?> />Ů <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�� �壺</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=nation&name=nation&value=<? if (!isset($this->magic_vars['_G']['user_result']['nation'])) $this->magic_vars['_G']['user_result']['nation'] = ''; echo $this->magic_vars['_G']['user_result']['nation']; ?>" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ڣ�</div>
			<div class="c">
				<input type="text" name="birthday" value="<? if (!isset($this->magic_vars['_G']['user_result']['birthday'])) $this->magic_vars['_G']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_G']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" onclick="change_picktime()" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=card_type&name=card_type&isid=false&value=<? if (!isset($this->magic_vars['_G']['user_result']['card_type'])) $this->magic_vars['_G']['user_result']['card_type'] = ''; echo $this->magic_vars['_G']['user_result']['card_type']; ?>" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">֤�����룺</div>
			<div class="c">
				<input type="text" name="card_id" value="<? if (!isset($this->magic_vars['_G']['user_result']['card_id'])) $this->magic_vars['_G']['user_result']['card_id'] = ''; echo $this->magic_vars['_G']['user_result']['card_id']; ?>" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���᣺</div>
			<div class="c">
				<script src="/plugins/index.php?q=area&area=<? if (!isset($this->magic_vars['_G']['user_result']['area'])) $this->magic_vars['_G']['user_result']['area'] = ''; echo $this->magic_vars['_G']['user_result']['area']; ?>" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���֤�����ϴ���</div>
			<div class="c">
				<input type="file" name="card_pic1" size="20" class="input_border"/> <? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1']=''; ;if (  $this->magic_vars['_G']['user_result']['card_pic1']!=""): ?><a href="./<? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic1']; ?>" target="_blank" title="��ͼƬ"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		
	<div class="user_right_border">
			<div class="l">���֤�����ϴ���</div>
			<div class="c">
				<input type="file" name="card_pic2" size="20" class="input_border"/> <? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2']=''; ;if (  $this->magic_vars['_G']['user_result']['card_pic2']!=""): ?><a href="./<? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic2']; ?>" target="_blank" title="��ͼƬ"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money']=''; ;if (  $this->magic_vars['_G']['user_result']['use_money']>=0): ?><input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> <? else: ?> �������Ϊ<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = ''; echo $this->magic_vars['_G']['user_result']['use_money']; ?>,���� <a href="/index.php?user&q=code/account/recharge_new"><font color="#FF0000">��ֵ</font></a>��<? endif; ?>
			</div>
		</div>
		</form><? endif; ?>
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ��ϸ���û����������Ͻ��б���
		</div>
		<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var realname = frm.elements['realname'].value;
				 var birthday = frm.elements['birthday'].value;
				 var card_id = frm.elements['card_id'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* ��ʵ��������Ϊ��' + '\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* ���ղ���Ϊ��' + '\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* ֤�����벻��Ϊ��' + '\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* ����д����' + '\n';
				  }
				   
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>
		<!--�޸ĵ�¼���� ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="email_status"): ?>
		<!--������֤ ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status']=''; ;if (  $this->magic_vars['_G']['user_result']['email_status']==1): ?>
		<div class="user_help">���������Ѿ�ͨ����֤��<b><? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></b> </div>
		
		<? else: ?>
		<div class="user_help">�������仹ûͨ����֤��<b><? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></b></div>
		<div class="user_right_border">
			<div class="c">
				<form action="" method="post" onsubmit="this.elements['submit'].disabled='disabled';return true;">
				�������䣺<input type="text" name="email" value="<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>" />  <input class="button_blue_small" type="submit" name="submit" value="���¼���"  />
				</form>
			</div>
		</div>
		<? endif; ?>
		<!--������֤ ����-->
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="phone_status"): ?>
		<!--������֤ ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==1): ?>
		<div class="user_help">�����ֻ��Ѿ�ͨ����֤����֤���ֻ�����Ϊ��<b><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?></b></div>
		<? else: ?>
		<div class="user_help">
		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']!=0): ?>�����ֻ��ͷ���������У������ĵȴ����ֻ��ţ�<font color="#FF0000"><? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status'] = ''; echo $this->magic_vars['_G']['user_result']['phone_status']; ?></font>��<? else: ?>�����ֻ���ûͨ����֤��<? endif; ?></b></div>
		<? endif; ?>
		<div class="user_right_border">
			<div class="c">
				<form action="" method="post">�ֻ����룺<input type="text" name="phone" value="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']='';if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==0 ||   $this->magic_vars['_G']['user_result']['phone_status']==1): ?><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?><? else: ?><? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status'] = ''; echo $this->magic_vars['_G']['user_result']['phone_status']; ?><? endif; ?>" /> <input class="button_blue_small" type="submit" value="ȷ���ύ" /><br /><br /></form>

			</div>
		</div>
		<!--������֤ ����-->
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="video_status"): ?>
		<!--��Ƶ��֤ ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']!=1): ?>
		<div class="user_help">�㻹����VIP��Ա��������Ƶ��֤��</a>
		<div class="c">
			��Ҫ�����ΪVIP��Ա����㰴ť�ύ��VIP����ҳ��<input class="button_blue_small" style="width:100px;" type="button" onclick="javacript:location.href='/vip/index.html'" value="����VIP��Ա"  /><br /><br /></form>

			</div>
		</div>

		<? if (!isset($this->magic_vars['_G']['user_result']['vedio_status'])) $this->magic_vars['_G']['user_result']['vedio_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vedio_status']==1): ?>
		<div class="user_help">���Ѿ�ͨ������Ƶ��֤</div>
		<? else: ?>
		<div class="user_help">
		<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status']=''; ;if (  $this->magic_vars['_G']['user_result']['video_status']!=0): ?>������Ƶ��֤�Ѿ��ύ���ͷ���Ա�ἰʱ�ĸ�����ϵ��</font>��<? else: ?>��ӭ������Ƶ��֤��<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
				
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money']=''; ;if (  $this->magic_vars['_G']['user_result']['use_money'] >0): ?>�������Ҫ��Ƶ��֤����㰴ť�ύ��<input class="button_blue_small" type="submit" value="�ύ����" name="submit" /><br /><br /><? else: ?><a href="/index.php?user&q=code/account/recharge_new"><font color="#FF0000">���ȳ�ֵ</font></a><? endif; ?></form>

			</div>
		</div><? endif; ?></div>
		<? endif; ?>
		<!--��Ƶ��֤ ����-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="scene_status"): ?>
		<!--��Ƶ��֤ ��ʼ-->
		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']!=1): ?>
		<div class="user_help">�㻹����VIP��Ա�������ֳ���֤��</a>
		<div class="c">
			��Ҫ�����ΪVIP��Ա����㰴ť�ύ��VIP����ҳ��<input class="button_blue_small" style="width:100px;" type="button" onclick="javacript:location.href='/vip/index.html'" value="����VIP��Ա"  /><br /><br /></form>

			</div>
		</div>
		<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['scene_status']==1): ?>
		<div class="user_help">���Ѿ�ͨ�����ֳ���֤</b></div>
		<? else: ?>
		<div class="user_help">�������Ҫ�ֳ���֤����������˾��ַ��
		</div>
		<? endif; ?>
		<!--��Ƶ��֤ ����-->
		
		
		
		<!--���û��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="credit"): ?>
		<div class="user_help" > 
		<strong>�����ܵ÷֣�</strong> <font size="3" color="#FF0000"><strong><? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = ''; echo $this->magic_vars['_U']['user_cache']['credit']; ?></strong></font>  <? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = '';$_tmp = $this->magic_vars['_U']['user_cache']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<table  class="products_table">
			  <form action="" method="post">
				<tr class="head" >
					<th  >��������</th>
					<th  >����</th>
					<th  >��ע</th>
				</tr>
				<? $this->magic_vars['query_type']='GetLogList';$data = array('limit'=>'all','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/credit/credit.class.php');$this->magic_vars['magic_result'] = creditClass::GetLogList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr >
					<td><? if (!isset($this->magic_vars['var']['type_name'])) $this->magic_vars['var']['type_name'] = ''; echo $this->magic_vars['var']['type_name']; ?></td>
					<td><? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value'] = ''; echo $this->magic_vars['var']['value']; ?> ��</td>
					<td><? if (!isset($this->magic_vars['var']['remark'])) $this->magic_vars['var']['remark'] = ''; echo $this->magic_vars['var']['remark']; ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
				</div>
				
			</form>	
		<!--���û��� ����-->
		
		<!--���û��� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
		<div class="user_help" > 
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','epage'=>'20','kefu_userid'=>$this->magic_vars['_G']['user_id'],'showpage'=>'3');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			
		<strong>�ܿͻ���</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> ��
		</div>
		<table   class="products_table">
			  <form action="" method="post">
				<tr class="head" >
					<th  >�û���</th>
					<th  >��ʵ����</th>
					<th  >�Ա�</th>
					<th  >�绰</th>
					<th  >QQ</th>
					<th  >����</th>
					<th  >���ڵ�</th>
					<th  >����</th>
				</tr>
					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><A href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></A></td>
					<td><a href="/index.php?user&q=code/borrow/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></a> </td>
					<td><? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['area'])) $this->magic_vars['item']['area'] = '';$_tmp = $this->magic_vars['item']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><a href="index.php?user&q=code/attestation/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">����֤��</a> | <a href="index.php?user&q=code/borrow/myuserrepay&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">������ϸ</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				</table>		
				<div class="page">
					<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
				</div>
			</form>	
		<? unset($_magic_vars); ?>
		<!--���û��� ����-->
		
		<? endif; ?>
</div>
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->
<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>