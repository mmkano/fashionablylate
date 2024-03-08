@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')

<div class="contact-form">
        <h2>Contact</h2>
        <form class="form" action="/confirm" method="post">
          @csrf
            <!--name-->
            <div class="form__group">
              <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
              </div>
              <div class="form__group-content">
                <div class="form__input--text">
                  <input type="text" id="name-area" name="first" placeholder="例: 山田" value="{{ old('first') }}" />
                  <input type="text" id="name-line" name="last" placeholder="例: 太郎" value="{{ old('last') }}"/>
                </div>
                <div class="form__error">
                    @error('first')
                  {{ $message }}
                  @enderror
                  @error('last')
                  {{ $message }}
                  @enderror
                  </div>
              </div>
            </div>

            <!--gender-->
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <fieldset class="radio-1">
                        <label><input type="radio" name="gender" value="男性" checked/>男性</label>
                        <label><input type="radio" name="gender" value="女性"/>女性</label>
                        <label><input type="radio" name="gender" value="その他"/>その他</label>
                    </fieldset>
                    <div class="form__error">
                  @error('gender')
                  {{ $message }}
                  @enderror
                  </div>
                </div>
            </div>

            <!--email-->
            <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">メールアドレス</span>
                  <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}"/>
                  </div>
                  <div class="form__error">
                  @error('email')
                  {{ $message }}
                  @enderror
                  </div>
                </div>
              </div>

              <!--tell-->
            <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">電話番号</span>
                  <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                  <div id="tel" class="form__input--text">
                    <input type="tel" id="tel-area" name="area" placeholder="080" class="tel-input" value="{{ old('area') }}">
                    <span class="tel-separator">-</span>
                    <input type="tel" id="tel-prefix" name="prefix" placeholder="1234" class="tel-input" value="{{ old('prefix') }}">
                    <span class="tel-separator">-</span>
                    <input type="tel" id="tel-ine" name="line" placeholder="5678" class="tel-input" value="{{ old('line') }}">
                  </div>
                  <div class="form__error">
                    @error('area')
                  {{ $message }}
                  @enderror
                  </div>
                </div>
              </div>

            <!--address-->
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">住所</span>
                  <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
                  </div>
                  <div class="form__error">
                    @error('address')
                  {{ $message }}
                  @enderror
                  </div>
                </div>
              </div>

              <!--building-->
              <div class="form__group" id="building">
                <div class="form__group-title">
                  <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}"/>
                </div>
                </div>
              </div>

              <!--typeofinquiry-->
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">お問い合わせの種類</span>
                  <span class="form__label--required">※</span>
                </div>
                <div id="select-box" class="form__group-content">
                  <div class="form__input--text">
                  <label for="inquiry" class="selectbox-3">
                        <select id="inquiry" name="category_id" value="{{ old('category_id') }}">
                            <option value="">選択してください</option>
                            @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->type }}</option>
                    @endforeach
                        </select>
                    </label>
                  </div>
                  <div class="form__error">
                    @error('category_id')
                  {{ $message }}
                  @enderror
                  </div>
                </div>
              </div>


              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">お問い合わせ内容</span>
                  <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('content') }}"></textarea>
                  </div>
                  <div class="form__error">
                    @error('content')
                  {{ $message }}
                  @enderror
                  </div>
                </div>
              </div>

              <!--button-->
              <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
              </div>
        </form>
    </div>
@endsection
