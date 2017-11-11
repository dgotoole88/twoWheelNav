function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: {
          lat: -24.345,
          lng: 134.46
      } // Australia.
  });

  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer({
      draggable: true,
      map: map,
      panel: document.getElementById('right-panel')
  });

  directionsDisplay.addListener('directions_changed', function() {
      computeTotalDistance(directionsDisplay.getDirections());
  });

  var start = document.getElementById('startPoint');
  var end = document.getElementById('endPoint');

  displayRoute(start.value, end.value, directionsService,
      directionsDisplay);
}

function displayRoute(origin, destination, service, display) {
  service.route({
      origin: origin,
      destination: destination,
      travelMode: 'DRIVING',
      avoidTolls: true
  }, function(response, status) {
      if (status === 'OK') {
          display.setDirections(response);
          document.getElementById('save').style.display = 'block';
          console.log(document.getElementById('startPoint').value);
          console.log(document.getElementById('endPoint').value);
      }
  });
}

function computeTotalDistance(result) {
  var total = 0;
  var myroute = result.routes[0];
  for (var i = 0; i < myroute.legs.length; i++) {
      total += myroute.legs[i].distance.value;
  }
  total = total / 1000;
  document.getElementById('total').innerHTML = total + ' km';
}