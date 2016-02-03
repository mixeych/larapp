@extends('admin.layout')
@section('content')
<h1>Admin page</h1>
<h2>Articles</h2>
<ul>
    <li><a href="/admin/articles">All articles</a></li>
    <li><a href="/admin/articles/create">Add articles</a></li>
</ul>
<h2>Categories</h2>
<ul>
    <li><a href="admin/category">All categories</a></li>
    <li><a href="admin/category/create">Add category</a></li>
</ul>
<h2>Pages</h2>
<ul>
    <li><a href="/admin/pages">All pages</a></li>
</ul>
@endsection