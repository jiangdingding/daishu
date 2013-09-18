<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<!-- jiangdingding添加 -->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/product_detail_2.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/flowchart.css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/borrow_productintro.css" />



<!--借款是怎么发生的 结束
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
        <div class="sb_title pngfix">我要<font size="5">贷款</font></div>
       	<div style="padding-top:30px;"> 
       		<div style="font-size:14px;">多种还款方式供您选择，方便您轻松贷款：</div>
       		<form name="form1" method="post">
       		<ul class="radio_ul">
       			<li><div class="radio radioOn" name="type" id="type1" onclick="changeStatue(0)"></div>
       			<span class="radio_label " onclick="changeStatue(0)">按月分期还款</span></li>
       			
       			<li><div class="radio" id="type2" name="type" onclick="changeStatue(1)"></div>
       			<span class="radio_label " onclick="changeStatue(1)">按季分期还款</span></li>
       			
       			<li><div class="radio" id="type3" name="type" onclick="changeStatue(2)"></div>
       			<span class="radio_label " onclick="changeStatue(2)">担保还款贷款</span></li>
       		</ul>	
   <!--     			
    			<input type="radio" name="type"  id="type"  class="input_border" checked="checked" onclick="change_type(0)" value="0"  /> 按月分期还款 
				&nbsp;&nbsp;&nbsp;<input type="radio" name="type"  id="type" class="input_border"  value="1"  onclick="change_type(1)" /> 按季分期还款 
				&nbsp;&nbsp;&nbsp;<input type="radio" name="type"  id="type" class="input_border"  value="vouch"  onclick="change_type(2)" /> 担保还款贷款  -->
 <!-- 		<ul class="checkmarkList">
    			<li>多种还款方式</li>
    			<li>按等额本息法计算</li>
    			<li>专业的贷款服务</li>
    		</ul> -->   
	    	<div class="sb_line" style="padding-top:10px;position:relative;z-index:7">
						<div class="sb_label"></div>
					<div id="quick_search_btn" hover-class="hover" click-class="click"
								class="search_button button_3d box-shadow" onclick="to_borrow()">
								我要贷款</div> 
			</div>		
			</form>
		</div>				  

      </div>

      
  <!--           <div class="sb_link_wrap">
        <div class="sb_link_title text-shadow">贷款流程:</div>
        <div >
        	<div class="new_page_trigger-wrap" >
				<div class="new_page_trigger" >
					<a target="_self" href="javascript:void(0)" class="new_page_icon1" id="ac1">1.免费注册</a>
					<a class="new_page_icon2" href="javascript:void(0)" target="_self" id="ac2">2.上传资料</a>
					<a target="_self" href="javascript:void(0)" class="new_page_icon3" id="ac3">3.开始筹标</a>
					<a target="_self" href="javascript:void(0)" class="new_page_icon4" id="ac4">4.获得贷款</a>
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

		<!--借款是怎么发生的 结束-->

		<!--注意事项 开始-->
		<div class="block-l">
			<div class="block-title">贷款须知</div>
		<div class="pd_block_notice">
			<div id="pd_other_content">
				<div class="pd_other_item_head" id="condition">
					<div class="pd_other_item_title">
						<div class="pd_title2">申请条件</div>
					</div>
				</div>
				<div class="pd_other_item_content">
					1、注册成为贷鼠网会员<br /> 2、申请成为VIP会员 <br /> 3、工作收入或经营稳定<br />
					4、具有明确的借款用途<br /> 5、填写详细的个人信息，并提供最少三个紧急联系人<br /> 6、通过全部的基本认证<br />

				</div>
				<div class="pd_other_item_head" id="material">
					<div class="pd_other_item_title">
						<div class="pd_title2">所需材料</div>
					</div>
				</div>
				<div class="pd_other_item_content">
					<div>
						<strong>基本资料</strong>：身份证、户口本、住址证明、信用报告、银行流水、手机清单。<br /> &bull;
						住址证明：要求有个人住址的水电物业单、纸质固话账单、纸质信用卡账单等收件资料的扫描件，且需提供相应的房产证、按揭合同或租赁合同。地址证明3个月更新1次。<br />
						&bull;
						手机清单：具有正常的呼出呼入记录，未经排序、筛选连贯的通讯记录。手机通话清单可以去营业厅打印后扫描，也可以在网上查询截图，截图时要求包含手机号。清单更新要求每月1次。<br />
						&bull; 信用报告: 个人征信报告需要在当地的人民银行打印，需要原件扫描上传。信用报告要求6个月更新1次。<br />
						&bull; 银行流水:
						要求必须有近3个月完整的流水。若是工薪收入者，银行流水必须包含银行代发工资的记录。若是个体工商户或是企业主，必须提供经营企业的银行流水，以及企业账目。
					</div>
					<div>
						<strong>辅助材料</strong>:
						工作证明资料、能力证明材料、经营主体资质、经营业绩资料等，结婚证、房产、车产等资产证明文件。<br /> &bull;
						房产：包含房产证、购房发票、按揭合同、抵押合同、还款账户银行流水，若是自住房产，包含水电清单。<br /> &bull;
						车产：包含车辆登记证、行驶证、驾驶证，购车发票等。<br /> &bull; 信用报告:
						个人征信报告需要在当地的人民银行打印，需要原件扫描上传。信用报告要求6个月更新1次。<br /> &bull; 银行流水:
						要求必须有近3个月完整的流水。若是工薪收入者，银行流水必须包含银行代发工资的记录。若是个体工商户或是企业主，必须提供经营企业的银行流水，以及企业账目。
					</div>
					<div>
						<strong>其他联系人</strong>：直系亲属以及同事、朋友等至少3名以上联络人姓名、联系电话。（直系亲属身份证明应包含身份证、户口本的扫描件及电话。若为配偶的，必须提供结婚证）。<br />
						&bull;
						由于借款人的个人资信状况不同，所需要提供的辅助资料会有所差异。若会员希望获得更高资信评级，就应提供更详细的信息。若审核有特殊要求时需要即时提供近期更新。
						<br />
					</div>
				</div>
				<!--注意事项 结束-->
			</div>
		</div>
		</div>
	</div>
	
	
		<div class="fr">

		<!-- 贷款助手 -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<div class="block-title clearfix">
				<span class="fl">贷款助手</span>
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
								target="_blank">利息计算器</a>
						</div>
						<div class="zs_desc">1分钟帮您制定还款计划</div>
					</div>
				</div>
			</div>
		</div>



		<!-- 新手上路 -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<div class="block-title clearfix">
				<span class="fl">用户帮助中心</span> <span class="fr"><a
					href="/new/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">更多</a>
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
		
		<!-- 最新公告 -->
		<div class="index-middle-r i-news-w block-r"
			style="margin-bottom:20px;">
			<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
			<div class="block-title clearfix">
				<span class="fl"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></span> <span class="fr"><a
					href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank"
					style="font-size: 12px;color:#666;text-decoration: underline;">更多</a>
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





