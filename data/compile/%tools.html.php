<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<div class="con_box t10" id="mytools">
	<div class="bigcontent">
		<div id="title">��Ϣ������</div>
		
		<div class="m_l_bor" id="lixicontent">


			<div class="content1">
				<form action="/lixi/index.html" method="get">
					����<input class="jiekuangjine" type="text" name="account"
						size="10"
						value="<? echo isset($_REQUEST['account'])?$_REQUEST['account']:""; ?>"
					value="
					<? echo $_REQUEST['account'];?>
					" /> </br>
					</br>�����ʣ�&nbsp;&nbsp;&nbsp;<input class="nianlilv" style="margin-left:2px;" type="text"
						name="lilv" size="10"
						value="<? echo isset($_REQUEST['lilv'])?$_REQUEST['lilv']:""; ?>"/>&nbsp;&nbsp;%
					</br>
					</br>������ޣ�<input class="jiekuangqixian" type="text" name="times"
						size="10"
						value="<? echo isset($_REQUEST['times'])?$_REQUEST['times']:""; ?>"
					/>����</br> </br>���ʽ��<select class="huankuangfangshi" name="type"><option
							value="month" >���»���</option>
					</select> </br>
					</br>
					<input class="anniu" type="submit" value="��ʼ����" />
				</form>
			</div>
			<div class="content2">�������з�����ͨ�õ�"�ȶϢ���",�������ÿ������ȵĽ������Ϣ</div>
		</div>
	</div>
</div>
</div>

</div>
</div>
</div>


</div>
 <? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>