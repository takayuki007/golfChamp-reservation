@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="c-wrapper">
            <h1 class="c-title p-text-center">プロフィール</h1>
        </div>
        <div class="c-form">
            <form method="post" action="{{ route('reservation.store') }}">
                @csrf
                <div class="c-form-group">
                    <label for="file" class="c-text">■プロフィール画像</label>

                    <div class="c-input-area">
                        <div class="c-img-area">
                            <input type="file" class="c-file js-img-input @error('file') c-is-invalid @enderror" value="{{ old('file') }}" name="img" required>
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
                        <select name="golf" class="c-input @error('golf') c-is-invalid @enderror">
                            <option value="">選択してしてください</option>
                            <option value="1">1年未満</option>
                            <option value="2">1年以上3年未満</option>
                            <option value="3">3年以上</option>
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

                    <div class="c-input-area">
                        <textarea name="note" class="c-textarea" cols="30" rows="10" placeholder="何かあればご記入ください"></textarea>

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
