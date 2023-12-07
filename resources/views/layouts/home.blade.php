<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>
</head>
<body>

    <ul id="navbar-container">

        <li class="navbar-items"><a class="navbar-anchor" href="/">HOME</a></li>
        <li class="navbar-items"><a class="navbar-anchor" href="/login">LOGIN</a></li>

        @guest
        <li class="navbar-items"><a  class="navbar-anchor" href="/register">REGISTER</a></li>
        @endguest

        @auth

        <form action="/logout" method="post">

            @csrf

            <button type="submit">Log Out</button>

        </form>

        @endauth

        </ul>

        @auth
            <p>Welcome Back, {{ auth()->user()->name }} you are logged in! put this in navbar</p>
        @endauth



    @if (session('message'))

    <p class="display-session"><b>{{ session('message')}}</b></p>

@endif


</body>
</html>
