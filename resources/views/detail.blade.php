@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="l-two-column">

            <div class="l-main-bar">
                <h1 class="c-title p-text-center">評価</h1>

                <detail-component :date="{{ json_encode($reservation->date) }}"
                                  :time="{{ json_encode($reservation->time->time) }}"
                                  :name="{{ json_encode($reservation->location->name) }}"
                                  :address="{{ json_encode($reservation->location->address) }}"
                                  :url="{{ json_encode($reservation->location->url) }}"
                                  :coach="{{ json_encode($reservation->coach->name) }}"></detail-component>

            </div>

            <div class="l-side-bar">
                @if(empty($profile))
                    <p class="p-text-center"><a href="{{ route('profile.index') }}" class="c-text">プロフィール</a></p>
                @else
                    <p class="p-text-center"><a href="{{ route('profile.edit') }}" class="c-text">プロフィール</a></p>
                @endif
                <p class="p-text-center p-margin-text-top"><a href="{{ route('reservation') }}" class="c-text">レッスン予約</a></p>
<!--                <p class="p-text-center p-margin-text-top"><a href="#" class="c-text">退会</a></p>-->
            </div>


        </div>
    </div>
</div>
@endsection
