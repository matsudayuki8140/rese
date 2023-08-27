@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('main')
<div class="auth-card">
    <div class="auth-card__top">
        <p class="auth-card__title">Registration</p>
    </div>
    <div class="auth-card__bottom">
        <form action="" method="post">
            <div class="auth-card__row">
                <img src="{{ asset('storage/icon/username.svg') }}" alt="username.svg" class="auth-card__icon" width="20" height="20">
                <input type="text" class="auth-card__input" placeholder="Username">
            </div>
            <div class="auth-card__row">
                <img src="{{ asset('storage/icon/email.svg') }}" alt="username.svg" class="auth-card__icon" width="20" height="20">
                <input type="text" class="auth-card__input" placeholder="Email">
            </div>
            <div class="auth-card__row">
                <img src="{{ asset('storage/icon/password.svg') }}" alt="username.svg" class="auth-card__icon" width="20" height="20">
                <input type="text" class="auth-card__input" placeholder="Password">
            </div>
            <div class="auth-card__button-container">
                <button class="auth-card__button">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection