function initializeAutocomplete(id) {
    var element = document.getElementById(id);
    if (element) {
        var autocomplete = new google.maps.places.Autocomplete(element);
        google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
    }
}

function onPlaceChanged() {
    var place = this;//.getPlace();

     console.log(place);  // Uncomment this line to view the full object returned by Google API.

    /*for (var i in place.address_components) {
        var component = place.address_components[i];

        if(input_selectionne=='lieuDepartCarpooling'){
            for (var j in component.types) {  // Some types are ["country", "political"]
                var type_element = document.getElementById(component.types[j]+'_depart');
                if (type_element) {
                    type_element.value = component.long_name;
                }
            }
        }else if(input_selectionne=='lieuDestinationCarpooling'){
            for (var j in component.types) {  // Some types are ["country", "political"]
                var type_element = document.getElementById(component.types[j]+'_destination');
                if (type_element) {
                    type_element.value = component.long_name;
                }
            }
        }else if(input_selectionne=='placeAccommodation'){
            for (var j in component.types) {  // Some types are ["country", "political"]
                var type_element = document.getElementById(component.types[j]+'_accommodation');
                if (type_element) {
                    type_element.value = component.long_name;
                }
            }
        }else if(input_selectionne=='placeLocation'){
            for (var j in component.types) {  // Some types are ["country", "political"]
                var type_element = document.getElementById(component.types[j]+'_location');
                if (type_element) {
                    type_element.value = component.long_name;
                }
            }
        }
    }*/
}

google.maps.event.addDomListener(window, 'load', function() {
    initializeAutocomplete('place_house');
    initializeAutocomplete('departure_place');
    initializeAutocomplete('arrival_place');
    initializeAutocomplete('personne_adress');
    initializeAutocomplete('departure_place_search');
    initializeAutocomplete('arrival_place_search');
});