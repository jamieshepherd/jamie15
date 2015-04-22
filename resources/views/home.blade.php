@extends('_layout.base')
@section('body')
        <header style="background-image: url('/images/background-home.jpg')">
            <h1>Hi.</h1>
            <p>I'm Jamie, a designer and developer from Plymouth, UK.</p>
            <a href="/projects" class="box"><i class="fa fa-flask"></i> View my work</a>
            <a href="/contact" class="box"><i class="fa fa-envelope-o"></i> Get in touch</a>
        </header>
        <section>
            <div class="feature">
                <h2>Design</h2>
                <p>I develop user friendly, yet aesthetically pleasing solutions to design problems, and build them with <a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML5">HTML5</a> &amp; <a href="https://developer.mozilla.org/en-US/docs/Glossary/CSS">CSS3</a>. I design responsive layouts with a heavy focus on user experience (UX). I have a strong knowledge of modern front-end technologies.</p>
            </div>
            <div class="feature">
                <h2>Development</h2>
                <p>I utilise server-side languages such as <a href="http://php.net">PHP</a> and popular frameworks such as <a href="http://laravel.com">Laravel</a> to develop enterprise level products for small and large scale projects. I also work on a number of <a href="http://github.com/jamieshepherd">open source projects.</a></p>
            </div>
        </section>
@stop
