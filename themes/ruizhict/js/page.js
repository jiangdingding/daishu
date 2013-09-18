function changetype(_url,data_typename) { 
	$.ajax({ 
		url: _url, //访问路径 
		data: '', //需要验证的参数 
		type: 'post', //传值的方式 
		error: function () {//访问失败时调用的函数 
			alert("页面错误，请联系管理员！"); 
		}, 
		success: function (msg) {//访问成功时调用的函数 
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

