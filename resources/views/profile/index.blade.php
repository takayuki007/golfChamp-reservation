@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="c-wrapper">
            <h1 class="c-title p-text-center">プロフィール</h1>
        </div>
        <div class="c-form">
            <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="c-form-group">
                    <label for="file" class="c-text">■プロフィール画像</label>

                    <div class="c-input-area">
                        <div class="c-img-area">
                            <input type="file" name="img" class="c-file js-img-input @error('file') c-is-invalid @enderror" value="{{ old('img') }}" required>
                            <img src="" alt="" class="c-prof-img js-prof-img">
                        </div>

                        @error('file')
                        <span class="c-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="golf" class="c-text">■ゴルフ歴について</label>

                    <div class="c-input-area">
                        <select name="golf_id" class="c-input @error('golf') c-is-invalid @enderror">
                            <option value="">選択してしてください</option>
                            @foreach($histories as $history)
                                <option value="{{ $history->id }}" @if(old('golf_id')== $history->id) selected  @endif>{{ $history->year }}</option>
                            @endforeach
                        </select>

                        @error('golf')
                        <span class="c-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="note" class="c-text">■備考</label>
                    <p class="c-text p-text-right"><span class="c-text js-show-count">0</span>/200</p>
                    <div class="c-input-area">
                        <textarea name="note" class="c-textarea js-input-count js-keyup-count" cols="30" rows="10" placeholder="何かあればご記入ください">{{ old('note') }}</textarea>

                        @error('note')
                        <span class="c-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <button type="submit" class="c-btn">
                        登録する
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
