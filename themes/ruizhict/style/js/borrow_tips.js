$(function(){
	addEvent();  
});
var apply = "detail",
		closeTime;

function _submit_recover(){
		$('#ask_textarea')[0].value ="";
		$('#verify_code')[0].value  ="";
		$('#verifyPic')[0].src += '1';
}

$(document).ready(function(){
        $("#slideProcess").click(function(){
            $(".pic_open").hide();
            $("#panel").slideDown();
        });
        $("#qaNext").click(function(){
            var start = $('#qaStart').val();            
            var productId = $('#productId').val();
            $.ajax({
                url : "/product/getQa",
                data : {
                    start:start,
                    productId:productId
                    },
                dataType: "json",
                success : function(data){
                    if(data.html){
                        $(data.html).appendTo($('#qa_box'));
                    }
                    if(!data.needNext){
                        $('#qaNext').hide(); 
                    }
                    $('#qaStart').val(data.qaStart);        
                    init();
                }
            });
        });
        init();
        function init(){
            $('.unfold').click(function(){
                $(this).next().css('width','378').find('.unfold_content').show();
                $(this).parentsUntil('#qa_box','.ask_answer').find('.bastard').show();
                $(this).hide();
            });
            $('.packup').click(function(){
                $(this).parentsUntil('.shouqi','.unfold_content').hide().parent().css('width','338'); 
                $(this).parentsUntil('#qa_box','.ask_answer').find('.bastard').hide();
                $(this).parentsUntil('.answer_more','.content').find('.unfold').show();
            });
            $('.support').mouseenter(function(){
                $(this).addClass('hover');      
            }).mouseleave(function(){
                $(this).removeClass('hover');    
            }).click(function(){
                var id = $(this).attr('data');    
                var banker_answer_ids = $.cookie('banker_answer_ids');
                var arrId = banker_answer_ids.split(',');
                if($.inArray(id,arrId) == -1){
                    var val = $(this).text();
                    $(this).html(val - 0 + 1);
                    banker_answer_ids = banker_answer_ids ? (banker_answer_ids + ',' + id) : id;
                    $.cookie('banker_answer_ids',banker_answer_ids);
                    $.ajax({
                        type:"POST",
                        url:"/product/upAnswer",
                        data:{
                            banker_answer_qa_id:id
                        },
                        success:function(){
                        }
                    });
                }
                $(this).unbind('click');
            });
        }
});














Validator.showError = function(el, msg){
		$('#pd_computer_form').find('input').removeClass('error-input');
		$(el).addClass('error-input');
		$('#pd_comp_error').html(msg).show();
	};
	Validator.showRight = function(el, msg){
		$('#pd_computer_form').find('input').removeClass('error-input');
		$('#pd_comp_error').hide();
	}
	Validator.limitTextareaLen = function(el,len){
		var val = el.value;
		if(val.length>=len)
		el.value = val.substr(0,len);
	}
	Validator.initForm($('#pd_computer_form')[0]);
	
	$('#ask_textarea').keyup(function(){
		 Validator.limitTextareaLen($('#ask_textarea')[0],600);
	 });
	//为您计算
	$('#pd_computer_btn').click(function(evt){
		evt.preventDefault();
		if(! Validator.validForm($('#pd_computer_form')[0] , false, true)){
			return;
		}
		var data = $('#pd_computer_form').serializeArray();
		//替换为真实URL
		var url="/api/detailCal";
		$.post(url, data,
			function(result){
				try{
					var json = eval('(' + result + ')');
					if(json.error){
						$('#pd_comp_error').html(json.error).show();
						return;
					}
					$('#pd_comp_error').hide();
					if(json.message){
						$('#pd_comp_error').html(json.message).show();
					}
					$('#pd_total_expense').html(json.total_expense);
					var danwei = '';
					if(/^\d+$/.test(json.month_expense)){
						danwei = '<span class="dark-font">元</span>';
					}
					$('#pd_month_expense').html(json.month_expense + danwei);
					$('#pd_day_expense').html(json.day_expense);
					//重置选项
					$('[name="loan_limit"]').val(json.loan_limit);
					$('[name="loan_term"]').val(json.loan_term);
					$('[name="interest"]').val(json.interest);
					$('[name="once_add"]').val(json.once_add);
					$('[name="month_add"]').val(json.month_add);
					//高亮
                                        $('#pd_computer_res').highlight();
				} catch(e){
					$('#pd_comp_error').html("服务器繁忙,请稍后重试").show();
				}
			}
		);
		
	});

	//将利率的表格头标出
	$('#pd_lilv_c').find('table tr:first').addClass('thead');
	$('#pd_lilv_c').find('table').attr('bordercolor','#DDDDDD').find('td').css('border','1px solid #DDD');

(function(){

 function _resize_backtotop(){
		var _page = $('#page_wraper'),
				_x = _page.offset().left,
				_w = _page.width(),
				_iw = _x+_w;

		if(_iw>$(window).width())
				_iw = $(window).width() - $('#back_to_top').width();

		$('#back_to_top').css('left',_iw+'px');
 }
 var _timeout,scrollTime;
 $(window).on('resize',function(){
		if(_timeout)
				clearTimeout(_timeout);

		_timeout = setTimeout(_resize_backtotop,30);
 });
 $('#back_to_top').click(function(){
		var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
		$body.animate({ scrollTop:0 }, 350);
 })
 $(window).on('scroll',function(){
		var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'),
				top;
				if($.browser.webkit)
						$body = $('body');

				top = $body.scrollTop() > $(window).height()/2;
		
		if(top){
				$('#back_to_top').fadeIn();
		}else{
				$('#back_to_top').fadeOut();
		}
 });
 var pd_other_tab_h = $('#pd_other_tab').offset().top;
$(window).on('scroll',function(){
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'),
        top;
        if($.browser.webkit)
        $body = $('body');
        top = $body.scrollTop() > pd_other_tab_h;
        if(top){
            $('#pd_other_tab').addClass('pd_other_tab_yidong'); 
            $('#pd_other_tab').removeClass('xuanfu38'); 
            $('.applyfor').show();
            $('.yinying').addClass('yinying-bg');
            $('.pd_other_tab_current').css('height','32px');
            if($.browser.msie && ($.browser.version == "6.0") && !$.support.style)
                $('#pd_other_tab').css('top',$body.scrollTop()-130); 
        }else{
            $('#pd_other_tab').removeClass('pd_other_tab_yidong'); 
            $('#pd_other_tab').addClass('xuanfu38'); 
            $('.applyfor').hide();
            $('.yinying').removeClass('yinying-bg');
            $('.pd_other_tab_current').css('height','33px');
            if($.browser.msie && ($.browser.version == "6.0") && !$.support.style)
                $('#pd_other_tab').css('top',pd_other_tab_h); 
        }
});
$('#pd_other_tab li,#compute').click(function(){
    $('#pd_other_tab').removeClass('xuanfu38'); 
    var id = $(this).attr('name');
    if($('#pd_other_tab').hasClass('pd_other_tab_yidong')){
        var top = $('#'+id).offset().top - 33;
    }else{
        var top = $('#'+id).offset().top - 33 * 2; //tab在原位置第一次点击时,获取的文档高度需要减去pd_other_tab的高度
    }
    var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
    if($.browser.webkit)
        $body = $('body');
    $body.animate({ scrollTop:top}, 350);
});
 _resize_backtotop();

//收藏产品
$save_product_btn = $('<div class="save_product_btn" role="poplayer_fork" data-track="收藏到邮箱|点击按钮|详情页" data-url="/subscribe/product.html?id=1287">保存到邮箱</div>');

})();
