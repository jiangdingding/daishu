<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<!-- jiangdingding��� -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/product_detail_2.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/flowchart.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/borrow_productintro.css" />



<!--�������ô������ ����
	<div class="con_box t10">
			<img border="0" usemap="#Map" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/banner3.jpg">
		</div>

 		<map id="Map" name="Map">
			<area href="/publish/index.html?type=0" coords="32,109,135,141"
				shape="rect">
			<area href="/publish/index.html?type=1" coords="153,106,257,140"
				shape="rect">
			<area href="/publish/index.html?type=vouch" coords="277,103,384,143"
				shape="rect">
		</map>-->

<!--  <div class="search-box xiaofei" style="width:960px;height:320px;margin: 20px auto 0;">    -->
 <div class="search-box xiaofei" > 
  <div class="sb_c">
    <div class="sb_main">
    
    
     <div class="sb_card" >
        <div class="sb_title pngfix">��Ҫ<font size="5">����</font></div>
       	<div style="padding-top:30px;"> 
       		<div style="font-size:14px;">���ֻ��ʽ����ѡ�񣬷��������ɴ��</div>
       		<form name="form1" method="post">
       		<ul class="radio_ul">
       			<li><div class="radio radioOn" name="type" id="type1" onclick="changeStatue(0)"></div>
       			<span class="radio_label " onclick="changeStatue(0)">���·��ڻ���</span></li>
       			
       			<li><div class="radio" id="type2" name="type" onclick="changeStatue(1)"></div>
       			<span class="radio_label " onclick="changeStatue(1)">�������ڻ���</span></li>
       			
       			<li><div class="radio" id="type3" name="type" onclick="changeStatue(2)"></div>
       			<span class="radio_label " onclick="changeStatue(2)">�����������</span></li>
       		</ul>	
   <!--     			
    			<input type="radio" name="type"  id="type"  class="input_border" checked="checked" onclick="change_type(0)" value="0"  /> ���·��ڻ��� 
				&nbsp;&nbsp;&nbsp;<input type="radio" name="type"  id="type" class="input_border"  value="1"  onclick="change_type(1)" /> �������ڻ��� 
				&nbsp;&nbsp;&nbsp;<input type="radio" name="type"  id="type" class="input_border"  value="vouch"  onclick="change_type(2)" /> �����������  -->
 <!-- 		<ul class="checkmarkList">
    			<li>���ֻ��ʽ</li>
    			<li>���ȶϢ������</li>
    			<li>רҵ�Ĵ������</li>
    		</ul> -->   
	    	<div class="sb_line" style="padding-top:10px;position:relative;z-index:7">
						<div class="sb_label"></div>
					<div id="quick_search_btn" hover-class="hover" click-class="click"
								class="search_button button_3d box-shadow" onclick="to_borrow()">
								��Ҫ����</div> 
			</div>		
			</form>
		</div>				  

      </div>

      
  <!--           <div class="sb_link_wrap">
        <div class="sb_link_title text-shadow">��������:</div>
        <div >
        	<div class="new_page_trigger-wrap" >
				<div class="new_page_trigger" >
					<a target="_self" href="javascript:void(0)" class="new_page_icon1" id="ac1">1.���ע��</a>
					<a class="new_page_icon2" href="javascript:void(0)" target="_self" id="ac2">2.�ϴ�����</a>
					<a target="_self" href="javascript:void(0)" class="new_page_icon3" id="ac3">3.��ʼ���</a>
					<a target="_self" href="javascript:void(0)" class="new_page_icon4" id="ac4">4.��ô���</a>
				</div>
			</div>
      </div>
      </div>
     --> 
      <div class="sb_banner transition-slow pngfix sb_banner_active" ></div>
    </div>
  </div>
</div>



<div class="clearfix index-middle" id="clearfix_index-middle">
	<div class="fl index-middle-l">

		<!--�������ô������ ����-->

		<!--ע������ ��ʼ-->
		<div class="block-l">
			<div class="block-title">������֪</div>
		<div class="pd_block_notice">
			<div id="pd_other_content">
				<div class="pd_other_item_head" id="condition">
					<div class="pd_other_item_title">
						<div class="pd_title2">��������</div>
					</div>
				</div>
				<div class="pd_other_item_content">
					1��ע���Ϊ��������Ա<br /> 2�������ΪVIP��Ա <br /> 3�����������Ӫ�ȶ�<br />
					4��������ȷ�Ľ����;<br /> 5����д��ϸ�ĸ�����Ϣ�����ṩ��������������ϵ��<br /> 6��ͨ��ȫ���Ļ�����֤<br />

				</div>
				<div class="pd_other_item_head" id="material">
					<div class="pd_other_item_title">
						<div class="pd_title2">�������</div>
					</div>
				</div>
				<div class="pd_other_item_content">
					<div>
						<strong>��������</strong>�����֤�����ڱ���סַ֤�������ñ��桢������ˮ���ֻ��嵥��<br /> &bull;
						סַ֤����Ҫ���и���סַ��ˮ����ҵ����ֽ�ʹ̻��˵���ֽ�����ÿ��˵����ռ����ϵ�ɨ����������ṩ��Ӧ�ķ���֤�����Һ�ͬ�����޺�ͬ����ַ֤��3���¸���1�Ρ�<br />
						&bull;
						�ֻ��嵥�����������ĺ��������¼��δ������ɸѡ�����ͨѶ��¼���ֻ�ͨ���嵥����ȥӪҵ����ӡ��ɨ�裬Ҳ���������ϲ�ѯ��ͼ����ͼʱҪ������ֻ��š��嵥����Ҫ��ÿ��1�Ρ�<br />
						&bull; ���ñ���: �������ű�����Ҫ�ڵ��ص��������д�ӡ����Ҫԭ��ɨ���ϴ������ñ���Ҫ��6���¸���1�Ρ�<br />
						&bull; ������ˮ:
						Ҫ������н�3������������ˮ�����ǹ�н�����ߣ�������ˮ����������д������ʵļ�¼�����Ǹ��幤�̻�������ҵ���������ṩ��Ӫ��ҵ��������ˮ���Լ���ҵ��Ŀ��
					</div>
					<div>
						<strong>��������</strong>:
						����֤�����ϡ�����֤�����ϡ���Ӫ�������ʡ���Ӫҵ�����ϵȣ����֤���������������ʲ�֤���ļ���<br /> &bull;
						��������������֤��������Ʊ�����Һ�ͬ����Ѻ��ͬ�������˻�������ˮ��������ס����������ˮ���嵥��<br /> &bull;
						���������������Ǽ�֤����ʻ֤����ʻ֤��������Ʊ�ȡ�<br /> &bull; ���ñ���:
						�������ű�����Ҫ�ڵ��ص��������д�ӡ����Ҫԭ��ɨ���ϴ������ñ���Ҫ��6���¸���1�Ρ�<br /> &bull; ������ˮ:
						Ҫ������н�3������������ˮ�����ǹ�н�����ߣ�������ˮ����������д������ʵļ�¼�����Ǹ��幤�̻�������ҵ���������ṩ��Ӫ��ҵ��������ˮ���Լ���ҵ��Ŀ��
					</div>
					<div>
						<strong>������ϵ��</strong>��ֱϵ�����Լ�ͬ�¡����ѵ�����3��������������������ϵ�绰����ֱϵ�������֤��Ӧ�������֤�����ڱ���ɨ������绰����Ϊ��ż�ģ������ṩ���֤����<br />
						&bull;
						���ڽ���˵ĸ�������״����ͬ������Ҫ�ṩ�ĸ������ϻ��������졣����Աϣ����ø���������������Ӧ�ṩ����ϸ����Ϣ�������������Ҫ��ʱ��Ҫ��ʱ�ṩ���ڸ��¡�
						<br />
					</div>
				</div>
				<!--ע������ ����-->
			</div>
		</div>
		</div>
	</div>
	
	
		<div class="fr">

		<!-- �������� -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<div class="block-title clearfix">
				<span class="fl">��������</span>
			</div>
			<div class="">
				<div class="zs_item clearfix" style="margin-top:10px;margin-bottom:10px;margin-left:10px;" >
					<div class="zs_icon fl" >
						<a href="/tools/index.html"
							class="sj_zhushou" target="_blank"><img
							border="0" src="/themes/ruizhict/style/images/sj_logo.png">
						</a>
					</div>
					<div class="fl" style="padding-left:10px;">
						<div class="zs_title">
							<a href="/tools/index.html"
								target="_blank">��Ϣ������</a>
						</div>
						<div class="zs_desc">1���Ӱ����ƶ�����ƻ�</div>
					</div>
				</div>
			</div>
		</div>



		<!-- ������· -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<div class="block-title clearfix">
				<span class="fl">�û���������</span> <span class="fr"><a
					href="/new/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">����</a>
				</span>
			</div>

			<div class="i-news-c">
				<ul class="i-news_title">
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'7','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><a
						target="_blank" href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"
						><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
			</div>
		</div>
		
		<!-- ���¹��� -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
			<div class="block-title clearfix">
				<span class="fl"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></span> <span class="fr"><a
					href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">����</a>
				</span>
			</div>
			<div class="i-news-c">
				<ul class="i-news_title">
					<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'7','site_var'=>'var','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"
						title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"15");echo $_tmp;unset($_tmp); ?></a>
					</li> <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</ul>
			</div>
			<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
		</div>
		
		
		
	</div>
	
	
	
</div>


<script type="text/javascript">
var type = "0";
function changeStatue(radio_no){
		var type1 = document.getElementById('type1');
		var type2 = document.getElementById('type2');
		var type3 = document.getElementById('type3');
		
		if (radio_no==0){
			if(type1.className == "radio"){
				type1.className = "radio radioOn";
				type2.className = "radio";
				type3.className = "radio";
				type = "0";
			}
		}else if(radio_no==1){
			if(type2.className == "radio"){
				type2.className = "radio radioOn";
				type1.className = "radio";
				type3.className = "radio";
				type = "1";
			}
		}else{
			if(type3.className == "radio"){
				type3.className = "radio radioOn";
				type1.className = "radio";
				type2.className = "radio";
				type = "vouch";
			}
		}
}

function to_borrow(){
	location.href='/publish/index.html?type='+type;
}

</script>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>





