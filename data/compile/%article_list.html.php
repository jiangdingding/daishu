  <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


	<div class="main-part box-shadow-white" id="page_wraper" style="margin: 20px auto 0;">
		
		<!--���⿪ʼ-->
		<div class="block-title"><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?></div>
		<!--�������-->
		
		<div class="article_content">
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','epage'=>'20','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','status'=>'1','site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
			<div class="wrap950 list_1">
				<div >
					<ul class="question_list">
						<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
						<li hover-class="hover" class="i-pd-item-first clearfix">
							<a href="a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="fl q-title"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
							
							<span class="fr q-reply_num"><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></span>
						</li> <? endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			</div>
			<!--��ְ�б����-->
			<!--��ҳ��ʼ-->
			<div>
				<table align="center" class="list_table_page">
					<tr align="center">
						<td height="25"><Div align="center"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></Div>
						</td>
					</tr>
				</table>
			</div>
			<!--��ҳ����-->
		</div>
		<? unset($_magic_vars); ?>
		
		

<!-- 	<div class="main_right">
			<? $this->magic_include(array('file' => "zixun_right.html", 'vars' => array()));?>
		</div>
 -->	
	</div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>







