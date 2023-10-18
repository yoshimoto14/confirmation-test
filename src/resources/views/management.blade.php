@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/management.css')}}">
@endsection

@section('content')
<div class="search__content">
    <div class="search__heading">
        <h2>管理システム</h2>
    </div>
    <form class="search-form" action="/contacts/search" method="get">
        @csrf
        <div class="search-form__flex">
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="last_name" value="{{old('last_name')}}">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--radio">
                        <label><input class="form__input--radio-item" type="radio" name="gender" value="1|2" checked><span class="form__input--radio-text">全て</span></label>
                        <label><input class="form__input--radio-item" type="radio" name="gender" value="1"><span class="form__input--radio-text">男性</span></label>
                        <label><input class="form__input--radio-item" type="radio" name="gender" value="2"><span class="form__input--radio-text">女性</span></label>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">登録日</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="date" name="created_at">
                        <span>~</span>
                        <input type="date" name="created_at">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" value="{{old('email')}}">
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">検索</button>
            </div>
            <div class="form__reset">
                <a class="form__reset--link" href="/contacts/search">リセット</a>
            </div>
        </div>
    </form>
    {{$contacts->links()}}
    <div class="contact-table">
        <table class="contact-table__inner">
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    <span class="contact-table__header-span">ID</span>
                    <span class="contact-table__header-span">お名前</span>
                    <span class="contact-table__header-span">性別</span>
                    <span class="contact-table__header-span">メールアドレス</span>
                    <span class="contact-table__header-span">ご意見</span>
                </th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="contact-table__row">
                <td class="contact-table__item">
                    <div class="search__item">
                        <p class="search__item-p">{{$contact->id}}</p>
                        <p class="search__item-p">{{$contact->last-name}}</p>
                        <p class="search__item-p">{{$contact->gender}}</p>
                        <p class="search__item-p">{{$contact->created_at}}</p>
                        <p class="search__item-p">{{$contact->email}}</p>
                    </div>
                </td>
                <td class="contact-table__item">
                    <form class="delete-form" action="/contacts/delete" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="delete-form__button">
                            <input type="hidden" name="id" value="{{$contact['id']}}">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection