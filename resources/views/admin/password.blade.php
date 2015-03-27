@extends('_layout.base')

@section('body')
    <section>
        <h2>Admin</h2>
        <i class="fa fa-lock"></i> <a href="/admin">Administration</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-sign-out"></i> <a href="/auth/logout">Log out</a>
    </section>
    <section>
        <form class="admin" action="{{ Request::url() }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            <h4>Change password</h4>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input name="password" type="password" placeholder="New password">
            <button type="submit" value="Submit"><i class="fa fa-check-square-o"></i> Submit</button>
        </form>
    </section>
@endsection
