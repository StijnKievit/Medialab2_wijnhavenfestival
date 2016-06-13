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
                    background: url("{{URL::asset("css/".$zeebonk[0]['afbeelding'])}}") #134181;
                    background-size: cover;
                    width: 100%;
                    height: 500px;
                    position: relative;

                }

                @media screen and (min-width: 700px) {
                    .zeebonk_background_img {

                        width: 100%;
                        height: 1000px;


                    }
                }
            </style>
        </div>
        <div class="d-background app_segment no-pad zeebonk_background_img">
        </div>
        <div class="arrow_down_container d-background">
            <img class="arrow-down" src="{{URL::asset('css/img/pijlomlaag-01.png')}}" alt="v">
        </div>
        <div class="app_segment b-background main_content">
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
            @foreach( $horeca as $item)
            <div class="horeca_block">
                <img class="horeca_img" src="{{URL::asset('css/'.$item->afbeelding)}}" alt="">
                <a class="horeca_button" href="{{url('map/'.$item->id)}}">
                    {{$item->naam}}
                </a>
                <img class="horeca_arrow" src="{{URL::asset('css/img/Pijltje-04.png')}}">
            </div>
            @endforeach

        </div>
        <div class="zeebonk_share_bar_buffer"></div>

    </div>
    <a class="zeebonk_redo_test_bar" href="{{url('/question/')}}">
        <div class="share_text">
            <p class="white no-marg">Doe de test opnieuw!</p>
        </div>
    </a>
    <div class="share_popup">
        <p class="text">Deel je type zeebonk!</p>
        <a href="#" class="twitter-button">Twitter</a>
        <a href="#" class="facebook-button">Facebook</a>
    </div>

    <script src="{{URL::asset('js/scroll.js')}}" type="application/javascript" rel="script"></script>

    </body>
@endsection