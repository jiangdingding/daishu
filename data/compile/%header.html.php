<!DOCTYPE html >
<!--STATUS OK-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>����רҵ�������ƽ̨</title>
<meta name="description" content="�������ṩ���ʵ���Ʋ�Ʒ����ݵĴ������룬���İ�ȫ����ƣ���Ч�ɿ��ش���Ӵ�������Ʋ������ѡ�" />
<meta name="keywords" content="" />
<meta http-equiv="Cache-Control" content="no-transform" />
<link rel="shortcut icon" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/favicon.png" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/common.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/search.css">
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/search_result.css" />

<!-- ������ -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/lijitoubiao.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/zhanghuxiangqing.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/tools.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/register.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/login.css" />

<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/bbs.css" />

<!-- js -->
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/base.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/tipswindown.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/tablechange.js"></script>
<script src="/plugins/timepicker/WdatePicker.js" type="text/javascript"></script>



</head>
<body>
	<div class=header_box>
	<div class="header">
		<div class="login" id="userinfo-bar">
			<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username']=''; ;if (  $this->magic_vars['_G']['user_result']['username']!= ""): ?> ��ӭ��,&nbsp;<a href="/index.php?user"><font color="blue"><? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></font></a>&nbsp;! |
			<? else: ?>
	<!-- 	<a href="#" target="_blank"><img src="/themes/ruizhict/style/images/phone.png" height=15 style="display:inline-block;vertical-align:middle; margin-right:2px;margin-top:-1px;" />�ֻ�Ӧ��</a>   -->	
			<a href="/index.php?user&q=action/login">�û���¼</a>
			| <a href="/index.php?user&q=action/reg">����ע��</a> |
			<? endif; ?>
			 
			<a href="/index.php?user&q=action/logout">�˳�</a> | <a
				class="blue-font" href="/lianxi/index.html">��ϵ����</a>
		</div>
		<div class="logo">
			<a class="pngfix" href="/index.php" title="������">������</a>
		</div>

	</div>

	<ul class="navbar clearfix">
		<li <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']== "" ||  $this->magic_vars['_G']['site_presult']['nid']=="index"): ?> 
	            class="pngfix nav-focus"
			<? else: ?> class="pngfix nav-blur"<? endif; ?>><a href="/"
			title="��ҳ">��ҳ</a>
		</li> <? $this->magic_vars['varlgnore'] = array(1,24,28,46);$this->magic_vars['varsite_id'] = array(); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && $this->magic_vars['var']['pid']==0 && !in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varlgnore']) && $this->magic_vars['var']['status'] == 1 ): $this->magic_vars['key'] =$i?>
		<li <? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']== "bbs"): ?> 
			target="_blank"
			<? endif; ?>  
		
		<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']== $this->magic_vars['var']['nid']||  $this->magic_vars['_G']['site_presult']['nid']== $this->magic_vars['var']['nid']): ?> 
			class="pngfix nav-focus"
			<? else: ?> 
			class="pngfix nav-blur"<? endif; ?>
	><? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if ( $this->magic_vars['var']['nid']=="bbs"): ?> <a href="#"></a> <? else: ?> <a href="<? if (!isset($this->magic_vars['var']['siteurl'])) $this->magic_vars['var']['siteurl'] = ''; echo $this->magic_vars['var']['siteurl']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
			<? endif; ?></li> <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
	</ul>
	<div class="nav-line"></div>
	</div>