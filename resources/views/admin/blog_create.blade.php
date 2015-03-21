@extends('_layout.base')

@section('body')
    <section>
        <h2>Admin</h2>
        <ul class="admin-actions">
            <li><strong>Blog</strong></li>
            <li>View posts</li>
            <li>Post blog</li>
            <li><strong>Tutorials</strong></li>
            <li>View tutorials</li>
            <li>Post tutorial</li>
        </ul>
    </section>
    <section>
        <form class="admin" action="{{ Request::url() }}" method="POST">
            <h4>Create a blog post</h4>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="checkbox" name="public"> Visible to public<br/>
            <input type="text" name="title" placeholder="Title" autofocus>
            <textarea name="content" placeholder="Article content here (markdown)"></textarea>

            <button type="submit" value="Submit"><i class="fa fa-check-square-o"></i> Submit</button>
        </form>
    </section>
@endsection
