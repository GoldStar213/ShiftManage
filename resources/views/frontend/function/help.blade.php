@extends('layouts.frontend')
@section('title', 'ヘルプ機能 | シフト管理システム・アプリ【Airシフト】')

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
        content="【リクルート：Airシフト】Airシフトのヘルプ機能では、単発バイトの募集、応募者情報の確認、採用、採用者とのチャットのやり取りができます。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト">
    <meta property="og:title" content="ヘルプ機能 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/function/help/">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】Airシフトのヘルプ機能では、単発バイトの募集、応募者情報の確認、採用、採用者とのチャットのやり取りができます。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="https://airregi.jp/shift/function/help/">
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
                        <li class="breadcrumb__item"><a href="/function">機能について</a>&nbsp;&gt;&nbsp;</li>
                        <li class="breadcrumb__item"><span>ヘルプ機能</span></li>
                    </ul>
                </div>
                <div class="ability">
                    <div class="ability__inner">
                        <h1 class="ability__title">ヘルプ機能</h1>
                        <p class="ability__sub__description">
                            通常スタッフで埋まらないシフトがあれば、シフト1枠単位で、お店の外からヘルプスタッフを募集・採用できます。<br>Airシフトの継続利用（有料）にお申込みいただいた場合、追加料金なしで利用できます。
                        </p>
                        <div class="ability__section">
                            <div class="ability__entries">
                                <div class="entries_divide" style="margin-bottom: 72px">
                                    <div class="ability__entry ability__entry-1">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability06_img01" title="募集情報の作成・シフトボードへの掲載"
                                                data-analysis-trigger="ability_06_01"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img01.png') }}"
                                                    data-aspectratio="1.417/1" width="320" height="226"
                                                    alt="募集情報の作成・シフトボードへの掲載"></a></figure>
                                        <h2 class="ability__entry__title">募集情報の作成・<br>シフトボードへの掲載</h2>
                                        <p class="ability__entry__text">
                                            シフトが埋まらないときに、シフト表上からシフト1枠単位（24時間以内の単発）で単発バイトを募集できます。</p>
                                        <p class="ability__entry__text ability__entry__link">※募集先：<a
                                                class="ability__external__link" href="https://shiftboard.jp/help/onetime/"
                                                target="_blank" rel="noopener">シフトボード</a>「単発バイト」タブ</p>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img01">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img01.png') }}" alt="募集情報の作成・シフトボードへの掲載"
                                                    width="700" height="494"></figure>
                                            <p class="mfp-modal__title">募集情報の作成・シフトボードへの掲載</p>
                                            <p class="mfp-modal__caption">
                                                シフトが埋まらないときに、シフト表上からシフト1枠単位（24時間以内の単発）で単発バイトを募集できます。<br>※募集先：<a
                                                    class="ability__external__link"
                                                    href="https://shiftboard.jp/help/onetime/" target="_blank"
                                                    rel="noopener">シフトボード</a>「単発バイト」タブ</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-2">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability06_img02" title="応募者の履歴書情報の確認"
                                                data-analysis-trigger="ability_06_02"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img02.png') }}"
                                                    data-aspectratio="1.417/1" width="320" height="226"
                                                    alt="応募者の履歴書情報の確認"></a></figure>
                                        <h2 class="ability__entry__title">応募者の履歴書情報の確認</h2>
                                        <p class="ability__entry__text">応募がくると、応募者の履歴書情報が確認できます。</p>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img02">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img02.png') }}" alt="応募者の履歴書情報の確認"
                                                    width="700" height="494"></figure>
                                            <p class="mfp-modal__title">応募者の履歴書情報の確認</p>
                                            <p class="mfp-modal__caption">応募がくると、応募者の履歴書情報が確認できます。</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ability__entry ability__entry-3">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability06_img03" title="採用／不採用の決定と通知"
                                                data-analysis-trigger="ability_06_03"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img03.png') }}"
                                                    data-aspectratio="1.417/1" width="320" height="226"
                                                    alt="採用／不採用の決定と通知"></a></figure>
                                        <h2 class="ability__entry__title">採用／不採用の決定と通知</h2>
                                        <p class="ability__entry__text">採用・不採用を決定すると、通知が応募者に送られます。</p>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img03">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img03.png') }}" alt="採用／不採用の決定と通知"
                                                    width="700" height="494"></figure>
                                            <p class="mfp-modal__title">採用／不採用の決定と通知</p>
                                            <p class="mfp-modal__caption">採用・不採用を決定すると、通知が応募者に送られます。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-4">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability06_img04" title="採用者とのチャット"
                                                data-analysis-trigger="ability_06_04"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img04.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img04.png') }}"
                                                    data-aspectratio="1.417/1" width="320" height="226"
                                                    alt="採用者とのチャット"></a></figure>
                                        <h2 class="ability__entry__title">採用者とのチャット</h2>
                                        <p class="ability__entry__text">採用すると、チャット機能を用いて採用者とやりとりができます。</p>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img04">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img04.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img04.png') }}" alt="採用者とのチャット"
                                                    width="700" height="494"></figure>
                                            <p class="mfp-modal__title">採用者とのチャット</p>
                                            <p class="mfp-modal__caption">採用すると、チャット機能を用いて採用者とやりとりができます。</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="movie">
                                    <div class="movie__inner">
                                        <div class="movie__thumbnail">
                                            <div class="movie__thumbnail__inner"><a class="js-video-content"
                                                    data-video-id="1eh2GiyFVn0"
                                                    data-analysis-trigger="video_help"><img class="lazyload"
                                                        src="{{ asset('assets/image/video_thumbnail03.png') }}"
                                                        data-src="{{ asset('assets/image/video_thumbnail03.png') }}"
                                                        data-aspectratio="1.777/1" alt="『ヘルプ機能の使い方』" width="720"
                                                        height="405"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="other_function__section">
                    <div class="other_function__inner">
                        <h2 class="other_function__title">その他の機能</h2>
                        <ul class="ability__list">
                            <li class="ability__list__management"><a href="/function/management/"
                                    data-analysis-trigger="other_function_management">
                                    <div class="ability__list__detail">
                                        <h3 class="ability__list__title">シフト管理</h3>
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
                                    data-analysis-trigger="other_function_timecard">
                                    <div class="ability__list__detail">
                                        <h3 class="ability__list__title">タイムカード・勤怠管理</h3>
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
                        </ul>
                    </div>
                </section>
                <section class="faq__section" id="faq">
                    <div class="faq__inner">
                        <h2 class="faq__title">よくあるご質問</h2>
                        <ul class="faq__list">
                            <li>
                                <p class="faq__question">シフトボードとは何ですか</p>
                                <div class="faq__answer">
                                    <p>スタッフ向けシフト管理アプリです。詳しくは<a class="ability__external__link"
                                            href="" target="_blank"
                                            rel="noopener">こちら</a>をご覧ください。<br>Airシフトでスタッフから希望シフトを集めたり、確定したシフトの連絡をするなど、スタッフとシフトに関するやりとりをするには、スタッフがシフトボードを使ってAirシフトと連携する必要があります。
                                    </p>
                                </div>
                            </li>
                            <li>
                                <p class="faq__question">対応端末は何がありますか</p>
                                <div class="faq__answer">
                                    <p>他の機能と同じく、パソコン・タブレット（iPad）でご利用いただけます。<br>現時点では、スマホWebでのご利用は推奨していません。<br>詳細は<a
                                            class="ability__external__link"
                                            href="https://faq.airshift.jp/hc/ja/articles/115003212852" target="_blank"
                                            rel="noopener">こちら</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <div class="freetrial">
                    <div class="freetrial__inner">
                        <p class="freetrial__title">最大2ヶ月（利用開始月と翌月）は無料で体験できます</p>
                        <p class="freetrial__button freetrial__register__button"><a
                                href="http://localhost:5500/airid"
                                target="_blank" rel="noopener" data-analysis-trigger="entry_02">アカウント登録</a></p>
                        <p class="freetrial__button freetrial__login__button">
                            <a href="http://localhost:5500"
                                target="_blank" rel="noopener" data-analysis-trigger="login_02">AirIDをお持ちの方</a></p>
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
          },
          {
            "@type": "ListItem",
            "position": 4,
            "item":
              {
                "@id": "https://airregi.jp/shift/function/help/",
                "name": "ヘルプ機能"
              }
          }
        ]
    }</script>
    <script type="application/ld+json">{
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "シフトボードとは何ですか",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "スタッフ向けシフト管理アプリです。詳しくは <a href=https://shiftboard.jp/>こちら</a>をご覧ください。Airシフトでスタッフから希望シフトを集めたり、確定したシフトの連絡をするなど、スタッフとシフトに関するやりとりをするには、スタッフがシフトボードを使ってAirシフトと連携する必要があります。"
        }
      },
      {
        "@type": "Question",
        "name": "対応端末は何がありますか",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "他の機能と同じく、パソコン・タブレット（iPad）でご利用いただけます。現時点では、スマホWebでのご利用は推奨していません。詳細は<a href=https://faq.airshift.jp/hc/ja/articles/115003212852>こちら</a>"
        }
      }]
    }
    </script>

    <script type="text/javascript">
        setImageModal();

        function setImageModal() {
            var target = ".js-image-modal";
            var pageId = ".page-airshift-" + "function-help";
            if (!Common.user_agent.Mobile) {
                $(pageId).magnificPopup({
                    delegate: target,
                    type: "inline",
                    closeMarkup: "<button title='Close (Esc)' type='button' class='mfp-close'><svg class='svg-icon' viewBox='0 0 20 20'><path fill='none' d='M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z'></path></svg></button>",
                    callbacks: {
                        open: function() {
                            $(".mfp-close").on("click", function() {
                                $(pageId).magnificPopup("close");
                            });
                        }
                    },
                    gallery: {
                        enabled: true
                    }
                });
            } else {
                $(target).contents().unwrap();
            }
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
