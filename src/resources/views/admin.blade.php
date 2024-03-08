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
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
              fashionablyLate
            </a>
          </div>
          <a href="/login" class="loginButtonLink" >
          <button class="loginButton">logout</button>
          </a>
    </header>

    <main>
        <div class="admin-form">
            <h2 id="adminTitle">Admin</h2>
        <div class="admin__content">
            <form class="create-form" action="/admin/search" method="post">
                @csrf

                <div class="name-form__item" id="name-item">
                    <input class="create-form__item-input" id="name" type="text" name="content" placeholder="名前やメールアドレスを入力してください">
                </div>

                <div class="gender__select--text">
                    <label for="gender" class="selectbox-3">
                        <select id="gender" name="gender">
                            <option selected>性別</option>
                            <option value="male">男性</option>
                            <option value="female">女性</option>
                            <option value="other">その他</option>
                        </select>
                    </label>
                </div>

                <div class="inquiry__select--text">
                    <label for="inquiry" class="selectbox-3">
                        <select id="inquiry" name="inquiry_type">
                            <option selected>お問い合わせの種類</option>
                            <option value="delivery">商品のお届けについて</option>
                            <option value="exchange">商品の交換について</option>
                            <option value="trouble">商品トラブル</option>
                            <option value="shop_contact">ショップへのお問い合わせ</option>
                            <option value="other">その他</option>
                        </select>
                    </label>
                </div>

                <div class="date-form__item">
                    <label class="data-edit">
                    <input class="create-form__item-input" id="date" type="date" name="birthday">
                    </label>
                </div>

                <div class="create-form__button">
                <button class="create-form__button-submit" id="submit" type="submit">検索</button>

                </div>

                <div class="create-form__button">
                    <button class="create-form__button-reset" id="reset" type="reset">リセット</button>
                </div>
            </form>
        </div>

        <div class="admin_sub">
            <div class="buttons">
        <div class="export-button">
        <form action="/admin/export" method="GET">
            <button type="submit" class="export-btn">エクスポート</button>
        </form>
        </div>

        <div class="pagination">
        {{ $contacts->links('vendor.pagination.simple-custom') }}
    </div>
    </div>
    </div>

        <div class="admin-table" >
        <table class="admin-table__items">
            <thead>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->first . ' ' . $contact->last }}</td>
                <td>{{ $contact->gender }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->category_id }}</td>
                <td>
                    <button class="edit-btn">詳細</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </main>

</body>
</html>