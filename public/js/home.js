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