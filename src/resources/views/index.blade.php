@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('header')
<div class="search">
    <select name="area" id="area" class="search-select">
        <option value="all" selected>All area</option>
        <option value="東京都">東京都</option>
        <option value="大阪府">大阪府</option>
        <option value="福岡県">福岡県</option>
    </select>
    <div class="search-deco"></div>
    <select name="genre" id="genre" class="search-select">
        <option value="all" selected>All genre</option>
        <option value="寿司">寿司</option>
        <option value="焼肉">焼肉</option>
        <option value="居酒屋">居酒屋</option>
        <option value="イタリアン">イタリアン</option>
        <option value="ラーメン">ラーメン</option>
    </select>
    <div class="search-deco"></div>
    <img src="{{ asset('storage/icon/search.svg') }}" alt="" class="search-icon" width=20 height=20>
    <input type="search" class="search-keyword" placeholder="Search ...">
</div>
@endsection

@section('main')
<div class="container">
    <div class="card">
        <div class="card-top">
            <img src="{{ asset('storage/images/sushi.jpg') }}" alt="sushi.jpg" class="card-image">
        </div>
        <div class="card-bottom">
            <h3 class="card-title">仙人</h3>
            <span class="card-tag">#東京都</span>
            <span class="card-tag">#寿司</span>
            <div class="card-button">
                <span class="card-detail">詳しく見る</span>
                <img src="{{ asset('storage/icon/unfavorite.svg') }}" alt="favorite.svg" class="card-favo">
            </div>
        </div>
    </div>
</div>
@endsection