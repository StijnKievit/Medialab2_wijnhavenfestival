@extends('layouts.app')

@section('content')
    <body class="d-background">
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
                     style="display: block; width: 60%; height: auto; margin-left: 20%">
                <div class="app_segment">
                    <a href="{{url('/question')}}" class="redo-test-btn">Doe de test opnieuw</a>
                </div>
            </div>
            <div class="grid-1-2 no-pad b-background" id="sub_content" style="overflow-y: hidden; position: relative">
                <div class="padding_bar d-background">

                </div>
                <div style="position: relative; height: 100%">
                    <div class="sub_content_content_box" style="overflow-y: scroll; position: absolute; top: 0; bottom: 0; left: 0; right: -17px; ">
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
                        <div class="app_segment no-marg b-background row">
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
                        <div class="buffer" style="height: 40px"></div>
                    </div>

                </div>




            </div>
        </div>
    </div>
    <script type="application/javascript">

        var padding_bar = $(".padding_bar");
        var align_element = $(".zeebonk_bluebar");

        console.log(align_element.position());

        padding_bar.height(align_element.position().top);

    </script>

  <script type="application/javascript">
      var main_content = $("#main_content");
      var sub_content = $("#sub_content");

      function adjustSubContent(){
          sub_content.height(main_content.height());

      }
      function setMainContent(main_content){
          main_content = $(main_content);
      }
      function setSubContent(sub_content){
          sub_content = $(sub_content);
      }
      function scrollable(bool){

          if(bool){
              sub_content.css("overflow", "scroll");
          }
          else {
              sub_content.css("overflow", "auto");
          }
      }

      $(document).ready(function(){

          setMainContent("#main_content");
          setSubContent("#sub_content");
          adjustSubContent();

      });

      $( window ).resize(function() {
          adjustSubContent();
      });
  </script>

    </body>
@endsection