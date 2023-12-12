@extends('layouts.sessions')


@section('title-page', 'Log in')


@section('content')

<p class="display-title">Log in to Account</p>
<form class="display-form" action="{{ route('login.session')}}" method="post">

    @csrf

<p class="display-text">Email: <input class="display-input" type="email" name="email"></p>
<p class="display-text">Password: <input class="display-input" type="password" name="password"></p>



<div class="submit-cancel">

    <button class="display-submit" type="submit">Log in</button>
    <a class="display-cancel" href="{{ route('home')}}">Cancel Log in</a>
    </div>

</form>


@endsection
