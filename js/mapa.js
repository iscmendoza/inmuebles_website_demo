window.onload = function(){
	var popup;
	var n=1;
	var options = {
		zoom: 3
		, center: new google.maps.LatLng(18.2, -66.5)
		, mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById('map_canvas'), options);
	var limits = new google.maps.LatLngBounds();

	var place = new Array();
	place['San Juan'] = new google.maps.LatLng(24, -107);
	place['Fajardo'] = new google.maps.LatLng(18.336, -65.65);
	place['Culebras'] = new google.maps.LatLng(18.315, -65.3);
	place['Vieques'] = new google.maps.LatLng(18.125, -65.44);
	place['Humacao'] = new google.maps.LatLng(18.14, -65.88);

	var image = new google.maps.MarkerImage(
		'http://www.maestrosdelweb.com/images/2011/04/sprite.png'
		, new google.maps.Size(30,43)
		, new google.maps.Point(0,0)
		, new google.maps.Point(15,43)
	);

	var shadow = new google.maps.MarkerImage(
		'http://www.maestrosdelweb.com/images/2011/04/sprite.png'
		, new google.maps.Size(56,43)
		, new google.maps.Point(30,0)
		, new google.maps.Point(15,43)
	);

	var shape = {
		coord: [
			2,0,3,1,5,2,7,3,8,4,10,5,11,6,29,7,29,8,29,9,29,10,29,11,29,12,
			29,13,29,14,28,15,27,16,26,17,25,18,23,19,21,20,20,21,26,22,26,
			23,26,24,26,25,26,26,26,27,25,28,24,29,23,30,21,31,20,32,18,33,
			17,34,15,35,15,36,15,37,15,38,15,39,15,40,15,41,15,42,14,42,14,
			41,13,40,12,39,10,38,8,37,7,36,6,35,5,34,4,33,4,32,4,31,4,30,4,
			29,5,28,10,27,8,26,7,25,5,24,4,23,3,22,3,21,3,20,3,19,3,18,3,17,
			3,16,11,15,9,14,8,13,6,12,4,11,3,10,2,9,1,8,0,7,0,6,0,5,0,4,0,3,
			0,2,0,1,0,0,2,0
		]
		, type: 'poly'
	};

	for(var i in place){
		var marker = new google.maps.Marker({
			position: place[i]
			, map: map
			, title: i
			, icon: image
			, shadow: shadow
			, shape: shape
		});

		limits.extend(place[i]);
	}
	map.fitBounds(limits);
};