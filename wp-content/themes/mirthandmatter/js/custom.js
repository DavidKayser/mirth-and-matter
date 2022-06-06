$(document).ready(function(){
	
	$('#site-navigation .nav-icon3').click(function(){
		$(this).toggleClass('open');
		$('#site-navigation .menu-main-menu-container').slideToggle(400);
		$('body').toggleClass('overflow');
	});
	
	
	$('#site-navigation .menu-main-menu-container a').click(function(){
		if($('#site-navigation .nav-icon3').hasClass('open')){
			$('#site-navigation .nav-icon3').toggleClass('open');
			$('#site-navigation .menu-menu-1-container').slideToggle(200);
			$('body').toggleClass('overflow');
		}else{}
	});
	
	$("a").on('click', function(event) {
	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();
	
	      // Store hash
	      var hash = this.hash;
	
	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    } // End if
	});
  
	$(window).on('scroll', function() {
	    var header = $("#scroll-navigation");
	    var headerHeight = $("#wpadminbar").height();
	    if ($(this).scrollTop() > 200) {
	        $(header).addClass("sticky-header");
	        $(header).css("margin-top", headerHeight);  
	        if ($(window).width() > 900){
		        $('#masthead').css({"margin-top": "-70px"}); 
		    }
		    else{
			    $('#masthead').css({"margin-top": "0"}); 
		    }
	        
	    }
	    else if ($('#scroll-navigation .nav-icon3').hasClass('open')) {
			    
		}
	    else{
		    $(header).removeClass("sticky-header");
			$('#masthead').css({"margin-top": "0"}); 
	    }
	    
	    
	});
	
	$(window).on('resize', function(){
		var $siteNav = $('#site-navigation .menu-menu-1-container');
		$('.player-bio').css({'height': "auto" });
		$('.player-mirth').css({'height': "auto" });
		playerHeight();
		
        if ($(window).width() > 580){
            $siteNav.show();
        }
        else{
	        $siteNav.hide();
        }
    });
    
    
    $("input[type=checkbox]").change(function(){
	    if ( $(this).is(":checked") ){
		    event.preventDefault();
			var el = $(this);
           	el.prop('disabled', true);
           	setTimeout(function(){el.prop('disabled', false); }, 900);		
		    $(this).closest(".player-text-wrap").find(".player-bio").hide("slide", { direction: "up"  },300);
		    $(this).closest(".player-text-wrap").find(".player-mirth").delay(400).show("slide", { direction: "up"  }, 300);
		    $(this).parent('.switch').css({"background": "#b180c3"});
		    $(this).parent('.switch').siblings('.switch-matter').css({"color": "#7a7a7a"});
		    $(this).parent('.switch').siblings('.switch-mirth').css({"color": "black"}); 
		    playerHeight('.player-mirth');
	    }
	    else{
		    event.preventDefault();
			var el = $(this);
           	el.prop('disabled', true);
          	setTimeout(function(){el.prop('disabled', false); }, 900);
		    $(this).closest(".player-text-wrap").find(".player-mirth").hide("slide", { direction: "up"  },300);
		    $(this).closest(".player-text-wrap").find(".player-bio").delay(400).show("slide", { direction: "up"  }, 300);
		    $(this).parent('.switch').css({"background": "#a1cbb2"});
			$(this).parent('.switch').siblings('.switch-mirth').css({"color": "#7a7a7a"});
		    $(this).parent('.switch').siblings('.switch-matter').css({"color": "black"});
		    playerHeight('.player-bio');
	    }
	});
	
	
    
    function playerHeight(selector) {
		$('.mirth-matter-wrap').each(function(){
			var bioHeight = $(this).children('.player-bio').outerHeight();
			var mirthHeight = $(this).children('.player-mirth').outerHeight();
			if (bioHeight >= mirthHeight){
				$(this).children('.player-bio').css({'height': bioHeight });
				$(this).children('.player-mirth').css({'height': bioHeight });
				$(this).css({'height': bioHeight });
			}
			else{
				$(this).children('.player-bio').css({'height': mirthHeight });
				$(this).children('.player-mirth').css({'height': mirthHeight });
				$(this).css({'height': mirthHeight });
			}
			
			
 		});
	}
	
	playerHeight('.player-bio');
    

 

 
 

});


