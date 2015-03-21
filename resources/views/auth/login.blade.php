@extends('_layout.base')

@section('body')
<section>
    <h2>Sign in</h2>
    <form class="auth" action="/auth/login" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="email" placeholder="Email address">
        <input type="password" name="password" placeholder="Password"><br/>

        <button type="submit" value="Submit"><i class="fa fa-check-square-o"></i> Submit</button>
    </form>
</section>
@endsection
