@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="c-wrapper">
            <h1 class="c-title p-text-center">予約</h1>
            <div class="u-space-area">
                <p class="c-text u-color-red">必ずスケジュールをご確認の上、ご予約ください。</p>
                <a class="c-text" href="https://takayuki007.github.io/golfChamp/schedule.html" target="_blank">スケジュールのご確認はコチラをクリック！</a>
            </div>
        </div>
        <div class="c-form">
            <form method="post" action="{{ route('reservation.store') }}">
                @csrf
                <div class="c-form-group">
                    <label for="date" class="c-text">■日時</label>

                    <div class="c-input-area">
                        <input type="date" class="c-input @error('date') c-is-invalid @enderror" value="{{ old('date') }}" name="date" required>

                        @error('date')
                        <span class="c-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="time_id" class="c-text">■時間</label>

                    <div class="c-input-area">
                        <select name="time_id" class="c-input @error('time_id') c-is-invalid @enderror" value="{{ old('time') }}">
                            <option value="">選択してしてください</option>
                            @foreach($times as $time)
                                <option value="{{ $time->id }}">{{ $time->time }}</option>
                            @endforeach
                        </select>

                        @error('time_id')
                        <span class="c-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="coach_id" class="c-text">■コーチ</label>

                    <div class="c-input-area">
                        <select name="coach_id" class="c-input @error('coach_id') c-is-invalid @enderror" value="{{ old('coach') }}">
                            <option value="">選択してください</option>
                            @foreach($coaches as $coach)
                                <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                            @endforeach
                        </select>

                        @error('coach_id')
                        <span class="c-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <label for="location_id" class="c-text">■レッスン場所</label>

                    <div class="c-input-area">
                        <select name="location_id" class="c-input @error('location_id') c-is-invalid @enderror" value="{{ old('location') }}">
                            <option value="">選択してください</option>
                            @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}({{ $location->address }})</option>
                            @endforeach
                        </select>

                        @error('location_id')
                        <span class="c-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="c-form-group">
                    <button type="submit" class="c-btn">
                        予約する
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
