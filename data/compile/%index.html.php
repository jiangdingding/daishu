<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<!-- 洪城添加 -->
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/slider_1.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/slider_2.js"></script>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/home_page_slider.css" />
<!-- 洪城添加 -->

<div style="width:960px;margin: 20px auto 0;">
	<div align="center">
		<div id="MainPromotionBanner">
			<div id="SlidePlayer">
				<ul class="Slides">
					<li><img 
							src="/themes/ruizhict/style/css/img/home_page1.jpg">
					
					</li>
					<li><img
							src="/themes/ruizhict/style/css/img/home_page2.jpg">
					
					</li>
					<li><img
							src="/themes/ruizhict/style/css/img/home_page3.jpg">
				
					</li>
				</ul>
			</div>
			
			<script type="text/javascript">
				TB.widget.SimpleSlide.decoration('SlidePlayer', {
					eventType : 'mouse',
					effect : 'scroll'
				});
			</script>
			
		</div>
	</div>
</div>


<div class="clearfix index-middle" id="clearfix_index-middle">
	<div class="fl index-middle-l">

		<div class="block-l" style="margin-top:0px;">
			<div class="i-pd-t clearfix">
				<span class="fl i-pd_title">正在招标的借款</span> <span class="fl gray-font"
					style="padding-left:8px;">风险低，利率高</span> <span class="fr"><a
					target="_blank" href="/invest/index.html">更多</a> </span>
			</div>
			<div class="i-pd-c" id="i-pd-c" style="width:100%;height:100%;">
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'5','status'=>'1','order'=>'flag');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<div class="xianshineirong" style="width:100%;height:110%; "
					onclick="window.location.href= 'invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html';return false">
					<div class="desc" style="width:500px; margin-left:68px;position:relative;top:10px;">
						<? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" /><? endif; ?><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if ( $this->magic_vars['var']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif"
							align="absmiddle" /><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif (  $this->magic_vars['var']['flag']==2): ?> <img
							src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" /><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif (  $this->magic_vars['var']['flag']==3): ?> <img
							src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/diya.gif" /><? endif; ?><? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1): ?> <img
							src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif" /><? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;elseif (  $this->magic_vars['var']['award']==2): ?> <img
							src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif" /><? endif; ?> <strong><a style="color:#026CCF;"
							href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>">
								<font ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"20");echo $_tmp;unset($_tmp); ?></font> </a> </strong>
					</div>
					<table class="i-pd-item" style="height:96px; ">
						<tbody>
							<tr hover-class="hover" class="i-pd-item-first">
								<td style=" width:50px; align:left;"><a
									href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"
									title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><img style="position:positive;top:-27px;"src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("litpic",$_tmp," 85,90");echo $_tmp;unset($_tmp); ?>"  />
								</a>
								</td>
								<!--  <td width="143"><a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"
								target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></td>-->

								<td class="desc" id="desc122"><font
									style="position:relative;bottom:12px;">借款金额:<strong
										style="color:red;">&nbsp;&nbsp;&nbsp;￥<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?></strong>
								</font></td>
								<td class="desc" id="desc123"><li>年利率:<span
										style="color:red;">&nbsp;&nbsp;&nbsp;<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</span></li>
									<li>期限:&nbsp;&nbsp;&nbsp;<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>个月</li></td>
								<td class="desc" id="desc124">
									<!--  <div id="rate_bg12" title="已完成<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>%">
									<div id="rate_tiao12"
										style="width:<? if (!isset($this->magic_vars['var']['scale_width'])) $this->magic_vars['var']['scale_width'] = '';$_tmp = $this->magic_vars['var']['scale_width'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>px"></div>
								</div>-->

									<li><span style="display:block; float:left;">借款进度：</span>
										<div class="rate_bg "
											style=" margin-left:10px;margin-top:3px;float:left;">
											<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
										</div></li> </br>
									<li>已完成:&nbsp;&nbsp;&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>%</li></td>
								<!--  <td class="desc"> <li>已接受：</li><li><? if (!isset($this->magic_vars['var']['tender_times'])) $this->magic_vars['var']['tender_times'] = ''; echo $this->magic_vars['var']['tender_times']; ?>笔投标</li></td>-->
							</tr>



						</tbody>
					</table>
				</div>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</div>
		</div>
		<div class="block-l">
			<div class="i-pd-t clearfix">
				<span class="fl i-pd_title">成功贷款项目</span> <span class="fl gray-font"
					style="padding-left:8px;">风险低，利率高</span> <span class="fr"><a
					target="_blank" href="/invest/index.html?type=success">更多</a> </span>
			</div>
			<div class="i-pd-c" id="i_pd_c123" style="margin-top:0px;">
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'3','status'=>'3');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<li class="hoveritem"
					onclick="window.location.href= 'invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html';return false">
					<div style="height:110px;width:100%" class="i-pd-item">
						<div style="width=60px;float:left;">
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"><img 
								src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>"
								style="width:44; height:44px;position:relative;top:12px; left:5px;"
								class="picborder" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" /> </a>
						</div>
						<div>
							<div
								style=" margin-left:68px; position: relative;top:10px;color:#026CCF;">
								<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"
									style="color:#026CCF;
									title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><strong><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></strong>
								</a>
							</div>





							<div class="i-pd-item-first">
								<div class="desc">
									借款金额：<span style="color:red;">￥<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?></span>
								</div>
								<div class="desc">
									年利率:&nbsp;&nbsp;&nbsp;<span style="color:red;"><? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</span>
								</div>
								<div class="desc">借款期限：<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = '';$_tmp = $this->magic_vars['var']['time_limit'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_time_limit");echo $_tmp;unset($_tmp); ?></div>
								<div class="desc1">
									<div class="i-pd_btn button_3d"
										style="position:relative;bottom:17px;" hover-class="hover"
										click-class="click">
										<a target="_blank" href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">查看</a>
									</div>
								</div>
							</div>
						</div>

					</div></li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</div>
		</div>
		<!-- 
		<div class="block-l ask-normal-block">
			<div class="i-pd-t block-title  block-in clearfix">
				<span class="fl ">大家都在问</span> <span class="fr"><a
					style="font-size:12px;font-weight:normal;"
					href="/bbs/index.html?fid=1" target="_blank"
					data-track="问答频道页|豆腐块更多|首页">更多问题</a> </span>
			</div>
			<div class="i-pd-c">
				<ul class="question_list">
					<? $this->magic_vars['query_type']='GetTopicsList';$data = array('var'=>'var','limit'=>'5','status'=>'1');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::GetTopicsList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li hover-class="hover" class="i-pd-item-first clearfix"><a
						target="_blank" href="/bbs/index/html?q=view&tid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"
						title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" class="fl q-title"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"12");echo $_tmp;unset($_tmp); ?></a><span
						class="fr q-reply_num"><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></span>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


				</ul>
				<div class="more-wrap clearfix">
					<div class="fr i-pd_btn button_3d" hover-class="hover"
						click-class="click">
						<a href="http://www.rong360.com/ask/submit" class="submit-q"
							target="_blank" data-track="问答频道页|豆腐块提问|首页">我要提问</a>
					</div>
				</div>
			</div>
		</div>
 -->
	</div>
	<div class="fr">




		<!-- 最新公告 -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
			<div class="block-title clearfix">
				<span class="fl"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></span> <span class="fr"><a
					href="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">更多</a>
				</span>
			</div>
			<div class="i-news-c">
				<ul class="i-news_title">
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'10','site_var'=>'var','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><a href="<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"
						title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"15");echo $_tmp;unset($_tmp); ?></a></li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
				</ul>
			</div>
			<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
		</div>


<!-- 
		<div class="index-middle-r block-r clearfix weiboweixin">
			<div class="fl weixin"></div>
			<div class="fl weibo">
				<a href="http://e.weibo.com/daishuwang" target="_blank"
					title="关注贷鼠网新浪微博"></a> <a href="http://e.t.qq.com/rong360com123"
					target="_blank" title="关注贷鼠网新浪微博" class="tt"></a>
				<div class="moretxt">更多资讯，请关贷鼠网</div>
			</div>
		</div>
 -->
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
			<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(10); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
			<div class="block-title clearfix">
				<span class="fl"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></span> <span class="fr"><a
					href="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">更多</a>
				</span>
			</div>
			<div class="i-news-c">
				<ul class="i-news_title">
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'10','site_var'=>'var','var'=>'item','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
					<li><span><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></span> <a
						href="<? if (!isset($this->magic_vars['item']['site_nid'])) $this->magic_vars['item']['site_nid'] = ''; echo $this->magic_vars['item']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"
						target="_blank">&nbsp;<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"14");echo $_tmp;unset($_tmp); ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
				</ul>
			</div>
			<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
		</div>

	</div>
</div>


<div class="block-a mt20" style="margin-top:0px;">
	<!-- cooperation -->
	<div class="block-title">合作银行</div>
	<div class="cooperation-content">
		<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/images/index_banks.png" />
	</div>
</div>
<div class="block-a mt20 seo-block">

	<div class="seo-block">
		<div class="block-title block-in">友情链接</div>
		<div class="block-content">
			<ul class="friend_list clearfix">
				<li><a href="http://www.xunro.com/" target="_blank"
					data-track="友情链接|点击友情链接|贷款">贷款</a>
				</li>
				<li><a href="http://www.qz55.net/" target="_blank"
					data-track="友情链接|点击友情链接|泉州贷款">泉州贷款</a>
				</li>
				<li><a href="http://www.dai36.com" target="_blank"
					data-track="友情链接|点击友情链接|通融易贷">通融易贷</a>
				</li>
				<li><a href="http://www.whkemei.cn/" target="_blank"
					data-track="友情链接|点击友情链接|深圳企业贷款 ">深圳企业贷款 </a>
				</li>
			</ul>
		</div>
	</div>

</div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
