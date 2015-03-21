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
        <a class="box" href="{{ Request::url() }}/create"><i class="fa fa-plus-circle"></i> New Post</a><br/><br/><br/><br/>
        <table class="admin">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Public</th>
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
                    <td>{{ substr($article->title, 0, 40) }}</td>
                    <td>{{ date("d M Y @ H:m",strtotime($article->created_at)) }}</td>
                    <td><i class="fa fa-eye"></i> <i class="fa fa-pencil-square-o"></i> <i class="fa fa-times"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
