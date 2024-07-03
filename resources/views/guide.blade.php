@include('layouts.header')


    <section class="relative bg-emerald-50">
      <div class="w-full py-24 relative z-10 backdrop-blur-3xl">
        <div class="w-full pt-20 max-w-7xl mx-auto px-2 lg:px-8">
          <div class="grid grid-cols-12 gap-8 max-w-4xl mx-auto xl:max-w-full">
            <div class="col-span-12 xl:col-span-5">
              <h2 class="font-manrope text-3xl leading-tight text-gray-900 mb-1.5">しおり</h2>
              <div class="flex gap-5 flex-col">
                {{-- <div id="results-container"></div> --}}
                <div id="directions-panel"></div>

              </div>
            </div>
            <div id="map" class="min-h-screen col-span-12 xl:col-span-7 px-2.5 py-5 sm:p-8 bg-gradient-to-b from-white/25 to-white xl:bg-white rounded-2xl">
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      document.addEventListener('DOMContentLoaded', async () => {
        const resultsContainer = document.getElementById('results-container');
        const mapElement = document.getElementById('map');
        const directionsPanel = document.getElementById('directions-panel');
        let map;
        let directionsService;
        let directionsRenderer;
        let bounds;

        function initMap() {
          map = new google.maps.Map(mapElement, {
            zoom: 2,
            center: { lat: 0, lng: 0 },
          });
          bounds = new google.maps.LatLngBounds();
          directionsService = new google.maps.DirectionsService();
          directionsRenderer = new google.maps.DirectionsRenderer({
            map: map,
            panel: directionsPanel,
          });
        }

        function addMarker(lat, lng, title) {
            const location = { lat: lat, lng: lng };
            const marker = new google.maps.Marker({
                position: location,
                map: map,
                title: title,
            });
            bounds.extend(marker.position);
        }

        function calculateAndDisplayRoute(locations) {
          if (locations.length < 2) return;

          const waypoints = locations.slice(1, -1).map(location => ({
              location: { lat: location.latitude, lng: location.longitude },
              stopover: true,
          }));

          directionsService.route({
              origin: { lat: locations[0].latitude, lng: locations[0].longitude },
              destination: { lat: locations[locations.length - 1].latitude, lng: locations[locations.length - 1].longitude },
              waypoints: waypoints,
              optimizeWaypoints: true,
              travelMode: google.maps.TravelMode.DRIVING,
          }, (response, status) => {
              if (status === google.maps.DirectionsStatus.OK) {
                  directionsRenderer.setDirections(response);
              } else {
                  console.error('Directions request failed due to ' + status);
              }
          });
        }

        function displayResults(results) {
          initMap();
          const locations = results.map(result => {
              const lat = parseFloat(result.latitude);
              const lng = parseFloat(result.longitude);
              addMarker(lat, lng, result.location);
              return { latitude: lat, longitude: lng, location: result.location };
          });

          map.fitBounds(bounds);
          calculateAndDisplayRoute(locations);

          results.forEach(result => {
            const resultDiv = document.createElement('div');
            resultDiv.className = 'result-item';

            const photo = document.createElement('img');
            photo.src = result.url;
            // photo.alt = result.location;
            photo.className = 'result-photo';

            const locationText = document.createElement('p');
            locationText.textContent = result.location;

            resultDiv.appendChild(photo);
            resultDiv.appendChild(locationText);
            resultsContainer.appendChild(resultDiv);
          });
        }

        const results =  JSON.parse('{!! $likeSpots !!}');
        displayResults(results);
      });
    </script>


@include('layouts.footer')