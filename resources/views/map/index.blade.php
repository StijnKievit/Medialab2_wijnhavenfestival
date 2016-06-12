@extends('layouts.app')

@section('content')
    <body class="r-background">
    <div class="app_container r-background">
        <div class=" r-background app_segment no-pad zeebonk_title_section">
            <div class="zeebonk_bluebar"></div>
            <div class="zeebonk_text_segment_red">
                <h2 class="white bot-marg"></h2>
                <h1 class="white size-large no-marg"> {!! $horeca[0]['naam'] !!}</h1>
                {{--{!! $zeebonk !!}--}}
                {{--{!! $horeca !!}--}}
            </div>
        </div>
        <div class="app_segment">
            <p class="white basic_white">
                {!! $horeca[0]['beschrijving'] !!}
            </p>
        </div>
        <div class="app_segment no-pad no-marg google_maps" id="map">

        </div>
        <script>
            var map;
            function initMap() {

                var festival_location =   {lat: 51.917573, lng: 4.487205};

                var horeca_lat = "{!! $horeca[0]['location_lang'] !!}";
                var horeca_long = "{!! $horeca[0]['location_long'] !!}";
                var horeca_location = {lat: Number(horeca_lat) , lng: Number(horeca_long) };


                /*for test purposes map is centerd on horeca location (set to festival location on release) */
                map = new google.maps.Map(document.getElementById('map'), {
                    center: horeca_location,
                    zoom: 16,
                    disableDefaultUI: true

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

                /*add location marker*/
                var marker = new google.maps.Marker({
                    position: horeca_location,
                    map: map,
                    title: 'Hello World!'
                });


                function handleNoGeolocation(errorFlag) {
                    if (errorFlag == true) {
                        console.log("Geolocation service failed." + errorFlag);
                    } else {
                        console.log("Your browser doesn't support geolocation. We've placed you in Siberia.");
                    }
                    map.setCenter(initialLocation);
                }
            }

         /*   $('.google_maps').height($('.google_maps').width());*/
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgHPGfeM6_nc8dCiJDrDIBlYW9jS1NY4s&callback=initMap"
                async defer></script>

    </div>
    <div class="fixed_bottom_section_buffer">

    </div>
    <div class="fixed_bottom_section r-background">
        {{--href = zeebonkscherm met juiste id, deze moet dus worden onthouden!--}}
        <a class="back" href="{{URL::previous()}}">
             <img src="{{URL::asset('css/img/pijl-terug.png')}}" alt="<" class="arrow-back" >
        </a>

    </div>
    </body>
@endsection