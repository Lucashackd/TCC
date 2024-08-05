<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="public/styles/style.css">
  <title>My Comedy Tube</title>
</head>

<body>
  <div id="app">
    <header>
      <nav>
        <ul>
          <li class="navigation-menu navigation-menu-logo">
            <a href="index.php">
              <img class="logo-full" src="public/src/images/logo.svg" alt="logo" />
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
            <button>
              <span class="material-symbols-outlined"> account_circle </span>
              Fazer login
            </button>
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
        <div class="banner-info">
          <img src="public/src/images/banner.png" alt="" />
        </div>

        <div class="feed-content">
          <button class="select-video">
            <div class="feed-video">
              <div class="thumbnail">
                <img class="video-thumbnail" src="public/src/images/teste-mini.png" alt="">
                <div class="video-duration-position">
                  <span class="video-duration-info">21:39</span>
                </div>

              </div>

              <div class="video-info">
                <div class="video-title">
                  <h1>Miguelito manda a real sobre a relação entre peitos e a sociedade capitalista</h1>
                </div>
                <div class="channel-info">
                  <div class="channel-logo">
                    A
                  </div>
                  <div class="channel-name">
                    Disney
                  </div>
                </div>
                <div class="date"></div>
              </div>
            </div>
          </button>
        </div>
      </div>
    </main>
  </div>
  <!-- <script type="module" src="/main.js"></script> -->
</body>

</html>