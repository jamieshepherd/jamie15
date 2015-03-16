@extends('_layout.base')
@section('body')
        <header style="background-image: url('/images/background-waves.jpg')">
            <h1>Contact</h1>
            <p>To get in touch, complete the form below or send me an <a href="mailto:hello@jamie.sh">email</a>.</p>
            <a href="mailto:hello&#64jamie.sh" class="box"><i class="fa fa-envelope-o"></i> hello&#64jamie.sh</a>
        </header>
        <section>
            <h2>Hi Jamie...</h2>
            <form>
                <input type="text" class="name" placeholder="Your name" autofocus>
                <input type="text" class="email" placeholder="Your email address">
                <textarea placeholder="Your message"></textarea>
                <input type="submit" value="Send message">
            </form>
        </section>
@stop
