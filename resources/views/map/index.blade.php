@extends('layouts.app')

@section('content')
    <body class="r-background">
    <div class="app_container r-background">
        <div class=" r-background app_segment no-pad zeebonk_title_section">
            <div class="zeebonk_bluebar"></div>
            <div class="zeebonk_text_segment_red">
                <h2 class="white bot-marg">Je bent een echte...</h2>
                <h1 class="white size-large no-marg">Handelaar</h1>
            </div>
        </div>
        <div class="app_segment">
            <p class="white basic_white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla non purus tempor, varius odio eget, porta lacus.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
        <div class="app_segment no-pad no-marg google_maps" id="map">

        </div>
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 51.917573, lng: 4.487205},
                    zoom: 16
                });

                if(navigator.geolocation) {
                    browserSupportFlag = true;
                    navigator.geolocation.getCurrentPosition(function(position) {
                        initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                        map.setCenter(initialLocation);
                    }, function() {
                        handleNoGeolocation(browserSupportFlag);
                    });
                }
                // Browser doesn't support Geolocation
                else {
                    browserSupportFlag = false;
                    handleNoGeolocation(browserSupportFlag);
                }

                function handleNoGeolocation(errorFlag) {
                    if (errorFlag == true) {
                        alert("Geolocation service failed." + errorFlag);
                    } else {
                        alert("Your browser doesn't support geolocation. We've placed you in Siberia.");
                    }
                    map.setCenter(initialLocation);
                }
            }

            $('.google_maps').height($('.google_maps').width());
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgHPGfeM6_nc8dCiJDrDIBlYW9jS1NY4s&callback=initMap"
                async defer></script>

    </div>
    <div class="fixed_bottom_section r-background">

    </div>
    </body>
@endsection