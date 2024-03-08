<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
              fashionablyLate
            </a>
          </div>
        <a href="/register" class="loginButtonLink" >
            <button class="loginButton">register</button>
        </a>
    </header>


    <main>
        <div class="login-form">
        <h2 class="loginTitle">Login</h2>
        <section class="loginSection">
            <form class="loginForm" action="/admin" method="post">
                @csrf
                <label for="email">メールアドレス</label>
                <input type="email" id="email" placeholder="例: test@example.com">

                <label for="password">パスワード</label>
                <input type="password" id="password" placeholder="例: coachtech1106">

                <button type="submit">ログイン</button>
            </form>
        </section>
    </div>
    </main>

</body>
</html>