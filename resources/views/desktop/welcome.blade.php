@extends('layouts.app')

@section('content')
    <div class="app_container">
        <div class="row">
            <div class="grid-1-2" id="main_content">
                <div class="app_segment">
                    <!--image-->
                    <img class="app_logo" src="css/img/Logo.png" alt="logo app">
                </div>
                <div class="app_segment">
                    <!--content-->
                    <span>Wijnhaven festival 2016</span>
                    <p class="blue extra-space">

                        Ontdek de zeebonk in jezelf en geniet van de gerechten die bij jou passen.
                    </p>
                </div>
                <div class="desktop_button_container r-background">
                    <!--button-->
                    <a class="main-btn" href="{{url('/question')}}">

                    <span class="btn-icon">
                        <img class="arrow" src="css/img/Pijltje-04.png" alt=">">
                    </span>
                <span class="btn-text">
                        Doe de test
                    </span>
                    </a>
                </div>

                <div class="google_maps" id="map">

                </div>

            </div>
            <div class="grid-1-2 d-background" id="sub_content">
                <div class="horeca_list">
                    <div class="app_segment">
                        <h2 class="white size-medium">Deelneemende horeca</h2>
                    </div>

                    <div class="app_segment d-background">
                        @foreach($horeca as $item)
                            <div class="horeca_block">
                                <img class="horeca_img" src="{{$item->afbeelding}}" alt="">
                                <a class="horeca_button" href="{{url('/map/' . $item->id)}}">
                                    {{$item->naam}}

                                    <img class="horeca_arrow desktop_horeca_arrow" src="css/img/Pijltje-04.png">
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>

    </div>

    <script>
        var map;
        function initMap() {

            var festival_location = {lat: 51.917573, lng: 4.487205};


            /*for test purposes map is centerd on horeca location (set to festival location on release) */
            map = new google.maps.Map(document.getElementById('map'), {
                center: festival_location,
                zoom: 16,
                disableDefaultUI: true,
                scaleControl: false,
                draggable: false,
                scrollwheel: false

            });

            /*add location marker*/


        }

        /*   $('.google_maps').height($('.google_maps').width());*/
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgHPGfeM6_nc8dCiJDrDIBlYW9jS1NY4s&callback=initMap"
            async defer>

    </script>

    <script>
        var main_content = $("#main_content");
        var sub_content = $("#sub_content");

        function adjustSubContent() {
            sub_content.height(main_content.height());

        }

        $(document).ready(function () {
            adjustSubContent();
        });
    </script>


    <?php use Jenssegers\Agent\Agent;
    $agent = new Agent();
    if ($agent->isDesktop()) {

    }
    ?>
@endsection