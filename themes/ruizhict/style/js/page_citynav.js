$(function(){
	//渲染ui-tab组件事件代理
	$(".ui-tab").delegate(".ui-tab-nav-item", "click", function(){
		$(this).parent().find(".ui-tab-nav-item").removeClass("current");
		$(this).addClass("current");
		var _target = $(this).attr("data-target");
		$(_target).parent().find(".ui-tab-content-item").removeClass("current");
		$(_target).addClass("current");
	});

	var _select = $(".ui-select");
	var _list = $(".ui-select .list");
	$(_select).each(function(index, item){
		var _data = eval("(" + ($(this).attr("data-src")) + ")");
		var data;
		if(_data.type == "var"){
			data = _data.data;
		}
		var _select = $(this).find(".list");
		var _dom = "",
			tpl = '<a class="item" href="javascript:;" value="{value}" data="{data}">{name}</a>';
		$(window[data]).each(function(index, item){
			_dom += tpl.replace("{value}", index).replace("{name}", item.name).replace("{data}", data);
		});
		_select.eq(0).html("");
		_select.eq(0).html(_dom);

	});
	//点击显示列表
	$(".ui-select").delegate('.title', "click", function(){
		_list.hide();
		$(this).parent().find(".list").show();
	});
	//点击子项
	$(".ui-select").delegate('.list .item', "click", function(){
		var	tpl = '<a class="item" href="javascript:;" value="{value}">{name}</a>';
		if($(this).parent().attr("data-to")){
			var _subDom = "";
			var _subData = window[$(this).attr("data")][parseInt($(this).attr("value"))].list;
			//console.log(_subData.length);

			$(_subData).each(function(subindex, subitem){
				_subDom += tpl.replace("{value}", subitem.domain).replace("{name}", subitem.name);
			});
			$($(this).parent().attr("data-to")).html(_subDom);
			$($(this).parent().attr("data-to")).parent().find(".value").html("请选择");
			$($(this).parent().attr("data-to")).parent().find(".value").attr("value", "");
			$('[click-role="go"]').addClass("ui-btn-default-disabled");
			$(this).parent().parent().find(".value").html($(this).html());
			$(this).parent().hide();			
		}else{
			$(this).parent().parent().find(".value").html($(this).html());
			$(this).parent().parent().find(".value").attr("value", $(this).attr("value"));
			$('[click-role="go"]').removeClass("ui-btn-default-disabled");
			$(this).parent().hide();		
		}
	});
	$(".ui-select .list").hover(function(){

	},function(){
		$(this).hide();
	});
	$(document).delegate('[click-role="go"]', "click", function(){
		if(!$(this).hasClass("ui-btn-default-disabled")){
			var _domain = $($(this).attr("data-src")).attr("value");
			location.href = "http://" + _domain + ".rong360.com";
		}
	});
});