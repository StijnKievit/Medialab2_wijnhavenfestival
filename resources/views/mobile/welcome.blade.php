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
            <p class="blue">

                Wat voor type zeebonk ben jij? Doe de test en vind uit welke gerechten het best bij jou passen!
            </p>
        </div>
        {{--<div class="color_devider_blue">

        </div>--}}
        <div class="fixed_bottom_section_buffer">

        </div>
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