<div class="module_add">
			<form action="" method="post"  enctype="multipart/form-data" >
			<div class="module_title"><strong>�ϴ�ͼƬˮӡ����</strong></div>
			<div class="module_border">
				<div class="d">�ϴ���ͼƬ�Ƿ�ʹ��ͼƬˮӡ���ܣ�</div>
				<div class="c">
					<input type="radio" value="0" name="con_watermark_pic" <? if (!isset($this->magic_vars['result']['con_watermark_pic'])) $this->magic_vars['result']['con_watermark_pic']='';if (!isset($this->magic_vars['result']['con_watermark_pic'])) $this->magic_vars['result']['con_watermark_pic']=''; ;if (  $this->magic_vars['result']['con_watermark_pic']==0 ||  $this->magic_vars['result']['con_watermark_pic']==''): ?> checked="checked"<? endif; ?> />�� <input type="radio" value="1"  name="con_watermark_pic" <? if (!isset($this->magic_vars['result']['con_watermark_pic'])) $this->magic_vars['result']['con_watermark_pic']=''; ;if (  $this->magic_vars['result']['con_watermark_pic']==1): ?> checked="checked"<? endif; ?>/>�� 
				</div>
			</div>
			
			<div class="module_border">
			<div class="d">�ɼ���ͼƬ�Ƿ�ʹ��ͼƬˮӡ���ܣ�</div>
				<div class="c">
						<input type="radio" value="0"  name="con_watermark_caijipic" <? if (!isset($this->magic_vars['result']['con_watermark_caijipic'])) $this->magic_vars['result']['con_watermark_caijipic']='';if (!isset($this->magic_vars['result']['con_watermark_caijipic'])) $this->magic_vars['result']['con_watermark_caijipic']=''; ;if (  $this->magic_vars['result']['con_watermark_caijipic']==0 ||  $this->magic_vars['result']['con_watermark_caijipic']==''): ?> checked="checked"<? endif; ?> />�� <input type="radio" value="1" name="con_watermark_caijipic" <? if (!isset($this->magic_vars['result']['con_watermark_caijipic'])) $this->magic_vars['result']['con_watermark_caijipic']=''; ;if (  $this->magic_vars['result']['con_watermark_caijipic']==1): ?> checked="checked"<? endif; ?>/>�� 
				</div>
			</div>
			
		<div class="module_border">
			<div class="d">ѡ��ˮӡ���ļ����ͣ�</div>
			<div class="c">
					<input type="radio" value="0" name="con_watermark_type" <? if (!isset($this->magic_vars['result']['con_watermark_type'])) $this->magic_vars['result']['con_watermark_type']='';if (!isset($this->magic_vars['result']['con_watermark_type'])) $this->magic_vars['result']['con_watermark_type']=''; ;if (  $this->magic_vars['result']['con_watermark_type']==0 ||  $this->magic_vars['result']['con_watermark_type']==''): ?> checked="checked"<? endif; ?> />ͼƬ <input type="radio" name="con_watermark_type" value="1"  <? if (!isset($this->magic_vars['result']['con_watermark_type'])) $this->magic_vars['result']['con_watermark_type']=''; ;if (  $this->magic_vars['result']['con_watermark_type']==1): ?> checked="checked"<? endif; ?>/>���� 
			</div>
		</div>
			
		<div class="module_border">
			<div class="d">ˮӡ���֣�</div>
			<div class="c">
				<input type="text" name="con_watermark_word" value="<? if (!isset($this->magic_vars['result']['con_watermark_word'])) $this->magic_vars['result']['con_watermark_word'] = ''; echo $this->magic_vars['result']['con_watermark_word']; ?>"/>
			</div>
		</div>
		<div class="module_border">
			<div class="d">ˮӡͼƬ�ļ�������������ڣ���ʹ������ˮӡ����</div>
			<div class="c">
			  <? if (!isset($this->magic_vars['result']['con_watermark_file'])) $this->magic_vars['result']['con_watermark_file']=''; ;if (  $this->magic_vars['result']['con_watermark_file']!=""): ?><img src="<? if (!isset($this->magic_vars['result']['con_watermark_file'])) $this->magic_vars['result']['con_watermark_file'] = ''; echo $this->magic_vars['result']['con_watermark_file']; ?>" /><br /><? endif; ?><input type="file" name="con_watermark_file" /> 
			</div>
		</div>
		
		<div class="module_border">
			<div class="d">ˮӡͼƬ���������С��</div>
			<div class="c">
				<input type="text" name="con_watermark_font" value="<? if (!isset($this->magic_vars['result']['con_watermark_font'])) $this->magic_vars['result']['con_watermark_font'] = '';$_tmp = $this->magic_vars['result']['con_watermark_font'];$_tmp = $this->magic_modifier("default",$_tmp,"20");echo $_tmp;unset($_tmp); ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">ˮӡͼƬ������ɫ��Ĭ��#FF0000Ϊ��ɫ����</div>
			<div class="c">
				<input type="text" value="<? if (!isset($this->magic_vars['result']['con_watermark_color'])) $this->magic_vars['result']['con_watermark_color'] = '';$_tmp = $this->magic_vars['result']['con_watermark_color'];$_tmp = $this->magic_modifier("default",$_tmp,"#FF0000");echo $_tmp;unset($_tmp); ?>" name="con_watermark_color"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">���ͼƬˮӡ����������,ֵԽ�󣬺ϲ�����Խ�ͣ�</div>
			<div class="c">
				<input type="text" value="<? if (!isset($this->magic_vars['result']['con_watermark_imgpct'])) $this->magic_vars['result']['con_watermark_imgpct'] = '';$_tmp = $this->magic_vars['result']['con_watermark_imgpct'];$_tmp = $this->magic_modifier("default",$_tmp,"50");echo $_tmp;unset($_tmp); ?>" name="con_watermark_imgpct"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">�������ˮӡ����������,ֵԽС���ϲ�����Խ�ͣ�</div>
			<div class="c">
				<input type="text"  name="con_watermark_txtpct" value="<? if (!isset($this->magic_vars['result']['con_watermark_txtpct'])) $this->magic_vars['result']['con_watermark_txtpct'] = '';$_tmp = $this->magic_vars['result']['con_watermark_txtpct'];$_tmp = $this->magic_modifier("default",$_tmp,"50");echo $_tmp;unset($_tmp); ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">ˮӡλ�ã�</div>
			<div class="c">
			<input type="radio" value="1" name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']='';if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==1 ||  $this->magic_vars['result']['con_watermark_position']==''): ?> checked="checked"<? endif; ?> />�������� <input type="radio" value="2"  name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==2): ?> checked="checked"<? endif; ?>/>��������<br /><input type="radio" value="3" name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==3): ?> checked="checked"<? endif; ?>/>�ײ����� <input type="radio" value="4" name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==4): ?> checked="checked"<? endif; ?>/>�ײ�����
 
			</div>
		</div>
		
		<div class="module_submit"><input type="submit" value="ȷ���޸�"  /></div>
			</form>
		</div>