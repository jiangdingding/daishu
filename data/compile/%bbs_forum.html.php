<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<table class="container_0">
	<tr>
		<td class="topleft"></td>
		<td class="topcenter"></td>
		<td class="topright"></td>
	</tr>
	<tr>
		<td class="middleleft"></td>
		<td class="middlecenter">
		<div class="div_out_inner_nobg">
			<table width="100%">
				<tr>
					<td class="bbs_position" >
						<span>当前位置:</span> <a href="/bbs/index.html"><? if (!isset($this->magic_vars['_G']['bbs_setting']['webname'])) $this->magic_vars['_G']['bbs_setting']['webname'] = ''; echo $this->magic_vars['_G']['bbs_setting']['webname']; ?></a>  <? if (!isset($this->magic_vars['_G']['bbs_forum_presult']['pid'])) $this->magic_vars['_G']['bbs_forum_presult']['pid']=''; ;if (  $this->magic_vars['_G']['bbs_forum_presult']['pid']!=0): ?> -> <a href="/bbs/index.html?q=forums&fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_presult']['id'])) $this->magic_vars['_G']['bbs_forum_presult']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_presult']['id']; ?>"><? if (!isset($this->magic_vars['_G']['bbs_forum_presult']['name'])) $this->magic_vars['_G']['bbs_forum_presult']['name'] = ''; echo $this->magic_vars['_G']['bbs_forum_presult']['name']; ?></a><? endif; ?> -> <a href="/bbs/index.html?q=forums&fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>"><? if (!isset($this->magic_vars['_G']['bbs_forum_result']['name'])) $this->magic_vars['_G']['bbs_forum_result']['name'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['name']; ?></a>
					</td>
					
				</tr>
			</table>
		</div>

		<div class="div_out bbs_forum_top">
			<table class="title">
				<tr>
					<td class="left"></td>
					<td><span><? if (!isset($this->magic_vars['_G']['bbs_forum_result']['name'])) $this->magic_vars['_G']['bbs_forum_result']['name'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['name']; ?></span> - [ <? if (!isset($this->magic_vars['_G']['bbs_forum_result']['topics_num'])) $this->magic_vars['_G']['bbs_forum_result']['topics_num'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['topics_num']; ?> 主题 / <? if (!isset($this->magic_vars['_G']['bbs_forum_result']['posts_num'])) $this->magic_vars['_G']['bbs_forum_result']['posts_num'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['posts_num']; ?> 帖子 ]</td>
					<td><a href="rss.php?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>" class="rss" target="_blank">RSS</a></td>
					<td class="right"></td>
				</tr>
			</table>
			<div>
				<div class="bbs_forum_admins"><b>版主:</b> <? if (!isset($this->magic_vars['_G']['bbs_forum_result']['admins'])) $this->magic_vars['_G']['bbs_forum_result']['admins'] = '';$_tmp = $this->magic_vars['_G']['bbs_forum_result']['admins'];$_tmp = $this->magic_modifier("default",$_tmp,"空缺中");echo $_tmp;unset($_tmp); ?> 
				<? if (!isset($this->magic_vars['_G']['user_result']['type_id'])) $this->magic_vars['_G']['user_result']['type_id']=''; ;if (  $this->magic_vars['_G']['user_result']['type_id']==1): ?>&nbsp;&nbsp;&nbsp;<span class="bbs_forum_adminlink"><a href="admin.php?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>">管理面板</a></span><? endif; ?>
				</div>
				<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['rules'])) $this->magic_vars['_G']['bbs_forum_result']['rules']=''; ;if (  $this->magic_vars['_G']['bbs_forum_result']['rules']!=""): ?>
				<div class="bbs_forum_t">本版规则</div>
				<div class="bbs_forum_rules"><? if (!isset($this->magic_vars['_G']['bbs_forum_result']['rules'])) $this->magic_vars['_G']['bbs_forum_result']['rules'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['rules']; ?></div>	
				<? endif; ?>
				<? if (!isset($this->magic_vars['_G']['bbs_forum_sublist'])) $this->magic_vars['_G']['bbs_forum_sublist']=''; ;if (  $this->magic_vars['_G']['bbs_forum_sublist']!=false): ?>
				<div class="bbs_forum_t">子版块</div>
				<div class="div_out_inner bbs_index_forum_2">
					<?  if(!isset($this->magic_vars['_G']['bbs_forum_sublist']) || $this->magic_vars['_G']['bbs_forum_sublist']=='') $this->magic_vars['_G']['bbs_forum_sublist'] = array();  $_from = $this->magic_vars['_G']['bbs_forum_sublist']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
					<table class="bbs_index_a3">
						<tbody>
							<tr>
								<? if (!isset($this->magic_vars['item']['picurl'])) $this->magic_vars['item']['picurl']=''; ;if (  $this->magic_vars['item']['picurl']!=""): ?><td class="bbs_index_a3_0"><img src="<? if (!isset($this->magic_vars['item']['picurl'])) $this->magic_vars['item']['picurl'] = ''; echo $this->magic_vars['item']['picurl']; ?>" border="0" /></td><? endif; ?>
								<td class="bbs_index_a3_1">
								<b><a href="/bbs/index.html?q=forums&fid=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?> </a></b> 
								(今日: <b class="today"><? if (!isset($this->magic_vars['item']['today_num'])) $this->magic_vars['item']['today_num'] = ''; echo $this->magic_vars['item']['today_num']; ?> </b>)<p><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></p><p>版主: <? if (!isset($this->magic_vars['item']['admins'])) $this->magic_vars['item']['admins'] = '';$_tmp = $this->magic_vars['item']['admins'];$_tmp = $this->magic_modifier("default",$_tmp,"空缺中");echo $_tmp;unset($_tmp); ?> </p>
								</td>
								<td width="140px" align="center"><span class="topicsnum"><? if (!isset($this->magic_vars['item']['topics_num'])) $this->magic_vars['item']['topics_num'] = ''; echo $this->magic_vars['item']['topics_num']; ?></span> / <? if (!isset($this->magic_vars['item']['posts_num'])) $this->magic_vars['item']['posts_num'] = ''; echo $this->magic_vars['item']['posts_num']; ?></td>
								<td width=""><a href="/bbs/index.html?q=view&tid=<? if (!isset($this->magic_vars['var']['lasttid'])) $this->magic_vars['var']['lasttid'] = ''; echo $this->magic_vars['var']['lasttid']; ?>"><? if (!isset($this->magic_vars['var']['lastpost'])) $this->magic_vars['var']['lastpost'] = ''; echo $this->magic_vars['var']['lastpost']; ?></a><br />
									<a href="/index.php?user&q=code/user/view&username=<? if (!isset($this->magic_vars['var']['lastuser'])) $this->magic_vars['var']['lastuser'] = ''; echo $this->magic_vars['var']['lastuser']; ?>"><? if (!isset($this->magic_vars['var']['lastuser'])) $this->magic_vars['var']['lastuser'] = ''; echo $this->magic_vars['var']['lastuser']; ?></a> - <span class="time"><? if (!isset($this->magic_vars['var']['lastposttime'])) $this->magic_vars['var']['lastposttime'] = '';$_tmp = $this->magic_vars['var']['lastposttime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></span></td>
							</tr> 
						</tbody>
					</table>
					<? endforeach; endif; unset($_from); ?>
					<div class="div_clear"></div>
				<? endif; ?>
				</div>
			</div>
			<div class="div_clear" style="height:10px;"></div>
			<? $this->magic_vars['query_type']='GetTopicsList';$data = array('var'=>'loop','epage'=>'10','istopic'=>'1','fid'=>isset($_REQUEST['fid'])?$_REQUEST['fid']:'','showpage'=>'3','type'=>'1','status'=>'1');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::GetTopicsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?> 
			<div class="div_out bbs_forum_post">
				<table class="post">
					<tr>
						<td class="left">
							<div class="post_drop">
								<ul>
								<li><a href="/bbs/index.html?q=post&fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/bbs_btn_post.gif" border="0" align="absmiddle" alt="发表帖子" /></a>
								</li>
								</ul>
							</div>
						</td>
						<td class="right">
							<table cellpadding=0 cellspacing=0 border=0>
								<tr>
									<td class=Pagination_td1>
									<div class="Pagination"><strong></strong></div>
									</td>
									<td class="Pagination_td2 Pagination_inputtd">
									<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			
			<div class="div_out">
				<table class="bbs_forum_a1">
					<thead>
					<tr>
						<td width="30px">类型</td>
						<td>
							标题 ( <a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>&order=replynum">热门</a> | 
							<a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>&order=isgood">精华</a> | )
							
						</td>
						<td width="120px" style="text-align:center;">
							<a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>&order=author">作者</a> / <a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>&order=posttime">时间</a>
						</td>
						<td width="100px" style="text-align:center;">
							<a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>&order=replynum">回复</a> / <a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>&order=hits">人气</a>
						</td>
						<td width="120px" style="text-align:right;">
						<a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>&order=lastreply">最后发表</a>
						</td>
					</tr>
					</thead>
					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<tbody>
						<tr>
							<td align="center"><a href="/bbs/index/html/?q=view&tid=6" target="_blank" title=""><img src="/data/images/topic/normal.gif" border="0" /></a></td>
							<td><a href="/bbs/index.html?q=view&tid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> </td>
							<td style="text-align:center;"><a href="/index.php?user&q=action/view&username=<? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></a><br />
								<span class="time"><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("time_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></span></td><td style="text-align:center;"><span class="reply"><? if (!isset($this->magic_vars['var']['posts_num'])) $this->magic_vars['var']['posts_num'] = ''; echo $this->magic_vars['var']['posts_num']; ?></span> / <? if (!isset($this->magic_vars['var']['hits'])) $this->magic_vars['var']['hits'] = ''; echo $this->magic_vars['var']['hits']; ?>
							</td>
							<td style="text-align:right;">
								<a href="/index.php?user&q=action/view&username=<? if (!isset($this->magic_vars['var']['last_replyusername'])) $this->magic_vars['var']['last_replyusername'] = ''; echo $this->magic_vars['var']['last_replyusername']; ?>"><? if (!isset($this->magic_vars['var']['last_replyusername'])) $this->magic_vars['var']['last_replyusername'] = ''; echo $this->magic_vars['var']['last_replyusername']; ?></a><br /><span class="time"><? if (!isset($this->magic_vars['var']['last_replytime'])) $this->magic_vars['var']['last_replytime'] = '';$_tmp = $this->magic_vars['var']['last_replytime'];$_tmp = $this->magic_modifier("time_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></span>
							</td>
						</tr>
					</tbody>
					<? endforeach; endif; unset($_from); ?>
					</table>
			</div>
			<div class="div_out bbs_forum_post">
				<table class="post">
					<tr>
						<td class="left">
							<div class="post_drop">
								<ul>
								<li><a href="/bbs/index.html?q=post&fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/bbs_btn_post.gif" border="0" align="absmiddle" alt="发表帖子" /></a>
								</li>
								</ul>
							</div>
						</td>
						<td class="right">
							<table cellpadding=0 cellspacing=0 border=0>
								<tr>
									<td class=Pagination_td1>
										<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
									</td>								
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<? unset($_magic_vars); ?>
		</td>
		<td class="middleright"></td>
	</tr>
	<tr>
		<td class="bottomleft"></td>
		<td class="bottomcenter"></td>
		<td class="bottomright"></td>
	</tr>
</table>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>