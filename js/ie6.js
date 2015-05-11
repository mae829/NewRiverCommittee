/* 
	Description: Javascript & jQuery coding for Internet Explorer 6
	Author: Miguel Estrada
	Author URI: http://bleucellar.com/
*/

$(function(){
	// ADD FIRST-CHILD AND LAST-CHILD CLASSES TO LISTS FOR CSS STLYING //
    $("li:last-child").addClass("last-child");
    $("li:first-child").addClass("first-child");
	// ADD EVEN AND ODD CLASSES TO LIST ITEMS FUNCTION //
	$("li:odd").addClass('odd');
	$("li:even").addClass('even');
});
