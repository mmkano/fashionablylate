<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fashionablyLate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>

<body>
    <main>
        <form class="form">
        <div class="thanks-ttl">
            <h1>Thank you</h1>
        </div>


        <div class="content">
            <p>お問い合わせありがとうございました</p>
            <a href="{{ url('/') }}" class="home-button">HOME</a>
        </div>
        </form>
    </main>
</body>

</html>
