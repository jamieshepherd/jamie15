<!DOCTYPE html>
<html>
    <head>
        <title>Jamie 2015</title>
        <link media="all" type="text/css" rel="stylesheet" href="
            @if(session('theme') == 'light')
                {{ elixir("css/light.css") }}
            @else
                {{ elixir("css/dark.css") }}
            @endif
        ">
        <link media="all" type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="/js/helpers.js"></script>
        <script src="//use.typekit.net/zun7twj.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
@include('_layout.nav')
@yield('body')
@include('_layout.footer')
