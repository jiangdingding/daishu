<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<!-- jiangdingding��� -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/article_style.css" />

<div class="main-part box-shadow-white" id="page_wraper">
	<div class="crumbs"><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?></div>

	<div class="atc-left">
		<div class="list-main">
			<div class="act-content">
				<h1><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name'] = ''; echo $this->magic_vars['_G']['article']['name']; ?></h1>
				<div class="act-info">
					<span> �����ߣ�<? if (!isset($this->magic_vars['_G']['article']['author'])) $this->magic_vars['_G']['article']['author'] = '';$_tmp = $this->magic_vars['_G']['article']['author'];$_tmp = $this->magic_modifier("default",$_tmp,"");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;
						����ʱ�䣺<? if (!isset($this->magic_vars['_G']['article']['addtime'])) $this->magic_vars['_G']['article']['addtime'] = '';$_tmp = $this->magic_vars['_G']['article']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;
						���������<? if (!isset($this->magic_vars['_G']['article']['hits'])) $this->magic_vars['_G']['article']['hits'] = ''; echo $this->magic_vars['_G']['article']['hits']; ?> </span>
				</div>

				<!--���ݿ�ʼ-->
				<div class="content_ro">
					<table>
						<tr height="30">
							<td><strong>�����ص㣺</strong><? if (!isset($this->magic_vars['_G']['article']['area'])) $this->magic_vars['_G']['article']['area'] = '';$_tmp = $this->magic_vars['_G']['article']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
						</tr>
						<tr height="30">
							<td><strong>��Ƹ������</strong><? if (!isset($this->magic_vars['_G']['article']['num'])) $this->magic_vars['_G']['article']['num'] = ''; echo $this->magic_vars['_G']['article']['num']; ?></td>
						</tr>
						<tr height="30">
							<td><strong>����������</strong><? if (!isset($this->magic_vars['_G']['article']['description'])) $this->magic_vars['_G']['article']['description'] = ''; echo $this->magic_vars['_G']['article']['description']; ?></td>
						</tr>
						<tr height="30">
							<td><strong>����Ҫ��</strong><? if (!isset($this->magic_vars['_G']['article']['demand'])) $this->magic_vars['_G']['article']['demand'] = ''; echo $this->magic_vars['_G']['article']['demand']; ?></td>
						</tr>
					</table>
				</div>
				<!--���ݽ���-->

			</div>

		</div>

		<div class="content-left" style="margin-top:20px;">
			<div class="tab-bar">
				<ul>
					<li class="active">����</li>
				</ul>

			</div>
			<div><? $this->magic_include(array('file' => "pinglun.html", 'vars' => array()));?></div>

		</div>

	</div>

	<div class="list-right">
		<!-- ���¹��� -->
		<div div class="content-right">
			<div class="right-title-bar">
				<span class="fl">��վ����</span> <span class="fr"><a
					href="/gonggao/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">����</a>
				</span>
			</div>
			<div class="atc-list right">
				<ul>
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'22');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"
						title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"17");echo $_tmp;unset($_tmp); ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
			</div>
		</div>
		<? $this->magic_include(array('file' => "zixun_right.html", 'vars' => array()));?>
		<!-- ����ָ�� -->
		<div class="content-right" style="margin-top:20px;">
			<div class="right-title-bar">
				<span class="fl">����ָ��</span><span class="fr"><a
					href="/new/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">����</a>
			</div>
			<div class="atc-list right">
				<ul>
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><a href="?<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"17");echo $_tmp;unset($_tmp); ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
			</div>
		</div>




	</div>

</div>



<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>

