<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<ul id="navbar-container">

<li class="navbar-items"><a class="navbar-anchor" href="#">HOME</a></li>
<li class="navbar-items"><a class="navbar-anchor" href="#">LOGIN</a></li>
<li class="navbar-items"><a  class="navbar-anchor" href="#">REGISTER</a></li>

</ul>

@if ($errors->any())

            Errors:
            <ul class="error-container">
                @foreach ($errors->all() as $error)
                    <li class="error-item">{{$error}}</li>
                @endforeach


            </ul>

    @endif

    @if (session('message'))

        <p class="display-session"><b>{{ session('message')}}</b></p>

    @endif



    <div>@yield('content')</div>

</body>
</html>
