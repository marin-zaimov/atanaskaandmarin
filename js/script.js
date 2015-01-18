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
    $('#rsvp-email-div').fadeIn();
  })
  

  $('#rsvp-go').click(function() {
    //TODO(Marin): if email is valid, show rsvp form with populated fields
    $.get( "backend/checkEmail.php?email="+$('#rsvp-input').val(), function( data ) {
      data = jQuery.parseJSON(data);
      if (data.success == true && data.message != "notFound") {
        populateRsvpForm(data.data);
        $("#rsvp-form").slideDown();
        $('#hiddenEmail').val($('#rsvp-input').val());
      }
      else {
        alert("Incorrect Email");
      }
    });
  });

  $('#rsvp-radio-yes').click(function() {
    $('#restOfForm').slideDown();
  });
  $('#rsvpSubmit').click(function() {
    //TODO(Marin):add validation to form
    var formData = gatherFormdata();
    $.post( "backend/rsvpSubmit.php", formData, function( data ) {
      data = jQuery.parseJSON(data);
      if (data.success == true && data.message == true) {
        alert("Saved");
      }
      else {
        alert("Failed to Save");
      }
    });
  });

  function populateRsvpForm(data) {
    console.log(data);
    //TODO(Marin): populate the form here. Check what type of existing rsvp is, and ask to change response.
    // if (data.r)
  }

  function gatherFormdata() {
//TODO(Marin): get all of the inputs here
    var selected = $("input[type='radio'][name='going']:checked");
    if (selected.length > 0) {
        selectedVal = selected.val();
    }
    return {
      email: $('#hiddenEmail').val(),
      going: $("input:radio[name=going]:checked").val()
    };
  }
	
});



