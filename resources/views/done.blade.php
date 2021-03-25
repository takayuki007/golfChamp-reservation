@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">

        <div class="c-wrapper">

            <h1 class="c-title p-text-center">予約完了</h1>

            <p class="c-text">
                ご予約が完了しました。<br>
                ご予約内容はマイページでご確認いただけます。<br>
                では、当日お会いできるのを楽しみにしております。
            </p><br>

            <a href="{{ route('home') }}" class="c-login-link u-margin-top">→マイページはコチラ</a>

        </div>

    </div>
</div>
@endsection
