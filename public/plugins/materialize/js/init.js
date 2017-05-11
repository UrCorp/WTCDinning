(function($){
  $(function(){

    $('.parallax').parallax();
     $('.slider').slider();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function() {
    $('.button-collapse').sideNav({
    	closeOnClick: true
    });
    $('select').material_select();
  });

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
