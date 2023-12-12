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
    <li class="navbar-items"><a class="navbar-anchor" href="{{route('users.index')}}">Users</a></li>
    <li class="navbar-items"><a class="navbar-anchor" href="{{route('notifications.index')}}">Notifications: {{auth()->user()->unreadNotifications()->count()}}</a></li>

    @endauth

    @auth

    <form action="/logout" method="post">

        @csrf

        <button class="display-submit" type="submit">Log Out</button>

    </form>

    @endauth

    </ul>

    <p class="display-title">Notifications</p>

    <p class="display-mini-title">Below is all Notifications</p>

    @if ($errors->any())

                <p class="display-errors">Errors:
                <ul class="error-container">
                    @foreach ($errors->all() as $error)
                        <li class="error-item">{{$error}}</li>
                    @endforeach

                </ul>
                </p>

        @endif

        @if (session('message'))

            <p class="display-session"><b>{{ session('message')}}</b></p>

        @endif



        <div>




            <ul class="flexbox-container">

                @foreach ($notifications as $notification)
                    <li class="display-not">
                        @if ($notification->type == 'App\Notifications\PostNotification');
                            Someone has accessed your post! Go check it out.
                        @endif

                    </li>
                    <li class="display-not">
                        @if ($notification->type == 'App\Notifications\CommentNotification');
                            Someone has accessed your comment! Go check it out.
                        @endif

                    </li>
                @endforeach
            </ul>





        </div>

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


.comment-form {

    margin-top: 5px;
    text-align: center;
    border: whitesmoke 5px solid;
    border-radius: 10px;


}


.text-area {

    color: whitesmoke;
    resize: none;
    font-size: 15px;


}


.submit-comment {

    color: rgb(255, 166, 0);
    background-color: rgb(209, 73, 23);
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 15px;
    padding-bottom: 15px;
    font-size: 20px;
    font-weight: bolder;
    border: none;
    border-radius: 7px;
    cursor: pointer;

}


.display-comment {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.flex {

    margin-left: 550px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: #3d2004 3px solid;

}

.comment-name {
    color: rgb(255, 187, 60);
    text-transform: uppercase;
    font-size: 35px;
    text-decoration: none;
    margin: 0;
}


.comment-posted {
    margin: 0;
    font-size: 17px;
}

.comment-text {
    margin-top: 20px;
    font-size: 20px;
    padding: 20px 20px 20px 20px;
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


            .display-not {
                display: block;
                color: rgb(251, 218, 156);
                text-align: center;
                font-size: 30px;
                text-transform: capitalize;
                background-color: rgb(156, 115, 32);
                border-style: solid;
                border-color: rgb(1, 2, 1);
                border-radius: 20px;
                text-decoration: none;
                font-weight: bolder;
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

.display-info {

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
margin-top: 5px;


}

.display-input {

color: whitesmoke;
background-color: rgb(156, 110, 17);
font-weight: bold;
text-align: center;
margin-top: 10px;
padding: 15px 15px 15px 15px;
font-size: 55px;
border: rgb(156, 115, 32) 5px solid;
text-transform: capitalize;
border-radius: 7px;
text-transform: uppercase;
}


            .submit-cancel {
                display: flex;
                flex-direction: row;
                justify-content: center;
            }

            .display-submit {
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


            }

            .display-cancel {
                background-color: rgb(54, 49, 49);
                border-radius: 7px;
                color: rgb(229, 226, 226);
                padding-left: 35px;
                padding-right: 35px;
                padding-top: 15px;
                padding-bottom: 15px;
                font-size: 45px;
                font-weight: bold;
                margin: 20px 20px 20px 20px;
                text-decoration: none;

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


            .display-submit:hover, .display-cancel:hover, .submit-comment:hover, .comment-name:hover, .display-input-a:hover, .display-edit:hover {
                cursor: pointer;
                color: red;
                background-color: whitesmoke;
                font-weight: bolder;
                border-radius: 7px;

            }



    </style>
