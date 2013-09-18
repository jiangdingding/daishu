function initTooltip(){
	$('[hover-tip]').hover(function(evt){
        evt.stopPropagation();
		var id = $(this).attr('hover-tip-id') || 'tip' + (+new Date),
			offset = $(this).offset();
		$(this).attr('hover-tip-id', id);
		$('<div class="hover-tip gray-shadow"></div>').html($(this).attr("hover-tip")).attr('id',id).appendTo(document.body)
			.css({'left':evt.pageX + 5, 'top': evt.pageY + 5});
			//.css({'left':offset.left + ($(this).outerWidth() - $('#' + id).outerWidth())/2, 'top': offset.top + $(this).outerHeight() + 5});
	},function(){
		var id = $(this).attr('hover-tip-id');
		if(id){
			$('#'+id).remove();
		}
	});
}
$(initTooltip);
