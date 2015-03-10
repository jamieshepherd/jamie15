@extends('_layout.base')
@section('body')
        <header>
            <h1>Contact</h1>
            <p>To get in touch, complete the form below or send me an <a href="mailto:hello@jamie.sh">email</a>.</p>
            <form>
                <input type="text" class="name" placeholder="Your name" autofocus>
                <input type="text" class="email" placeholder="Your email address">
                <textarea placeholder="Your message"></textarea>
                <input type="submit" value="Send message">
            </form>
        </header>
@stop
