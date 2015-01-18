$(document).ready(function() {

	/**
	* Scroll animation if click navbar menu
	**/
	$('a.navbar-brand, ul.navbar-nav > li > a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

	/**
	* Navbar collapse close if clicking menu on mobile
	**/
    if($(window).width() < 767){
    	$('ul.navbar-nav > li > a').on('click', function(){
    		$('.navbar-collapse').removeClass('in');
    		$('.navbar-collapse').attr('style', 'height: 1');
    	});
    }

	/**
	* Call tooltip & carousel bootstrap js
	**/
    $('[rel="tooltip"]').tooltip();
    $('#wedding-photo').carousel();

	/**
	* Call colorbox on wedding photo gallery
	**/
    if($(window).width() > 767){
		$(".gallery-images").colorbox({rel:'gallery-images', width:'auto', height: '85%'});
	}else{
		$(".gallery-images").colorbox({rel:'gallery-images', width:'85%', height: 'auto'});
	}

	/**
	* Display map in contact section using gmap 3
	**/
	$("#maps").gmap3({
		 map:{
		    options:{
		      center:[42.6660438,24.9298189],
		      zoom: 13,
			  scrollwheel: false
		    }
 		 },
 		 marker:{
 		 	values : [
 		 		// {latLng:[42.6860438,24.9298189],data:'<img src="https://dl.dropboxusercontent.com/u/29545616/Preview/ditinggalrabi.png">',  options:{icon: 'https://dl.dropboxusercontent.com/u/29545616/Preview/location.png'}}
        {latLng:[42.6860438,24.9298189],data:'Hija Rai, Balkan Mountains, Bulgaria',  options:{}}
 		 	],
 		 	events : {
 		 	 click: function(marker, event, context){
		        var map = $(this).gmap3("get"),
		          infowindow = $(this).gmap3({get:{name:"infowindow"}});
		        if (infowindow){
		          infowindow.open(map, marker);
		          infowindow.setContent(context.data);
		        } else {
		          $(this).gmap3({
		            infowindow:{
		              anchor:marker, 
		              options:{content: context.data}
		            }
		          });
		        }
		      }
 		 }
 		 }

	});

  $('#rsvp-span').click(function() {
    $('#rsvp-email-div').toggle();
  })
  

  $('#rsvp-go').click(function() {
    //TODO(Marin): if email is valid, show rsvp form with populated fields
    $("#rsvp-form").slideDown();
  })
	
});
