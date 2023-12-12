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


        @guest
        <li class="navbar-items"><a class="navbar-anchor" href="/login">LOGIN</a></li>

        <li class="navbar-items"><a  class="navbar-anchor" href="/register">REGISTER</a></li>
        @endguest

        @auth

        <li class="navbar-items"><a class="navbar-anchor" href="{{route('posts.index')}}">Posts</a></li>
        <li class="navbar-items"><a class="navbar-anchor" href="{{route('threads.index')}}">Threads</a></li>
        <li class="navbar-items"><a class="navbar-anchor" href="{{route('categories.index')}}">Categories</a></li>

        @can('admin')
        <li class="navbar-items"><a class="navbar-anchor" href="{{route('users.index')}}">Users</a></li>
        @endcan
        <li class="navbar-items"><a class="navbar-anchor" href="{{route('notifications.index')}}"> Notifications: {{auth()->user()->unreadNotifications()->count()}}</a></li>


        @endauth

        @auth

        <form action="/logout" method="post">

            @csrf

            <button class="display-submit" type="submit">Log Out</button>

        </form>

        @endauth

        </ul>

        @auth
        <p class="display-title">Welcome Back, {{ auth()->user()->name }} you are logged in!</p>
        @endauth



    @if (session('message'))

    <p class="display-session"><b>{{ session('message')}}</b></p>

@endif


@guest

        <div style="height: 100%">

            <a class="display-a" href="/register" style="font-size: 100px; display:block; text-align: center;  ">Want to see the forum? Log in or Register an account!</a>

        </div>





@endguest





        @auth


        <div class="flex-container">

            <button class="display-button" type="button"><a class="display-a" href="{{route('posts.index')}}">See Posts</a></button>
            <button class="display-button" type="button"><a class="display-a" href="{{ route('threads.index')}}">See Threads</a></button>
            <button class="display-button" type="button"><a class="display-a" href="{{ route('categories.index')}}">See Categories</a></button>
            <button class="display-button" type="button"><a class="display-a" href="{{ route('users.index')}}">See Users</a></button>






        </div>




        @endauth




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



                .flex-container {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;

                }

                .display-button {

                    width: 50%;
                    padding: 200px 200px 200px 200px;
                    color: rgb(255, 187, 60);
                    background-color: rgb(11, 11, 11);

                }

                .display-a {
                    text-decoration: none;
                    color: rgb(255, 187, 60);
                    background-color: rgb(11, 11, 11);
                    font-size: 55px;
                    font-weight: bolder;
                    text-transform: uppercase;
                }

                .display-a:hover {
                    cursor: pointer;
                    color: red;
                    background-color: whitesmoke;
                    font-weight: bolder;
                    border-radius: 7px;
                }


                .display-edit {

                color: rgb(255, 166, 0);
                background-color: rgb(209, 73, 23);
                padding-left: 50px;
                padding-right: 50px;
                padding-top: 15px;
                padding-bottom: 15px;
                margin: 20px 20px 20px 20px;
                cursor: pointer;
                font-size: 45px;
                font-weight: bold;
                border-radius: 7px;
                text-decoration: none;

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

.submit-cancel {
display: flex;
flex-direction: row;
justify-content: center;
}

.display-submit {
color: rgb(255, 166, 0);
background-color: rgb(209, 73, 23);
padding-left: 10px;
padding-right: 10px;
padding-top: 15px;
padding-bottom: 15px;
display: block;
text-align: center;
margin: 7px 7px 7px 7px;
margin-left: 20px;
cursor: pointer;
font-size: 45px;
font-weight: bold;
border-radius: 7px;


}

.display-submit:hover {
cursor: pointer;
color: red;
background-color: whitesmoke;
font-weight: bolder;
border-radius: 7px;

}

.display-cancel {
background-color: rgb(54, 49, 49);
border-radius: 7px;
color: rgb(229, 226, 226);
padding-left: 50px;
padding-right: 50px;
padding-top: 15px;
padding-bottom: 15px;
font-size: 45px;
font-weight: bold;
margin: 20px 20px 20px 20px;
text-decoration: none;

}

.display-cancel:hover {
color: red;
background-color: whitesmoke;
font-weight: bolder;
border-radius: 7px;
}

.display-errors {
margin-bottom: 0;
color: rgb(255, 174, 0);
font-size: 50px;
font-weight: bold;
display: block;
text-align: center;

}

.error-container {

text-align: center;
color: red;
font-weight: bolder;
font-size: 45px;
}

.display-session {
font-weight: bold;
color: rgb(255, 0, 0);
text-emphasis-color: red;
text-align: center;
font-size: 40px;
}



</style>


</body>
</html>
