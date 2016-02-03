<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Admin page</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
</head>
<body>
<div id="header">
    <h1><a href="/admin">Админка</a></h1>
</div>
    <div id="content">@yield('content')</div>
</body>
</html>