//Блоки одной высоты
jQuery.fn.equivalent = function (){
	var jQueryblocks = jQuery(this),
		maxH = jQueryblocks.eq(0).height();
	jQueryblocks.each(function(){
		maxH = ( jQuery(this).height() > maxH ) ? jQuery(this).height() : maxH;
	});
	jQueryblocks.height(maxH);
};
// jQuery('footer .container .row>div').equivalent(); // вызов скрипта
jQuery('.block-newProduct .item').equivalent(); // вызов скрипта
jQuery('.itemProduct').equivalent(); // вызов скрипта
// jQuery('#menu-top .row .dropdown-menu-level2').equivalent(); // вызов скрипта
jQuery('.block-soc .row > div').equivalent(); // вызов скрипта
// ========================================
$('.bxslider').bxSlider({
	pagerCustom: '#bx-pager'
});
// ========================================
$(document).ready(function() {
	$('.minus').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$('.plus').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
});
// ========================================