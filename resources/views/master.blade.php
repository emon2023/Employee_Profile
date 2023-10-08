<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
</head>
<body>



<nav class="navbar navbar-expand-md bg-light navbar-light shadow">

    <div class="container">
        <a href="{{route('view.home')}}" class="navbar-brand">Employee Profile Module</a>
        <ul class="navbar-nav">
            <li><a href="{{route('view.home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('employee.add')}}" class="nav-link">Add Employee</a></li>
            <li><a href="{{route('employee.manage')}}" class="nav-link">Manage Employee</a></li>
        </ul>
    </div>

</nav>



@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>

