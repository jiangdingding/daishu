<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<!--body container BEGIN-->

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
						<span>当前位置:</span> <a href="/bbs/index.html"><? if (!isset($this->magic_vars['_G']['bbs_setting']['webname'])) $this->magic_vars['_G']['bbs_setting']['webname'] = ''; echo $this->magic_vars['_G']['bbs_setting']['webname']; ?></a> -> <a href="/bbs/index.html">首页</a>
					</td>
					<td>
						<div class="bbs_static_out">
							<ul>
								<li>今日:<? if (!isset($this->magic_vars['_G']['bbs_cache_result']['bbs_today_topics'])) $this->magic_vars['_G']['bbs_cache_result']['bbs_today_topics'] = ''; echo $this->magic_vars['_G']['bbs_cache_result']['bbs_today_topics']; ?></li>
								<li>昨日:<? if (!isset($this->magic_vars['_G']['bbs_cache_result']['bbs_today_topics'])) $this->magic_vars['_G']['bbs_cache_result']['bbs_today_topics'] = ''; echo $this->magic_vars['_G']['bbs_cache_result']['bbs_today_topics']; ?></li>
								<li>最高帖子:<? if (!isset($this->magic_vars['_G']['bbs_cache_result']['bbs_most_topics'])) $this->magic_vars['_G']['bbs_cache_result']['bbs_most_topics'] = ''; echo $this->magic_vars['_G']['bbs_cache_result']['bbs_most_topics']; ?></li>
								<li>主题:<? if (!isset($this->magic_vars['_G']['bbs_cache_result']['bbs_topics_num'])) $this->magic_vars['_G']['bbs_cache_result']['bbs_topics_num'] = ''; echo $this->magic_vars['_G']['bbs_cache_result']['bbs_topics_num']; ?></li>
								<li>帖子:<? if (!isset($this->magic_vars['_G']['bbs_cache_result']['bbs_posts_num'])) $this->magic_vars['_G']['bbs_cache_result']['bbs_posts_num'] = ''; echo $this->magic_vars['_G']['bbs_cache_result']['bbs_posts_num']; ?></li>
								<li>新会员:<a href="/index.php?user&q=view&username=<? if (!isset($this->magic_vars['_G']['bbs_cache_result']['last_user'])) $this->magic_vars['_G']['bbs_cache_result']['last_user'] = ''; echo $this->magic_vars['_G']['bbs_cache_result']['last_user']; ?>" class="spc"><? if (!isset($this->magic_vars['_G']['bbs_cache_result']['last_user'])) $this->magic_vars['_G']['bbs_cache_result']['last_user'] = ''; echo $this->magic_vars['_G']['bbs_cache_result']['last_user']; ?></a></li>
							</ul>
							
						</div>
					</td>
				</tr>
			</table>
		</div>

		<div class="div_out bbs_index_forum">
			<table class="title">
				<tr>
					<td class="left"></td>
					<td>论坛版块</td>
					<td class="right"></td>
				</tr>
			</table>
			<div class="bbs_index_fourm_out">
				<div class="div_clear" style="height:6px;"></div>
				<?  if(!isset($this->magic_vars['_G']['bbs_forum_list']) || $this->magic_vars['_G']['bbs_forum_list']=='') $this->magic_vars['_G']['bbs_forum_list'] = array();  $_from = $this->magic_vars['_G']['bbs_forum_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<div class="bbs_index_forum_1"><span class="bbs_folder_1" id="folder_<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" onclick="forumFolder(<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>)"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></span></div>
				<div class="div_out_inner bbs_index_forum_2" id="folderdiv_<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">
					<?  if(!isset($this->magic_vars['item']['sub']) || $this->magic_vars['item']['sub']=='') $this->magic_vars['item']['sub'] = array();  $_from = $this->magic_vars['item']['sub']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<table class="bbs_index_a3">
						<tbody>
							<tr>
								<td class="bbs_index_a3_0"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/bbs_ico_hasnew.png" border="0" /></td>
								<td class="bbs_index_a3_1">
									<b><a href="/bbs/index.html?q=forums&fid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></b> 
									(今日:<b class="today"><? if (!isset($this->magic_vars['var']['today_num'])) $this->magic_vars['var']['today_num'] = ''; echo $this->magic_vars['var']['today_num']; ?></b>)<p></p><p>版主: <? if (!isset($this->magic_vars['var']['admins'])) $this->magic_vars['var']['admins'] = '';$_tmp = $this->magic_vars['var']['admins'];$_tmp = $this->magic_modifier("default",$_tmp,"空缺中");echo $_tmp;unset($_tmp); ?></p>
								</td>
								<td width="140px" align="center">
								<span class="topicsnum"><? if (!isset($this->magic_vars['var']['topics_num'])) $this->magic_vars['var']['topics_num'] = ''; echo $this->magic_vars['var']['topics_num']; ?></span> / <? if (!isset($this->magic_vars['var']['posts_num'])) $this->magic_vars['var']['posts_num'] = ''; echo $this->magic_vars['var']['posts_num']; ?>
								</td>
								<td width="">
									<a href="/bbs/index.html?q=view&tid=<? if (!isset($this->magic_vars['var']['lasttid'])) $this->magic_vars['var']['lasttid'] = ''; echo $this->magic_vars['var']['lasttid']; ?>"><? if (!isset($this->magic_vars['var']['lastpost'])) $this->magic_vars['var']['lastpost'] = ''; echo $this->magic_vars['var']['lastpost']; ?></a><br />
									<a href="/index.php?user&q=code/user/view&username=<? if (!isset($this->magic_vars['var']['lastuser'])) $this->magic_vars['var']['lastuser'] = ''; echo $this->magic_vars['var']['lastuser']; ?>"><? if (!isset($this->magic_vars['var']['lastuser'])) $this->magic_vars['var']['lastuser'] = ''; echo $this->magic_vars['var']['lastuser']; ?></a> - <span class="time"><? if (!isset($this->magic_vars['var']['lastposttime'])) $this->magic_vars['var']['lastposttime'] = '';$_tmp = $this->magic_vars['var']['lastposttime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></span>
								</td>
							</tr>
						</tbody>
					</table>
					<? endforeach; endif; unset($_from); ?>
					<div class="div_clear"></div>
				</div>
				<? endforeach; endif; unset($_from); ?>
				
				<script>
				function forumFolder(fid){
					var obj=$("#folder_"+fid);
					if (obj.attr("class")=='bbs_folder_1'){
						obj.toggleClass();
						obj.addClass('bbs_folder_0');
						$("#folderdiv_"+fid).hide() ;
					}else{
						obj.toggleClass();
						obj.addClass('bbs_folder_1');
						$("#folderdiv_"+fid).show() ;
					}
				}
				
				</script>
				
			</div>
			
		</div>
		
		<div class="div_clear" style="height:12px;"></div>
		
		<div class="div_out bbs_index_else">
			<table class="title">
				<tr>
					<td class="left"></td>
					<td>论坛其他</td>
					<td class="right"></td>
				</tr>
			</table>
			<div class="bbs_index_else_out">
			
				<div class="bbs_index_a4">
					<b><a href="online.php">在线用户</a></b> - 共 <b><? if (!isset($this->magic_vars['_G']['online']['num'])) $this->magic_vars['_G']['online']['num'] = ''; echo $this->magic_vars['_G']['online']['num']; ?></b> 人在线, <b><? if (!isset($this->magic_vars['_G']['online']['user_num'])) $this->magic_vars['_G']['online']['user_num'] = ''; echo $this->magic_vars['_G']['online']['user_num']; ?></b> 位会员, <b><? if (!isset($this->magic_vars['_G']['online']['nouser_num'])) $this->magic_vars['_G']['online']['nouser_num'] = ''; echo $this->magic_vars['_G']['online']['nouser_num']; ?></b> 位访客, 最多 <b><? if (!isset($this->magic_vars['_G']['cache']['user_online_num'])) $this->magic_vars['_G']['cache']['user_online_num'] = ''; echo $this->magic_vars['_G']['cache']['user_online_num']; ?></b> 人发生在 <b><? if (!isset($this->magic_vars['_G']['cache']['user_online_time'])) $this->magic_vars['_G']['cache']['user_online_time'] = '';$_tmp = $this->magic_vars['_G']['cache']['user_online_time'];$_tmp = $this->magic_modifier("time_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></b> 
				</div>
				
				<div class="bbs_index_a5">
					<img src="/data/images/group/1.gif" border="0" align="absmiddle" /> 管理员&nbsp; 
					<img src="/data/images/group/2.gif" border="0" align="absmiddle" /> 超级版主&nbsp; 
					<img src="/data/images/group/3.gif" border="0" align="absmiddle" /> 版主&nbsp; 
					<img src="/data/images/group/4.gif" border="0" align="absmiddle" /> 荣誉会员&nbsp; 
					<img src="/data/images/group/5.gif" border="0" align="absmiddle" /> 会员&nbsp;
				</div>
				
				<div class="bbs_index_a5_online">
					<ul>
						<?  if(!isset($this->magic_vars['_G']['online']['list']) || $this->magic_vars['_G']['online']['list']=='') $this->magic_vars['_G']['online']['list'] = array();  $_from = $this->magic_vars['_G']['online']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
						<li>
							<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username']=''; ;if (  $this->magic_vars['item']['username']==""): ?>
								<img src="/data/images/group/0.gif" border="0" align="absmiddle" />游客
							<? else: ?>
								<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id']=''; ;if (  $this->magic_vars['item']['type_id']=="1"): ?>
								<img src="/data/images/group/1.gif" border="0" align="absmiddle" />
								<? else: ?>
								<img src="/data/images/group/5.gif" border="0" align="absmiddle" />
								<? endif; ?><a href='user.php?uid=1' target='_blank' title='最后活动:<? if (!isset($this->magic_vars['item']['activetime'])) $this->magic_vars['item']['activetime'] = '';$_tmp = $this->magic_vars['item']['activetime'];$_tmp = $this->magic_modifier("time_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a>
							<? endif; ?>
						</li>
						<? endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<!--
				<div class="bbs_index_a4"><b>友情链接</b></div>
				<div class="bbs_index_a6">
					
				</div>
				-->
				<div class="bbs_index_a7">
					<div class="div_clear" style="height:1px;"></div>
				</div>
			</div>
		</div>
</td><td class="middleright"></td></tr><tr><td class="bottomleft"></td><td class="bottomcenter"></td><td class="bottomright"></td></tr>
</table><!--body container END-->
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>