
var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";

	var maxHeight = 0;

$j('.lista').each(function(){
   var thisH = $j(this).height();
   if (thisH > maxHeight) { maxHeight = thisH; }
});

$j('.lista' ).height(maxHeight);});
