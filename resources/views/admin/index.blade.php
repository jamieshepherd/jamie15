@extends('_layout.base')

@section('body')
    <section>
        <h2>Admin</h2>
        <i class="fa fa-lock"></i> <a href="/admin">Administration</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-sign-out"></i> <a href="/auth/logout">Log out</a>
    </section>
    <section>
        <a class="box" href="{{ Request::url() }}/create"><i class="fa fa-plus-circle"></i> New Post</a><br/><br/><br/><br/>
        <table class="admin">
            <thead>
            <tr>
                <th>ID</th>
                <th>Public</th>
                <th>Type</th>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->public ? 'True' : 'False' }}</td>
                    <td>{{ $article->type }}</td>
                    <td>{{ substr($article->title, 0, 40) }}</td>
                    <td>{{ date("d M Y",strtotime($article->created_at)) }}</td>
                    <td><a href="/blog/{{ $article->id }}/{{ $article->slug }}"><i class="fa fa-eye" title="View this blog post"></i></a>
                        <a href="{{ Request::url() }}/edit/{{ $article->id }}"><i class="fa fa-pencil-square-o" title="Edit this blog post"></i></a>
                        <a href="{{ Request::url() }}/delete/{{ $article->id }}" onclick="return confirm('Are you sure you wish to delete this?')"><i class="fa fa-times" title="Remove this blog post" ></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
