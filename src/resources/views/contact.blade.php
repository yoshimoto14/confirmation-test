@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="form__input--text-last-name" type="text" name="last-name" value="{{old('last-name')}}">
                    <input class="form__input--text-first-name" type="text" name="first-name" value="{{old('first-name')}}">
                </div>
                <div class="form__example--text">
                    <div class="form__example--text-item form__example--text-last-name">例）山田</div>
                    <div class="form__example--text-item form__example--text-first-name">例）太郎</div>
                </div>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('last-name')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('first-name')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label><input class="form__input--radio-item" type="radio" name="gender" value="1" checked><span class="form__input--radio-text">男性</span></label>
                    <label><input class="form__input--radio-item" type="radio" name="gender" value="女性"><span class="form__input--radio-text">女性</span></label>
                </div>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('gender')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{old('email')}}">
                </div>
                <div class="form__example--text">
                    <div class="form__example--text-item">例）test@example.com</div>
                </div>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('email')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <span class="form__input--mark">〒</span>
                    <input type="text" pattern="\d{3}-\d{4}" name="postcode" value="{{old('postcode')}}">
                </div>
                <div class="form__example--text">
                    <div class="form__example--text-item">例）123-4567</div>
                </div>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('postcode')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{old('address')}}">
                </div>
                <div class="form__example--text">
                    <div class="form__example--text-item">例）東京都渋谷区千駄ヶ谷1-2-3</div>
                </div>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('address')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building_name" value="{{old('building_name')}}">
                </div>
                <div class="form__example--text">
                    <div class="form__example--text-item">例）千駄ヶ谷マンション101</div>
                </div>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('building_name')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ご意見</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="opinion" value="{{old('opinion')}}"></textarea>
                </div>
            </div>
        </div>
        <div class="form__error">
            <!-- バリデーション機能 -->
            @error('opinion')
            <ul class="form__error--list">
                <li class="form__error--item">{{$message}}</li>
            </ul>
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </form>
</div>
@endsection