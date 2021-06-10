/*
                        _ \                 | |            
  _ \  _` |  __| |   | |   | _` |  __| _` | | |  _` |\ \  /
  __/ (   |\__ \ |   | ___/ (   | |   (   | | | (   | `  < 
\___|\__,_|____/\__, |_|   \__,_|_|  \__,_|_|_|\__,_| _/\_\
                ____/                       v.0.2 15062011   
														
a jQuery parallax plugin by roXon
define an element to parallax Ex:
$('#myelement').parallax();
Fill your DIV with DIVS .layer 
and set the layers 'distance' Ex:
$('#myelement').parallax({distance: 20 });
To add movement responsiveness (Default: 1) Ex:
$('#myelement').parallax({ sensitivity: 12 });
Ex with both param. : $('#myelement').parallax({ distance: 20, sensitivity: 12 });

*///#################################///*


(function( $ ){
	$.fn.parallax = function(options) {	
		var defaults = {
			distance : 2,
			sensitivity : 12
		};
		var opt = $.extend ({}, defaults, options);
				
	return this.each(function() { 
		var $this = $(this);
		
	 /**/dblDist = opt.distance * 1; // for the width
		
		var parW = $this.width();
		var	parH = $this.height();
			
		$this.children('.layer').each(function(){
			var layer = $(this);		

			layerDist	= dblDist * ( layer.index() + 1);
			layerDistHalf	= opt.distance * ( layer.index() + 1);
			
			layer.width ( '+=' + layerDist );
			layer.height( '+=' + layerDist );
			layer.animate({left:'-' + layerDistHalf }, 0); 
			//layer.animate({top: '-' + layerDistHalf }, 0); 
			
			wDiff1 = $this.width();
			hDiff1 = $this.height(); 
			wDiff2 = layer.width();
			hDiff2 = layer.height();			
			var wDiff = ((wDiff2/wDiff1)-1);
			var hDiff = ((hDiff2/hDiff1)-1);

			$this.mousemove(function(mousEv){
				parOffset = $this.offset();
				mouseX = (mousEv.pageX - parOffset.left);
				mouseY = (mousEv.pageY - parOffset.top);				
			});
			
			var parWhalf = parW/2,
				parHhalf = parH/2;
			var mouseX = parWhalf,
				mouseY = parHhalf;
			var posX = parWhalf,
				posY = parHhalf;

			setInterval(function(){
				posX += (mouseX - posX) / opt.sensitivity;
				posY += (mouseY - posY) / opt.sensitivity;
				layer.css({
					left:'-' + posX * wDiff +'px'
					//top: '-' + posY * hDiff +'px'
				});
			}, 12);

		});
	
	});	
	
  };
})( jQuery );
