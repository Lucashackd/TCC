<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
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

        nav ul li.navigation-menu.navigation-menu-profile #profile-modal {
            position: absolute;
            top: 64px;
            right: 16px;
            display: none;
            flex-direction: column;
            align-items: flex-start;
            width: 300px;
            padding: 16px;
            background-color: white;
            border-radius: 10px;
        }

        nav ul li.navigation-menu.navigation-menu-profile #profile-modal button.close {
            align-self: flex-end;
            border: none;
            color: #FF5693;
        }

        nav ul li.navigation-menu.navigation-menu-profile #profile-modal .superior {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 16px;
            margin-bottom: 16px;
            gap: 8px;
            width: 80%;
        }

        nav ul li.navigation-menu.navigation-menu-profile #profile-modal div.divide {
            width: 100%;
            height: 0;
            border-top: 1px solid #000;
            margin-bottom: 16px
        }

        nav ul li.navigation-menu.navigation-menu-profile #profile-modal .inferior {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 16px;
            width: 80%;
            gap: 8px;
        }

        nav ul li.navigation-menu.navigation-menu-profile #profile-modal .inferior div {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        nav ul li.navigation-menu.navigation-menu-profile #profile-modal .superior div {
            display: flex;
            align-items: center;
            gap: 4px;
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
        }

        .feed-container {
            /* border: 1px solid red; */
            height: 100%;
        }

        .feed-container .feed-options {
            /* border: 1px solid green; */
            display: flex;
            justify-content: center;
            width: 100%;
            min-width: 200px;
            height: 40px;
            margin-top: 8px;
        }

        .feed-container .feed-options .feed-filter {
            /* border: 1px solid yellow; */
            list-style: none;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 12px;
            width: fit-content;
            max-width: 320px;
            padding: 0 16px;
            height: 100%;
            font-family: Inter, Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #f2f2f2;
            background-color: #191919;
            border-radius: 8px;
        }

        .feed-container .feed-options .feed-filter .filter-option {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 4px;
            gap: 2px;
            border-radius: 5px;
        }

        .feed-container .feed-options .feed-filter .filter-option:hover {
            cursor: pointer;
            background-color: #202020;
        }

        .feed-container .feed-options .feed-filter .filter-option .material-symbols-outlined {
            color: #ffd700;
        }

        .feed-container .banner-info {
            /* border: 1px solid white; */
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: fit-content;
            max-height: 340px;
            margin: 24px;
            width: calc(100% - margin);
        }

        .feed-container .banner-info img {
            /* border: 3px solid #f2f2f2; */
            border-radius: 16px;
            box-shadow: 0 0 5px #c0c0c0;
        }

        .feed-container .feed-content {
            /* border: 1px solid pink; */
            height: fit-content;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            margin: 0 16px 0 16px;
        }

        .feed-container .feed-content a.select-video {
            background: none;
            border: none;
            border-radius: 16px;
            padding: 8px;
        }

        .feed-container .feed-content a.select-video:hover {
            cursor: pointer;
            background-color: #ffd70008;
        }

        .feed-container .feed-content a.select-video .feed-video {
            height: 310px;
            width: 350px;
            overflow: hidden;
        }

        .feed-container .feed-content a.select-video .feed-video .thumbnail {
            aspect-ratio: 16/9;
            width: 100%;
            height: 196.875px;
            /* text-align: start; */
            border-radius: 8px;
        }

        .feed-container .feed-content .select-video .feed-video .thumbnail .video-thumbnail {
            width: 100%;
            height: 100%;
            border-radius: inherit;
        }

        .feed-container .feed-content .select-video .feed-video .thumbnail .video-duration-position {
            position: relative;
            bottom: 24px;
            left: 225px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            flex-direction: row;
            width: 35%;
        }

        .feed-container .feed-content .select-video .feed-video .thumbnail .video-duration-position .video-duration-info {
            width: fit-content;
            max-width: 100%;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.25);
            color: #fff;
            text-shadow: 1px 0 2px #000000, -1px 0 2px #000, 0 1px 2px #000,
                0 -1px 2px #000;
            padding: 1px 3px;
            border-radius: 5px;
            font-size: 0.85rem;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            letter-spacing: 0.75px;
        }

        .feed-content .select-video .feed-video .video-info {
            height: calc(100% - 204.883px);
            margin-top: 8px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .feed-content .select-video .feed-video .video-info .video-title {
            width: 100%;
            height: 60px;
            overflow: hidden;
            line-height: 1;
            align-self: center;
            text-align: start;
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
        }

        .feed-content .select-video .feed-video .video-info .channel-info {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
        }

        .feed-content .select-video .feed-video .video-info .channel-info .channel-logo {
            width: 25px;
            height: 25px;
        }

        .feed-content .select-video .feed-video .video-info .channel-info .channel-logo .feed-avatar {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            object-fit: contain;
        }

        .feed-content .select-video .feed-video .video-info .channel-info .channel-name {
            text-align: start;
            font-family: "Lobster Two", sans-serif;
            font-size: 1rem;
            font-weight: 700;
            max-height: 20px;
            color: #c0c0c0;
            overflow: hidden;
            margin-left: 8px;
        }
    </style>
    <title>My Comedy Tube</title>
</head>

<body>
    <div id="app">
        <header>
            <nav>
                <ul>
                    <li class="navigation-menu navigation-menu-logo">
                        <a href="index.php">
                            <img class="logo-full" src="logo.svg" alt="logo" />
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
                        <button onclick="document.getElementById('profile-modal').style.display='flex'">
                            <span class="material-symbols-outlined">
                                account_circle
                            </span>
                            {{ Auth::user()->name }}
                        </button>

                        <div id="profile-modal">
                            <button class="close" onclick="document.getElementById('profile-modal').style.display='none'">
                                <span class="material-symbols-outlined">
                                    close
                                </span>
                            </button>

                            <div class="superior">
                                <div>
                                    <span class="material-symbols-outlined">person</span>
                                    <a href="/profile/{{Auth::user()->id}}">Acessar Canal</a>
                                </div>

                                <div>
                                    <span class="material-symbols-outlined">edit</span>
                                    <a href="">Editar perfil</a>
                                </div>

                            </div>
                            <div class="divide"></div>
                            <div class="inferior">
                                <div>
                                    <span class="material-symbols-outlined">video_call</span>
                                    <a href="{{ route('video.create') }}">Adicionar vídeo</a>
                                </div>
                                <div>
                                    <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none;">@csrf</form>
                                    <span class="material-symbols-outlined">logout</span>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                                </div>
                            </div>
                        </div>
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
            <div class="feed-container">
                <div class="feed-options">
                    <ul class="feed-filter">
                        <li class="filter-option">
                            <span class="material-symbols-outlined"> subscriptions </span>
                            Inscrições
                        </li>
                        <li class="filter-option">
                            <span class="material-symbols-outlined"> history </span>
                            Histórico
                        </li>
                        <li class="filter-option">
                            <span class="material-symbols-outlined"> favorite </span>
                            Favoritos
                        </li>
                    </ul>
                </div>
                <!-- <div class="banner-info">
                    <img src="public/src/images/banner.png" alt="" />
                </div> -->

                <div class="feed-content">
                    @if($videos->count() > 0)
                    @foreach ($videos as $video)
                    <a class="select-video" href="watch/{{$video->id}}">
                        <div class="feed-video">
                            <div class="thumbnail">
                                <img class="video-thumbnail" src="{{ Storage::cloud()->temporaryUrl($video->thumbnail, now()->addMinutes(5)) }}" alt="">
                            </div>

                            <div class="video-info">
                                <span class="video-title">
                                    {{$video->title}}
                                </span>
                                <div class="channel-info">
                                    <div class="channel-logo">
                                        <img class="feed-avatar" src="person.png" alt="avatar">
                                    </div>
                                    <span class="channel-name">
                                        {{$video->user_id}}
                                    </span>
                                </div>
                                <div class="date"></div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    @else
                    <p>Nenhum vídeo encontrado</p>
                    @endif
                </div>
            </div>
        </main>
    </div>

    <script>

    </script>
</body>

</html>