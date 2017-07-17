/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
 $(document).ready(function(){
 	floatHeader();
	$('.search-focus').bind('click',function(e) {
	      if($(this).hasClass('active')){
	          $('.search-widget').removeClass('open');
	          $(this).removeClass('active');
	      }else{
	          $(this).addClass('active');
	          $('.search-widget').addClass('open');
	          $('.search-widget .input-group input[type="text"]').focus();
	      }
	  });

	  $('.search-widget .button-close').bind('click',function(e){
	      if($('.search-focus').hasClass('active')){
          $('.search-widget').removeClass('open');
          $('.search-focus').removeClass('active');
	      }
	  });

	  //gototop
		$(window).scroll(function() {
		    if ($(window).scrollTop() >= 200) {
		        $('#to_top').fadeIn();
		    } else {
		        $('#to_top').fadeOut();
		    }
		});
		$("#to_top").click(function(){
			$("body,html").animate({scrollTop:0	},"normal");
			$("#page").animate({scrollTop:0	},"normal");
				return!1
		});

});

 function floatHeader(){
	if($(window).width() >= 1024){
	    if( $("body").hasClass("keep-header") ){
	        $("#header").addClass( "headerFixed" );
	        var hideheight =  $("#header").height()+120; 
	        $("#page").css( "padding-top", $("#header").height() );
	        $(window).scroll(function() {
	            var pos = $(window).scrollTop();
	            if( pos >= hideheight ){
	                $(".header-default").addClass("mini-navbar");
	                $(".header1").addClass("mini-navbar");
	            }else {
	               $(".header-default").removeClass("mini-navbar");
	               $(".header1").removeClass("mini-navbar");
	            } 
	        });
	    }
	}else{
		$("#header").removeClass( "headerFixed" );
	}
}