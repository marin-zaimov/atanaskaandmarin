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
		      zoom: 12,
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








  if ($('#jump_to_form').length != 0) {
    $('#jump_to_form').trigger('click');
  }

  $('#rsvp-span').click(function() {
    $('#rsvp-email-div').fadeIn();
  })
  

  $('#rsvp-go').click(function() {
    //TODO(Marin): if email is valid, show rsvp form with populated fields
    $.get( "backend/checkEmail.php?email="+$('#rsvp-input').val(), function( data ) {
      data = jQuery.parseJSON(data);
      if (data.success == true && data.message != "notFound") {
        window.location.href = "?email=" + $('#rsvp-input').val();
      }
      else {
        alert("This email is not on our invite list. Please email wedding@atanaskaandmarin.com for help.");
      }
    });
  });

  $('#rsvp-radio-yes').click(function() {
    $('.restOfForm').slideDown("fast");
  });
  $('#rsvp-radio-no').click(function() {
    $('.restOfForm').slideUp("fast");
  });

  $('#rsvpSubmit').click(function() {
    clearMessages();
    var formData = gatherFormData();
    console.log(formData);
    if (formData == null) {
      fieldRequiredMessage("Please fill out all fields in the form before submit");
      return;
    }
    $.post( "backend/rsvpSubmit.php", formData, function( data ) {
      data = jQuery.parseJSON(data);
      if (data.success == true && data.message == true) {
        savedMessage();
      }
      else {
        saveFailMessage();
      }
    });
  });


  function gatherFormData() {

    var selected = $("input[type='radio'][name='rsvp']:checked");
    
    if (selected.length > 0) {
        selectedVal = selected.val();
    }

    var guests = {};
    if ($('.rsvp-guest').length > 0) {
      $('.rsvp-guest').each(function(index) {
        var id = $(this).data('id');
        var checked = $(this).is(':checked');
        guests[id] = checked;
      })
    }
    if (selectedVal == "Y") {

      if (isEmpty($('#hiddenEmail').val())
      || isEmpty($("input:radio[name=rsvp]:checked").val())
      || ($("input:radio[name=bachelorPartyRsvp]").length > 0 && isEmpty($("input:radio[name=bachelorPartyRsvp]:checked").val()))
      || ($("input[name=transport]").length > 0 && isEmpty($("input[name=transport]").val()))
      || ($("input[name=arrivalDay]").length > 0 && isEmpty($("input[name=arrivalDay]").val()))
      || ($("input:radio[name=sleepLocation]:checked").length > 0 && isEmpty($("input:radio[name=sleepLocation]:checked").val()))
      || ($("input[name=allergies]").length > 0 && isEmpty($("input[name=allergies]").val()))
      || ($("input:radio[name=vegetarian]:checked").length > 0 && isEmpty($("input:radio[name=vegetarian]:checked").val()))
      ) {
        return null;
      }
      return {
        email : $('#hiddenEmail').val(),
        rsvp : $("input:radio[name=rsvp]:checked").val(),
        bachelorPartyRsvp : $("input:radio[name=bachelorPartyRsvp]:checked").val(),
        transport : $("input[name=transport]").val(),
        arrivalDay : $("input[name=arrivalDay]").val(),
        sleepLocation : $("input:radio[name=sleepLocation]:checked").val(),
        allergies : $("input[name=allergies]").val(),
        vegetarian : $("input:radio[name=vegetarian]:checked").val(),
        meetAtanaska : $("textarea[name=meetAtanaska]").val(),
        meetMarin : $("textarea[name=meetMarin]").val(),
        guests : guests
      };
    }

    if ((isEmpty($('#hiddenEmail').val()) || isEmpty($("input:radio[name=rsvp]:checked").val()))) {
      return null;
    }
    return {
      email: $('#hiddenEmail').val(),
      rsvp: $("input:radio[name=rsvp]:checked").val()
    };
  }

  function isEmpty(input) {
    console.log(input);
    if (input == "" || input == null || input == undefined) {
      return true;
    }
    return false;
  }

  function clearMessages() {
    $('#fieldRequiredMessage').hide();
    $('#savedMessage').hide();
  }
  function fieldRequiredMessage(message) {
    $('#fieldRequiredMessage').show();
  }

  function savedMessage() {
    $('#savedMessage').show();
  }

  function saveFailMessage() {
    $('#saveFailMessage').show();
  }

	
});



