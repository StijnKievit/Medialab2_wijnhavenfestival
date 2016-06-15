@extends('layouts.app')

@section('content')
    <body>
    <div class="app_container d-background">
        <div class="row">
            <div class="grid-1-2" id="main_content">
                <div class=" d-background app_segment no-pad zeebonk_title_section">
                    <div class="zeebonk_bluebar"></div>
                    <div class="zeebonk_text_segment">
                        <h2 class="white no-marg center-text">Je bent een echte...</h2>
                        <h1 class="white size-medium no-marg center-text">{!! $zeebonk[0]['naam'] !!}</h1>
                    </div>

                </div>
                <img class="zeebonk_img" src="{{URL::asset("css/".$zeebonk[0]['afbeelding'])}}"
                     style="display: block; width: 100%; height: auto">
                <div class="app_segment">
                    <a href="{{url('/question')}}" class="redo-test-btn">Doe de test opnieuw</a>
                </div>
            </div>
            <div class="grid-1-2 no-pad" id="sub_content">
                <div class="padding_bar d-background">

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
                <div class="app_segment no-marg b-background">
                    @foreach($horeca as $item)
                        <div class="horeca_block">
                            <img class="horeca_img" src="{{URL::asset($item->afbeelding)}}" alt="">
                            <a class="horeca_button" href="{{url('map/'.$item->id)}}">
                                {{$item->naam}}

                            <img class="horeca_arrow desktop_horeca_arrow" src="{{URL::asset('css/img/Pijltje-04.png')}}">
                                </a>
                        </div>
                    @endforeach
                    {{--<div class="horeca_block">--}}
                        {{--<img class="horeca_img" src="http://jouzeebonk.dev/img/Hanger.png" alt="">--}}
                        {{--<a class="horeca_button" href="http://jouzeebonk.dev/map/2">--}}
                            {{--Hangar 85--}}
                        {{--</a>--}}
                        {{--<img class="horeca_arrow" src="http://jouzeebonk.dev/css/img/Pijltje-04.png">--}}
                    {{--</div>--}}

                </div>


            </div>
        </div>
    </div>
    <script type="application/javascript">
    </script>

    <script type="application/javascript">

        var padding_bar = $(".padding_bar");
        var align_element = $(".zeebonk_bluebar");

        console.log(align_element.position());

        padding_bar.height(align_element.position().top);

    </script>

    </body>
@endsection