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
    $('#topnav').removeClass('transparent');
    $('#topnav').addClass('greytop');
    $('#undernav').addClass('white');
    $('#logocolor').addClass('w3-hide');
    $('#logobn').removeClass('w3-hide');
    $('#menuscroll').removeClass('withe-text');
    $('#menuscroll').addClass('black-text');
  } else {
    //cuado se esta hasta arriba
    $('nav').addClass('transparent');
    $('#logocolor').removeClass('w3-hide');
    $('#logobn').addClass('w3-hide');
    $('#menuscroll').addClass('black-text');
  }
});