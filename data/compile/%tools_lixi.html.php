<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<div class="lixijisuanqi" id="lixijisuanqi">
	<div id="bigcontent">
		<div class="wrap950 list_li_3" id="wrap950_list_li_3">
			<div class="titlelixi">��Ϣ������</div>
			
			<?
		$account = isset($_REQUEST['account'])?$_REQUEST['account']:"";
		$lilv = isset($_REQUEST['lilv'])?$_REQUEST['lilv']:"";
		$times = isset($_REQUEST['times'])?$_REQUEST['times']:"";
		$type = isset($_REQUEST['type'])?$_REQUEST['type']:"";
	?>
			<div class="content">

				<div class="content1">
					<form action="" method="get">
						����<input type="text" name="account" size="10"
							value="<? echo isset($_REQUEST['account'])?$_REQUEST['account']:""; ?>"
						value="
						<? echo $_REQUEST['account'];?>
						" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�����ʣ�<input
							type="text" name="lilv" size="10"
							value="<? echo isset($_REQUEST['lilv'])?$_REQUEST['lilv']:""; ?>"/>%
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;������ޣ�<input
							type="text" name="times" size="10"
							value="<? echo isset($_REQUEST['times'])?$_REQUEST['times']:""; ?>"
						/>���� </br> </br>���ʽ��<select name="type"><option value="month">���»���</option>
						</select> <input class="anniu" type="submit" value="��ʼ����" />
					</form>
				</div>
				<div class="content2">�������з�����ͨ�õ�"�ȶϢ���",�������ÿ������ȵĽ������Ϣ</div>
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
			<div class="title">�������</div>
			
			<div class="content">
				ÿ�³�����
				<? echo $result['monthly_repayment'];?>
				Ԫ &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;�����ʣ�
				<? echo $result['month_apr'];?>
				% &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; ��Ϣ�ܶ
				<? echo $result['repayment_account'];?>
				Ԫ
			</div>
			<div class="foot"></div>
		</div>
		
		<div class="wrap950 list_1" id="shijianbiao">
			<div class="title">����ƻ�ʱ���</div>
			<div class="content1" id="ontent_ltable">
				
				<table id="tablecontent">
					<tr class="tr1">
						<td class="td1"><strong>����</strong>
						</td>
						<td class="td2"><strong>�»��Ϣ</strong>
						</td>
						<td class="td2"><strong>�»����</strong>
						</td>
						<td class="td2"><strong>��Ϣ</strong>
						</td>
						<td class="td2"><strong>���</strong>
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
