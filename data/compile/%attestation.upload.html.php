<? if (!isset($this->magic_vars['_P']['uploadResponse'])) $this->magic_vars['_P']['uploadResponse']=''; ;if (  $this->magic_vars['_P']['uploadResponse']!=""): ?>
<uploadResponse>
	<message><? if (!isset($this->magic_vars['_P']['status'])) $this->magic_vars['_P']['status']=''; ;if (  $this->magic_vars['_P']['status']=="success"): ?><? else: ?><? if (!isset($this->magic_vars['uploadfiles'])) $this->magic_vars['uploadfiles'] = ''; echo $this->magic_vars['uploadfiles']; ?><? endif; ?></message>
	<status><? if (!isset($this->magic_vars['_P']['status'])) $this->magic_vars['_P']['status'] = ''; echo $this->magic_vars['_P']['status']; ?></status>
	<proid><? if (!isset($this->magic_vars['_P']['proid'])) $this->magic_vars['_P']['proid'] = ''; echo $this->magic_vars['_P']['proid']; ?></proid>
	<albumid><? if (!isset($this->magic_vars['_P']['albumid'])) $this->magic_vars['_P']['albumid'] = ''; echo $this->magic_vars['_P']['albumid']; ?></albumid>
	<picid><? if (!isset($this->magic_vars['_P']['picid'])) $this->magic_vars['_P']['picid'] = ''; echo $this->magic_vars['_P']['picid']; ?></picid>
	<? if (!isset($this->magic_vars['_P']['fileurl'])) $this->magic_vars['_P']['fileurl']=''; ;if (  $this->magic_vars['_P']['fileurl']): ?><filepath><? if (!isset($this->magic_vars['_P']['fileurl'])) $this->magic_vars['_P']['fileurl'] = ''; echo $this->magic_vars['_P']['fileurl']; ?></filepath><? endif; ?>
</uploadResponse>
<? else: ?>
<parameter>
	<allowsExtend>
		<extend depict="All Image File(*.jpg,*.jpeg,*.gif,*.png)">*.jpg,*.gif,*.png,*.jpeg</extend>
	</allowsExtend>
	<language>
		<create>创建</create> 
  <notCreate>取消</notCreate> 
  <albumName>相册名</albumName> 
  <createTitle>创建新册</createTitle> 
  <categoryDesc>类型分类</categoryDesc> 
  <categoryPrompt>请选择分类</categoryPrompt> 
  <okbtn>继续</okbtn> 
  <cancelbtn>查看</cancelbtn> 
  <fileName>文件名</fileName> 
  <depict>描述(单击修改)</depict> 
  <size>文件大小</size> 
  <stat>上传进度</stat> 
  <aimAlbum>上传到:</aimAlbum> 
  <browser>浏览</browser> 
  <delete>删除</delete> 
  <upload>上传</upload> 
  <okTitle>上传完成</okTitle> 
  <okMsg>所有文件上传完成!</okMsg> 
  <uploadTitle>正在上传</uploadTitle> 
  <uploadMsg1>总共有</uploadMsg1> 
  <uploadMsg2>个文件等待上传,正在上传第</uploadMsg2> 
  <uploadMsg3>个文件</uploadMsg3> 
  <bigFile>文件过大</bigFile> 
  <uploaderror>上传失败,请选择类型或者上传jpg,gif的图片</uploaderror> 

	</language>
	<config>
		<userid><? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?></userid> 
		<hash>7408f59938e16974e9787c980ac99de3</hash> 
		<maxupload>20971520</maxupload> 
		<uploadurl>/index.php%3fplugins%26ac=swfupload%26code=attestation</uploadurl> 
		<feedurl></feedurl> 
		<albumurl>index.php%3Fuser%26q%3Dcode%2Fattestation&</albumurl> 
		<categoryStat>0</categoryStat> 
		<categoryRequired>0</categoryRequired> 
	</config>
	<albums>
	<album id="0" >选择类型</album> 
		<? $this->magic_vars['query_type']='GetTypeList';$data = array('limit'=>'all');$default = '';  include_once(ROOT_PATH.'modules/attestation/attestation.class.php');$this->magic_vars['magic_result'] = attestationClass::GetTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
	  <album id="<? if (!isset($this->magic_vars['var']['type_id'])) $this->magic_vars['var']['type_id'] = ''; echo $this->magic_vars['var']['type_id']; ?>" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("gbk2utf8",$_tmp,"");echo $_tmp;unset($_tmp); ?></album> 
	  <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	  </albums>
</parameter>
<? endif; ?>