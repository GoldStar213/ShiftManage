@extends('layouts.frontend')
@section('title','資料請求 | シフト管理システム・アプリ【Airシフト】')

@section('content')
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style >
    <script src="{{ asset('assets/js/style.js') }}">
    </script>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description"
        content="【リクルート：Airシフト】無料体験期間として最大2か月は0円。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト,資料請求">
    <meta property="og:title" content="資料請求 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】無料体験期間として最大2か月は0円。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="robots" content="noindex">
    <link rel="apple-touch-icon" href="{{ asset('assets/image/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/request.css') }}">
</head>
@endsection
@section('content')
        <main>
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__inner">
                        <li class="breadcrumb__item"><a href="/">Airシフト</a>&nbsp;&gt;&nbsp;</li>
                        <li class="breadcrumb__item"><span>資料請求</span></li>
                    </ul>
                </div>
                <section class="thanks" id="thanks">
                    <div class="thanks__inner">
                        <h1 class="thanks__caption">資料請求ありがとうございます</h1>
                        <p class="thanks__text">入力していただいたメールアドレス宛てにご案内メールをお送りします。<br>メールの案内にしたがって、資料をダウンロードしてください。</p>
                    </div>
                </section>
                <div class="freetrial">
                    <div class="freetrial__inner">
                        <p class="freetrial__title">最大2ヶ月（利用開始月と翌月）は無料で体験できます</p>
                        <p class="freetrial__button freetrial__register__button"><a
                                href="http://localhost:5500/airid"
                                target="_blank" rel="noopener" data-analysis-trigger="entry_02">アカウント登録</a></p>
                        <p class="freetrial__button freetrial__login__button"><a href="http://localhost:5500/"
                                target="_blank" rel="noopener" data-analysis-trigger="login_02">AirIDをお持ちの方</a></p>
                    </div>
                </div>
            </div>
        </main>
@endsection

@section('jscript')
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="{{ asset('assets/js/s_code.js') }}"></script>
    <script>
        /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
        var s_code = s.t();
        if (s_code) document.write(s_code);
    </script>
@endsection
