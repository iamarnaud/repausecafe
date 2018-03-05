var map;
var locations = [
    //tourisme
    {
        lat: 45.900232,
        lng: 6.131381
    },
    {
        lat: 45.899250,
        lng: 6.131417
    },
    {
        lat: 45.898592,
        lng: 6.127409
    },
    {
        lat: 45.899201,
        lng: 6.130884
    },
    {
        lat: 45.899339,
        lng: 6.132406
    },

    //restaurant
    {
        lat: 45.901522,
        lng: 6.122649
    }
]
// on crée des varibles pour récupérer les données stockées dans le session storage
var geoLat=sessionStorage.getItem('latitude');
var geoLong=sessionStorage.getItem('longitude');
var geoUser=sessionStorage.getItem('user');

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: geoLat,
            lng: geoLong
        },
        zoom: 10,
        mapTypeId: "roadmap",
    });

    // Create an array of alphabetical characters used to label the markers.
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Add some markers to the map.
    // Note: The code uses the JavaScript Array.prototype.map() method to
    // create an array of markers based on a given "locations" array.
    // The map() method here has nothing to do with the Google Maps API.
    var markers = locations.map(function (location, i) {
        return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers, {
        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
    });

    var infoWindow = new google.maps.InfoWindow({
        map: map
    });
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('T lâ mon '+geoUser+'!');
                map.setCenter(pos);
            },
            function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
    }

}