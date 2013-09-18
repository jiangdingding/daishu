<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<!-- 陈亮添加 -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/user_index.css" />

<div class="container clearfix" style="margin-top:15px;">
	<div class="block-title">系统信息</div>
	<div class="i-news-c" style="text-align:center;background-color:#FFF;">
		<div style="margin-top:10px;margin-bottom:10px;font-size:16px">
			<? if (!isset($this->magic_vars['_U']['showmsg']['msg'])) $this->magic_vars['_U']['showmsg']['msg'] = ''; echo $this->magic_vars['_U']['showmsg']['msg']; ?></div>
	     <div id="msg_content"><a href="<? if (!isset($this->magic_vars['_U']['showmsg']['url'])) $this->magic_vars['_U']['showmsg']['url'] = ''; echo $this->magic_vars['_U']['showmsg']['url']; ?>"><? if (!isset($this->magic_vars['_U']['showmsg']['content'])) $this->magic_vars['_U']['showmsg']['content'] = ''; echo $this->magic_vars['_U']['showmsg']['content']; ?></a></div><br />
		
	</div>
</div>

<script> 
var url = '<? if (!isset($this->magic_vars['_U']['showmsg']['url'])) $this->magic_vars['_U']['showmsg']['url'] = ''; echo $this->magic_vars['_U']['showmsg']['url']; ?>';
var content = '<? if (!isset($this->magic_vars['_U']['showmsg']['content'])) $this->magic_vars['_U']['showmsg']['content'] = ''; echo $this->magic_vars['_U']['showmsg']['content']; ?>';

if (url == ""){
	document.getElementById('msg_content').innerHTML = "<a href='javascript:history.go(-1)'>"+content+"</a>";
}else{
	document.getElementById('msg_content').innerHTML = "<a href='"+url+"'>"+content+"</a>";
}
setInterval("testTime()",5000); 
function testTime() { 
		if (url == ""){
			history.go(-1);
		}else{
        location.href = url; //#设定跳转的链接地址
		}
} 
</script>


<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>