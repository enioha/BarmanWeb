
function Scroll()
{
   var shell = document.getElementById("Shell");
   if(shell)
   shell.scrollTop = 1000000;

}
window.onload = function(){ 
  Scroll();  }


$(document).ready(function(){
	setInterval(function(){
	troca()}, 5000);
	$('.morfar img') .mouseover(function(){
	troca();	
	});

				var id = $('#dialog');
				var winH = $(window).height();
				var winW = $(window).width();		      
				$(id).css('top',  winH/2-$(id).height()/2);
				$(id).css('left', winW/2-$(id).width()/2);	
				$(id).fadeIn(2000); 
	
				$('.window .close').click(function (e) {
					e.preventDefault();		
					$('.window').hide();
				});

});

/*Troca bonecos*/

function troca(){
	if($('.morfar img').attr('src') == "img/1.png"){
		$('.morfar img').attr('src', "img/2.png");
	}
	else{
		$('.morfar img').attr('src', "img/1.png");
	}
 }

			
