@extends('layouts.frontend')
@section('head')
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script src="{{ asset('assets/js/style.js') }}"></script>
    <title>シフト管理 | シフト管理システム・アプリ【Airシフト】</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description"
        content="Airシフトのシフト管理についてご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。スタッフはアプリでシフト提出が可能。シフト表と一体になったチャットでシフトのやりとりができます。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト">
    <meta property="og:title" content="シフト管理 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/function/creation/">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="Airシフトのシフト共有についてご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。スタッフはアプリでシフト提出が可能。シフト表と一体になったチャットでシフトのやりとりができます。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="https://airregi.jp/shift/function/management/">
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
                        <li class="breadcrumb__item"><span>シフト管理</span></li>
                    </ul>
                </div>
                <div class="ability">
                    <div class="ability__inner">
                        <h1 class="ability__title">シフト管理</h1>
                        <div class="ability__section">
                            <h2 class="ability__sub__title">シフト収集について</h2>
                            <p class="ability__sub__description">
                                スタッフ用アプリ「シフトボード」から希望シフトの収集を行います。<br>スタッフから提出された希望シフトは、シフト表に自動反映されるので書き写す作業は不要です。</p>
                            <div class="ability__entries">
                                <div class="ability__entry ability__entry-1">
                                    <figure class="ability__entry__thumb">
                                        <a class="js-image-modal" href="#ability01_img01" title="勤務希望および休み希望の収集" data-analysis-trigger="ability_01_01">
                                            <img class="lazyload" src="{{ asset('assets/image/ability01_img01.png') }}" data-src="{{ asset('assets/image/ability01_img01.png') }}" data-aspectratio="1.415/1" width="320" height="226"
                                                alt="勤務希望および休み希望の収集"></a></figure>
                                    <h3 class="ability__entry__title">勤務希望および休み希望の収集</h3>
                                    <p class="ability__entry__text"><span
                                            class="en">Air</span>シフトにスタッフを招待することによって、スタッフは希望シフトおよび休み希望をアプリから提出できるようになります。紙やメールで集める手間がなくなります。
                                    </p>
                                    <div class="mfp-hide mfp-modal__content" id="ability01_img01">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability01_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability01_img01.png') }}"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">勤務希望および休み希望の収集</p>
                                        <p class="mfp-modal__caption"><span
                                                class="en">Air</span>シフトにスタッフを招待することによって、スタッフは希望シフトおよび休み希望をアプリから提出できるようになります。紙やメールで集める手間がなくなります。
                                        </p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-2">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability01_img02" title="希望シフト提出を自動でリマインド"
                                            data-analysis-trigger="ability_01_02"><img class="lazyload"
                                                src="{{ asset('assets/image/ability01_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability01_img02.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="希望シフト提出を自動でリマインド"></a></figure>
                                    <h3 class="ability__entry__title">希望シフト提出を自動でリマインド</h3>
                                    <p class="ability__entry__text">
                                        希望シフトの提出依頼はスタッフに自動で通知されます。スタッフの希望シフト提出忘れを防ぎ、催促する手間もなくなります。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability01_img02">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability01_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability01_img02.png') }}" alt="希望シフト提出を自動でリマインド"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">希望シフト提出を自動でリマインド</p>
                                        <p class="mfp-modal__caption">
                                            希望シフトの提出依頼はスタッフに自動で通知されます。スタッフの希望シフト提出忘れを防ぎ、催促する手間もなくなります。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-3">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability01_img03" title="希望シフトの自動反映"
                                            data-analysis-trigger="ability_01_03"><img class="lazyload"
                                                src="{{ asset('assets/image/ability01_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability01_img03.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="希望シフトの自動反映"></a></figure>
                                    <h3 class="ability__entry__title">希望シフトの自動反映</h3>
                                    <p class="ability__entry__text">
                                        希望シフトはシフト表に自動で反映されるので、転記する手間がなくなります。あとは、シフト表を参考にしながらシフトを組むだけ。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability01_img03">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability01_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability01_img03.png') }}" alt="希望シフトの自動反映"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">希望シフトの自動反映</p>
                                        <p class="mfp-modal__caption">
                                            希望シフトはシフト表に自動で反映されるので、転記する手間がなくなります。あとは、シフト表を参考にしながらシフトを組むだけ。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ability__section">
                            <h2 class="ability__sub__title">シフト作成について</h2>
                            <p class="ability__sub__description">シフトの作成をする上で必要な条件が、ひと目でわかるのでシフトの作成がカンタンになります。</p>
                            <div class="ability__entries">
                                <div class="ability__entry ability__entry-1">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability02_img01" title="シフト作成を自動でアシスト"
                                            data-analysis-trigger="ability_02_01"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img01.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="シフト作成を自動でアシスト"></a></figure>
                                    <h3 class="ability__entry__title">シフト作成を自動でアシスト</h3>
                                    <p class="ability__entry__text">スタッフからあつめた勤務・休み希望を元に、クリックひとつで大枠のシフトを自動で作成できます。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability02_img01">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img01.png') }}" alt="シフト作成を自動でアシスト"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">シフト作成を自動でアシスト</p>
                                        <p class="mfp-modal__caption">スタッフからあつめた勤務・休み希望を元に、クリックひとつで大枠のシフトを自動で作成できます。
                                        </p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-2">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability02_img02" title="過不足を見ながらシフト作成"
                                            data-analysis-trigger="ability_02_02"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img02.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="過不足を見ながらシフト作成"></a></figure>
                                    <h3 class="ability__entry__title">過不足を見ながらシフト作成</h3>
                                    <p class="ability__entry__text">
                                        シフト表に時間帯ごとの必要な人数を設定すれば、スタッフの希望シフトとの過不足を確認しながらシフト作成ができます。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability02_img02">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img02.png') }}"
                                                alt="過不足を見ながらシフト作成" width="700" height="494"></figure>
                                        <p class="mfp-modal__title">過不足を見ながらシフト作成</p>
                                        <p class="mfp-modal__caption">
                                            シフト表に時間帯ごとの必要な人数を設定すれば、スタッフの希望シフトとの過不足を確認しながらシフト作成ができます。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-3">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability02_img03" title="概算人件費を見てシフト作成"
                                            data-analysis-trigger="ability_02_03"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img03.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="概算人件費を見てシフト作成"></a></figure>
                                    <h3 class="ability__entry__title">概算人件費を見つつシフト管理と作成</h3>
                                    <p class="ability__entry__text">スタッフ毎の合計や日ごとの合計概算人件費がわかるので、計画性のあるシフト作成と管理ができます。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability02_img03">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img03.png') }}" alt="概算人件費を見てシフト作成"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">概算人件費を見つつシフト管理と作成</p>
                                        <p class="mfp-modal__caption">スタッフ毎の合計や日ごとの合計概算人件費がわかるので、計画性のあるシフト作成と管理ができます。
                                        </p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-4">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability02_img04" title="日／週／2週／半月／月で表示切替"
                                            data-analysis-trigger="ability_02_04"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img04.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img04.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="日／週／2週／半月／月で表示切替"></a></figure>
                                    <h3 class="ability__entry__title">日／週／2週／半月／月で表示切替</h3>
                                    <p class="ability__entry__text">
                                        表示するシフト表を日・週・2週・半月・月に切り替えられます。時と場合に応じて好きな画面でシフト管理が可能です。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability02_img04">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img04.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img04.png') }}"
                                                alt="日／週／2週／半月／月で表示切替" width="700" height="494"></figure>
                                        <p class="mfp-modal__title">日／週／2週／半月／月で表示切替</p>
                                        <p class="mfp-modal__caption">
                                            表示するシフト表を日・週・2週・半月・月に切り替えられます。時と場合に応じて好きな画面でシフト管理が可能です。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-5">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability02_img05" title="慣れたパターンでシフト作成"
                                            data-analysis-trigger="ability_02_05"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img05.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img05.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="慣れたパターンでシフト作成"></a></figure>
                                    <h3 class="ability__entry__title">慣れたパターンでシフト作成</h3>
                                    <p class="ability__entry__text">「早番／中番／遅番」など、お店で使っているパターンを設定できるので、いつもの方法でシフト作成できます。
                                    </p>
                                    <div class="mfp-hide mfp-modal__content" id="ability02_img05">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability02_img05.png') }}"
                                                data-src="{{ asset('assets/image/ability02_img05.png') }}" width="700"
                                                height="494" alt="慣れたパターンでシフト作成"></figure>
                                        <p class="mfp-modal__title">慣れたパターンでシフト作成</p>
                                        <p class="mfp-modal__caption">
                                            「早番／中番／遅番」など、お店で使っているパターンを設定できるので、いつもの方法でシフト作成できます。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ability__section">
                            <h2 class="ability__sub__title">シフト調整について</h2>
                            <p class="ability__sub__description">
                                スタッフ用アプリ「シフトボード」から希望シフトの収集を行います。<br>スタッフから提出された希望シフトは、シフト表に自動反映されるので書き写す作業は不要です。</p>
                            <div class="ability__entries">
                                <div class="ability__entry ability__entry-1">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability03_img01" title="スタッフとのチャット機能"
                                            data-analysis-trigger="ability_03_01"><img class="lazyload"
                                                src="{{ asset('assets/image/ability03_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability03_img01.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="スタッフとのチャット機能"></a></figure>
                                    <h3 class="ability__entry__title">スタッフとのチャット機能</h3>
                                    <p class="ability__entry__text">
                                        シフト作成と出勤依頼やスタッフからの欠勤申請などのやりとりがこれ１つでできるので、いろいろなツールを見る必要はありません。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability03_img01">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability03_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability03_img01.png') }}" width="700"
                                                height="494" alt="スタッフとのチャット機能"></figure>
                                        <p class="mfp-modal__title">スタッフとのチャット機能</p>
                                        <p class="mfp-modal__caption">
                                            シフト作成と出勤依頼やスタッフからの欠勤申請などのやりとりがこれ１つでできるので、いろいろなツールを見る必要はありません。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-2">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability03_img02" title="スタッフへのシフト調整依頼"
                                            data-analysis-trigger="ability_03_02"><img class="lazyload"
                                                src="{{ asset('assets/image/ability03_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability03_img02.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="スタッフへのシフト調整依頼"></a></figure>
                                    <h3 class="ability__entry__title">スタッフへのシフト調整依頼</h3>
                                    <p class="ability__entry__text">シフトが足りない場合のスタッフへの出勤依頼や、多い場合の時間変更依頼を簡単に行うことができます。
                                    </p>
                                    <div class="mfp-hide mfp-modal__content" id="ability03_img02">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability03_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability03_img02.png') }}" width="700"
                                                height="494" alt="スタッフへのシフト調整依頼"></figure>
                                        <p class="mfp-modal__title">スタッフへのシフト調整依頼</p>
                                        <p class="mfp-modal__caption">シフトが足りない場合のスタッフへの出勤依頼や、多い場合の時間変更依頼を簡単に行うことができます。
                                        </p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-3">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability03_img03" title="専用アプリでメッセージ"
                                            data-analysis-trigger="ability_03_03"><img class="lazyload"
                                                src="{{ asset('assets/image/ability03_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability03_img03.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="専用アプリでメッセージ"></a></figure>
                                    <h3 class="ability__entry__title"><span class="new_release">NEW</span>専用アプリでメッセージ
                                    </h3>
                                    <p class="ability__entry__text">スタッフからのシフトの調整依頼の承認やメッセージが、専用のスマホアプリでいつでもどこでもできます。
                                    </p><a class="ability__entry__appstorelink"
                                        href="https://apps.apple.com/jp/app/apple-store/id1392127948" target="_blank"
                                        rel="noopener" data-analysis-trigger="messageapp_appstore_link_01">
                                        <img
                                            class="lazyload"
                                            src="{{ asset('assets/image/download_badge_app_store.svg') }}"
                                            data-src="{{ asset('assets/image/download_badge_app_store.svg') }}" width="109"
                                            height="40" alt="専用アプリでメッセージ"></a>
                                    <div class="mfp-hide mfp-modal__content" id="ability03_img03">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability03_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability03_img03.png') }}" alt="専用アプリでメッセージ"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">専用アプリでメッセージ</p>
                                        <p class="mfp-modal__caption">スタッフからのシフトの調整依頼の承認やメッセージが、専用のスマホアプリでいつでもどこでもできます。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ability__section">
                            <h2 class="ability__sub__title">シフト共有について</h2>
                            <p class="ability__sub__description">
                                確定したシフトはスタッフ用アプリ「シフトボード」を通じて自動でスタッフに共有されます。<br>メールやSMSなどでの連絡が不要になります。</p>
                            <div class="ability__entries">
                                <div class="ability__entry ability__entry-1">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability04_img01" title="スタッフへの共有"
                                            data-analysis-trigger="ability_04_01"><img class="lazyload"
                                                src="{{ asset('assets/image/ability04_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability04_img01.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="スタッフへの共有"></a></figure>
                                    <h3 class="ability__entry__title">スタッフへの共有</h3>
                                    <p class="ability__entry__text">
                                        作成したシフト表は、スタッフにカンタンに共有できます。スタッフは共有されたシフト表をアプリで確認することができます。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability04_img01">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability04_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability04_img01.png') }}" alt="スタッフへの共有"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">スタッフへの共有</p>
                                        <p class="mfp-modal__caption">
                                            作成したシフト表は、スタッフにカンタンに共有できます。スタッフは共有されたシフト表をアプリで確認することができます。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-2">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability04_img02" title="印刷"
                                            data-analysis-trigger="ability_04_02"><img class="lazyload"
                                                src="{{ asset('assets/image/ability04_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability04_img01.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="印刷"></a></figure>
                                    <h3 class="ability__entry__title">印刷</h3>
                                    <p class="ability__entry__text">
                                        作成したシフト表は、様々な形で印刷し、仕事場へ貼り出したりすることができます。また、CSVデータでのダウンロードも可能です。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability04_img02">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability04_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability04_img02.png') }}" alt="印刷"
                                                width="700" height="494"></figure>
                                        <p class="mfp-modal__title">印刷</p>
                                        <p class="mfp-modal__caption">
                                            作成したシフト表は、様々な形で印刷し、仕事場へ貼り出したりすることができます。また、CSVデータでのダウンロードも可能です。</p>
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
                            <li class="ability__list__timecard"><a href="../timecard/"
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
                            <li class="ability__list__help"><a href="../help/"
                                    data-analysis-trigger="other_function_help">
                                    <div class="ability__list__detail">
                                        <h3 class="ability__list__title">ヘルプ機能</h3>
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
                <section class="faq__section" id="faq">
                    <div class="faq__inner">
                        <h2 class="faq__title">よくあるご質問</h2>
                        <ul class="faq__list">
                            <li>
                                <p class="faq__question">無料体験期間の利用開始月は、どのように決まりますか</p>
                                <div class="faq__answer">
                                    <p>一部の機能は無料版として使えます。<br>無料版と有料版の機能差分は<a class="ability__external__link"
                                            href="" target="_blank"
                                            rel="noopener">こちら</a><br>費用については<a class="ability__external__link"
                                            href="/cost/" target="_blank"
                                            rel="noopener">こちら</a></p>
                                </div>
                            </li>
                            <li>
                                <p class="faq__question">対応端末は何がありますか</p>
                                <div class="faq__answer">
                                    <p>他の機能と同じく、パソコン・タブレット（iPad）でご利用いただけます。<br>現時点では、スマホWebでのご利用は推奨していません。<br>詳細は<a
                                            class="ability__external__link"
                                            href="" target="_blank"
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
            "position": 2,
            "item":
              {
                "@id": "https://localhost:8000/",
                "name": "Airシフト"
              }
          },
          {
            "@type": "ListItem",
            "position": 3,
            "item":
              {
                "@id": "https://localhost:8000/function/",
                "name": "機能について"
              }
          },
          {
            "@type": "ListItem",
            "position": 4,
            "item":
              {
                "@id": "https://localhost:8000/function/management/",
                "name": "シフト管理"
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
          "text": "一部の機能は無料版として使えます。無料版と有料版の機能差分は<a href=https://faq.airshift.jp/hc/ja/articles/360029561532>こちら</a> 費用については<a href=https://airregi.jp/shift/cost/>こちら</a>"
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
            var pageId = ".page-airshift-" + "function-management";
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
