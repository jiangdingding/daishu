function changetype(_url,data_typename) { 
	$.ajax({ 
		url: _url, //����·�� 
		data: '', //��Ҫ��֤�Ĳ��� 
		type: 'post', //��ֵ�ķ�ʽ 
		error: function () {//����ʧ��ʱ���õĺ��� 
			alert("ҳ���������ϵ����Ա��"); 
		}, 
		success: function (msg) {//���ʳɹ�ʱ���õĺ��� 
			//alert(msg);
		} 
	}); 
	
	 $('.header-menu li').each(function(){
	      if($(this).attr('data-typename')==data_typename){
	      		var c = $(this);
		        $(this).find('a').css('background-color','#375aab').css('color','#fff').addClass("current");
		         
		         $('.header-menu li').each(function(){
		         	if($(this).attr('data-typename')!=c.attr('data-typename')){
		         		 $(this).find('a:.current').removeAttr("style");
		         	}
		         });
		         
		       
	    	}
		});
} 

