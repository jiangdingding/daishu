<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<div class="clearfix index-middle" id="clearfix_index-middle" style="margin: 20px auto 0;">
				<div class="crumbs"><span>当前位置:</span> <a href="/bbs/index.html"><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?></a> > <span>操作提示</span></div>
				<div class="div_out bbs_msgdiv" style="text-align:center;">
				
					<div class="content" style="margin-top:10px;margin-bottom:10px;font-size:16px"><? if (!isset($this->magic_vars['_G']['msg']['0'])) $this->magic_vars['_G']['msg']['0'] = ''; echo $this->magic_vars['_G']['msg']['0']; ?></div>
					<div><? if (!isset($this->magic_vars['_G']['msg']['1'])) $this->magic_vars['_G']['msg']['1'] = ''; echo $this->magic_vars['_G']['msg']['1']; ?></div>
				</div>
</div>
				
						
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>