

<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" type="x-icon" href="logo.png">
	<title>Routing</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

	<style>
		body {
			margin: 0;
			padding: 0;
		}
	</style>

</head>

<body>
	<div id="map" style="width:100%; height: 100vh"></div>
	<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
	<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
	
	<script >

		var map = L.map('map').setView([-1.9762441137881854, 30.220161467351378], 11);
		mapLink = "<a href='http://openstreetmap.org'>OpenStreetMap</a>";
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { attribution: 'Leaflet &copy; ' + mapLink + ', contribution', maxZoom: 18 }).addTo(map);

		var taxiIcon = L.icon({
			iconUrl: 'bs.png',
			iconSize: [50, 50]
		})

		var marker = L.marker([-1.9762441137881854, 30.220161467351378], { icon: taxiIcon }).addTo(map);

		map.on('click', function (e) {
			console.log(e)
			var newMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
			L.Routing.control({
				waypoints: [
					L.latLng(-1.9762441137881854, 30.220161467351378),
					L.latLng(e.latlng.lat, e.latlng.lng)
				]
				
			}).on('routesfound', function (e) {
				
				var routes = e.routes;
				console.log(routes);

				e.routes[0].coordinates.forEach(function (coord, index) {
					setTimeout(function () {
						marker.setLatLng([coord.lat, coord.lng]);
						}, 100 * index)
						
					})
					
			}).addTo(map);
			
		}
		
		);
	

	</script>
	

<script>
	
		 // This function will display an alert message when the page loads
		 function showWelcomeMessage() {
			alert("zoom clearly and pin your destination");
		}
	
		// Call the function when the page loads
		window.onload = showWelcomeMessage;
</script>

</body>

</html>