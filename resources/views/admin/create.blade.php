@extends('_layout.base')

@section('body')
    <section>
        <h2>Admin</h2>
        <i class="fa fa-lock"></i> <a href="/admin">Administration</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-sign-out"></i> <a href="/auth/logout">Log out</a>
    </section>
    <section>
        <form class="admin" action="{{ Request::url() }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            <h4>Create a blog post</h4>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="checkbox" name="public"> Visible to public<br/>
            <div class="dropdown">
                <select name="type">
                    <option value="blog">Blog</option>
                    <option value="tutorial">Tutorial</option>
                </select>
            </div>
            <input id="title" type="text" name="title" placeholder="Title" onkeyup="generateSlug()" autofocus>
            <input id="slug" type="text" name="slug" placeholder="URL slug">
            <textarea name="text" placeholder="Article content here (markdown)"></textarea>
            <input type="file" name="header">

            <button type="submit" value="Submit"><i class="fa fa-check-square-o"></i> Submit</button>
        </form>
    </section>
@endsection
