@extends('layouts.app')

@section('content')
    <body class="">
    <div class="app_container">
        <div class=" r-background app_segment no-pad zeebonk_title_section">
            <div class="zeebonk_bluebar"></div>
            <div class="zeebonk_text_segment_red horeca-title">

                <h1 class="white size-medium no-marg"> {!! $horeca[0]['naam'] !!}</h1>
                {{--{!! $zeebonk !!}--}}
                {{--{!! $horeca !!}--}}
                {{--{!! $gerechten !!}--}}
            </div>
        </div>
        <div class="app_segment no-pad r-background">
            <img class="img-responsive" src="{{URL::asset($horeca[0]['afbeelding'])}}" alt="horecaImage">
        </div>
        <div class="app_segment r-background">
            <p class="white basic_white">
                {!! $horeca[0]['beschrijving'] !!}
            </p>
        </div>
        <div class="app_segment no-pad no-marg google_maps" id="map">

        </div>
        <script>
            var map;
            function initMap() {

                var festival_location = {lat: 51.917573, lng: 4.487205};

                var horeca_lat = "{!! $horeca[0]['location_lang'] !!}";
                var horeca_long = "{!! $horeca[0]['location_long'] !!}";
                var horeca_location = {lat: Number(horeca_lat), lng: Number(horeca_long)};


                /*for test purposes map is centerd on horeca location (set to festival location on release) */
                map = new google.maps.Map(document.getElementById('map'), {
                    center: festival_location,
                    zoom: 16,
                    disableDefaultUI: true,
                    draggable: false,
                    scrollwheel: false

                });

                /*add location marker*/
                var marker = new google.maps.Marker({
                    position: horeca_location,
                    map: map,
                    title: 'Horeca!',
                    icon: "{{URL::asset('css/img/Rode-vlag.png')}}",
                    animation: google.maps.Animation.DROP


                });


            }

            /*   $('.google_maps').height($('.google_maps').width());*/
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgHPGfeM6_nc8dCiJDrDIBlYW9jS1NY4s&callback=initMap"
                async defer></script>



        {{--<div class="app_segment no-pad b-background">--}}
            {{--<div class="app_segment">--}}
                {{--<h2 class="title size-medium d-blue no-marg">Eten & Drinken</h2>--}}
            {{--</div>--}}
            {{--<div class="Food_items">--}}

            {{--</div>--}}
        {{--</div>--}}

    </div>
    <div class="fixed_bottom_section_buffer">

    </div>
    <div class="fixed_bottom_section r-background">
        {{--href = zeebonkscherm met juiste id, deze moet dus worden onthouden!--}}
        <a class="back" href="{{URL::previous()}}">
            <img src="{{URL::asset('css/img/pijl-terug.png')}}" alt="<" class="arrow-back">
        </a>

    </div>
    {{--<script>--}}
        {{--$.each({!! $gerechten !!}, function (i, val) {--}}
            {{--console.log(val[0]);--}}
            {{--var gerechtElement = '<div class="beverages_container"> <h3 class="beverage_title">' + val[0]['naam'] + '</h3><p class="beverage_text">' + val[0]["beschrijving"] + '</p></div>';--}}
            {{--$('.Food_items').append(gerechtElement);--}}
        {{--});--}}
        {{--$('.beverages_container').first().addClass('first');--}}
    {{--</script>--}}

    <script>
        var fixed_bar = $('.fixed_bottom_section');
        var light_section = $('.Food_items');

        var blue = "#97daeb";
        var red = "#a31627";

        $(window).scroll(function (event) {
            if(light_section.position().top <  ( $(window).height() + getTopScroll() ))
            {
                console.log('change in blue!');
                fixed_bar.css("background-color", blue);
            }
            else {
                fixed_bar.css("background-color", red);
            }
        });

        function getTopScroll(){
            return $(window).scrollTop();
        }

    </script>
    </body>
@endsection