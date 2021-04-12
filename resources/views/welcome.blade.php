@extends('layouts.app')

@section('content')
<img src="{{ asset('images/top-img-edit.jpg')}}" alt="top-img" class="c-top-img">
<div class="l-margin">
    <div class="l-site-width">
        <h1 class="c-title p-text-center">こんなお悩みありませんか？</h1>
        <div class="c-wrapper u-margin-top">
            <p class="c-text">
                <i class="fas fa-check-square u-check-square"></i><span>ボールの正面を叩いているのにスライスしちゃう</span>
            </p>
            <p class="c-text p-margin-text-top">
                <i class="fas fa-check-square u-check-square"></i><span>しっかり狙ってスイングしているのに空振りしちゃう</span>
            </p>
            <p class="c-text p-margin-text-top">
                <i class="fas fa-check-square u-check-square"></i><span>思ったよりボールが飛ばない</span>
            </p>
            <p class="c-text p-margin-text-top">
                <i class="fas fa-check-square u-check-square"></i><span>適切な道具の選び方がわからない</span>
            </p>
            <p class="c-text p-margin-text-top">
                <i class="fas fa-check-square u-check-square"></i><span>ボールがまっすぐ飛ばない</span>
            </p>
        </div>
    </div>
    <div class="l-bg-green l-margin">
        <div class="l-site-width">
            <h1 class="c-title p-text-center">Golf Champならゴルフのお悩み解決できます！</h1>
            <div class="l-wrapper u-margin-top">
                <div class="c-box">
                    <p class="c-text">1、ゴルフ初心者育成プログラム</p>
                    <img src="{{ asset('images/top-box-img1.jpg')}}" alt="top-box-img1" class="c-box-img p-margin-text-top">
                    <p class="c-text p-margin-text-top">ゴルフ未経験の方でもメキメキ上達できるプログラムをご用意しております。</p>
                </div>
                <div class="c-box">
                    <p class="c-text">2、業界トップのレッスン技術</p>
                    <img src="{{ asset('images/top-box-img2.jpg')}}" alt="top-box-img2" class="c-box-img p-margin-text-top">
                    <p class="c-text p-margin-text-top">コーチは教え方もプロ。その豊富な経験からあなたのクセを見抜き、改善してくれます。</p>
                </div>
                <div class="c-box">
                    <p class="c-text">3、4スタンス理論でタイプ別レッスン</p>
                    <img src="{{ asset('images/top-box-img3.jpg')}}" alt="top-box-img2" class="c-box-img p-margin-text-top">
                    <p class="c-text p-margin-text-top">からだのタイプによって指導法を使い分けます。あなたにマッチした指導法で上達を早めます。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="l-margin">
        <div class="l-site-width">
            <h1 class="c-title p-text-center">ご利用までの3ステップ</h1>
        </div>
        <div class="l-wrapper u-margin-top u-align-items-center">
            <div class="c-blackGreen u-width-fifty">
                <div class="u-block-center">
                    <h1 class="u-obi-title p-text-center">STEP1</h1>
                    <p class="c-text p-text-center u-color-white p-margin-text-top">
                        まずはレッスンの無料体験です。<br>
                        お電話やメールでご連絡ください。
                    </p>
                </div>
            </div>
            <img src="{{ asset('images/obi-img1.jpg')}}" alt="obi-img1" class="c-obi-img">
            <div class="c-blackGreen u-width-ten"></div>
        </div>
        <div class="l-wrapper u-margin-top u-align-items-center">
            <div class="c-blackGreen u-width-ten"></div>
            <img src="{{ asset('images/obi-img2.jpg')}}" alt="obi-img2" class="c-obi-img">
            <div class="c-blackGreen u-width-fifty">
                <div class="u-block-center">
                    <h1 class="u-obi-title p-text-center">STEP2</h1>
                    <p class="c-text p-text-center u-color-white p-margin-text-top">
                        ゴルフ歴などを伺いながら<br>
                        レッスン方針を決定いたします。
                    </p>
                </div>
            </div>
        </div>
        <div class="l-wrapper u-margin-top u-align-items-center">
            <div class="c-blackGreen u-width-fifty">
                <div class="u-block-center">
                    <h1 class="u-obi-title p-text-center">STEP3</h1>
                    <p class="c-text p-text-center u-color-white p-margin-text-top">
                        コーチがお客様に合わせた<br>
                        レッスンを行います。
                    </p>
                </div>
            </div>
            <img src="{{ asset('images/obi-img3.jpg')}}" alt="obi-img3" class="c-obi-img">
            <div class="c-blackGreen u-width-ten"></div>
        </div>
    </div>
    <div class="l-bg-green l-margin">
        <div class="l-site-width">
            <h1 class="c-title p-text-center">よくある質問</h1>
            <div class="c-question-area l-margin">
                <div class="c-question">
                    <p class="c-text u-question-text">Q1、全くのゴルフ未経験でも問題ありませんか？</p>
                </div>
                <div class="c-answer">
                    <p class="c-text">
                        A1、問題ありません。お客様のレベルに沿ったレッスンを行っておりますので、
                        ご予約時にゴルフ未経験とお伝えください。カウンセリング時に運動経験などを伺いながら
                        一緒にレッスン方針を決めていきましょう！
                    </p>
                </div>
            </div>
            <div class="c-question-area l-margin">
                <div class="c-question">
                    <p class="c-text u-question-text">Q2、アプローチやパターなど部分的なレッスンも可能ですか？</p>
                </div>
                <div class="c-answer">
                    <p class="c-text">
                        A2、問題ありません。ゴルフを数年経験されているお客様だとそのようなご要望が多いため、
                        経験豊富なコーチ陣から適切なアドバイスが受けられます。
                    </p>
                </div>
            </div>
            <div class="c-question-area l-margin">
                <div class="c-question">
                    <p class="c-text u-question-text">Q3、コースのマナーも含めて全体的に教えて欲しい！</p>
                </div>
                <div class="c-answer">
                    <p class="c-text">
                        A3、問題ありません。ある程度レッスンを受講いただきますと、コーチよりラウンドのご提案をさせていただきます。
                        その際にコースを回る上でのマナーやルールなどを改めてお伝えいたします。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="l-margin">
        <div class="l-site-width">
            <h1 class="c-title p-text-center">お申し込みはこちらから！</h1>
            <div class="c-wrapper u-margin-top u-height-adjust">
                <div class="c-btn-area u-block-center">
                    <a href="{{ route('register') }}" class="c-btn-second">新規登録はこちら</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
