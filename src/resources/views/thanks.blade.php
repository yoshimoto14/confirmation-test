@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
        <h2>ご意見ありがとうございました。</h2>
    </div>
    <form class="form">
        <div class="form__button">
            <button class="form__button-submit" type="submit">トップページ</button>
        </div>
    </form>
</div>
@endsection