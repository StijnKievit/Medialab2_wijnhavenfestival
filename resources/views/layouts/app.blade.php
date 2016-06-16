<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vind de zeebonk in jezelf</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/baseStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom_style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();

    if ($agent->isDesktop()) {
    ?>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/desktop.css')}}">
    <script type="application/javascript" href="desktop_adjust_section.js"></script>
    <?php
    }
    ?>
</head>


@yield('content')


<footer class="app_segment footer_segment">
    <div class="row">
        <div class="grid-1 no-pad">
            <p class="white footer_title">- Vind de zeebonk in jezelf -</p>
        </div>
        <div class="grid-1-2 no-pad">
                <p class="white footer_head">In samenwerking met</p>
            <p class="white footer_content">Hogeschool Rotterdam & Wijnhaven festival 2016</p>

        </div>
        <div class="grid-1-2 no-pad footer_right">
                <p class="white footer_head">Ontwikkeld door</p>
            <p class="white footer_content">Justin, Patrick, Sarella & Stijn</p>
        </div>
    </div>
</footer>
</html>