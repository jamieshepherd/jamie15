@extends('_layout.base')

@section('body')
    <section>
        <h2>Confirm new password</h2>
        <form class="auth" action="/password/reset" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <input type="text" name="email" placeholder="Email address">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Password">

            <button type="submit" value="Submit"><i class="fa fa-check-square-o"></i> Reset password</button>
        </form>
    </section>
@endsection
