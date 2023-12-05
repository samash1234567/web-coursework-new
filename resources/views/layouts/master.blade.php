<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
    </ul>

    @if ($errors->any())
        <div>

            Errors:

            <ul>

                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach


            </ul>

        </div>
    @endif

    @if (session('message'))

        <p><b>{{ session('message')}}</b></p>

    @endif

    <div>
    @yield('content')
    </div>





</body>
</html>
