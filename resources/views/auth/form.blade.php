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
      width: 100%;
      text-align: center;
      height: 100vh;
      background-color: #202020;
      overflow: hidden;
    }

    #app {
      width: 100%;
      height: 100%;
    }

    main {
      display: flex;
      width: 100%;
      height: 100%;
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

    .login-signup img {
      width: 66%;
      margin-bottom: 32px;
    }

    .login-signup form {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      width: 75%;
      padding: 32px;
      background-color: #5ACBFF;
      border-radius: 10px;
      box-shadow: inset 0 0 2px 2px #00000025;
      margin-bottom: 32px;
    }

    .login-signup form h1 {
      font-family: 'Lato', sans-serif;
      font-size: 24px;
      font-weight: bold;
      color: #2A2A2A;
      margin-bottom: 24px;
    }

    form label {
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
      padding: 0 8px;
      margin-bottom: 8px;
    }

    form button {
      width: 100%;
      height: 56px;
      border: none;
      border-radius: 10px;
      background-color: #FF5693;
      color: #FBFBFB;
      font-family: 'Lato', sans-serif;
      font-weight: bold;
      font-size: 1.25rem;
      margin-top: 8px;
      cursor: pointer;
      text-transform: uppercase;
    }

    form .forgot-password {
      width: 100%;
      text-align: center;
      font-size: 14px;
      font-family: 'Lato', sans-serif;
      font-weight: bold;
      margin-top: 24px;
    }

    .link {
      cursor: pointer;
      text-decoration: underline;
    }

    .sign-up {
      width: 100%;
      text-align: center;
      font-size: 20px;
      font-family: 'Lato', sans-serif;
      font-weight: 600;
    }
  </style>
  <title>Login</title>
</head>

<body>
  <div id="app">
    <main>
      <div class="login-banner">
        <img src="banner-login.png" alt="">
      </div>
      <div class="login-signup">
        <img src="/logo.svg" alt="logo">
        <form action="{{route('login.verify')}}" method="post">
          @csrf
          <h1>Entre com sua conta</h1>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" id="" placeholder="" required>
          <label for="password">Senha</label>
          <input type="password" name="password" id="password" placeholder="" required>
          <button type="submit">Entrar</button>
          <span class="forgot-password">Esqueceu sua senha? <span class="link">Clique aqui!</span></span>
        </form>
        <span class="sign-up">Não tem uma conta? <span class="link">Cadastre-se</span></span>
      </div>
    </main>
  </div>
</body>

</html>