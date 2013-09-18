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
					<td class="bbs_position" style="width:400px; font-size:12px;">
						<span>当前位置:</span> <a href="/bbs/index.html"><? if (!isset($this->magic_vars['_G']['bbs_setting']['webname'])) $this->magic_vars['_G']['bbs_setting']['webname'] = ''; echo $this->magic_vars['_G']['bbs_setting']['webname']; ?></a>  <? if (!isset($this->magic_vars['_G']['bbs_forum_presult']['pid'])) $this->magic_vars['_G']['bbs_forum_presult']['pid']=''; ;if (  $this->magic_vars['_G']['bbs_forum_presult']['pid']!=0): ?> -> <a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_presult']['id'])) $this->magic_vars['_G']['bbs_forum_presult']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_presult']['id']; ?>"><? if (!isset($this->magic_vars['_G']['bbs_forum_presult']['name'])) $this->magic_vars['_G']['bbs_forum_presult']['name'] = ''; echo $this->magic_vars['_G']['bbs_forum_presult']['name']; ?></a><? endif; ?> -> <a href="/bbs/index.html?fid=<? if (!isset($this->magic_vars['_G']['bbs_forum_result']['id'])) $this->magic_vars['_G']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['id']; ?>"><? if (!isset($this->magic_vars['_G']['bbs_forum_result']['name'])) $this->magic_vars['_G']['bbs_forum_result']['name'] = ''; echo $this->magic_vars['_G']['bbs_forum_result']['name']; ?></a>
					</td>
					
				</tr>
			</table>
		</div>

		<div class="div_out bbs_forum_top">
			<table class="title">
				<tr>
					<td class="left"></td>
					<td>帖子状态</td>
					
					<td class="right"></td>
				</tr>
			</table>
			<div class="bbs_view_h">本帖子共有 <b><? if (!isset($this->magic_vars['_G']['bbs_topics_result']['hits'])) $this->magic_vars['_G']['bbs_topics_result']['hits'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['hits']; ?></b> 位阅读者, <b><? if (!isset($this->magic_vars['_G']['bbs_topics_result']['posts_num'])) $this->magic_vars['_G']['bbs_topics_result']['posts_num'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['posts_num']; ?></b> 个回复.</div>
			<? if (!isset($this->magic_vars['_G']['user_result']['type_id'])) $this->magic_vars['_G']['user_result']['type_id']=''; ;if (  $this->magic_vars['_G']['user_result']['type_id']==1): ?>
			<div class="bbs_view_h">
				<b>帖子管理:</b> <span class="adminstr"><a href="javascript:postManager(1,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">删除</a> | 
				<a href="javascript:postManager(2,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">移动</a> | 
				<a href="javascript:postManager(3,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">屏蔽</a>| 
				<a href="javascript:postManager(4,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">锁定</a> | 
				<a href="javascript:postManager(5,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">置顶</a> | 
				<a href="javascript:postManager(6,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">总置顶</a> | 
				<a href="javascript:postManager(7,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">精华</a> | 
				<a href="javascript:postManager(9,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">提升</a> | 
				<a href="javascript:postManager(10,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">鉴定</a> | 
				<a href="javascript:postManager(11,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>,<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>)">高亮</a>
				</span>
			</div>
			<? endif; ?>
			

			<? $this->magic_vars['query_type']='GetPostsList';$data = array('var'=>'loop','epage'=>'10','tid'=>isset($_REQUEST['tid'])?$_REQUEST['tid']:'','showpage'=>'3');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::GetPostsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			<div class="div_out bbs_forum_post">
				<table class="post">
					<tr>
						<td class="left">
							<div class="post_drop">
								<ul>
								<li><a href="/bbs/index.html?q=post&fid=<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['fid'])) $this->magic_vars['_G']['bbs_topics_result']['fid'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['fid']; ?>"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/bbs_btn_post.gif" border="0" align="absmiddle" alt="发表帖子" /></a> <a href="/bbs/index.html?q=reply&tid=<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['id'])) $this->magic_vars['_G']['bbs_topics_result']['id'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['id']; ?>"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/bbs_btn_reply.gif" border="0" align="absmiddle" alt="回复" /></a>
								</li>
								</ul>
							</div>
						</td>
						<td class="right">
							<table cellpadding=0 cellspacing=0 border=0>
								<tr>
									<td class=Pagination_td1>
									<div class="Pagination"><strong>&nbsp;&nbsp;1&nbsp;&nbsp;</strong></div>
									</td>
									<td class="Pagination_td2 Pagination_inputtd">
									
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			
			<div class="bbs_view_top_out">
				<table class="bbs_view_a4">
					<tr>
						<td class="bbs_view_a1">
							<div>
								<a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank">
								<img src="<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = '';$_tmp = $this->magic_vars['item']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" align="absmiddle" />
								</a>
								<p class="namemsg">
								<a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank" class="name"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a>
								<a href="javascript:void(0);" onclick="sendUserMsg('<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>')" class="writemsg" title="给<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>发送站内短信"></a></p>
								<br />
								<a href="credits.php?action=popedom&groupid=203" target="_blank"><u class="bbs_star_img" title="管理员"><i class=bbs_star_4></i><i class=bbs_star_4></i><i class=bbs_star_4></i><i class=bbs_star_4></i></u></a>
								<!--
								<dl class='bbs_view_a3'>
								<dt>等级</dt><dd>11&nbsp;</dd><br />
								<dt>籍贯</dt><dd>27&nbsp;</dd><br />
								<dt>居住城市</dt>
								<dd>27&nbsp;</dd>
								<dt>注册时间</dt>
								<dd>27&nbsp;</dd>
								<dt>最后登录</dt>
								<dd>2010-09-29&nbsp;</dd></dl>
								-->
							</div>
						</td>
						<td class="bbs_view_a2">
							<div class="author"><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank" class="name sex0"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a> 发表于 <span class="time"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("time_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></span>&nbsp; 发帖IP <span class="ip"><a href='/ip/index.html?ip=<? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?>' target='_blank'><? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?></a></span> 
							
							<? if (!isset($this->magic_vars['_G']['user_result']['type_id'])) $this->magic_vars['_G']['user_result']['type_id']=''; ;if (  $this->magic_vars['_G']['user_result']['type_id']==1): ?> &nbsp; <a href="/bbs/index.html?<? if (!isset($this->magic_vars['item']['istopic'])) $this->magic_vars['item']['istopic']=''; ;if (  $this->magic_vars['item']['istopic']==1): ?>q=edit&tid=<? if (!isset($this->magic_vars['item']['tid'])) $this->magic_vars['item']['tid'] = ''; echo $this->magic_vars['item']['tid']; ?><? else: ?>q=reply&postid=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? endif; ?>">编辑</a>  | <a href="javascript:postManager(1,<? if (!isset($this->magic_vars['item']['istopic'])) $this->magic_vars['item']['istopic']=''; ;if (  $this->magic_vars['item']['istopic']==1): ?><? if (!isset($this->magic_vars['item']['tid'])) $this->magic_vars['item']['tid'] = ''; echo $this->magic_vars['item']['tid']; ?><? else: ?>0<? endif; ?>,<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>)">删除</a> | <a href="javascript:postManager(3,0,<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>)">屏蔽</a>
							<? endif; ?>
							 </div>
							<div class="floor"><a href="#f<? if (!isset($this->magic_vars['item']['floor'])) $this->magic_vars['item']['floor'] = ''; echo $this->magic_vars['item']['floor']; ?>" name="f<? if (!isset($this->magic_vars['item']['floor'])) $this->magic_vars['item']['floor'] = ''; echo $this->magic_vars['item']['floor']; ?>">#<? if (!isset($this->magic_vars['item']['floor'])) $this->magic_vars['item']['floor'] = ''; echo $this->magic_vars['item']['floor']; ?></a></div>
							<div class="title1"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></div>
							<div class="content"><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = '';$_tmp = $this->magic_vars['item']['content'];$_tmp = $this->magic_modifier("ubb",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
						</td>
					</tr>
					<tr><td class="bbs_view_a1"></td><td class="bbs_view_a8"><div class="bbs_ad_4"></div></td></tr>
					<tr><td class="bbs_view_a1"></td><td class="bbs_view_a7"><div><a href="/bbs/index.html?q=reply&action=reply&tid=<? if (!isset($this->magic_vars['item']['tid'])) $this->magic_vars['item']['tid'] = ''; echo $this->magic_vars['item']['tid']; ?>&f=<? if (!isset($this->magic_vars['item']['floor'])) $this->magic_vars['item']['floor'] = ''; echo $this->magic_vars['item']['floor']; ?>" class="reply">回复</a><a href="/bbs/index.html?q=reply&action=quote&tid=<? if (!isset($this->magic_vars['item']['tid'])) $this->magic_vars['item']['tid'] = ''; echo $this->magic_vars['item']['tid']; ?>" class="quote">引用</a><a class="scrolltop" href="javascript:scroll(0,0);">顶端</a></div></td></tr>
					<tr><td class="bbs_view_a5"></td><td class="bbs_view_a6"></td></tr>
				</table>
			</div>
			<? endforeach; endif; unset($_from); ?>
			<a name="reply"></a>
			<div class="div_out bbs_view_reply" >
				<form action="" method="post" onsubmit="return check_form()">
				<table>
					<tr>
						<td class="bbs_view_a1">
							<div>
								<a href="user.php?uid=1" target="_blank"><img src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /></a><br />
								<a href="user.php?uid=1" target="_blank"><? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></a><br />
							</div>
						</td>
						<td class="" style="margin-left:5px;">
				<textarea style="width:400px; height:150px;display:none;" name="content" id="content"></textarea>
				<iframe ID="Editor" name="Editor" src="/plugins/editor/ubbeditor/ubb/editor.htm?ubb=1&id=content&frmid=Editor" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" style="height:250px;width:99%;"></iframe>
				<br /><input type="submit" class="bbs_button_css" value="  提  交  " />
				<input type="hidden" name="tid" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" /> 
						</td>
					</tr>
				</table>
				</form>
			</div>
			
			<script src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/js/bbs.js"></script>
			
			<script>
			var popedom_14="";
			window.onload=view_PageInit;
			function check_form(){
				return checkContent(true);
				}
			</script>
			
			<div class="div_out bbs_forum_post">
				<table class="post">
					<tr>
						<td class="left">
							<div class="post_drop">
								<ul>
								<li><a href="/bbs/index.html?q=post&fid=<? if (!isset($this->magic_vars['_G']['bbs_topics_result']['fid'])) $this->magic_vars['_G']['bbs_topics_result']['fid'] = ''; echo $this->magic_vars['_G']['bbs_topics_result']['fid']; ?>"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/bbs_btn_post.gif" border="0" align="absmiddle" alt="发表帖子" /></a>
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