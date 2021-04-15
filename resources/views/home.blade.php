@extends('layouts.app')

@section('content')
<div class="l-margin">
    <div class="l-site-width">
        <div class="l-two-column">

            <div class="l-main-bar">
                <h1 class="c-title p-text-center">予約リスト</h1>

                <ul class="c-reservation-ul">
                    @foreach($reservations as $reservation)
                    <li class="c-reservation-li">
                        <p class="c-text">■日時</p>
                        <p class="c-text">{{ $reservation->date }}</p>
                        <p class="c-text">■時間</p>
                        <p class="c-text">{{ $reservation->time->time}}（10分前集合）</p>
                        <p class="c-text">■場所</p>
                        <p class="c-text">{{ $reservation->location->name}}</p>
                        <p class="c-text">（{{ $reservation->location->address}}）</p>
                        <a class="c-text" href="{{ $reservation->location->url }}" target="_blank">GoogleMap</a>
                        <p class="c-text">■コーチ</p>
                        <p class="c-text">{{ $reservation->coach->name}}</p>
                    </li>
                    @endforeach
                </ul>

                {{ $reservations->links('vendor.pagination.home-pagination') }}
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
