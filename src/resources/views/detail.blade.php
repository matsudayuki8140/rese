@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('main')
<div class="content-inner">
    <div class="content-shop">
        <div class="shop-title">
            <a href="/" class="shop-return"><span>＜</span></a>
            <h2 class="shop-name">仙人</h2>
        </div>
        <img src="{{ asset('storage/images/sushi.jpg') }}" alt="sushi.jpg" class="shop-image">
        <div class="shop-tag">
            <span>#東京都</span>
            <span>#寿司</span>
        </div>
        <p class="shop-text">
            料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追求したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。
        </p>
    </div>
    <div class="content-rese">
        <form action="post">
            <div class="rese-form">
                <div class="rese-top">
                    <h2 class="rese-title">予約</h2>
                    <input type="date" class="rese-input__date">
                    <input type="time" class="rese-input">
                    <input type="number" class="rese-input">
                    <div class="rese-table">
                        <table>
                            <tr>
                                <th class="rese-table__header">Shop</th>
                                <td class="rese-table__data">仙人</td>
                            </tr>
                            <tr>
                                <th class="rese-table__header">Date</th>
                                <td class="rese-table__data">2021-04-01</td>
                            </tr>
                            <tr>
                                <th class="rese-table__header">Time</th>
                                <td class="rese-table__data">17:00</td>
                            </tr>
                            <tr>
                                <th class="rese-table__header">Number</th>
                                <td class="rese-table__data">1人</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <button class="rese-button">予約する</button>
            </div>
        </form>
    </div>
</div>
@endsection