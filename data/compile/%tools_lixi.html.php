<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<div class="lixijisuanqi" id="lixijisuanqi">
	<div id="bigcontent">
		<div class="wrap950 list_li_3" id="wrap950_list_li_3">
			<div class="titlelixi">利息计算器</div>
			
			<?
		$account = isset($_REQUEST['account'])?$_REQUEST['account']:"";
		$lilv = isset($_REQUEST['lilv'])?$_REQUEST['lilv']:"";
		$times = isset($_REQUEST['times'])?$_REQUEST['times']:"";
		$type = isset($_REQUEST['type'])?$_REQUEST['type']:"";
	?>
			<div class="content">

				<div class="content1">
					<form action="" method="get">
						借款金额：<input type="text" name="account" size="10"
							value="<? echo isset($_REQUEST['account'])?$_REQUEST['account']:""; ?>"
						value="
						<? echo $_REQUEST['account'];?>
						" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年利率：<input
							type="text" name="lilv" size="10"
							value="<? echo isset($_REQUEST['lilv'])?$_REQUEST['lilv']:""; ?>"/>%
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;借款期限：<input
							type="text" name="times" size="10"
							value="<? echo isset($_REQUEST['times'])?$_REQUEST['times']:""; ?>"
						/>个月 </br> </br>还款方式：<select name="type"><option value="month">按月还款</option>
						</select> <input class="anniu" type="submit" value="开始计算" />
					</form>
				</div>
				<div class="content2">采用银行房贷等通用的"等额本息还款法",即借款者每月以相等的金额偿还贷款本息</div>
			</div>

		</div>
		<?
require_once(ROOT_PATH."modules/borrow/borrow.class.php");
$data['account'] = $account;
$data['year_apr'] = $lilv;
$data['month_times'] = $times;
$data['borrow_time'] = time();
$list = borrowClass::EqualInterest($data);
$data['type'] = "all";
$result = borrowClass::EqualInterest($data);
if ($result!=""){
?>
		
		<div class="wrap950 list_1" id="daikuanggaishu">
			<div class="title">贷款概述</div>
			
			<div class="content">
				每月偿还：
				<? echo $result['monthly_repayment'];?>
				元 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;月利率：
				<? echo $result['month_apr'];?>
				% &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 本息总额：
				<? echo $result['repayment_account'];?>
				元
			</div>
			<div class="foot"></div>
		</div>
		
		<div class="wrap950 list_1" id="shijianbiao">
			<div class="title">还款计划时间表</div>
			<div class="content1" id="ontent_ltable">
				
				<table id="tablecontent">
					<tr class="tr1">
						<td class="td1"><strong>期数</strong>
						</td>
						<td class="td2"><strong>月还款本息</strong>
						</td>
						<td class="td2"><strong>月还款本金</strong>
						</td>
						<td class="td2"><strong>利息</strong>
						</td>
						<td class="td2"><strong>余额</strong>
						</td>
					</tr>
					<? foreach ($list as $key => $value){?>
					<tr class="tr2">
						<td>
							<? echo $key+1;?>
						</td>
						<td>
							<? echo $value['repayment_account'];?>
						</td>
						<td>
							<? echo $value['capital'];?>
						</td>
						<td>
							<? echo $value['interest'];?>
						</td>
						<td>
							<? echo $result['repayment_account']-($key+1)*$value['repayment_account'];?>
						</td>
					</tr>
					<? }?>
				</table>
			</div>
			<div class="foot"></div>
		</div>
		<? }?>
		
	</div>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
