<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<!--子栏目 开始-->
<div class="wrap950 header_site_sub">
	<?  if(!isset($this->magic_vars['_G']['site_brother_list']) || $this->magic_vars['_G']['site_brother_list']=='') $this->magic_vars['_G']['site_brother_list'] = array();  $_from = $this->magic_vars['_G']['site_brother_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
	<a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
	<? endforeach; endif; unset($_from); ?>
</div>
<!--子栏目 结束-->



<div class="wrap950 list_li_3">
	<div class="title"><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?></div>
	<?php
	
	function _url($Date){
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, "$Date");
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)");
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$contents = curl_exec($ch);
	
	curl_close($ch);
	return $contents;
}

$nums =  $_REQUEST['phone'];
$address = "找不到归属地";
if($nums>0){
	$url = "http://www.baidu.com/s?wd=$nums";
	$contents = _url($url);
	
	preg_match_all("/手机号码(.*?)<\/span> <\/div>/is",$contents,$__address);
	if (isset($__address[0][0]) && $__address[0][0]!=""){
		preg_match_all("/<span>(.*?)<\/span> <\/div>/is",$__address[0][0],$_address);
		if (isset($_address[1][0]) && count($_address[1])>0 && $_address[1][0]!=""){
			$address = $_address[1][0];
		}
	}
}

?> 
	<div class="content">
		<br />
		<font color="#FF0000">在下面输入框中输入您要查询的手机号码,点击查询按钮即可查询该手机号所在地区。</font> 
		<br /><br />
		<div>
		<form action="" method="get" onsubmit="return chk()">	手机号码：<input type="text" name="phone"  id="phone" size="20" value="<? echo $_REQUEST['phone'];?>" />   <input type="submit" value="查 询" /></form>
		</div>
	</div>
</div>
<script>
function chk()
{
var tel = document.all("phone").value;

if(/^13\d{9}$/g.test(tel)|| (/^18\d{9}$/g.test(tel)) || (/^15\d{9}$/g.test(tel)))
        {;
		      return true;
         }
else
        {
           alert("手机号错误");
		   return false;
         }
}
</script>

</script>

<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  />   查询结果</div>
	<div class="content">
		归属地：<? echo $address;?>
	</div>
	<div class="foot"></div>
</div>




<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>