@extends('layouts.app')

@section('content')
    <div class="app_container">
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
        {{--<div class="color_devider_blue">

        </div>--}}
        <div class="fixed_bottom_section r-background">
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
    </div>
@endsection