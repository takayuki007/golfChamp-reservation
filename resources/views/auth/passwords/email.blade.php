@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">

        <h1 class="c-heading p-text-center">パスワードリセット</h1>

        <div class="c-form">
            @if (session('status'))
                <div class="alert c-alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
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
                    <button type="submit" class="c-btn">
                        パスワードリセットリンク送信
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>
@endsection
