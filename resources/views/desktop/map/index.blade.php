@extends('layouts.app')

@section('content')
    <body>
    <div class="app_container b-background">
        <div class="row">
            <div class="grid-1-2" id="main_content">
                <div class=" r-background app_segment no-pad zeebonk_title_section">
                    <div class="zeebonk_bluebar"></div>
                    <div class="zeebonk_text_segment_red horeca-title">

                        <h1 class="white size-large no-marg center-text"> {!! $horeca[0]['naam'] !!}</h1>
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
                <div class=" r-background">
                    <a class="back" href="{{URL::previous()}}">
                        <img src="{{URL::asset('css/img/pijl-terug.png')}}" alt="<" class="arrow-back">
                    </a>

                </div>
            </div>
            <div class="grid-1-2 no-pad" id="sub_content" style="overflow-y: auto">
                <div class="app_segment no-pad no-marg google_maps" id="map">

                </div>
                <script>
                    var map;
                    function initMap() {

                        var festival_location = {lat: 51.917573, lng: 4.487205};

                        var horeca_lat = "{!! $horeca[0]['location_lang'] !!}";
                        var horeca_long = "{!! $horeca[0]['location_long'] !!}";
//                        var horeca_lat = "51.917263";
//                        var horeca_long = "4.487115";
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
                            title: '{!! $horeca[0]['naam'] !!}}',
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

                        {{--<div class="Food_items" style="overflow-y: scroll;">--}}

                        {{--</div>--}}


                {{--</div>--}}

            </div>

            {{--<script>--}}
                {{--$.each( {!!$gerechten !!}, function (i, val) {--}}
                    {{--console.log(val[0]);--}}
                    {{--var gerechtElement = '<div class="beverages_container"> <h3 class="beverage_title">' + val[0]['naam'] + '</h3><p class="beverage_text">' + val[0]["beschrijving"] + '</p></div>';--}}
                    {{--$('.Food_items').append(gerechtElement);--}}
                {{--});--}}
                {{--$('.beverages_container').first().addClass('first');--}}
            {{--</script>--}}

        </div>
    </div>

    <script type="application/javascript">

        $(document).ready(function(){
            $("#map").height($("#main_content").height());
        });

    </script>

    <script type="application/javascript">

        var padding_bar = $(".padding_bar");
        var align_element = $(".zeebonk_bluebar");

        console.log(align_element.position());

        padding_bar.height(align_element.position().top);

    </script>

    </body>
@endsection