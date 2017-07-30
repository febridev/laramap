$(document).ready(function(){
	var myLatLng = new google.maps.LatLng(-5.398892, 105.263990);
	var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 14
        });

	// -5.398892, 105.263990
	// 
	function createMarker(latlng, icn, name) {
		var marker = new google.maps.Marker({
		    position: latlng,
		    icon:icn,
		    map: map,
		    title: name
		});	
	}
	
	var request = {
		location: myLatLng,
    	radius: '1500',
    	type: ['restaurant']
	};

	service = new google.maps.places.PlacesService(map);
	service.nearbySearch(request, callback);

	function callback(results, status) {
		console.log(results);
  		if (status == google.maps.places.PlacesServiceStatus.OK) {
	    for (var i = 0; i < results.length; i++) {
	      var place = results[i];
	      latlng = place.geometry.location;
	      icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
	      name = place.name;
	      createMarker(latlng, icn, name);
	    }
	  }
	}
});