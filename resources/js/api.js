document.addEventListener('DOMContentLoaded', () => {
    const locationInput = document.getElementById('location');

    // Btn追加はてぃ
    const notLikeBtn = document.getElementById('not-like-btn');
    const likeBtn = document.getElementById('like-btn');


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

// 追加はてぃ
notLikeBtn.addEventListener('click', () => handleVote('not_like'));
likeBtn.addEventListener('click', () => handleVote('like'));