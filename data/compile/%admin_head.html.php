<!DOCTYPE html >
<!--STATUS OK-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��������̨����</title>
<link rel="shortcut icon" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/favicon.png" />
<link href="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/admin.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/css/tipswindown.css" rel="stylesheet" type="text/css" />
<script src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/js/jquery.js" type="text/javascript"></script>
<script src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/js/tipswindown.js" type="text/javascript"></script>
<script src="plugins/timepicker/WdatePicker.js" type="text/javascript"></script>
<script src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/js/base.js" type="text/javascript"></script>
</head>

<body>
<div class="main top">
	<div class="logo" style="padding-left:30px;padding-top:10px"><img src="/themes/ruizhict/style/css/img/logo.png" /></div>
	<div class="banner">
		<div class="banner_top">
		<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/clearcache">��ջ���</a>  |  <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/dbbackup/back">���ݱ���</a>  |  <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/makehtml/index">������վ</a> |  <a href="/" target="_blank">�ص���ҳ</a></div>
		<div class="banner_site">
			<!--<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=control"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_1.gif" /></a> -->
			
			<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=content"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_5.gif" /></a>
			<? if (!isset($this->magic_vars['_A']['pur_header']['site_all'])) $this->magic_vars['_A']['pur_header']['site_all']=''; ;if (  $this->magic_vars['_A']['pur_header']['site_all']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/loop&a=loop"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_2.gif" /></a><? endif; ?> 
			<? if (!isset($this->magic_vars['_A']['pur_header']['module_all'])) $this->magic_vars['_A']['pur_header']['module_all']=''; ;if (  $this->magic_vars['_A']['pur_header']['module_all']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_3.gif" /></a> <? endif; ?>
			<? if (!isset($this->magic_vars['_A']['pur_header']['system_all'])) $this->magic_vars['_A']['pur_header']['system_all']=''; ;if (  $this->magic_vars['_A']['pur_header']['system_all']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_4.gif" /></a><? endif; ?>
			<? if (!isset($this->magic_vars['_A']['pur_header']['bbs_all'])) $this->magic_vars['_A']['pur_header']['bbs_all']=''; ;if (  $this->magic_vars['_A']['pur_header']['bbs_all']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=bbs"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_6.gif" /></a><? endif; ?>
			
		</div>
		<div class="banner_position">
		<span>
			���ã�<font color="#FF0000"><? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?></font> [<? if (!isset($this->magic_vars['_G']['user_result']['typename'])) $this->magic_vars['_G']['user_result']['typename'] = ''; echo $this->magic_vars['_G']['user_result']['typename']; ?>] &nbsp; &nbsp;
			 <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>">������ҳ</a> | <a href="http://www.80cz.net" target="_blank">����</a> �� <strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=logout">�˳�</a></strong>
		 </span>
		 <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>"><strong>��������</strong></a> -> <? if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;if (  $this->magic_vars['_A']['query_sort']=="module"): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module">ģ��</a><? if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $this->magic_vars['_A']['query_sort']=="control"): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=control">�ҵĿ���̨</a><? if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $this->magic_vars['_A']['query_sort']=="site"): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site">վ�����</a><? if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $this->magic_vars['_A']['query_sort']=="system"): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system">ϵͳ����</a><? else: ?>������ҳ<? endif; ?> <? if (!isset($this->magic_vars['list_name'])) $this->magic_vars['list_name']=''; ;if (  $this->magic_vars['list_name']!=""): ?>  -> <? if (!isset($this->magic_vars['list_name'])) $this->magic_vars['list_name'] = ''; echo $this->magic_vars['list_name']; ?><? endif; ?><? if (!isset($this->magic_vars['list_title'])) $this->magic_vars['list_title']=''; ;if (  $this->magic_vars['list_title']!=""): ?> -> <? if (!isset($this->magic_vars['list_title'])) $this->magic_vars['list_title'] = ''; echo $this->magic_vars['list_title']; ?><? endif; ?></div>
	</div>
</div><br />

<div class="main">
	<div class="main_left">
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;if (  $_REQUEST['a']=="control"): ?>
			<? $this->magic_include(array('file' => "admin_control_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a']=="loop"): ?>
			<? $this->magic_include(array('file' => "admin_loop_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']='';if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $_REQUEST['a']=="bbs" ||  $this->magic_vars['_A']['query_sort'] == "bbs"): ?>
			<? $this->magic_include(array('file' => "dwbbs_menu.tpl", 'vars' => array('template_dir' => 'modules/dwbbs')));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']=''; ;elseif (  $_REQUEST['a'] == "site"): ?>
			<? $this->magic_include(array('file' => "admin_site_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']='';if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $_REQUEST['a']=="system" ||  $this->magic_vars['_A']['query_sort'] == "system"): ?>
			<? $this->magic_include(array('file' => "admin_system_menu.html", 'vars' => array()));?>
		<? if (!isset($_REQUEST['a'])) $_REQUEST['a']='';if (!isset($this->magic_vars['_A']['query_sort'])) $this->magic_vars['_A']['query_sort']=''; ;elseif (  $_REQUEST['a'] == "module" ||  $this->magic_vars['_A']['query_sort'] == "module"): ?>
			<? $this->magic_include(array('file' => "admin_module_menu.html", 'vars' => array()));?>
		<? else: ?>
			<? $this->magic_include(array('file' => "admin_site_menu.html", 'vars' => array()));?>
		
		<? endif; ?>
	</div>
	<div class="main_right">
	
		<div class="main_site">
			<ul>
				
				<li class="site_sub"><? if (!isset($this->magic_vars['_A']['list_menu'])) $this->magic_vars['_A']['list_menu'] = ''; echo $this->magic_vars['_A']['list_menu']; ?></li>
				<li class="title"><? if (!isset($this->magic_vars['_A']['list_name'])) $this->magic_vars['_A']['list_name'] = ''; echo $this->magic_vars['_A']['list_name']; ?> <span>/ <? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name']=''; ;if (  $this->magic_vars['_A']['site_result']['name']!=""): ?><? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?><? else: ?><? if (!isset($this->magic_vars['_A']['list_title'])) $this->magic_vars['_A']['list_title'] = ''; echo $this->magic_vars['_A']['list_title']; ?> <? endif; ?></span></li>
				
			</ul>
		</div>
		<div class="main_content">
			
		 