@extends('_layout.base')

@section('body')
    <section>
        <h2>Reset password</h2>
        <form class="auth" action="/password/email" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="email" placeholder="Email address">

            <button type="submit" value="Submit"><i class="fa fa-check-square-o"></i> Submit</button>
        </form>

    </section>
@endsection
