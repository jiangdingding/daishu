 <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


	<div class="clearfix index-middle" id="clearfix_index-middle" style="margin: 20px auto 0;">
		
		<div class="wrap950 mar10">
			<div class="kefu_bg" style="width: 960px;height: 167px;overflow: hidden;background: url(/themes/ruizhict/images/kefu_bg.jpg);margin-bottom: 10px;">
				<div style="padding:20px;font-size:16px;color:#FF9000;"><? if (!isset($this->magic_vars['_G']['system']['con_kefutext'])) $this->magic_vars['_G']['system']['con_kefutext'] = ''; echo $this->magic_vars['_G']['system']['con_kefutext']; ?></div>
			</div>
			

		</div>
		
		<!--借款帮助 开始-->
		<div class="block-a">

			<div class="block-title">借款入门帮助</div>

			<div>
				<ul class="question_list">
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'16','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li hover-class="hover" class="i-pd-item-first clearfix"><a
						target="_blank" href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="fl q-title"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
			</div>
			<div class="foot"></div>
			<div></div>
		</div>
		<!--借款帮助 结束-->
<!--  
		<div class="wrap950">
			<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_company.jpg" />
		</div>
-->		
	</div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
