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
	<!-- �������� -->
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="header-menu">
			<ul>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">��������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="building"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/building">��������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="company"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/company">��λ����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="firm"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/firm">˽Ӫҵ��</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="finance"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/finance">����״��</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="contact"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/contact">��ϵ��ʽ</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="mate"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/mate">��ż����</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="edu"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/edu">��������</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="job"): ?> class="current"<? endif; ?>><a style="width:80px;" href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/job">����</a></li>
			</ul>
		</div>
		
		<div class="user_right_main">
		
		<form action="" name="form1" method="post" >
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?>
		<!--�������� ��ʼ-->
			<div class="user_right_border">
				<div class="l">�ʻ���</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�ʺű�����</div>
				<div class="c">
					������������ | �������뱣�� 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�� �ƣ�</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�� ��</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']==1): ?>��<? else: ?>Ů<? endif; ?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�ֻ����룺</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���᣺</div>
				<div class="c">
					<? if (!isset($this->magic_vars['_G']['user_result']['area'])) $this->magic_vars['_G']['user_result']['area'] = '';$_tmp = $this->magic_vars['_G']['user_result']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">����״����</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=marry&nid=user_marry&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['marry'])) $this->magic_vars['_U']['userinfo_result']['marry'] = ''; echo $this->magic_vars['_U']['userinfo_result']['marry']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�� Ů��</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=child&nid=user_child&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['child'])) $this->magic_vars['_U']['userinfo_result']['child'] = ''; echo $this->magic_vars['_U']['userinfo_result']['child']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">ѧ ����</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=education&nid=user_education&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['education'])) $this->magic_vars['_U']['userinfo_result']['education'] = ''; echo $this->magic_vars['_U']['userinfo_result']['education']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�����룺</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=income&nid=user_income&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['income'])) $this->magic_vars['_U']['userinfo_result']['income'] = ''; echo $this->magic_vars['_U']['userinfo_result']['income']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�� ����</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=shebao&nid=user_shebao&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['shebao'])) $this->magic_vars['_U']['userinfo_result']['shebao'] = ''; echo $this->magic_vars['_U']['userinfo_result']['shebao']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�籣���Ժţ�</div>
				<div class="c">
					<input type="text" size="30" name="shebaoid" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['shebaoid'])) $this->magic_vars['_U']['userinfo_result']['shebaoid'] = ''; echo $this->magic_vars['_U']['userinfo_result']['shebaoid']; ?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">ס��������</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=housing&nid=user_housing&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['housing'])) $this->magic_vars['_U']['userinfo_result']['housing'] = ''; echo $this->magic_vars['_U']['userinfo_result']['housing']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�Ƿ񹺳���</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=car&nid=user_car&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['car'])) $this->magic_vars['_U']['userinfo_result']['car'] = ''; echo $this->magic_vars['_U']['userinfo_result']['car']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���ڼ�¼��</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=late&nid=user_late&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['late'])) $this->magic_vars['_U']['userinfo_result']['late'] = ''; echo $this->magic_vars['_U']['userinfo_result']['late']; ?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		<!--�������� ����-->
		<!--�˺ų�ֵ ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="building"): ?>
		<div class="user_help">����д����˵ķ������������Ϣ</div>
		
		<div class="user_right_border">
				<div class="l">������ַ��</div>
				<div class="c">
					<input type="text" size="30" name="house_address" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_address'])) $this->magic_vars['_U']['userinfo_result']['house_address'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_address']; ?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���������</div>
				<div class="c">
					<input type="text" size="25" name="house_area" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_area'])) $this->magic_vars['_U']['userinfo_result']['house_area'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_area']; ?>"/> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">������ݣ�</div>
				<div class="c">
					<input type="text" size="25" name="house_year" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_year'])) $this->magic_vars['_U']['userinfo_result']['house_year'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_year']; ?>" onclick="change_picktime()" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">����״����</div>
				<div class="c">
					<input type="text" size="25" name="house_status" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_status'])) $this->magic_vars['_U']['userinfo_result']['house_status'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_status']; ?>" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">����Ȩ��1��</div>
				<div class="c">
					<input type="text" size="25" name="house_holder1" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_holder1'])) $this->magic_vars['_U']['userinfo_result']['house_holder1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_holder1']; ?>" /> ��Ȩ�ݶ<input type="text" size="25" name="house_right1" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_right1'])) $this->magic_vars['_U']['userinfo_result']['house_right1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_right1']; ?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">����Ȩ��2��</div>
				<div class="c">
					<input type="text" size="25" name="house_holder2" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_holder2'])) $this->magic_vars['_U']['userinfo_result']['house_holder2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_holder2']; ?>" /> ��Ȩ�ݶ<input type="text" size="25" name="house_right2" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_right2'])) $this->magic_vars['_U']['userinfo_result']['house_right2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_right2']; ?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="e">���������ڰ�����, ����д</div>
				<div class="c">
					�������ޣ�<input type="text" size="10" name="house_loanyear" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_loanyear'])) $this->magic_vars['_U']['userinfo_result']['house_loanyear'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_loanyear']; ?>" />ÿ�¹��<input type="text" size="10" name="house_loanprice" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_loanprice'])) $this->magic_vars['_U']['userinfo_result']['house_loanprice'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_loanprice']; ?>" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">��Ƿ������</div>
				<div class="c">
					<input type="text" size="25" name="house_balance" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_balance'])) $this->magic_vars['_U']['userinfo_result']['house_balance'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_balance']; ?>" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">�������У�</div>
				<div class="c">
					<input type="text" size="25" name="house_bank" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['house_bank'])) $this->magic_vars['_U']['userinfo_result']['house_bank'] = ''; echo $this->magic_vars['_U']['userinfo_result']['house_bank']; ?>" /> 
				</div>
			</div>
		
		
		<script>
			function change_type(type){
				if (type==2){
					$("#type_net").addClass("dishide");
					$("#type_now").removeClass();
				}else{
					$("#type_now").addClass("dishide");
					$("#type_net").removeClass();
				}
				
			}
		
		</script>
		
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--�˺ų�ֵ ����-->
		
		<!--��λ���� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="company"): ?>
		<div class="user_help">����д����˵�����ĵ�λ����</div>
		 <form action="" method="post">
		<div class="user_right_border">
			<div class="l">��λ���ƣ�</div>
			<div class="c">
				<input type="text" size="25" name="company_name" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_name'])) $this->magic_vars['_U']['userinfo_result']['company_name'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_name']; ?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ���ʣ�</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_type&nid=user_company_type&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_type'])) $this->magic_vars['_U']['userinfo_result']['company_type'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_type']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ��ҵ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_industry&nid=user_company_industry&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_industry'])) $this->magic_vars['_U']['userinfo_result']['company_industry'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_industry']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��������</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_jibie&nid=user_company_jibie&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_jibie'])) $this->magic_vars['_U']['userinfo_result']['company_jibie'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_jibie']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ְ λ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_office&nid=user_company_office&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_office'])) $this->magic_vars['_U']['userinfo_result']['company_office'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_office']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">����ʱ�䣺</div>
			<div class="c">
				<input type="text" size="25" name="company_worktime1" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_worktime1'])) $this->magic_vars['_U']['userinfo_result']['company_worktime1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_worktime1']; ?>" onclick="change_picktime()" />  �� <input type="text" size="25" name="company_worktime2" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_worktime2'])) $this->magic_vars['_U']['userinfo_result']['company_worktime2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_worktime2']; ?>" onclick="change_picktime()" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�������ޣ�</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=company_workyear&nid=user_company_workyear&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_workyear'])) $this->magic_vars['_U']['userinfo_result']['company_workyear'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_workyear']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����绰��</div>
			<div class="c">
				<input type="text" size="25" name="company_tel" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_tel'])) $this->magic_vars['_U']['userinfo_result']['company_tel'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_tel']; ?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��˾��ַ��</div>
			<div class="c">
				<input type="text" size="25" name="company_address" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_address'])) $this->magic_vars['_U']['userinfo_result']['company_address'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_address']; ?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��˾��վ��</div>
			<div class="c">
				<input type="text" size="25" name="company_weburl" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['company_weburl'])) $this->magic_vars['_U']['userinfo_result']['company_weburl'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_weburl']; ?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ע˵����</div>
			<div class="c">
				<textarea  cols="50" rows="6"name="company_reamrk"  ><? if (!isset($this->magic_vars['_U']['userinfo_result']['company_reamrk'])) $this->magic_vars['_U']['userinfo_result']['company_reamrk'] = ''; echo $this->magic_vars['_U']['userinfo_result']['company_reamrk']; ?></textarea>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--��λ���� ����-->
		
		
		
		<!--˽Ӫҵ������  ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="firm"): ?>
		<div class="user_help">����д������ҵ������</div>
		 <form action="" method="post">
			 <div class="user_right_border">
				<div class="l">˽Ӫ��ҵ���ͣ�</div>
				<div class="c">
					<script src="/plugins/index.php?q=linkage&name=private_type&nid=user_company_industry&value="></script> 
				</div>
			</div>
			
			 <div class="user_right_border">
				<div class="l">�������ڣ�</div>
				<div class="c">
					<input type="text" size="25" name="private_date" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_date'])) $this->magic_vars['_U']['userinfo_result']['private_date'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_date']; ?>" onclick="change_picktime()"/> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">��Ӫ������</div>
				<div class="c">
					<input type="text" size="25" name="private_place" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_place'])) $this->magic_vars['_U']['userinfo_result']['private_place'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_place']; ?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���</div>
				<div class="c">
					<input type="text" size="25" name="private_rent" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_rent'])) $this->magic_vars['_U']['userinfo_result']['private_rent'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_rent']; ?>" /> Ԫ
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���ڣ�</div>
				<div class="c">
					<input type="text" size="25" name="private_term" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_term'])) $this->magic_vars['_U']['userinfo_result']['private_term'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_term']; ?>" /> ��
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">˰���ţ�</div>
				<div class="c">
					<input type="text" size="25" name="private_taxid" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_commerceid'])) $this->magic_vars['_U']['userinfo_result']['private_commerceid'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_commerceid']; ?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">���̵ǼǺţ�</div>
				<div class="c">
					<input type="text" size="25" name="private_commerceid" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_commerceid'])) $this->magic_vars['_U']['userinfo_result']['private_commerceid'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_commerceid']; ?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">ȫ��ӯ��/����</div>
				<div class="c">
					<input type="text" size="25" name="private_income" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_income'])) $this->magic_vars['_U']['userinfo_result']['private_income'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_income']; ?>" /> Ԫ����ȣ�
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">��Ա������</div>
				<div class="c">
					<input type="text" size="25" name="private_employee" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['private_employee'])) $this->magic_vars['_U']['userinfo_result']['private_employee'] = ''; echo $this->magic_vars['_U']['userinfo_result']['private_employee']; ?>" /> ��
				</div>
			</div>
		 
		 <div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		
		<div class="user_right_foot">
		* ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--˽Ӫҵ������  ����-->
		 
		 
		 <!--����״��  ����-->
		 <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="firm"): ?>
		<div class="user_help">����д������ҵ������</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">ÿ���޵�Ѻ�����</div>
			<div class="c">
				<input type="text" size="15" name="finance_repayment" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_repayment'])) $this->magic_vars['_U']['userinfo_result']['finance_repayment'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_repayment']; ?>" /> Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���з�����</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=finance_property&nid=user_finance_property&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_property'])) $this->magic_vars['_U']['userinfo_result']['finance_property'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_property']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ÿ�·��ݰ��ҽ�</div>
			<div class="c">
				<input type="text" size="15" name="finance_amount" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_amount'])) $this->magic_vars['_U']['userinfo_result']['finance_amount'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_amount']; ?>" /> Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">����������</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=finance_car&nid=user_finance_car&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_car'])) $this->magic_vars['_U']['userinfo_result']['finance_car'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_car']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ÿ���������ҽ�</div>
			<div class="c">
				<input type="text" size="15" name="finance_caramount" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_caramount'])) $this->magic_vars['_U']['userinfo_result']['finance_caramount'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_caramount']; ?>" /> Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ÿ�����ÿ������</div>
			<div class="c">
				<input type="text" size="15" name="finance_creditcard" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_creditcard'])) $this->magic_vars['_U']['userinfo_result']['finance_creditcard'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_creditcard']; ?>" /> Ԫ
			</div>
		</div>
		
		 <div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		<div class="user_right_foot">
		 * ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--����״��  ����-->
		 
		<!--��ϵ��ʽ   ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="finance"): ?>
		<div class="user_help">����д������״��</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="e">ÿ���޵�Ѻ�����</div>
			<div class="c">
				<input type="text" size="15" name="finance_repayment" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_repayment'])) $this->magic_vars['_U']['userinfo_result']['finance_repayment'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_repayment']; ?>" /> Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">���з�����</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=finance_property&nid=user_finance_property&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_property'])) $this->magic_vars['_U']['userinfo_result']['finance_property'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_property']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">ÿ�·��ݰ��ҽ�</div>
			<div class="c">
				<input type="text" size="15" name="finance_amount" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_amount'])) $this->magic_vars['_U']['userinfo_result']['finance_amount'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_amount']; ?>" /> Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">����������</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=finance_car&nid=user_finance_car&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_car'])) $this->magic_vars['_U']['userinfo_result']['finance_car'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_car']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">ÿ���������ҽ�</div>
			<div class="c">
				<input type="text" size="15" name="finance_caramount" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_caramount'])) $this->magic_vars['_U']['userinfo_result']['finance_caramount'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_caramount']; ?>" /> Ԫ
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">ÿ�����ÿ������</div>
			<div class="c">
				<input type="text" size="15" name="finance_creditcard" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['finance_creditcard'])) $this->magic_vars['_U']['userinfo_result']['finance_creditcard'] = ''; echo $this->magic_vars['_U']['userinfo_result']['finance_creditcard']; ?>" /> Ԫ
			</div>
		</div>
		 <div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		<!--����״�� ����-->
		
		<div class="user_right_foot">
		 * ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--��ϵ��ʽ   ����-->
		
		
		<!--��ϵ��ʽ   ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="contact"): ?>
		<div class="user_help">����д����ϵ��ʽ</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">��ס�ص绰��</div>
			<div class="c">
				<input type="text" size="25" name="tel" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['tel'])) $this->magic_vars['_U']['userinfo_result']['tel'] = ''; echo $this->magic_vars['_U']['userinfo_result']['tel']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ֻ����룺</div>
			<div class="c">
				<input type="text" size="25" name="phone" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['phone'])) $this->magic_vars['_U']['userinfo_result']['phone'] = ''; echo $this->magic_vars['_U']['userinfo_result']['phone']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ס����ʡ�У�</div>
			<div class="c">
				<script src="/plugins/index.php?q=area&area=<? if (!isset($this->magic_vars['_U']['userinfo_result']['area'])) $this->magic_vars['_U']['userinfo_result']['area'] = ''; echo $this->magic_vars['_U']['userinfo_result']['area']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��ס���ʱࣺ</div>
			<div class="c">
				<input type="text" size="25" name="post" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['post'])) $this->magic_vars['_U']['userinfo_result']['post'] = ''; echo $this->magic_vars['_U']['userinfo_result']['post']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�־�ס��ַ��</div>
			<div class="c">
				<input type="text" size="25" name="address" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['address'])) $this->magic_vars['_U']['userinfo_result']['address'] = ''; echo $this->magic_vars['_U']['userinfo_result']['address']; ?>" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ڶ���ϵ��������</div>
			<div class="c">
				<input type="text" size="25" name="linkman1" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['linkman1'])) $this->magic_vars['_U']['userinfo_result']['linkman1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['linkman1']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ڶ���ϵ�˹�ϵ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=relation1&nid=user_relation&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['relation1'])) $this->magic_vars['_U']['userinfo_result']['relation1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['relation1']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ڶ���ϵ�˵绰��</div>
			<div class="c">
				<input type="text" size="25" name="tel1" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['tel1'])) $this->magic_vars['_U']['userinfo_result']['tel1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['tel1']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ڶ���ϵ���ֻ���</div>
			<div class="c">
				<input type="text" size="25" name="phone1" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['phone1'])) $this->magic_vars['_U']['userinfo_result']['phone1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['phone1']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ��������</div>
			<div class="c">
				<input type="text" size="25" name="linkman2" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['linkman2'])) $this->magic_vars['_U']['userinfo_result']['linkman2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['linkman2']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ�˹�ϵ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=relation2&nid=user_relation&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['relation2'])) $this->magic_vars['_U']['userinfo_result']['relation2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['relation2']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ�˵绰��</div>
			<div class="c">
				<input type="text" size="25" name="tel2" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['tel2'])) $this->magic_vars['_U']['userinfo_result']['tel2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['tel2']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ���ֻ���</div>
			<div class="c">
				<input type="text" size="25" name="phone2" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['phone2'])) $this->magic_vars['_U']['userinfo_result']['phone2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['phone2']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ��������</div>
			<div class="c">
				<input type="text" size="25" name="linkman3" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['linkman3'])) $this->magic_vars['_U']['userinfo_result']['linkman3'] = ''; echo $this->magic_vars['_U']['userinfo_result']['linkman3']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ�˹�ϵ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=relation3&nid=user_relation&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['relation3'])) $this->magic_vars['_U']['userinfo_result']['relation3'] = ''; echo $this->magic_vars['_U']['userinfo_result']['relation3']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ�˵绰��</div>
			<div class="c">
				<input type="text" size="25" name="tel3" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['tel3'])) $this->magic_vars['_U']['userinfo_result']['tel3'] = ''; echo $this->magic_vars['_U']['userinfo_result']['tel3']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������ϵ���ֻ���</div>
			<div class="c">
				<input type="text" size="25" name="phone3" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['phone3'])) $this->magic_vars['_U']['userinfo_result']['phone3'] = ''; echo $this->magic_vars['_U']['userinfo_result']['phone3']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">MSN��</div>
			<div class="c">
				<input type="text" size="25" name="msn" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['msn'])) $this->magic_vars['_U']['userinfo_result']['msn'] = ''; echo $this->magic_vars['_U']['userinfo_result']['msn']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">QQ��</div>
			<div class="c">
				<input type="text" size="25" name="qq" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['qq'])) $this->magic_vars['_U']['userinfo_result']['qq'] = ''; echo $this->magic_vars['_U']['userinfo_result']['qq']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������</div>
			<div class="c">
				<input type="text" size="25" name="wangwang" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['wangwang'])) $this->magic_vars['_U']['userinfo_result']['wangwang'] = ''; echo $this->magic_vars['_U']['userinfo_result']['wangwang']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		<div class="user_right_foot">
		 * ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--��ϵ��ʽ   ����-->
		
		<!--��ż����   ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="mate"): ?>
		<div class="user_help">����д����ϵ��ʽ</div>
		<form action="" method="post">
		
		<div class="user_right_border">
			<div class="l">��ż������</div>
			<div class="c">
				<input type="text" size="25" name="mate_name" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_name'])) $this->magic_vars['_U']['userinfo_result']['mate_name'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_name']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ÿ��н��</div>
			<div class="c">
				<input type="text" size="25" name="mate_salary" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_salary'])) $this->magic_vars['_U']['userinfo_result']['mate_salary'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_salary']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�ƶ��绰��</div>
			<div class="c">
				<input type="text" size="25" name="mate_phone" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_phone'])) $this->magic_vars['_U']['userinfo_result']['mate_phone'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_phone']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ�绰��</div>
			<div class="c">
				<input type="text" size="25" name="mate_tel" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_tel'])) $this->magic_vars['_U']['userinfo_result']['mate_tel'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_tel']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">������λ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=mate_type&nid=user_company_industry&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_type'])) $this->magic_vars['_U']['userinfo_result']['mate_type'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_type']; ?>"></script> 
			</div>
		</div>
		
		
		<div class="user_right_border">
			<div class="l">ְλ��</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=mate_office&nid=user_company_office&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_office'])) $this->magic_vars['_U']['userinfo_result']['mate_office'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_office']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">��λ��ַ��</div>
			<div class="c">
				<input type="text" size="25" name="mate_address" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_address'])) $this->magic_vars['_U']['userinfo_result']['mate_address'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_address']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">�����룺</div>
			<div class="c">
				<input type="text" size="25" name="mate_income" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['mate_income'])) $this->magic_vars['_U']['userinfo_result']['mate_income'] = ''; echo $this->magic_vars['_U']['userinfo_result']['mate_income']; ?>" />
			</div>
		</div>
			
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		<div class="user_right_foot">
		 * ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--��ż����   ����-->
		
		
		<!--��������   ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="edu"): ?>
		<div class="user_help">����д����������</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">���ѧ����</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=education_record&nid=user_education&value=<? if (!isset($this->magic_vars['_U']['userinfo_result']['education_record'])) $this->magic_vars['_U']['userinfo_result']['education_record'] = ''; echo $this->magic_vars['_U']['userinfo_result']['education_record']; ?>"></script> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���ѧ��ѧУ��</div>
			<div class="c">
				<input type="text" size="25" name="education_school" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['education_school'])) $this->magic_vars['_U']['userinfo_result']['education_school'] = ''; echo $this->magic_vars['_U']['userinfo_result']['education_school']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">רҵ��</div>
			<div class="c">
				<input type="text" size="25" name="education_study" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['education_study'])) $this->magic_vars['_U']['userinfo_result']['education_study'] = ''; echo $this->magic_vars['_U']['userinfo_result']['education_study']; ?>" />
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">ʱ�䣺</div>
			<div class="c">
				<input type="text" size="25" name="education_time1" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['education_time1'])) $this->magic_vars['_U']['userinfo_result']['education_time1'] = ''; echo $this->magic_vars['_U']['userinfo_result']['education_time1']; ?>" onclick="change_picktime()" /> �� <input type="text" size="25" name="education_time2" value="<? if (!isset($this->magic_vars['_U']['userinfo_result']['education_time2'])) $this->magic_vars['_U']['userinfo_result']['education_time2'] = ''; echo $this->magic_vars['_U']['userinfo_result']['education_time2']; ?>" onclick="change_picktime()" /> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		<div class="user_right_foot">
		 * ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		
		<!--��������   ����-->
		
		<!--��������   ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="job"): ?>
		<div class="user_help">����д����������</div>
		<form action="" method="post">
		<div class="user_right_border">
			<div class="l">����������</div>
			<div class="c">
				<textarea rows="7" cols="50" name="ability"><? if (!isset($this->magic_vars['_U']['userinfo_result']['ability'])) $this->magic_vars['_U']['userinfo_result']['ability'] = ''; echo $this->magic_vars['_U']['userinfo_result']['ability']; ?></textarea><br />���������������֯Э�������������� 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">���˰��ã�</div>
			<div class="c">
				<textarea rows="7" cols="50" name="interest"><? if (!isset($this->magic_vars['_U']['userinfo_result']['interest'])) $this->magic_vars['_U']['userinfo_result']['interest'] = ''; echo $this->magic_vars['_U']['userinfo_result']['interest']; ?></textarea><br />��ͻ���Լ��ĸ��ԣ�����̬�Ȼ����˶��Լ������۵ȣ�
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">����˵����</div>
			<div class="c">
				<textarea rows="7" cols="50" name="others"><? if (!isset($this->magic_vars['_U']['userinfo_result']['others'])) $this->magic_vars['_U']['userinfo_result']['others'] = ''; echo $this->magic_vars['_U']['userinfo_result']['others']; ?></textarea><br />
				
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c" style="padding-left:120px">
				<input class="button_blue_small" type="submit" name="name"  value="ȷ���ύ" size="30" /> 
			</div>
		</div>
		
		<div class="user_right_foot">
		 * ��ܰ��ʾ�����ǽ������е���Ϣ���б���
		</div>
		<!--��������   ����-->
		<? endif; ?>
		<input type="hidden" name="type" value="1" />
		</form>
	</div>
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->
<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>