<!--���ۿ�ʼ-->
<script
	src="/index.php?comment&type=list&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1&epage=3"></script>
<div class="content_title mar10" style="padding-top:10px;padding-bottom: 10px;padding-left: 5px;">
	<span class="floatr">����������<font color="#FF0000"><script>document.write(result['total'])</script>
	</font> �� <a
		href="/index.php?comment&type=lists&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1"
		target="_blank">�鿴��������</a>
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
			<!-- ��֤�� -->
			<input type="text" id="valicode" size="10" /> <img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
			
			<span class="floatr">
			<input class="button_blue_small" type="button" id="pinglun"
				onclick="pinglun('<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>','<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>')"
				value="�ύ����"/> 
				</span>
				
				
		</div>

	</div>
<hr class="hr-dotted">
	<div class="content-body act-relevance">
		<ul>
			<li>ע�⣺</li>
			<li>�벻Ҫ�������������ۡ�</li>
			<li>���������ء�ȫ���˴�ί�����ά����������ȫ�ľ��������л����񹲺͹������йط��ɷ��档</li>
			<li>�е�һ����������Ϊ��ֱ�ӻ��ӵ��µ����»����·������Ρ�</li>
			<li>����������ݽ�������˹۵㣬�뱾��վ�޹ء�</li>
			<li>��վ���۹�����Ա��Ȩ������ɾ�����Ͻ�����е��������ݡ�</li>
			<li>���뱾���ۼ��������Ѿ��Ķ��������������</li>

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
							alert("���۲���Ϊ��");
						}else{
						tipsWindown("����","url:get?/index.php?comment&type=add&code="+code+"&id="+id+"&comment="+comment+"&valicode="+valicode,300,130,"false","","false","text")
						}
					};
				function comment_close() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow",function(){$(this).remove();});
				};
			 	
		 </script>


<!--���۽���-->