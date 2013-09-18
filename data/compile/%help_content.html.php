<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<!-- jiangdingding添加 -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/article_style.css" />

<div class="clearfix index-middle" id="clearfix_index-middle">
	
	<div class="fl index-middle-l" style="width:658px">
	<div class="block-l">
			<div class="block-title"><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> > 正文</div>
	
		<div class="list-main">
			<div class="act-content">
				<h1><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name'] = ''; echo $this->magic_vars['_G']['article']['name']; ?></h1>
				<div class="act-info">
					<span> 发布者：<? if (!isset($this->magic_vars['_G']['article']['author'])) $this->magic_vars['_G']['article']['author'] = '';$_tmp = $this->magic_vars['_G']['article']['author'];$_tmp = $this->magic_modifier("default",$_tmp,"");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;
						发布时间：<? if (!isset($this->magic_vars['_G']['article']['addtime'])) $this->magic_vars['_G']['article']['addtime'] = '';$_tmp = $this->magic_vars['_G']['article']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;
						点击次数：<? if (!isset($this->magic_vars['_G']['article']['hits'])) $this->magic_vars['_G']['article']['hits'] = ''; echo $this->magic_vars['_G']['article']['hits']; ?> </span>
				</div>
				<!--内容开始-->

				<div class="content_ro">

					<table>
						<tr>

							<td><? if (!isset($this->magic_vars['_G']['article']['content'])) $this->magic_vars['_G']['article']['content'] = ''; echo $this->magic_vars['_G']['article']['content']; ?></td>

						</tr>
					</table>

					<? if (!isset($this->magic_vars['_G']['article']['files'])) $this->magic_vars['_G']['article']['files']=''; ;if (  $this->magic_vars['_G']['article']['files']!=""): ?>

					<div style="float:right">

						<a href="<? if (!isset($this->magic_vars['_G']['article']['files'])) $this->magic_vars['_G']['article']['files'] = ''; echo $this->magic_vars['_G']['article']['files']; ?>" target="_blank"><font
							color="#FF0000">下载文件</font> </a>

					</div>

					<? endif; ?>

				</div>

				<!--内容结束-->

				<? $data = array('site_id'=>$this->magic_vars['_G']['site_result']['site_id'],'id'=>$this->magic_vars['_G']['article_id'],'code'=>$this->magic_vars['_G']['site_result']['code'],'table'=>''); $this->magic_vars['magic_result'] = siteClass::GetArticleSide($data); $this->magic_vars['var']=  $this->magic_vars['magic_result'];?>
				<!--内容条页开始-->
				<div class="content_pages">

					<div class="floatl">

						<span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/up_page.gif"
							align="absmiddle" /> <strong>上一条：</strong><? if (!isset($this->magic_vars['var']['up'])) $this->magic_vars['var']['up'] = ''; echo $this->magic_vars['var']['up']; ?></span> <span>

							<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/down_page.gif" /> <strong>下一条：</strong><? if (!isset($this->magic_vars['var']['down'])) $this->magic_vars['var']['down'] = ''; echo $this->magic_vars['var']['down']; ?></span>

					</div>

				</div>
				<!--内容条页结束-->
				<? unset($_magic_vars);unset($data); ?>

			</div>

		</div>
</div>
		<div class="content-left" style="margin-top:20px;background: #FFF">
			<div class="tab-bar">
				<ul>
					<li class="active">评论</li>
				</ul>

			</div>
			<div><? $this->magic_include(array('file' => "pinglun.html", 'vars' => array()));?></div>

		</div>

	</div>

<div class="fr">

		<!-- 贷款助手 -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<div class="block-title clearfix">
				<span class="fl">贷款助手</span>
			</div>
			<div class="">
				<div class="zs_item clearfix" style="margin-top:10px;margin-bottom:10px;margin-left:10px;" >
					<div class="zs_icon fl" >
						<a href="/tools/index.html"
							class="sj_zhushou" target="_blank"><img
							border="0" src="/themes/ruizhict/style/images/sj_logo.png">
						</a>
					</div>
					<div class="fl" style="padding-left:10px;">
						<div class="zs_title">
							<a href="/tools/index.html"
								target="_blank">利息计算器</a>
						</div>
						<div class="zs_desc">1分钟帮您制定还款计划</div>
					</div>
				</div>
			</div>
		</div>



		<!-- 新手上路 -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<div class="block-title clearfix">
				<span class="fl">用户帮助中心</span> <span class="fr"><a
					href="/new/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">更多</a>
				</span>
			</div>

			<div class="i-news-c">
				<ul class="i-news_title">
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'7','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><a
						target="_blank" href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"
						><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
			</div>
		</div>
		
		<!-- 最新公告 -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
			<div class="block-title clearfix">
				<span class="fl"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></span> <span class="fr"><a
					href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">更多</a>
				</span>
			</div>
			<div class="i-news-c">
				<ul class="i-news_title">
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'7','site_var'=>'var','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"
						title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"15");echo $_tmp;unset($_tmp); ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
			</div>
			<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
		</div>
		
		
		
	</div>

</div>

<!-- 	<? $this->magic_include(array('file' => "zixun_right.html", 'vars' => array()));?>   -->

</div>

</div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>



