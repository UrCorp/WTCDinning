 function myMap()
{
  myCenter=new google.maps.LatLng(20.684287, -100.434912);
  var mapOptions= {
    center:myCenter,
    zoom:18, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

$('#informes').click(function() {
    $('#general').css({
        'width': '30%'
    });
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    //cuando se hace el scroll down
    $('nav').removeClass('transparent');
    $('nav').removeClass('z-depth-0');
    $('#topnav').removeClass('transparent');
    $('#topnav').addClass('greytop');
    $('#topnav-movil').removeClass('transparent');
    $('#topnav-movil').addClass('greytop');
    $('#undernav').addClass('white');
    $('#undernav-movil').addClass('white');
    $('#logocolor').addClass('w3-hide');
    $('#logobn').removeClass('w3-hide');
    $('#logocolormovil').addClass('w3-hide');
    $('#logobnmovil').removeClass('w3-hide');
    $('#home').removeClass('white-text');
    $('#home').css('color','#444');
    $('#academics').removeClass('white-text');
    $('#academics').css('color','#444');
    $('#consultancy').removeClass('white-text');
    $('#consultancy').css('color','#444');
    $('#discover').removeClass('white-text');
    $('#discover').css('color','#444');
    $('#real').removeClass('white-text');
    $('#real').css('color','#444');
    $('#trade').removeClass('white-text');
    $('#trade').css('color','#444');
    $('#iconmenumovil').removeClass('white-text');
    $('#iconmenumovil').css('color','#444');
  } else {
    //cuado se esta hasta arriba
    $('nav').addClass('transparent');
    $('nav').addClass('z-depth-0');
    $('#logocolor').removeClass('w3-hide');
    $('#logobn').addClass('w3-hide');
    $('#logocolormovil').removeClass('w3-hide');
    $('#logobnmovil').addClass('w3-hide');
    $('#home').addClass('white-text');
    $('#academics').addClass('white-text');
    $('#consultancy').addClass('white-text');
    $('#discover').addClass('white-text');
    $('#real').addClass('white-text');
    $('#trade').addClass('white-text');
    $('#iconmenumovil').addClass('white-text');
  }
});

$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       //alert("bottom!");
       $('#general').css({
           'width': '250px'
       });
       $('#general').css({
             'margin-bottom': '80px'
       });

       $('#general-movil').css({
             'margin-bottom': '80px'
         });
   } else {
     $('#general').css({
         'width': '250px'
     });
     $('#general').css({
           'margin-bottom': '10px'
       });

     $('#general-movil').css({
           'margin-bottom': '10px'
       });

   }
});
