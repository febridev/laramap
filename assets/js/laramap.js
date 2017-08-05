var map;
var myLatLng;
$(document).ready(function(){
	geoLocationInit();
	function geoLocationInit() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(success,fail);
		}else {
			alert("your Browser not Supported");
		}
	}

	function success(position) {
		var latval = position.coords.latitude;
		var lngval = position.coords.longitude;
		myLatLng = new google.maps.LatLng(latval, lngval);
		createMap(myLatLng);
		// nearbySearch(myLatLng,"restaurant")
		searchGirl(latval,lngval);
	}

	function fail() {
		alert("Fail Get Current Position");
	}
	// -5.398892, 105.263990
	

	function createMap(myLatLng) {
		map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 14
        });
        var marker = new google.maps.Marker({
        	position: myLatLng,
		    map: map
        });
	}

	function createMarker(latlng, icn, name) {
		var marker = new google.maps.Marker({
		    position: latlng,
		    icon:icn,
		    map: map,
		    title: name
		});	
	}

	// function nearbySearch(myLatLng, type) {
	// 	var request = {
	// 		location: myLatLng,
	//     	radius: '1500',
	//     	type: [type]
	// 	};

	// 	service = new google.maps.places.PlacesService(map);
	// 	service.nearbySearch(request, callback);

	// 	function callback(results, status) {
	// 		console.log(results);
	//   		if (status == google.maps.places.PlacesServiceStatus.OK) {
	// 	    for (var i = 0; i < results.length; i++) {
	// 	      var place = results[i];
	// 	      latlng = place.geometry.location;
	// 	      icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
	// 	      name = place.name;
	// 	      createMarker(latlng, icn, name);
	// 	    }
	// 	  }
	// 	}
	// }
	
	function searchGirl(lat,lng) {
		$.post('http://laramap.dev:8080/api/searchGirls',{lat:lat,lng:lng},function(match) {
			// console.log(match);
			$.each(match,function(i,val) {
				var glatval = val.lat;
				var glngval = val.lng;
				var gname = val.name;
				var GlatLng = new google.maps.LatLng(glatval, glngval);
				var Gicn = '../assets/icons/girl.png';
				createMarker(GlatLng,Gicn,gname);
			}); 
		});
	}
});