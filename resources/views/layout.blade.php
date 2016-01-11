<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A mobile Twitter client from Indonesia. Slim, fast, lightweight, no database, no ads, and of course it's open source.">
        <meta name="keywords" content="citcuit, twitter, mobile, client, indonesia, slim, fast, lightweight, no database, no ads, open source">
        <meta name="author" content="Dody Agung Saputro <hello@dodyagung.com>">
        <link rel="icon" href="{{ url('assets/img/favicon.png') }}" type="image/png" sizes="any" />
        <title>@yield('title') - CitCuit v2</title>
        <link href="{{ url('assets/css/citcuit.css') }}" rel="stylesheet">
    </head>
    <body>
        <a id="top"></a>
        <!--header-->
        <header>
            CitCuit v2
            @if (session('citcuit.oauth.screen_name'))
            - <a href="{{ url('profile/' . session('citcuit.oauth.screen_name')) }}">{{ '@' . session('citcuit.oauth.screen_name') }}</a>
            @endif
        </header>
        <!--nav-top-->
        <nav class="menu">
            @if (session('citcuit.oauth'))
            @include('api.@nav_top')
            @else
            @include('non_api.@nav_top')
            @endif
        </nav>
        <!--content-->
        <article>
            @if (session('citcuit.oauth') && env('ALERT_INFO'))
            @include('api.@alert')
            @endif
            @yield('content')    
        </article>
        <!--nav-bottom-->
        <nav class="menu">
            @if (session('citcuit.oauth'))
            @include('api.@nav_bottom')
            @else
            @include('non_api.@nav_bottom')
            @endif
        </nav>
        <!--footer-->
        <footer>
            @if(isset($rate))
            <div class="rate">
                <strong>Rate limit <a href="#">[?]</a> :</strong>
                @foreach ($rate as $key => $value)
                <br />&bullet; {{ $key }} : {{ $value['remaining'] }} hit / {{ $value['reset'] }} min.
                @endforeach
            </div>
            <hr />
            @endif
            Made with &hearts; by <a href="" target="_blank">@dodyags</a>. We are <a href="https://github.com/dodyagung/citcuit" target="_blank">open source</a> and licensed under <a href="https://opensource.org/licenses/MIT" target="_blank">MIT License</a>.
        </footer>
        <a id="bottom"></a>
    </body>
</html>