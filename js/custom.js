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
jQuery('.block-soc .row > div').equivalent(); // вызов скрипта