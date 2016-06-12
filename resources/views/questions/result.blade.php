@extends('layouts.app')

@section('content')
    <body class="d-background">
    <div class="app_container b-background">
        <div class=" d-background app_segment no-pad zeebonk_title_section">
            <div class="zeebonk_bluebar"></div>
            <div class="zeebonk_text_segment">
                <h2 class="white no-marg">Je bent een echte...</h2>
                <h1 class="white size-large no-marg">{!! $zeebonk[0]['naam'] !!}</h1>
                  {{--{!!$zeebonk!!}--}}
                  {{--{!! $horeca !!}--}}
            </div>
            <style>
                .zeebonk_background_img {
                    background: url("{{URL::asset("css/".$zeebonk[0]['afbeelding'])}}");
                    background-size: cover;
                    width: 100%;
                    height: 500px;
                    position: relative;
                }
            </style>
        </div>
        <div class="d-background app_segment no-pad zeebonk_background_img">
            <!--<p class="white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla non purus tempor, varius odio eget, porta lacus.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            </p>-->
        </div>
        <div class="arrow_down_container d-background">
            <img class="arrow-down" src="{{URL::asset('css/img/pijlomlaag-01.png')}}" alt="v">
        </div>
        <div class="app_segment b-background">
            <p class=" basic">
                {!! $zeebonk[0]['beschrijving'] !!}
            </p>
            <p class=" basic">
                {!! $zeebonk[0]['beschrijving_eten'] !!}
            </p>
            <p class=" basic">
                Hiervoor kun je terecht bij de onderstaande horeca:
            </p>
        </div>
        <div class="app_segment no-marg no-pad b-background">
            <div class="horeca_block">
                <img class="horeca_img" src="{{URL::asset('css/img/Hangar.png')}}" alt="">
                <a class="horeca_button">
                    Hangar 85
                </a>
                <img class="horeca_arrow" src="{{URL::asset('css/img/Pijltje-04.png')}}">
            </div>
            <div class="horeca_block">
                <img class="horeca_img" src="{{URL::asset('css/img/Hangar.png')}}" alt="">
                <a class="horeca_button">
                    Hangar 85
                </a>
                <img class="horeca_arrow" src="{{URL::asset('css/img/Pijltje-04.png')}}">
            </div>
            <div class="horeca_block">
                <img class="horeca_img" src="{{URL::asset('css/img/Hangar.png')}}" alt="">
                <a class="horeca_button">
                    Hangar 85
                </a>
                <img class="horeca_arrow" src="{{URL::asset('css/img/Pijltje-04.png')}}">

            </div>
        </div>
        <div class="zeebonk_share_bar_buffer"></div>

        <!-- <div class="zeebonk_share_bar">
             <div class="share">
                 <img class="share-icon" src="css/img/share-icon-01.png" alt="share">
             </div>
            <div class="share_text">
                <p class="white no-marg">Deel met je vrienden!</p>
            </div>

         </div>-->
        <!--<div class="color_devider_red">

        </div>

        <ul class="answer_list">
            <li class="answer">Het avontuur</li>
            <li class="answer">De zonsondergang</li>
            <li class="answer">A pirate life for me!</li>
            <li class="answer">Naar mijn dobber staren</li>
            <span class="next"><img class="arrow" src="css/img/Pijltje-04.png"></span>
        </ul>-->

    </div>
    <div class="zeebonk_share_bar">
        <div class="share">
            <img class="share-icon" src="{{URL::asset('css/img/share-icon-01.png')}}" alt="share">
        </div>
        <div class="share_text">
            <p class="white no-marg">Deel met je vrienden!</p>
        </div>

    </div>
    <div class="share_popup">
        <p class="text">Deel je type zeebonk!</p>
        <a href="#" class="twitter-button">Twitter</a>
        <a href="#" class="facebook-button">Facebook</a>
    </div>

    <script>
        var share_bar = $('.zeebonk_share_bar');
        var pop_up = $('.share_popup');
        var app_container = $('.app_container');
        share_bar.click(function (e) {
            pop_up.show();
        });

        app_container.click(function (e) {
            pop_up.hide();
        });

    </script>
    </body>
@endsection