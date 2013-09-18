<div class="bottom-line mt20"></div>
<div class="bottom clearfix">
 <div class="about-links">
	<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && $this->magic_vars['var']['pid']==1 && $this->magic_vars['var']['status'] == 1 ): $this->magic_vars['key'] =$i?><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank" class="footer"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a><span class="spliter">|</span><? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
  </div>

            
  <div class="copyright">
	<div class="copy">Copyright &copy; 2013 daishu.com Inc. All Rights Reserved. </div>
    <div class="company"><a href="/index.php">贷鼠网</a>版权所有 &nbsp;&nbsp;全国统一客服热线:<? if (!isset($this->magic_vars['_G']['system']['con_fuwutel'])) $this->magic_vars['_G']['system']['con_fuwutel'] = ''; echo $this->magic_vars['_G']['system']['con_fuwutel']; ?></div>
    <div class="icp"><a href="http://www.miibeian.gov.cn/" class="footer" target="_blank" rel="nofollow" ><? if (!isset($this->magic_vars['_G']['system']['con_beian'])) $this->magic_vars['_G']['system']['con_beian'] = ''; echo $this->magic_vars['_G']['system']['con_beian']; ?></a></div>
  </div>
  <div class="footer-imgs clearfix" style="width:260px;">
		<a href="https://search.szfw.org/entry.php?action=queryLicenseResult&id=808" class="fl footer-img-wrap sprite-footer-chengxin pngfix" target="_blank" rel="nofollow"></a>
		<a  href="https://trustsealinfo.verisign.com/splash?form_file=fdf/splash.fdf&dn=www.rong360.com&lang=zh_cn" class="fl footer-img-wrap sprite-footer-vs pngfix" target="_blank" rel="nofollow"></a>
  </div>
</div>

</body>

</html>