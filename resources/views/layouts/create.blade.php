<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>
    <link rel="stylesheet" href="css/creating.css">
</head>
<body>

<style>

@import url('https://fonts.googleapis.com/css2?family=Nova+Square&display=swap');

* {
    font-family: 'Nova Square', sans-serif;
    background-color: black;
}

p {

color: whitesmoke;
font-weight: bold

}


#navbar-container {

    list-style-type: none;
    margin: 0;
    padding: 20px;
    overflow: hidden;
    background-color: rgb(12, 11, 11);
}


.navbar-items {
    display: inline;
    float: left;
    border-right: 2px solid #fafafa;
    border-left: 2px solid #fcfafa;
}

.navbar-anchor {
    background-color: rgb(3, 3, 3);
    color: rgb(229, 226, 226);
    display: block;
    text-align: center;
    padding: 10px 14px;
    font-size: 45px;
    text-decoration: none;

}

ul {
text-decoration: none;
list-style-type: none;
margin: 0;
padding: 20px;
overflow: hidden;
background-color: rgb(14, 13, 13);
border-style: solid;
border-color: rgb(1, 2, 1);
border-radius: 10px;
}

li {

    display: block;
    padding-bottom: 10px;
    padding-top: 10px;
}

li a {
    color: rgb(251, 218, 156);
    display: block;
    text-align: center;
    padding: 10px 14px;
    font-size: 30px;
    text-transform: capitalize;
    background-color: rgb(156, 115, 32);
    border-style: solid;
    border-color: rgb(1, 2, 1);
    border-radius: 20px;
    text-decoration: none;
    font-weight: bolder;
  }

  li a:hover {
    background-color: #3d2004;
    color: rgb(255, 255, 255);
  }

.display-posts {

    text-transform: uppercase;
    color: rgb(255, 187, 60);
    background-color: rgb(11, 11, 11);
    display: block;
    text-align: center;
    font-size: 55px;
    margin: 0;
    border-style: solid;
    font-weight: bolder;
    padding: 10px 10px 5px 5px;
    border-color: rgb(1, 2, 1);
    border-radius: 10px;
}


.display-create {
    display: inline-block;
    background-color: white;
    color: rgb(174, 183, 6);
    margin: 10px;
    padding: 20px 20px 20px 20px;
    margin-left: 700px;
    text-decoration: none;
    font-size: 50px;
    font-weight: bolder;
    border-radius: 10px;
    text-transform: uppercase;
}

.display-create:hover {
    background-color: #3d2004;
    color: rgb(255, 255, 255);
}


.display-session {
    color: whitesmoke;
    display: block;
    text-align: center;
    font-size: 50px;
    text-transform: uppercase;
}

.display-form {

border: whitesmoke 5px solid;
border-radius: 10px;

}

.display-text {

color: rgb(255, 187, 60);
display: block;
font-size: 50px;
text-align: center;
border: whitesmoke 5px solid;
text-transform: uppercase;
border-radius: 10px;
padding: 20px 20px 20px 20px;
margin: 0 auto;
margin-top: 10px;


}

.display-input {

color: whitesmoke;
background-color: rgb(156, 115, 32);
font-weight: bold;
text-align: center;
padding: 15px 15px 15px 15px;
padding-right: 325px;
font-size: 25px;
border: rgb(156, 115, 32) 5px solid;
text-transform: capitalize;
border-radius: 7px;
caret-color: rgb(0, 0, 0);



}

.display-title {
    text-transform: uppercase;
    color: rgb(255, 187, 60);
    background-color: rgb(11, 11, 11);
    display: block;
    text-align: center;
    font-size: 55px;
    margin: 0;
    border-style: solid;
    font-weight: bolder;
    padding: 10px 10px 5px 5px;
    border-color: rgb(1, 2, 1);
    border-radius: 10px;


}


.display-mini-title {

    text-transform: capitalize;
    color: rgb(223, 3, 3);
    background-color: rgb(11, 11, 11);
    display: block;
    text-align: center;
    font-size: 45px;
    margin: 0;
    border-style: solid;
    padding: 10px 10px 5px 5px;
    border-color: rgb(1, 2, 1);
    border-radius: 10px;


}


</style>






    <ul id="navbar-container">

        <li class="navbar-items"><a class="navbar-anchor" href="#">HOME</a></li>
        <li class="navbar-items"><a class="navbar-anchor" href="#">LOGIN</a></li>
        <li class="navbar-items"><a  class="navbar-anchor" href="#">REGISTER</a></li>

        </ul>

        <p class="display-title">Create a @yield('create')</p>

        <p class="display-mini-title">Please fill out all fields inside this form.</p>


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
