<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<!--借款帮助 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 评论管理：</div>

	<div class="content">
		<ul class="pinglun_list">
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','code'=>$_REQUEST['code'],'article_id'=>$_REQUEST['id'],'showpage'=>'3');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/comment/comment.class.php');$this->magic_vars['magic_result'] = commentClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?><LI>
<DIV class=pinglun_co_left>
<DIV class=pinglun_co_pic><IMG height=73 src="<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = '';$_tmp = $this->magic_vars['item']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" 
width=73></DIV><A href=""><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></A></DIV>
<DIV class=floatr>
<DIV class=pinglun_co_content><? if (!isset($this->magic_vars['item']['comment'])) $this->magic_vars['item']['comment'] = ''; echo $this->magic_vars['item']['comment']; ?><BR><FONT 
style="FONT-SIZE: 12px; FLOAT: right"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
</FONT></DIV></DIV></LI>
<? endforeach; endif; unset($_from); ?>
		</ul>
		<div align="center"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
		<? unset($_magic_vars); ?>
	</div>
	<div class="foot"></div>
</div>
<!--借款帮助 结束-->


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>