@extends('_layout.base')

@section('body')
    <section>
        <h2>Admin</h2>
        <i class="fa fa-lock"></i> <a href="/admin">Administration</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-sign-out"></i> <a href="/auth/logout">Log out</a>
    </section>
    <section>
        <form class="admin" action="{{ Request::url() }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            <h4>Edit post</h4>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="checkbox" name="public" @if($article->public) checked @endif> Visible to public<br/>
            <select name="type">
                <option value="blog" @if($article->type == 'blog') selected @endif>Blog</option>
                <option value="tutorial" @if($article->type == 'tutorial') selected @endif>Tutorial</option>
            </select>
            <input id="title" type="text" name="title" placeholder="Title" onkeyup="generateSlug()" autofocus value="{{ $article->title }}">
            <input id="slug" type="text" name="slug" placeholder="URL slug" value="{{ $article->slug }}">
            <textarea name="text" placeholder="Article content here (markdown)">{{ $article->text }}</textarea>
            <input type="file" name="header">

            <button type="submit" value="Submit"><i class="fa fa-check-square-o"></i> Submit</button>
        </form>
    </section>
@endsection
