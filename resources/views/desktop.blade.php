@extends('layouts.app')

@section('content')
    <div class="app_container">
        <h1>Desktop</h1>
    </div>
    <?php use Jenssegers\Agent\Agent;
    $agent = new Agent();
    if ($agent->isDesktop()) {
        echo "bla";
    }
    ?>
@endsection