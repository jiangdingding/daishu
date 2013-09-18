<!--评论开始-->
<script
	src="/index.php?comment&type=list&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1&epage=3"></script>
<div class="content_title mar10" style="padding-top:10px;padding-bottom: 10px;padding-left: 5px;">
	<span class="floatr">总评论数：<font color="#FF0000"><script>document.write(result['total'])</script>
	</font> 个 <a
		href="/index.php?comment&type=lists&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1"
		target="_blank">查看所有评论</a>
</div>

<div class="article_content ">
	<ul class="pinglun_co">
		
		<script>
					var list = result['list'];
					var display = "";
					for (i=0;i<list.length;i++){
						display += '<li><div class="pinglun_co_left"><div class="pinglun_co_pic"><img src="'+list[i]['litpic']+'" width="73" height="73" /></div><a href="/u/'+list[i]['user_id']+'" target=_blank>'+list[i]['username']+'</a></div><div class="floatr"><div class="pinglun_co_content">'+list[i]['comment']+'<br><font style=" font-size:12px; float:right">'+list[i]['time']+'</font></div>	</div></li>';
					}
					document.write(display);
				</script>
		
	</ul>
	<div class="comment_page"></div>
	<div class="content_pinglun" align="center">
		<div>
			<textarea rows="6" id="comment_content" name="comment" style="margin: 2px; width: 645px; height: 216px;"></textarea>
		</div>
		<br>
		<div>
			<!-- 验证码 -->
			<input type="text" id="valicode" size="10" /> <img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			
			<span class="floatr">
			<input class="button_blue_small" type="button" id="pinglun"
				onclick="pinglun('<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>','<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>')"
				value="提交评论"/> 
				</span>
				
				
		</div>

	</div>
<hr class="hr-dotted">
	<div class="content-body act-relevance">
		<ul>
			<li>注意：</li>
			<li>请不要发表无意义评论。</li>
			<li>您必须遵守《全国人大常委会关于维护互联网安全的决定》及中华人民共和国其他有关法律法规。</li>
			<li>承担一切因您的行为而直接或间接导致的民事或刑事法律责任。</li>
			<li>您发表的内容仅代表个人观点，与本网站无关。</li>
			<li>本站评论管理人员有权保留或删除其管辖评论中的任意内容。</li>
			<li>参与本评论即表明您已经阅读并接受上述条款。</li>

		</ul>
	</div>

</div>

<script type="text/javascript">
			function nl2br(value) 
{ 
  return value.replace("\n","<br />"); 
}
				function pinglun(code,id) {
						var comment =nl2br($("#comment_content").val());
						var valicode = $("#valicode").val();
						if (comment==""){
							alert("评论不能为空");
						}else{
						tipsWindown("评论","url:get?/index.php?comment&type=add&code="+code+"&id="+id+"&comment="+comment+"&valicode="+valicode,300,130,"false","","false","text")
						}
					};
				function comment_close() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow",function(){$(this).remove();});
				};
			 	
		 </script>


<!--评论结束-->