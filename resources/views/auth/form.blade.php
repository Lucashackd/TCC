<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      --heightNavUl: 57px;
      display: flex;
      width: 100%;
      height: calc(100vh - var(--heightNavUl));
    }

    .login-banner {
      width: 60%;
      height: 100%;
      background-color: #ffd700;
    }

    .login-banner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .login-signup {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 40%;
      background-color: #ffd700;
    }

    .login-signup form {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      width: 55%;
      padding: 32px;
    }

    form label {
      padding-left: 8px;
      font-size: 12px;
      font-family: 'Lato', sans-serif;
      font-weight: bold;
      color: #2A2A2A;
    }

    form input {
      width: 100%;
      height: 40px;
      border: 1px solid #404040;
      border-radius: 10px;
      padding: 0 16px;
      margin-bottom: 16px;
    }

    form button {
      width: 100%;
      height: 40px;
      border: none;
      border-radius: 10px;
      background-color: #3B5A66;
      color: #FBFBFB;
      font-weight: bold;
    }
  </style>
  <title>Login</title>
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
            <a href="/login">
              <button>
                <span class="material-symbols-outlined"> account_circle </span>
                Fazer login
              </button>
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="login-banner">
        <img src="banner-login.png" alt="">
      </div>
      <div class="login-signup">
        <form action="{{route('login.verify')}}" method="post">
          @csrf
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" id="" placeholder="" required>
          <label for="password">Senha</label>
          <input type="password" name="password" id="password" placeholder="" required>
          <button type="submit">Entrar</button>
        </form>
      </div>
    </main>
  </div>

</body>

</html>