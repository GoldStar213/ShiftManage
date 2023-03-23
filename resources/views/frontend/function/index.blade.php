
@extends('layouts.frontend')
@section('title','機能について | シフト管理システム・アプリ【Airシフト】')


@section('head')
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script src="{{ asset('assets/js/style.js') }}"></script>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description"
        content="【リクルート：Airシフト】Airシフトの機能についてご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト">
    <meta property="og:title" content="機能について | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/function/">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】Airシフトの機能についてご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="https://airregi.jp/shift/function/">
    <link rel="apple-touch-icon" href="https://cdn.airregi.jp/res/apple-touch-icon.png?v=610a856">
    <link rel="shortcut icon" href="https://cdn.airregi.jp/res/favicon.ico?v=4341218">

    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/function.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/page.css') }}">
</head>
@endsection


@section('content')
        <main>
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__inner">

                        <li class="breadcrumb__item"><a href="/">Airシフト</a>&nbsp;&gt;&nbsp;</li>
                        <li class="breadcrumb__item"><span>機能について</span></li>
                    </ul>
                </div>
                <section class="ability">
                    <div class="ability__inner">
                        <h1 class="ability__title">機能について</h1>
                        <p class="ability__description">Airシフトの機能についてご紹介します。</p>
                        <ul class="ability__list">
                            <li class="ability__list__management"><a href="/function/management/"
                                    data-analysis-trigger="function_management">
                                    <div class="ability__list__detail">
                                        <h2 class="ability__list__title">シフト管理</h2>
                                        <div class="ability__list__description">
                                            スタッフ専用アプリ「シフトボード」と連携することで、スタッフが提出した希望シフトがそのままシフト表に反映され、転記の手間がなくなります。<br>また、チャット機能によって、シフトの調整ややり取りがカンタンにでき、決まったシフトは自動的にスタッフに共有されます。
                                        </div>
                                        <div class="ability__list__main">
                                            <h3 class="ability__list__main__title">【主な機能】</h3>
                                            <ul>
                                                <li>・スタッフからのシフトの収集</li>
                                                <li>・シフトの作成</li>
                                                <li>・シフトの調整</li>
                                                <li>・シフトの共有</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="ability__list__timecard"><a href="/function/timecard/"
                                    data-analysis-trigger="function_timecard">
                                    <div class="ability__list__detail">
                                        <h2 class="ability__list__title">タイムカード・勤怠管理</h2>
                                        <div class="ability__list__description">
                                            タイムカード（出退勤打刻）機能は無料で使い続けられます。<br>労働時間や設定した時給等を元に、概算人件費をシミュレーションすることができます。
                                        </div>
                                        <div class="ability__list__main">
                                            <h3 class="ability__list__main__title">【主な機能】</h3>
                                            <ul>
                                                <li>・タイムカード（出退勤・休憩打刻）</li>
                                                <li>・概算人件費シミュレーション</li>
                                                <li>・給与計算ソフトへのデータ送信</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="ability__list__help"><a href="/function/help/" data-analysis-trigger="function_help">
                                    <div class="ability__list__detail">
                                        <h2 class="ability__list__title">ヘルプ機能</h2>
                                        <div class="ability__list__description">
                                            通常スタッフで埋まらないシフトがあれば、シフト1枠単位で、お店の外からヘルプスタッフを募集・採用できます。Airシフトの継続利用（有料）にお申込みいただいた場合、追加料金なしで利用できます。
                                        </div>
                                        <div class="ability__list__main">
                                            <h3 class="ability__list__main__title">【主な機能】</h3>
                                            <ul>
                                                <li>・募集情報の作成、シフトボードへの掲載</li>
                                                <li>・応募者の履歴書情報の確認</li>
                                                <li>・採用／不採用の決定と通知</li>
                                                <li>・採用者とのチャット</li>
                                            </ul>
                                        </div>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </section>
                <div class="freetrial">
                    <div class="freetrial__inner">
                        <p class="freetrial__title">最大2ヶ月（利用開始月と翌月）は無料で体験できます</p>
                        <p class="freetrial__button freetrial__register__button">
                            <a href="http://localhost:5500/airid">アカウント登録</a>
                        </p>
                        <p class="freetrial__button freetrial__login__button">
                            <a href="http://localhost:5500" target="_blank" rel="noopener" data-analysis-trigger="login_02">
                            AirIDをお持ちの方
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </main>

@endsection
@section('jscript')
    <script type="application/ld+json">{
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement":
        [
          {
            "@type": "ListItem",
            "position": 1,
            "item": {
              "@id": "https://airregi.jp/top/",
              "name": "Air ビジネスツールズ"
            }
          },
          {
            "@type": "ListItem",
            "position": 2,
            "item":
              {
                "@id": "https://airregi.jp/shift/",
                "name": "Airシフト"
              }
          },
          {
            "@type": "ListItem",
            "position": 3,
            "item":
              {
                "@id": "https://airregi.jp/shift/function/",
                "name": "機能について"
              }
          }
        ]
    }
    </script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/s_code.js') }}"></script>
    <script>
        /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
        var s_code = s.t();
        if (s_code) document.write(s_code);
    </script>
@endsection
