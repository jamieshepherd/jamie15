@extends('_layout.base')

@section('body')
    <section>
        <h2>Admin</h2>
        <ul class="admin-actions">
            <li><strong>Blog</strong></li>
            <li><a href="/admin/blog">View posts</a></li>
            <li><a href="/admin/blog/create">Post blog</a></li>
            <li><strong>Tutorials</strong></li>
            <li><a href="/admin/tutorials">View tutorials</a></li>
            <li><a href="/admin/tutorials/create">Post tutorial</a></li>
        </ul>
    </section>
@endsection
