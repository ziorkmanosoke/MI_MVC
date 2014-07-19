/*Fonction de google qui va generer le google map et localiser ile maurice*/
//var myCenter=new google.maps.LatLng(-20.220692690105, 57.620749127807564);
//var myCenter=new google.maps.LatLng(45.5086699, -73.55399249999999);
var myCenter=new google.maps.LatLng(45.55024321818596, -73.54343800629046);
function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

