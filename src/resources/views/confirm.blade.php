@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm-form">
            <h2>Confirm</h2>
            <form class="form" action="/thanks" method="POST">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">
                            <input type="text" name="name" value="{{ $contact ['first'] }} {{ $contact['last'] }}" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            <input type="text" name="gender" value="{{ $contact ['gender'] }}" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="{{ $contact ['email'] }}" />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            <input type="tel" name="tel" value="{{ $contact['tel'] }}" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="{{ $contact ['address'] }}" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <input type="text" name="building" value="{{ $contact ['building'] ?? '' }}" />
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                        <td class="confirm-table__text">
                            <input type="text" name="category_id" value="{{ $contact ['category_id'] }}">
                        </td>
                    </tr>

                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            <input type="text" name="content" value="{{ $contact ['content'] }}" />
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                    <a href="/" class="form__button-revice">修正</a>
                </div>
            </form>
        </div>
@endsection