/* 
	Description: Javascript & jQuery functions
	Author: Miguel Estrada
	Author URI: http://bleucellar.com/
*/
$(function(){
	$('#slider').bxSlider({
		auto: true,
		controls: false,
		pause: 5000,
		speed: 1000,
		pager:true,
		pagerSelector:'.bx_pager'
	});	
	$('.slider').bxSlider({
		mode: 'fade',
		auto: true,
		controls: false
	});
});