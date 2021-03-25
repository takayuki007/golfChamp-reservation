@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="c-heading p-text-center">新規登録</div>

        <div class="c-form">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="c-form-group">
                    <label for="name" class="c-text">名前</label>

                    <div class="c-input-area">
                        <input type="text" class="c-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="email" class="c-text">メールアドレス</label>

                    <div class="c-input-area">
                        <input type="email" class="c-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="password" class="c-text">パスワード</label>

                    <div class="c-input-area">
                        <input type="password" class="c-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="password-confirm" class="c-text">パスワード確認</label>

                    <div class="c-input-area">
                        <input type="password" class="c-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="c-form-group u-margin-top">
                    <button type="submit" class="c-btn">
                        登録
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
