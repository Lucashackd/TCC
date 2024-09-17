<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap");

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            outline: none;
        }

        body {
            /* border: 1px solid blue; */
            width: 100%;
            text-align: center;
            min-height: 100vh;
            background-color: #202020;
        }

        #app {
            width: 100%;
            height: 100%;
        }

        nav {
            background-color: #191919;
        }

        nav ul {
            list-style: none;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding-left: 1rem;
            padding-right: 1rem;
            height: 56px;
        }

        nav ul li.navigation-menu {
            width: calc(100% / 3);
            display: flex;
        }

        nav ul li.navigation-menu.navigation-menu-logo {
            justify-content: flex-start;
        }

        nav ul li.navigation-menu.navigation-menu-logo a {
            display: flex;
            align-items: center;
        }

        nav ul li.navigation-menu.navigation-menu-searchBar {
            justify-content: center;
        }

        nav ul li.navigation-menu.navigation-menu-profile {
            justify-content: flex-end;
        }

        nav ul li.navigation-menu.navigation-menu-profile a {
            text-decoration: none;
            color: inherit;
        }

        nav ul li .logo-short,
        nav ul li .logo-full {
            max-height: 40px;
        }

        nav ul li .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 450px;
            height: 40px;
        }

        nav ul li .search-bar {
            width: 90%;
            height: 100%;
            border-radius: 16px 0 0 16px;
            border: 1px solid #404040;
            background-color: #202020;
            color: #c0c0c0;
            padding: 0 16px;
        }

        nav ul li .search-container button {
            width: 10%;
            height: 100%;
            text-align: center;
            line-height: 40px;
            background-color: #303030;
            border: 1px solid #404040;
            border-left: none;
            border-radius: 0 16px 16px 0;
            color: #c0c0c0;
        }

        nav ul li .search-container button:hover {
            cursor: pointer;
        }

        nav ul li button .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
        }

        nav ul li button {
            height: 34px;
            width: fit-content;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 4px;
            padding: 10px;
            border: 1px solid #404040;
            border-radius: 16px;
            background: transparent;
            color: #ffd700;
        }

        nav ul li button:hover {
            cursor: pointer;
        }

        main {
            --heightNavUl: 56px;
            width: 100%;
            height: calc(100% - var(--heightNavUl));
            margin-bottom: 16px;
            padding: 24px 16px;
        }

        .feed-container .feed-options .feed-filter .filter-option .material-symbols-outlined {
            color: #ffd700;
        }

        .watch-main {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 955px;
            min-width: 328px;
            min-height: auto;
        }

        .watch-main .video-player {
            width: inherit;
        }

        .flags-area {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
            height: 56px;
            color: #fbfbfb;
        }

        .flag {
            background-color: #ffd700;
            padding: 4px 8px;
            border-radius: 18px;
            margin-right: 8px;
            color: #2a2a2a;
            font-family: 'Lato', sans-serif;
            font-weight: 600;
        }

        .flag a {
            text-decoration: none;
            color: inherit;
        }

        .watch-info {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            width: 100%;
            margin-bottom: 8px;
        }

        .watch-info .title {
            width: 100%;
            font-size: 1.5rem;
            font-family: 'Lobster Two', sans-serif;
            font-weight: bold;
            color: #fbfbfb;
        }

        .watch-info .watch-info-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .watch-info .channel-info {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 16px;
            width: 100%;
        }

        .channel-info .watch-avatar {
            background-color: #ffd700;
            width: 55px;
            height: 55px;
            border-radius: 100%;
        }

        .channel-info .watch-avatar img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            object-fit: contain;
        }

        .channel-info .watch-channel {
            font-size: 1.25rem;
            font-family: 'Lobster Two', sans-serif;
            font-weight: 500;
            color: #fbfbfb;
        }

        .watch-options {
            display: flex;
            gap: 16px;
        }

        button.material-symbols-outlined {
            background: none;
            border: none;
            color: #fbfbfb;
        }

        button.material-symbols-outlined:hover {
            cursor: pointer;
            color: #ffd700;
        }

        .watch-main .watch-description {
            color: #fbfbfb;
            text-align: justify;
            line-height: 1.3;
            width: 100%;
            font-size: 1rem;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
        }
    </style>
    <title>{{$videos->title}}</title>
</head>

<body>
    <div id="app">
        <header>
            <nav>
                <ul>
                    <li class="navigation-menu navigation-menu-logo">
                        <a href="/">
                            <img class="logo-full" src="../logo.svg" alt="logo" />
                        </a>
                    </li>
                    <li class="navigation-menu navigation-menu-searchBar">
                        <div class="search-container">
                            <input type="search" class="search-bar" placeholder="Pesquisar" />
                            <button>
                                <span class="material-symbols-outlined"> search </span>
                            </button>
                        </div>
                    </li>
                    <li class="navigation-menu navigation-menu-profile">
                        @if (Auth::check())
                        <a href="/profile/{{Auth::user()->id}}">
                            <button>
                                <span class="material-symbols-outlined">
                                    account_circle
                                </span>
                                {{ Auth::user()->name }}
                            </button>
                        </a>
                        @else
                        <a href="/login">
                            <button>
                                <span class="material-symbols-outlined"> account_circle </span>
                                Fazer login
                            </button>
                        </a>
                        @endif
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="watch-main">
                <div class="video-player">
                    <video width="955" height="537" controls>
                        <source src="{{ asset('videos/25/13/video.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="flags-area">
                    @foreach($videos->flags as $flag)
                    <div class="flag">
                        <a href="/flag/{{$flag->id}}">{{$flag->title}}</a>
                    </div>
                    @endforeach
                </div>

                <div class="watch-info">
                    <div class="title">{{$videos->title}}</div>
                    <div class="watch-info-options">
                        <div class="channel-info">
                            <div class="watch-avatar">
                                <img class="feed-avatar" src="../person.png" alt="avatar">
                            </div>
                            <div class="watch-channel">{{$videos->user_id}}</div>
                        </div>
                        <div class="watch-options">
                            <button class="material-symbols-outlined">
                                favorite
                            </button>
                            <button class="material-symbols-outlined">
                                thumb_up
                            </button>
                            <button class="material-symbols-outlined">
                                thumb_down
                            </button>
                        </div>
                    </div>
                </div>

                <div class="watch-description">
                    <p>{{$videos->description}}</p>
                </div>
            </div>
        </main>

</html>