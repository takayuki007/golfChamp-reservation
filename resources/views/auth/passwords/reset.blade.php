@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <h1 class="c-heading p-text-center">パスワードリセット</h1>

        <div class="c-form">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="c-form-group">
                    <label for="email" class="c-text">メールアドレス</label>

                    <div class="c-input-area">
                        <input type="email" class="c-input @error('email') c-is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="c-invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="password" class="c-text">パスワード</label>

                    <div class="c-input-area">
                        <input type="password" class="c-input @error('password') c-is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="c-invalid-feedback" role="alert">
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
                        パスワードリセット
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
