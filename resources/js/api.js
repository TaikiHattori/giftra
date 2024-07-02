document.addEventListener('DOMContentLoaded', () => {
    const locationInput = document.getElementById('location');



    // Initialize Google Maps Places Autocomplete
    let autocomplete = new google.maps.places.Autocomplete(locationInput);

    autocomplete.addListener('place_changed', () => {
        let place = autocomplete.getPlace();
        if (place.geometry) {
            latitudeInput.value = place.geometry.location.lat();
            longitudeInput.value = place.geometry.location.lng();
        }
    });

});