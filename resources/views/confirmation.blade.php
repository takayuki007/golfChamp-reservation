@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="c-reservation-group">
            <h1 class="c-title p-text-center">予約確認</h1>
            <form method="post">

                <div class="c-reservation">
                    <p class="c-text">■日時</p>
                    <p class="c-text">2021/2/14(月)</p>
                </div>
                <div class="c-reservation">
                    <p class="c-text">■場所</p>
                    <p class="c-text">日吉ゴルフ練習場（名古屋市中村区岩塚神明西）</p>
                </div>
                <div class="c-reservation">
                    <p class="c-text">■時間</p>
                    <p class="c-text">10：30〜11：30</p>
                </div>
                <div class="c-reservation">
                    <p class="c-text">■コーチ</p>
                    <p class="c-text">エリック・カタオカ</p>
                </div>
                <div class="c-form-group u-margin-top">
                    <button type="submit" class="c-btn">
                        予約する
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
