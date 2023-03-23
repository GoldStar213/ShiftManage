@extends('layouts.frontend')
@section('title','費用・料金 | シフト管理システム・アプリ【Airシフト】')
@section('head')
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script src="{{ asset('assets/js/style.js') }}" >    </script>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description"
        content="【リクルート：Airシフト】Airシフトの費用・料金をご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト">
    <meta property="og:title" content="費用・料金 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/cost/">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】Airシフトの費用・料金をご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="https://airregi.jp/shift/cost/">
    <link rel="apple-touch-icon" href="https://cdn.airregi.jp/res/apple-touch-icon.png?v=610a856">
    <link rel="shortcut icon" href="https://cdn.airregi.jp/res/favicon.ico?v=4341218">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/page.css') }}">
</head>
@endsection
@section('content')
        <main>
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__inner">
                        <li class="breadcrumb__item"><a href="/">Airシフト</a>&nbsp;&gt;&nbsp;</li>
                        <li class="breadcrumb__item"><span>費用</span></li>
                    </ul>
                </div>
                <section class="price" id="price">
                    <div class="price__inner">
                        <h1 class="price__title">費用・料金</h1>
                        <div class="price__freetrial">
                            <h2 class="price__freetrial__title">まずはお試しください</h2>
                            <div class="price__freetrial__inner">
                                <div class="price__freetrial__detail">
                                    <div class="price__freetrial__description"><img class="lazyload"
                                            src="{{ asset('assets/image/price_image01.png') }}"
                                            data-src="{{ asset('assets/image/price_image01.png') }}" data-aspectratio="3.87/1"
                                            width="639" alt="無料体験期間として「利用開始月」と「翌月」は0円 まずはお試しください。"></div>
                                    <div class="price__freetrial__note">
                                        <p>※無料期間終了後、自動で課金されることはございません。</p>
                                        <p>例）8月13日にAirシフトのご利用を開始された場合、8月と9月が無料体験期間です。</p>
                                        <p>※3ヶ月目以降のご利用については、継続利用（有料）申込みをされない場合、無料版（機能制限あり）となり連携スタッフについては退職処理がなされます。</p>
                                        <p>※ヘルプ機能のご利用には継続利用（有料）申込みが必要です。Airシフトの審査が通過しても、ヘルプ機能の審査が通過しない場合があります。</p>
                                    </div>
                                </div>
                                <div class="price__freetrial__image">
                                    <img class="lazyload is-pcOnly" src="{{ asset('assets/image/price_image02.png') }}" data-src="{{ asset('assets/image/price_image02.png') }}" data-aspectratio="1.68/1" width="359" height="213" alt="Airシフトはパソコン・タブレット・スマートフォン（メッセージ機能のみ）でお使いいただけます">
                                </div>
                            </div>
                        </div>
                        <div class="price__register">
                            <div class="register"><a class="main__link"
                                    href="http://localhost:5500/airid"
                                    target="_blank" rel="noopener" data-analysis-trigger="entry_05">
                                    <div class="main__link__button">アカウント登録</div>
                                </a><a class="main__login__link" target="_blank" rel="noopener"
                                    data-analysis-trigger="login_05" href="http://localhost:5500/">
                                    <div class="main__login__link__button">AirIDをお持ちの方</div>
                                </a></div>
                        </div>
                        <div class="price__newprice" id="newPricing">
                            <h3 class="price__newprice__title">利用料金はシンプル</h3>
                            <div class="price__newprice__description">
                                <div class="price__newprice__images"><img class="lazyload"
                                        src="{{ asset('assets/image/price_image03.png') }}"
                                        data-src="{{ asset('assets/image/price_image01.png') }}" data-aspectratio="5.22/1"
                                        width="496" alt="スタッフ1人あたり*1"><img class="lazyload"
                                        src="{{ asset('assets/image/price_image04.png') }}"
                                        data-src="{{ asset('assets/image/price_image04.png') }}" data-aspectratio="3.47/1"
                                        width="508" alt="月額100円（税抜）"></div>
                                <div class="price__newprice__description__note">
                                    <p>※1: スタッフ用アプリ『シフトボード』と連携して利用しているスタッフがカウント対象です。</p>
                                    <p>※この料金は無料体験期間終了後の料金になります。無料体験期間中は料金がかかりません。</p>
                                    <p>※料金は、毎月1日～末日のご利用人数に応じた従量課金になります。</p>
                                    <p>※同月内でご利用人数に変動がある場合、1か月の間の最大利用人数で料金が確定されます。</p>
                                </div>
                            </div>
                        </div>
                        <div class="price__payment">
                            <div class="price__payment__detail">
                                <h4>支払方法<br>クレジットカード／デビットカード</h4><img class="price__payment__img lazyload"
                                    src="{{ asset('assets/image/price_payment.svg') }}"
                                    data-src="{{ asset('assets/image/price_payment.svg') }}" alt="支払方法 クレジットカード／デビットカード"
                                    width="452" height="72">
                            </div>
                        </div>
                        <div class="link__wrapper"><a class="detail__link" href="/function">機能について詳しく見る</a></div>
                    </div>
                </section>
                <section class="faq__section" id="faq">
                    <div class="faq__inner">
                        <h2 class="faq__title">よくあるご質問</h2>
                        <ul class="faq__list">
                            <li>
                                <p class="faq__question">無料体験期間の利用開始月は、どのように決まりますか</p>
                                <div class="faq__answer">
                                    <p>Airシフトのアカウント登録をした月が無料体験期間の利用開始月となります。<br>例）8月13日にAirシフトのご利用を開始された場合、8月と9月が無料体験期間です。
                                    </p>
                                    <p>Airシフトのアカウント登録後に、無料体験期間の利用開始月を変更することはできませんので、ご了承ください。</p>
                                </div>
                            </li>
                            <li>
                                <p class="faq__question">無料体験期間を過ぎると、自動で有料利用になりますか</p>
                                <div class="faq__answer">
                                    <p>いいえ。別途、利用申込みをしていただかない限り有料になることはありません。</p>
                                    <p>有料利用のお申込みをしていない方は、無料版（機能制限あり）の利用に自動で切り替わります。<br>詳細は<a
                                            class="ability__external__link"
                                            href="" target="_blank"
                                            rel="noopener">こちら</a>をご確認ください。</p>
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
                        <p class="freetrial__button freetrial__login__button"><a href="http://localhost:5500"
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
                "@id": "https://airregi.jp/shift/cost/",
                "name": "費用"
              }
          }
        ]
    }</script>
    <script type="application/ld+json">{
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "無料体験期間の利用開始月は、どのように決まりますか",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Airシフトのアカウント登録をした月が無料体験期間の利用開始月となります。例）8月13日にAirシフトのご利用を開始された場合、8月と9月が無料体験期間です。Airシフトのアカウント登録後に、無料体験期間の利用開始月を変更することはできませんので、ご了承ください。"
        }
      },
      {
        "@type": "Question",
        "name": "無料体験期間を過ぎると、自動で有料利用になりますか",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "いいえ。別途、利用申込みをしていただかない限り有料になることはありません。有料利用のお申込みをしていない方は、無料版（機能制限あり）の利用に自動で切り替わります。詳細は<a href=https://faq.airshift.jp/hc/ja/articles/360004046912>こちら</a>をご確認ください。"
        }
      }]
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
