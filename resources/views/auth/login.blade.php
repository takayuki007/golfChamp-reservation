@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="c-heading p-text-center">ログイン</div>

        <div class="c-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="c-form-group">
                    <label for="email" class="c-text">メールアドレス</label>

                    <div class="c-input-area">
                        <input type="email" class="c-input @error('email') c-is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                        <input type="password" class="c-input @error('password') c-is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="c-invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <div class="c-form-check-area">
<!--                        <div class="form-check">-->
                            <input class="c-form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="c-form-check-label" for="remember">
                                自動でログイン
                            </label>
<!--                        </div>-->
                    </div>
                </div>

                <div class="c-form-group">
                    <button type="submit" class="c-btn">
                        ログイン
                    </button>

                    @if (Route::has('password.request'))
                        <a class="u-login-link" href="{{ route('password.request') }}">
                            →パスワードをお忘れの方はこちら
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
