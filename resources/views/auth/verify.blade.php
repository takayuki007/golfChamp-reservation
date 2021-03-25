@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="c-wrapper">
                <h1 class="c-title">ご確認をお願いいたします。</h1>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert c-alert-success" role="alert">
                             新しい認証メールをお送りしました。
                        </div>
                    @endif

                    <p class="c-text">ご登録いただいたメールアドレスに認証メールをお送りしましたので、ご確認をお願いいたします。</p>
                    <span class="c-text">メールが届かない場合は、</span><a class="c-text" href="{{ route('verification.resend') }}">コチラをクリックしてください。</a>
                </div>

        </div>
    </div>
</div>
@endsection
