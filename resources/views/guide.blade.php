@include('layouts.header')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
  body {
      font-family: 'Roboto', sans-serif;
      display: flex;
      justify-content: center;
      align-items: flex-start; 
      height: 100vh;
      margin: 0;
      background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
      padding: 20px; 
      box-sizing: border-box;
  }

  .container {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 1000px; 
      width: 100%;
      text-align: center;
      overflow-y: auto; 
      margin-top: 20px; 
  }

  h2 {
      color: #ff6347;
      margin-bottom: 20px;
      font-size: 24px;
  }

  #results-container {
      display: flex;
      flex-wrap: wrap; 
      justify-content: space-between;
      margin-bottom: 20px; 
  }

  .result-item {
      flex: 1 1 45%; 
      margin-bottom: 20px; 
  }

  .result-photo {
      width: 100%;
      height: 400px; 
      object-fit: contain;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  #map {
      width: 100%;
      height: 400px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
  }

  #directions-panel {
      width: 100%;
      height: auto;
      text-align: left;
  }
</style>

    <section class="relative bg-stone-50">
      <div class="bg-sky-400 w-full sm:w-40 h-40 rounded-full absolute top-1 opacity-20 max-sm:right-0 sm:left-56 z-0"></div>
      <div class="bg-emerald-500 w-full sm:w-40 h-24 absolute top-0 -left-0 opacity-20 z-0"></div>
      <div class="bg-purple-600 w-full sm:w-40 h-24 absolute top-40 -left-0 opacity-20 z-0"></div>
      <div class="w-full py-24 relative z-10 backdrop-blur-3xl">
        <div class="w-full pt-20 max-w-7xl mx-auto px-2 lg:px-8">
          <div class="grid grid-cols-12 gap-8 max-w-4xl mx-auto xl:max-w-full">
            <div class="col-span-12 xl:col-span-5">
              <h2 class="font-manrope text-3xl leading-tight text-gray-900 mb-1.5">しおり</h2>
              <p class="text-lg font-normal text-gray-600 mb-8">Don’t miss schedule</p>
              <div class="flex gap-5 flex-col">
              <div id="results-container"></div>
              <div id="directions-panel"></div>
                <!-- <div class="p-6 rounded-xl bg-white">
                  <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center gap-2.5">
                      <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                      <p class="text-base font-medium text-gray-900">9:10</p>
                    </div>
                  </div>
                  <h6 class="text-xl leading-8 font-semibold text-black mb-1">トヨタレンタカー</h6>
                  <p class="text-base font-normal text-gray-600">予約　15,000円</p>
                </div>

                <div class="p-6 rounded-xl bg-white">
                  <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center gap-2.5">
                      <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                      <p class="text-base font-medium text-gray-900">11:30 - 13:00</p>
                    </div>
                  </div>
                  <h6 class="text-xl leading-8 font-semibold text-black mb-1">川上庵本店　石臼ひきの蕎麦が美味しい名店</h6>
                  <p class="text-base font-normal text-gray-600">予約　1,000円〜2,000円</p>
                </div>

                <div class="p-6 rounded-xl bg-white">
                  <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center gap-2.5">
                      <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                      <p class="text-base font-medium text-gray-900">13:00 - 15:00</p>
                    </div>
                  </div>
                  <h6 class="text-xl leading-8 font-semibold text-black mb-1">ジップライン</h6>
                  <p class="text-base font-normal text-gray-600">予約　4,000円</p>
                </div>

                <div class="p-6 rounded-xl bg-white">
                  <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center gap-2.5">
                      <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                      <p class="text-base font-medium text-gray-900">15:30 - 17:00</p>
                    </div>
                  </div>
                  <h6 class="text-xl leading-8 font-semibold text-black mb-1">ハルニレテラス</h6>
                  <p class="text-base font-normal text-gray-600">詳細</p>
                </div>

                <div class="p-6 rounded-xl bg-white">
                  <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center gap-2.5">
                      <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span>
                      <p class="text-base font-medium text-gray-900">17:30</p>
                    </div>
                  </div>
                  <h6 class="text-xl leading-8 font-semibold text-black mb-1">アリオネットホテル</h6>
                  <p class="text-base font-normal text-gray-600">予約　15,000円〜</p>
                </div> -->

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

        // async function fetchResults() {
        //   try {
        //       const response = await fetch('get_results.php');
        //       const data = await response.json();
        //       console.log('Fetched results:', data);
        //       return data;
        //   } catch (error) {
        //       console.error('Error fetching results:', error);
        //       return [];
        //   }
        // }

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