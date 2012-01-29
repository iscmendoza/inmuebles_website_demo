// JavaScript Document
window.onload = function(){
    var popup;
    var n=1;
    var options = {
        zoom: 12
        , center: new google.maps.LatLng(24.8, -107.4)
        , mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    var map = new google.maps.Map(document.getElementById('map_canvas'), options);
    var limits = new google.maps.LatLngBounds();
 
    var place = new Array();
    place['Helian'] = new google.maps.LatLng(24.8, -107.4);
   
 
    for(var i in place){
        var marker = new google.maps.Marker({
            position: place[i]
            , map: map
            , title: i
            , icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/green/blank.png'
			//, icon: 'http://gmaps-samples.googlecode.com/svn/trunk/markers/green/marker' + n++ + '.png'  'Añadir un marcador numerado
        });
 
        limits.extend(place[i]);
    }
    //map.fitBounds(limits);
};