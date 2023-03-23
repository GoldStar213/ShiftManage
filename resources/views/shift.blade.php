@extends('layouts.frontend')
@section('title', '【Airシフト】 シフト管理システム | やりとりも作成もラクになる')
@section('head')

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="utf-8">
        <style>
            .async-hide {
                opacity: 0 !important
            }
        </style>
        <script src="{{ asset('assets/js/style.js') }}"></script>
        <title>@yield('title')</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="description"
            content="【リクルート：Airシフト】無料体験期間として最大2か月は0円。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
        <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト">
        <meta property="og:title" content="【Airシフト】 シフト管理システム | やりとりも作成もラクになる">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://localhost:8000">
        <meta property="og:image" content="{{ asset('assets/image/og.png') }}">
        <meta property="og:site_name" content="Airシフト(エアシフト)">
        <meta property="og:description"
            content="【リクルート：Airシフト】無料体験期間として最大2か月は0円。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
        <link rel="canonical" href="http://localhost:8000/">
        <link rel="apple-touch-icon" href="{{ asset('assets/image/apple-touch-icon.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/image/favicon.ico') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

        <link rel="preload" as="image" href="{{ asset('assets/image/visual_bg_mobile.jpg') }}">
    </head>
@endsection
@section('content')
    <main>
        <div class="container">
            <section class="main">
                <div class="breadcrumb">
                    <ul class="breadcrumb__inner">
                        <li class="breadcrumb__item"><span>Airシフト</span></li>
                    </ul>
                </div>
                <div class="main__inner">
                    <div class="left">
                        <h1><img class="is-pcOnly lazyload" src="{{ asset('assets/image/main_title.png') }}"
                                data-src="{{ asset('assets/image/main_title.png') }}" width="417" height="194"
                                alt="やりとりも作成もラクになるシフト管理サービス AirSHIFT"><img class="is-spOnly lazyload"
                                src="{{ asset('assets/image/main_title_mobile.png') }}"
                                data-src="{{ asset('assets/image/main_title_mobile.png') }}" width="200" height="93"
                                alt="やりとりも作成もラクになるシフト管理サービス AirSHIFT">
                        </h1>
                        <a class="main__link" target="_blank" rel="noopener" data-analysis-trigger="entry_02"
                            href="http://localhost:5500/airid">
                            <div class="comment">利用開始月・翌月は無料</div>
                            <div class="main__link__button">アカウント登録</div>
                        </a>
                        <a class="main__login__link" target="_blank" rel="noopener" data-analysis-trigger="main_login_01"
                            href="http://localhost:5500/">
                            <div class="comment">利用開始月・翌月は無料<br>今すぐ使えます</div>
                            <div class="main__login__link__button">AirIDをお持ちの方</div>
                        </a>
                    </div>
                    <div class="right">
                        <img class="is-pcOnly lazyload" src="{{ asset('assets/image/main_device.png') }}"
                            data-src="{{ asset('assets/image/main_device.png') }}" data-aspectratio="1.368/1"
                            alt="AirシフトはPCとTabletに対応しております。" width="721" height="527">
                        <img class="is-spOnly lazyload" src="{{ asset('assets/image/main_device_mobile.png') }}"
                            data-src="{{ asset('assets/image/main_device_mobile.png') }}" data-aspectratio="1.368/1"
                            alt="AirシフトはPCとTabletに対応しております。" width="310" height="223">
                    </div>
                </div>
            </section>
            <div class="register fv_register"><a class="main__link" href="http://localhost:5500/airid" target="_blank"
                    rel="noopener" data-analysis-trigger="entry_03">
                    <div class="comment">利用開始月・翌月は無料</div>
                    <div class="main__link__button">アカウント登録</div>
                </a><a class="main__login__link" target="_blank" rel="noopener" data-analysis-trigger="register_login_01"
                    href="http://localhost:5500/">
                    <div class="comment">利用開始月・翌月は無料<br>今すぐ使えます</div>
                    <div class="main__login__link__button">AirIDをお持ちの方</div>
                </a>
                <a class="document__request__button" href="/request/" data-analysis-trigger="document_request_button">
                    まずは資料請求
                </a>
            </div>
            <section class="movie">
                <h2 class="movie__ttl"><span class="en">Airシフトの概要とシフト管理の流れをご紹介します。</span></h2>
                <div class="movie__inner">
                    <div class="movie__thumbnail movie__thumbnail--01" style="margin-right:15px">
                        <div class="movie__thumbnail__inner">
                            <a class="js-video-content" data-video-id="qgyDt762lck" data-analysis-trigger="video_01">
                                <img class="lazyload" src="{{ asset('assets/image/video_thumbnail01.png') }}"
                                    data-src="{{ asset('assets/image/video_thumbnail01.png') }}"
                                    data-aspectratio="1.777/1" alt="『2分でわかるAirシフト』" width="510" height="287">
                            </a>
                        </div>
                        <h3 class="movie__title">
                            『<span class="en">2</span>分でわかる<span class="en">Air</span>シフト』
                        </h3>
                    </div>
                    <div class="movie__thumbnail movie__thumbnail--02" style="margin-left:15px">
                        <div class="movie__thumbnail__inner">
                            <a class="js-video-content" data-video-id="rbZRVHZuxU0" data-analysis-trigger="video_02">
                                <img class="lazyload" src="{{ asset('assets/image/video_thumbnail01.png') }}"
                                    data-src="{{ asset('assets/image/video_thumbnail01.png') }}"
                                    data-aspectratio="1.777/1" data-expand="200" alt="『Airシフトを使ったシフト管理業務の流れ』"
                                    width="510" height="287">
                            </a>
                        </div>
                        <h3 class="movie__title">『<span class="en">Air</span>シフトを使ったシフト管理業務の流れ』</h3>
                    </div>
                </div>
            </section>
            <section class="top__case" id="top__case">
                <div class="top__case__inner">
                    <h2 class="top__case__title">導入事例</h2>
                    <p class="top__case__caption">ご利用中の方々に導入後のシフト管理について感想をお聞きしました。</p>
                    <ul class="case__entries">
                        <li class="case__entrie">
                            <a class="case__entrie_link" href="/case/001/" data-analysis-trigger="case001">
                                <div class="case__content__on-image">
                                    <figure class="case__entry__thumb">
                                        <img class=" lazyloaded"
                                            src="{{ asset('assets/image/frontend/case/case_img01.jpg') }}"
                                            data-src="{{ asset('assets/image/frontend/case/case_img01.jpg') }}"
                                            width="329" alt="Airシフト導入事例: VANDALISM 渋谷" data-xblocker="passed"
                                            style="visibility: visible;">
                                    </figure>
                                    <div class="case__entry__prof">
                                        <span class="case__entry__prof__item case__entry__prof__genre">飲食</span><span
                                            class="case__entry__prof__item case__entry__prof__staff">スタッフ11人</span>
                                    </div>
                                </div>
                                <div class="case__content">
                                    <p class="case__entry__prof__cat">ダイニングバー</p>
                                    <h3 class="case__entry__title">VANDALISM 渋谷</h3>
                                    <p class="case__entry__text">3時間以上かかっていたシフト管理が、30分程度に。辛かったシフト管理が楽しくなりました</p>
                                </div>
                            </a>
                        </li>
                        <li class="case__entrie">
                            <a class="case__entrie_link" href="/case/001/" data-analysis-trigger="case058">
                                <div class="case__content__on-image">
                                    <figure class="case__entry__thumb">
                                        <img class=" lazyloaded" src="{{ asset('assets/image/case_img26.jpg') }}"
                                            data-src="{{ asset('assets/image/case_img26.jpg') }}" width="329"
                                            alt="Airシフト導入事例: 神楽坂 やき鳥 〇政" data-xblocker="passed"
                                            style="visibility: visible;">
                                    </figure>
                                    <div class="case__entry__prof"><span
                                            class="case__entry__prof__item case__entry__prof__genre">飲食</span><span
                                            class="case__entry__prof__item case__entry__prof__staff">スタッフ5人</span>
                                    </div>
                                </div>
                                <div class="case__content">
                                    <p class="case__entry__prof__cat">飲食店</p>
                                    <h3 class="case__entry__title">神楽坂 やき鳥 〇政</h3>
                                    <p class="case__entry__text">【月刊食堂2022年1月号掲載】無料の体験期間を利用して無理なく導入
                                        シフト作成と勤怠管理機能を活用し作業効率と人件費管理を大きく改善</p>
                                </div>
                            </a>
                        </li>
                        <li class="case__entrie">
                            <a class="case__entrie_link" href="/case/001/" data-analysis-trigger="case081">
                                <div class="case__content__on-image">
                                    <figure class="case__entry__thumb">
                                        <img class=" ls-is-cached lazyloaded"
                                            src="{{ asset('assets/image/case_img53.jpg') }}"
                                            data-src="{{ asset('assets/image/case_img53.jpg') }}" width="329"
                                            alt="Airシフト導入事例: Boulangerie 道" data-xblocker="passed"
                                            style="visibility: visible;">
                                    </figure>
                                    <div class="case__entry__prof"><span
                                            class="case__entry__prof__item case__entry__prof__genre">小売</span><span
                                            class="case__entry__prof__item case__entry__prof__staff">スタッフ6人</span>
                                    </div>
                                </div>
                                <div class="case__content">
                                    <p class="case__entry__prof__cat">ベーカリー専門店</p>
                                    <h3 class="case__entry__title">Boulangerie 道</h3>
                                    <p class="case__entry__text">【月刊食品商業22年月10号掲載】シフト作成はわずか15分ほどで完了
                                        総人件費を確認しながらシフトの時間を調整することで、適正化を実現</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <p class="btn__top__case">
                        <a href="/case/" data-analysis-trigger="case">導入事例をもっと見る</a>
                    </p>
                    <div class="case__industries">
                        <h3>多くの業種・業態で<br class="is-spOnly">使われています</h3>
                        <ul>
                            <li class="case__industry case_restaurant">
                                <div class="image__wrap">
                                    <img class="lazyload" src="{{ asset('assets/image/case_restaurant.svg') }}"
                                        data-src="{{ asset('assets/image/case_restaurant.svg') }}"
                                        data-aspectratio="1.24/1" width="120" alt="飲食">
                                </div>
                                <h4>飲食</h4>
                                <ul class="case__type">
                                    <li>カフェ</li>
                                    <li>居酒屋</li>
                                    <li>カラオケ</li>
                                    <li>ファミリーレストラン</li>
                                </ul>
                            </li>
                            <li class="case__industry case_beauty">
                                <div class="image__wrap">
                                    <img class="lazyload" src="{{ asset('assets/image/case_beauty.svg') }}"
                                        data-src="{{ asset('assets/image/case_beauty.svg') }}" data-aspectratio="1/1"
                                        width="180" alt="美容">
                                </div>
                                <h4>美容</h4>
                                <ul class="case__type">
                                    <li>美容院・理髪店</li>
                                    <li>ネイル</li>
                                    <li>エステティックサロン</li>
                                    <li>コスメ</li>
                                </ul>
                            </li>
                            <li class="case__industry case_education">
                                <div class="image__wrap">
                                    <img class="lazyload" src="{{ asset('assets/image/case_education.svg') }}"
                                        data-src="{{ asset('assets/image/case_education.svg') }}"
                                        data-aspectratio="1.24/1" width="120" alt="教育">
                                </div>
                                <h4>教育</h4>
                                <ul class="case__type">
                                    <li>保育施設</li>
                                    <li>塾・予備校</li>
                                    <li>語学</li>
                                    <li>音楽</li>
                                    <li>ヨガ</li>
                                    <li>カルチャーセンター</li>
                                </ul>
                            </li>
                            <li class="case__industry case_medicalcare">
                                <div class="image__wrap"><img class="lazyload"
                                        src="{{ asset('assets/image/case_medicalcare.svg') }}"
                                        data-src="{{ asset('assets/image/case_medicalcare.svg') }}"
                                        data-aspectratio="1.24/1" width="120" alt="医療"></div>
                                <h4>医療</h4>
                                <ul class="case__type">
                                    <li>病院</li>
                                    <li>歯科</li>
                                    <li>クリニック</li>
                                    <li>介護・福祉</li>
                                    <li>献血・血液センター</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="service">
                <div class="service__inner">
                    <h2 class="service__title">シフトの作成も管理もこれひとつでカンタンに。</h2>
                    <p class="service__text"><span class="en">Air</span>シフトは、シフト表の作成はもちろん、<br
                            class="is-pcOnly">スタッフとのやりとりや細かな調整業務もラクになるシフト管理サービスです。<br
                            class="is-pcOnly">さらにスタッフはいつでもどこでもシフトの提出・確認ができ、スタッフにも喜ばれます。</p>
                    <div class="service__entries">
                        <div class="service__entry">
                            <div class="service__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/service_icon01.png') }}"
                                    data-src="{{ asset('assets/image/service_icon01.png') }}" data-aspectratio="1.503/1"
                                    width="200" alt="シフト転記の手間とミスがなくなる"></div>
                            <h3 class="service__entry__title"><span class="service__entry__title__inner">シフト転記の<br
                                        class="is-pcOnly">手間とミスがなくなる</span></h3>
                            <p class="service__entry__text">
                                スタッフが提出した希望シフトやシフトの出勤依頼は自動でシフト表に反映されるので転記する手間も写し間違えのミスもなくなります。</p>
                        </div>
                        <div class="service__entry">
                            <div class="service__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/service_icon02.png') }}"
                                    data-src="{{ asset('assets/image/service_icon02.png') }}" data-aspectratio="1.503/1"
                                    width="200" alt="シフトの作成もやりとりもひとまとめに！"></div>
                            <h3 class="service__entry__title"><span class="service__entry__title__inner">シフトの作成も管理も<br
                                        class="is-pcOnly">ひとまとめに！<span
                                        class="service__entry__title__annotation">（※1）</span></span></h3>
                            <p class="service__entry__text">
                                シフト表と一体となったチャットを使ってスタッフとやりとりができるので、シフトの作成と管理はもちろん、急な調整や連絡などもこれひとつで完結します。</p>
                        </div>
                        <div class="service__entry">
                            <div class="service__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/service_icon03.png') }}"
                                    data-src="{{ asset('assets/image/service_icon03.png') }}" data-aspectratio="1.503/1"
                                    width="200" alt="店長はもちろん働くスタッフも嬉しい"></div>
                            <h3 class="service__entry__title"><span class="service__entry__title__inner">店長はもちろん<br
                                        class="is-pcOnly">働くスタッフも嬉しい<span
                                        class="service__entry__title__annotation">（※1）</span></span></h3>
                            <p class="service__entry__text">
                                スタッフはわざわざ店舗に行かなくても、いつでもどこでもシフトの提出・確認・連絡が可能になるので、余計な手間やストレスがなくなります。</p>
                        </div>
                    </div>
                    <div class="service__note">※1:Airシフト上で、スタッフからシフトをもらったり、やりとりをするためには、スタッフ用シフト管理アプリ<a
                            class="u-link js-scroll-trigger" href="#staff">「シフトボード」</a>の利用が必要です。</div>
                </div>
            </section>
            <section class="image">
                <div class="image__inner">
                    <h2 class="image__title"><span class="en">Air</span>シフトを利用したシフト管理のイメージ</h2>
                    <div class="image__entries">
                        <div class="image__entry">
                            <div class="image__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/image_img01.png') }}"
                                    data-src="{{ asset('assets/image/image_img01.png') }}" data-aspectratio="1.428/1"
                                    width="300" alt="希望シフトの収集"></div>
                            <h3 class="image__entry__title"><span class="image__entry__title__inner">1.希望シフトの収集</span>
                            </h3>
                            <p class="image__entry__text">スタッフは専用アプリから希望シフトを提出することができます。提出されたシフトは、すぐにシフト表へ反映されます。
                            </p>
                        </div>
                        <div class="image__entry">
                            <div class="image__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/image_img02.png') }}"
                                    data-src="{{ asset('assets/image/image_img02.png') }}" data-aspectratio="1.428/1"
                                    width="300" alt="シフト表の作成"></div>
                            <h3 class="image__entry__title"><span class="image__entry__title__inner">2.シフト表の作成と管理</span>
                            </h3>
                            <p class="image__entry__text">
                                シフト表と一体となったチャットを使ってスタッフとやりとりができるので、シフトの作成と管理はもちろん、急な調整や連絡などもこれひとつで完結します。</p>
                        </div>
                        <div class="image__entry">
                            <div class="image__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/image_img03.png') }}"
                                    data-src="{{ asset('assets/image/image_img03.png') }}" data-aspectratio="1.428/1"
                                    width="300" alt="スタッフとの共有"></div>
                            <h3 class="image__entry__title"><span class="image__entry__title__inner">3.スタッフとの共有</span>
                            </h3>
                            <p class="image__entry__text">
                                スタッフはわざわざ店舗に行かなくても、いつでもどこでもシフトの提出・確認・連絡が可能になるので、余計な手間やストレスがなくなります。</p>
                        </div>
                    </div>
                    <div class="register">
                        <a class="main__link" href="http://localhost:5500/airid" target="_blank" rel="noopener"
                            data-analysis-trigger="entry_04">
                            <div class="main__link__button">アカウント登録</div>
                        </a><a class="main__login__link" target="_blank" rel="noopener" data-analysis-trigger="login_04"
                            href="http://localhost:5500">
                            <div class="main__login__link__button">AirIDをお持ちの方</div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="function">
                <div class="function__inner">
                    <h2 class="function__title">
                        <span class="en">Air</span>シフトでできること
                    </h2>
                    <div class="functions">
                        <li>
                            <div class="ability ability01">
                                <h3 class="ability__title">シフト収集</h3>
                                <div class="ability__entries">
                                    <div class="ability__entry ability__entry-1">
                                        <figure class="ability__entry__thumb">
                                            <a class="js-image-modal" href="#ability01_img01" title="勤務希望および休み希望の収集"
                                                data-analysis-trigger="ability_01_01">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability01_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability01_img01.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="勤務希望および休み希望の収集"></a>
                                        </figure>
                                        <h4 class="ability__entry__title">勤務希望および休み希望の収集</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability01_img01">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability01_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability01_img01.png') }}"
                                                    alt="勤務希望および休み希望の収集" width="700" height="494"></figure>
                                            <p class="mfp-modal__title">勤務希望および休み希望の収集</p>
                                            <p class="mfp-modal__caption">
                                                <span
                                                    class="en">Air</span>シフトにスタッフを招待することによって、スタッフは希望シフトおよび休み希望をアプリから提出できるようになります。紙やメールで集める手間がなくなります。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-2">
                                        <figure class="ability__entry__thumb">
                                            <a class="js-image-modal" href="#ability01_img02" title="希望シフト提出を自動でリマインド"
                                                data-analysis-trigger="ability_01_02">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability01_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability01_img02.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="希望シフト提出を自動でリマインド">
                                            </a>
                                        </figure>
                                        <h4 class="ability__entry__title">希望シフト提出を自動でリマインド</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability01_img02">
                                            <figure class="mfp-modal__image">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability01_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability01_img02.png') }}"
                                                    alt="希望シフト提出を自動でリマインド" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">希望シフト提出を自動でリマインド</p>
                                            <p class="mfp-modal__caption">
                                                希望シフトの提出依頼はスタッフに自動で通知されます。スタッフの希望シフト提出忘れを防ぎ、催促する手間もなくなります。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-3">
                                        <figure class="ability__entry__thumb">
                                            <a class="js-image-modal" href="#ability01_img03" title="希望シフトの自動反映"
                                                data-analysis-trigger="ability_01_03">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability01_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability01_img03.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="希望シフトの自動反映">
                                            </a>
                                        </figure>
                                        <h4 class="ability__entry__title">希望シフトの自動反映</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability01_img03">
                                            <figure class="mfp-modal__image">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability01_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability01_img03.png') }}"
                                                    alt="希望シフトの自動反映" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">希望シフトの自動反映</p>
                                            <p class="mfp-modal__caption">
                                                希望シフトはシフト表に自動で反映されるので、転記する手間がなくなります。あとは、シフト表を参考にしながらシフトを組むだけ。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ability ability02">
                                <h3 class="ability__title">シフト作成</h3>
                                <div class="ability__entries">
                                    <div class="ability__entry ability__entry-1">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability02_img01" title="シフト作成を自動でアシスト"
                                                data-analysis-trigger="ability_02_01"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability02_img01.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="シフト作成を自動でアシスト"></a></figure>
                                        <h4 class="ability__entry__title">シフト作成を自動でアシスト</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability02_img01">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability02_img01.png') }}"
                                                    alt="シフト作成を自動でアシスト" width="700" height="494"></figure>
                                            <p class="mfp-modal__title">シフト作成を自動でアシスト</p>
                                            <p class="mfp-modal__caption">
                                                スタッフからあつめた勤務・休み希望を元に、クリックひとつで大枠のシフトを自動で作成できます。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-2">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability02_img02" title="過不足を見ながらシフト作成"
                                                data-analysis-trigger="ability_02_02"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img02.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability02_img02.png?20190206') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="過不足を見ながらシフト作成"></a></figure>
                                        <h4 class="ability__entry__title">過不足を見ながらシフト作成</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability02_img02">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img02.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability02_img02.png?20190206') }}"
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
                                        <h4 class="ability__entry__title">概算人件費を見つつシフト管理と作成</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability02_img03">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability02_img03.png') }}"
                                                    alt="概算人件費を見てシフト作成" width="700" height="494"></figure>
                                            <p class="mfp-modal__title">概算人件費を見つつシフト管理と作成</p>
                                            <p class="mfp-modal__caption">
                                                スタッフ毎の合計や日ごとの合計概算人件費がわかるので、計画性のあるシフト作成と管理ができます。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-4">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability02_img04" title="日／週／2週／半月／月で表示切替"
                                                data-analysis-trigger="ability_02_04"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img04.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability02_img04.png?20190206') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="日／週／2週／半月／月で表示切替"></a></figure>
                                        <h4 class="ability__entry__title">日／週／2週／半月／月で表示切替</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability02_img04">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img04.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability02_img04.png?20190206') }}"
                                                    alt="日／週／2週／半月／月で表示切替" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">日／週／2週／半月／月で表示切替</p>
                                            <p class="mfp-modal__caption">
                                                表示するシフト表を日・週・2週・半月・月に切り替えられます。時と場合に応じて好きな画面でシフト管理が可能です。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-5">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability02_img05" title="慣れたパターンでシフト作成"
                                                data-analysis-trigger="ability_02_05"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img05.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability02_img05.png?20190206') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="慣れたパターンでシフト作成"></a></figure>
                                        <h4 class="ability__entry__title">慣れたパターンでシフト作成</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability02_img05">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability02_img05.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability02_img05.png?20190206') }}"
                                                    width="700" height="494" alt="慣れたパターンでシフト作成"></figure>
                                            <p class="mfp-modal__title">慣れたパターンでシフト作成</p>
                                            <p class="mfp-modal__caption">
                                                「早番／中番／遅番」など、お店で使っているパターンを設定できるので、いつもの方法でシフト作成できます。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ability ability03">
                                <h3 class="ability__title">シフト調整</h3>
                                <div class="ability__entries">
                                    <div class="ability__entry ability__entry-1">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability03_img01" title="スタッフとのチャット機能"
                                                data-analysis-trigger="ability_03_01"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability03_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability03_img01.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="スタッフとのチャット機能"></a></figure>
                                        <h4 class="ability__entry__title">スタッフとのチャット機能</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability03_img01">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability03_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability03_img01.png') }}"
                                                    width="700" height="494" alt="スタッフとのチャット機能"></figure>
                                            <p class="mfp-modal__title">スタッフとのチャット機能</p>
                                            <p class="mfp-modal__caption">
                                                シフト作成と出勤依頼やスタッフからの欠勤申請などのやりとりがこれ１つでできるので、いろいろなツールを見る必要はありません。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-2">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability03_img02" title="スタッフへのシフト調整依頼"
                                                data-analysis-trigger="ability_03_02"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability03_img02.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability03_img02.png?20190206') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="スタッフへのシフト調整依頼"></a></figure>
                                        <h4 class="ability__entry__title">スタッフへのシフト調整依頼</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability03_img02">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability03_img02.png?20190206') }}"
                                                    data-src="{{ asset('assets/image/ability03_img02.png?20190206') }}"
                                                    width="700" height="494" alt="スタッフへのシフト調整依頼"></figure>
                                            <p class="mfp-modal__title">スタッフへのシフト調整依頼</p>
                                            <p class="mfp-modal__caption">
                                                シフトが足りない場合のスタッフへの出勤依頼や、多い場合の時間変更依頼を簡単に行うことができます。</p>
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
                                        <h4 class="ability__entry__title"><span class="new_release">NEW</span>専用アプリでメッセージ
                                        </h4>
                                        <a class="ability__entry__appstorelink"
                                            href="https://apps.apple.com/jp/app/apple-store/id1392127948" target="_blank"
                                            rel="noopener" data-analysis-trigger="messageapp_appstore_link_01">
                                            <img class="lazyload"
                                                src="{{ asset('assets/image/download_badge_app_store.svg') }}"
                                                data-src="{{ asset('assets/image/download_badge_app_store.svg') }}"
                                                width="109" height="40" alt="専用アプリでメッセージ"></a>
                                        <div class="mfp-hide mfp-modal__content" id="ability03_img03">
                                            <figure class="mfp-modal__image">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability03_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability03_img03.png') }}"
                                                    alt="専用アプリでメッセージ" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">専用アプリでメッセージ</p>
                                            <p class="mfp-modal__caption">
                                                スタッフからのシフトの調整依頼の承認やメッセージが、専用のスマホアプリでいつでもどこでもできます。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ability ability04">
                                <h3 class="ability__title">シフト共有</h3>
                                <div class="ability__entries">
                                    <div class="ability__entry ability__entry-1">
                                        <figure class="ability__entry__thumb">
                                            <a class="js-image-modal" href="#ability04_img01" title="スタッフへの共有"
                                                data-analysis-trigger="ability_04_01">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability04_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability04_img01.png') }}"
                                                    data-aspectratio="1.417/1" width="350" height="226"
                                                    alt="スタッフへの共有"></a>
                                        </figure>
                                        <h4 class="ability__entry__title">スタッフへの共有</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability04_img01">
                                            <figure class="mfp-modal__image">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability04_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability04_img01.png') }}"
                                                    alt="スタッフへの共有" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">スタッフへの共有</p>
                                            <p class="mfp-modal__caption">
                                                作成したシフト表は、スタッフにカンタンに共有できます。スタッフは共有されたシフト表をアプリで確認することができます。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-2">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability04_img02" title="印刷"
                                                data-analysis-trigger="ability_04_02">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability04_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability04_img02.png') }}"
                                                    data-aspectratio="1.417/1" width="350" height="226"
                                                    alt="印刷"></a>
                                        </figure>
                                        <h4 class="ability__entry__title">印刷</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability04_img02">
                                            <figure class="mfp-modal__image">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability04_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability04_img02.png') }}"
                                                    alt="印刷" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">印刷</p>
                                            <p class="mfp-modal__caption">
                                                作成したシフト表は、様々な形で印刷し、仕事場へ貼り出したりすることができます。また、CSVデータでのダウンロードも可能です。</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="ability__detail__link"><a href="/function/management/"
                                        data-analysis-trigger="function_management">シフト管理について詳しく見る</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="ability ability05">
                                <h3 class="ability__title">タイムカード・勤怠管理</h3>
                                <div class="ability__entries">
                                    <div class="ability__entry ability__entry-1">
                                        <figure class="ability__entry__thumb">
                                            <a class="js-image-modal" href="#ability05_img01" title="タイムカード（出退勤打刻）"
                                                data-analysis-trigger="ability_05_01"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability05_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability05_img01.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="タイムカード（出退勤打刻）">
                                            </a>
                                        </figure>
                                        <h4 class="ability__entry__title">タイムカード（出退勤打刻）</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability05_img01">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability05_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability05_img01.png') }}"
                                                    alt="タイムカード（出退勤打刻）" width="700" height="494"></figure>
                                            <p class="mfp-modal__title">タイムカード（出退勤打刻）</p>
                                            <p class="mfp-modal__caption">スタッフの出勤・退勤・休憩時刻を打刻し、労働時間を集計することができます。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-2">
                                        <figure class="ability__entry__thumb">
                                            <a class="js-image-modal" href="#ability05_img02" title="概算人件費シミュレーション"
                                                data-analysis-trigger="ability_05_02">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability05_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability05_img02.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="概算人件費シミュレーション"></a>
                                        </figure>
                                        <h4 class="ability__entry__title">概算人件費シミュレーション</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability05_img02">
                                            <figure class="mfp-modal__image">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability05_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability05_img02.png') }}"
                                                    alt="概算人件費シミュレーション" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">概算人件費シミュレーション</p>
                                            <p class="mfp-modal__caption">労働時間と設定した時給・交通費などを元に、概算の人件費を計算することができます。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-3">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability05_img06" title="freee人事労務とのデータ連携"
                                                data-analysis-trigger="ability_05_06"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability05_img06.png') }}"
                                                    data-src="{{ asset('assets/image/ability05_img06.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="freee人事労務とのデータ連携">
                                            </a>
                                        </figure>
                                        <h4 class="ability__entry__title">
                                            <span class="new_release">NEW</span>freee人事労務とのデータ連携
                                        </h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability05_img06">
                                            <figure class="mfp-modal__image">
                                                <img class="lazyload"
                                                    src="{{ asset('assets/image/ability05_img06.png') }}"
                                                    data-src="{{ asset('assets/image/ability05_img06.png') }}"
                                                    alt="freee人事労務とのデータ連携" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">freee人事労務とのデータ連携</p>
                                            <p class="mfp-modal__caption">
                                                <a class="ability__external__link" href="https://www.freee.co.jp/hr/"
                                                    target="_blank"
                                                    rel="noopener">freee人事労務</a>にデータを送信し、給与計算に利用することができます。また、給与計算された結果をAirシフトで確認することもできます。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p class="ability__detail__link">
                                    <a href="/function/timecard/"
                                        data-analysis-trigger="function_timecard">勤怠管理について詳しく見る</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="ability ability06">
                                <h3 class="ability__title">ヘルプ機能</h3>
                                <div class="ability__entries">
                                    <div class="ability__entry ability__entry-1">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability06_img01" title="募集情報の作成・シフトボードへの掲載"
                                                data-analysis-trigger="ability_06_01"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img01.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="募集情報の作成・シフトボードへの掲載"></a></figure>
                                        <h4 class="ability__entry__title">募集情報の作成・<br>シフトボードへの掲載</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img01">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img01.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img01.png') }}"
                                                    alt="募集情報の作成・シフトボードへの掲載" width="700" height="494">
                                            </figure>
                                            <p class="mfp-modal__title">募集情報の作成・シフトボードへの掲載</p>
                                            <p class="mfp-modal__caption">
                                                シフトが埋まらないときに、シフト表上からシフト1枠単位（24時間以内の単発）で単発バイトを募集できます。<br>※募集先：<a
                                                    class="ability__external__link"
                                                    href="" target="_blank"
                                                    rel="noopener">シフトボード</a>「単発バイト」タブ</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-2">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability06_img02" title="応募者の履歴書情報の確認"
                                                data-analysis-trigger="ability_06_02"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img02.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="応募者の履歴書情報の確認"></a></figure>
                                        <h4 class="ability__entry__title">応募者の履歴書情報の確認</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img02">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img02.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img02.png') }}"
                                                    alt="応募者の履歴書情報の確認" width="700" height="494"></figure>
                                            <p class="mfp-modal__title">応募者の履歴書情報の確認</p>
                                            <p class="mfp-modal__caption">応募がくると、応募者の履歴書情報が確認できます。</p>
                                        </div>
                                    </div>
                                    <div class="ability__entry ability__entry-3">
                                        <figure class="ability__entry__thumb"><a class="js-image-modal"
                                                href="#ability06_img03" title="採用／不採用の決定と通知"
                                                data-analysis-trigger="ability_06_03"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img03.png') }}"
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="採用／不採用の決定と通知"></a></figure>
                                        <h4 class="ability__entry__title">採用／不採用の決定と通知</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img03">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img03.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img03.png') }}"
                                                    alt="採用／不採用の決定と通知" width="700" height="494"></figure>
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
                                                    data-aspectratio="1.415/1" width="320" height="226"
                                                    alt="採用者とのチャット"></a></figure>
                                        <h4 class="ability__entry__title">採用者とのチャット</h4>
                                        <div class="mfp-hide mfp-modal__content" id="ability06_img04">
                                            <figure class="mfp-modal__image"><img class="lazyload"
                                                    src="{{ asset('assets/image/ability06_img04.png') }}"
                                                    data-src="{{ asset('assets/image/ability06_img04.png') }}"
                                                    alt="採用者とのチャット" width="700" height="494"></figure>
                                            <p class="mfp-modal__title">採用者とのチャット</p>
                                            <p class="mfp-modal__caption">採用すると、チャット機能を用いて採用者とやりとりができます。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie">
                                    <div class="movie__inner">
                                        <div class="movie__thumbnail">
                                            <div class="movie__thumbnail__inner"><a class="js-video-content"
                                                    data-video-id="1eh2GiyFVn0" data-analysis-trigger="video_help"><img
                                                        class="lazyload"
                                                        src="{{ asset('assets/image/video_thumbnail03.png') }}"
                                                        data-src="{{ asset('assets/image/video_thumbnail03.png') }}"
                                                        data-aspectratio="1.777/1" alt="『ヘルプ機能の使い方』" width="720"
                                                        height="405"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="ability__detail__link"><a href="/function/help/"
                                        data-analysis-trigger="function_help">ヘルプ機能について詳しく見る</a></p>
                            </div>
                        </li>
                    </div>
                </div>
            </section>
            <section class="staff" id="staff">
                <div class="staff__inner">
                    <div class="staff__left">
                        <h2 class="staff__title">スタッフにも<br class="is-spOnly">喜んでもらえます</h2>
                        <p class="staff__text">スタッフはシフト管理アプリ「シフトボード」を使って、より便利にシフト管理ができるようになります。</p>
                        <div class="staff__right">
                            <figure class="staff__visual">
                                <img class="pc lazyload" src="{{ asset('assets/image/staff_img01_pc.png') }}"
                                    data-src="{{ asset('assets/image/staff_img01_pc.png') }}" data-aspectratio="2.46/1"
                                    width="780" height="337" alt="シフト管理アプリ「シフトボード」">
                                <img class="sp lazyload" src="{{ asset('assets/image/staff_img01_sp.png') }}"
                                    data-src="{{ asset('assets/image/staff_img01_sp.png') }}"
                                    data-aspectratio="1/1.4625" width="320" height="480" alt="シフト管理アプリ「シフトボード」">
                            </figure>
                            <ul class="staff__links">
                                <li class="staff__links__item staff__links__item-app">
                                    <a target="_blank" rel="noopener"
                                        href="https://apps.apple.com/jp/app/シフトボード-シフト管理と給料計算が便利なバイト-アプリ/id747364886"
                                        data-analysis-trigger="staff_appstore_link_01">
                                        <img class="lazyload"
                                            src="{{ asset('assets/image/download_badge_app_store.png') }}"
                                            data-src="{{ asset('assets/image/download_badge_app_store.png') }}"
                                            data-aspectratio="2.553/1" width="240" alt="App Storeからダウンロード"></a>
                                </li>
                                <li class="staff__links__item staff__links__item-gplay">
                                    <a target="_blank" rel="noopener"
                                        href="https://play.google.com/store/apps/details?id=jp.co.recruit.shiftboard&amp;hl=ja"
                                        data-analysis-trigger="staff_googleplay_link_01">
                                        <img class="lazyload"
                                            src="{{ asset('assets/image/download_badge_google_play.png') }}"
                                            data-src="{{ asset('assets/image/download_badge_google_play.png') }}"
                                            data-aspectratio="2.553/1" width="240"
                                            alt="ANDROID APP ON Google Play"></a></li>
                            </ul>
                        </div>
                        <h2 class="staff__title-2">便利な4つの機能</h2>
                        <div class="staff__point">
                            <div class="staff__point__entry">
                                <figure class="staff__point__icon"><img class="lazyload"
                                        src="{{ asset('assets/image/staff_icon01.png') }}"
                                        data-src="{{ asset('assets/image/staff_icon01.png') }}" data-aspectratio="1/1"
                                        width="130" alt="シフト提出・確認がアプリでできる"></figure>
                                <div class="staff__point__item">シフト提出・確認が<br>アプリでできる</div>
                            </div>
                            <div class="staff__point__entry">
                                <figure class="staff__point__icon"><img class="lazyload"
                                        src="{{ asset('assets/image/staff_icon02.png') }}"
                                        data-src="{{ asset('assets/image/staff_icon02.png') }}" data-aspectratio="1/1"
                                        width="130" alt="バイト先とチャットでやりとりが可能">
                                </figure>
                                <div class="staff__point__item">バイト先とチャットで<br>やりとりが可能</div>
                            </div>
                            <div class="staff__point__entry">
                                <figure class="staff__point__icon"><img class="lazyload"
                                        src="{{ asset('assets/image/staff_icon03.png') }}"
                                        data-src="{{ asset('assets/image/staff_icon03.png') }}" data-aspectratio="1/1"
                                        width="130" alt="おおよその給料金額が分かる"></figure>
                                <div class="staff__point__item">おおよその<br>給料金額が分かる</div>
                            </div>
                            <div class="staff__point__entry">
                                <figure class="staff__point__icon"><img class="lazyload"
                                        src="{{ asset('assets/image/staff_icon04.png') }}"
                                        data-src="{{ asset('assets/image/staff_icon04.png') }}" data-aspectratio="1/1"
                                        width="130" alt="端末のカレンダーと同期ができる"></figure>
                                <div class="staff__point__item">端末のカレンダーと<br>同期ができる</div>
                            </div>
                        </div>
                        <div class="staff__whats"><a class="staff__whats__link" href=""
                                target="_blank" rel="noopener">
                                <div class="staff__whats__btn"><span>シフトボードとは</span></div>
                            </a></div>
                    </div>
                    <p class="staff__note">
                        ※調査主体：(株)リクルート実施機関：(株)インテージ（2021年12月実施）<br>対象：職業が「パート・アルバイト」「学生」「専業主婦・専業主夫」のシフト管理・給料計算アプリを現在利用している18歳～59歳の男女(n=1,081)
                    </p>
                </div>
            </section>
            <section class="price" id="price">
                <div class="price__inner">
                    <h2 class="price__title">費用</h2>
                    <div class="price__freetrial">
                        <h3 class="price__freetrial__title">まずはお試しください</h3>
                        <div class="price__freetrial__inner">
                            <div class="price__freetrial__detail">
                                <div class="price__freetrial__description"><img class="lazyload"
                                        src="{{ asset('assets/image/price_image01.png') }}"
                                        data-src="{{ asset('assets/image/price_image01.png') }}"
                                        data-aspectratio="3.87/1" width="639"
                                        alt="無料体験期間として「利用開始月」と「翌月」は0円 まずはお試しください。"></div>
                                <div class="price__freetrial__note">
                                    <p>※無料期間終了後、自動で課金されることはございません。</p>
                                    <p>例）8月13日にAirシフトのご利用を開始された場合、8月と9月が無料体験期間です。</p>
                                    <p>※3ヶ月目以降のご利用については、継続利用（有料）申込みをされない場合、無料版（機能制限あり）となり連携スタッフについては退職処理がなされます。</p>
                                    <p>※ヘルプ機能のご利用には継続利用（有料）申込みが必要です。Air シフトの審査が通過しても、ヘルプ機能の審査が通過しない場合があります。</p>
                                </div>
                            </div>
                            <div class="price__freetrial__image"><img class="lazyload is-pcOnly"
                                    src="{{ asset('assets/image/price_image02.png') }}"
                                    data-src="{{ asset('assets/image/price_image02.png') }}" data-aspectratio="1.68/1"
                                    width="359" height="213"
                                    alt="Airシフトはパソコン・タブレット・スマートフォン（メッセージ機能のみ）でお使いいただけます"></div>
                        </div>
                        <p class="ability__detail__link"><a href="/cost/"
                                data-analysis-trigger="cost">費用について詳しく見る</a></p>
                    </div>
                </div>
            </section>
            <section class="flow lazyload" id="flow" data-bg="{{ asset('assets/image/flow_bg.jpg') }} "
                style="background-image: url('{{ asset('assets/image/flow_bg.jpg') }}')">
                <div class="flow__inner">
                    <h2 class="flow__title">利用開始までの流れ</h2>
                    <div class="flow__entries">
                        <div class="flow__entry">
                            <p class="flow__entry__step en">STEP 1</p>
                            <h3 class="flow__entry__title"><span class="en">AirID</span>の登録</h3>
                            <figure class="flow__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/flow_img01.png') }}"
                                    data-src="{{ asset('assets/image/flow_img01.png') }}" data-aspectratio="1.587/1"
                                    width="200" alt="AirIDの登録"></figure>
                            <div class="flow__entry__text__wrap">
                                <p class="flow__entry__text"><span class="en">Air</span>シフトの<span
                                        class="en">Web</span>サイトから<br class="is-pcOnly">メールアドレスやお店の情報を入力し、<br
                                        class="is-pcOnly"><span class="en">AirID</span>（アカウント）の登録をします。</p>
                            </div>
                            <p class="flow__entry__note">※既に他のサービスで<a href="http://localhost:5500" target="_blank"
                                    rel="noopener" data-analysis-trigger="flow_login_01"><span
                                        class="en">AirID</span>をお持ちの方はこちら</a></p>
                        </div>
                        <div class="flow__separate"><svg xmlns="http://www.w3.org/2000/svg" width="22.718"
                                height="40" viewbox="0 0 22.718 40">
                                <path fill="#20aee5" fill-rule="evenodd"
                                    d="M693.674,10029.4l16.792,17a3.027,3.027,0,0,1,0,4.2l-16.792,17a2.787,2.787,0,0,1-2.117.9,3.017,3.017,0,0,1-2.117-.9,2.9,2.9,0,0,1,0-4.1l14.958-15-14.817-15a2.907,2.907,0,0,1,0-4.1,2.788,2.788,0,0,1,2.117-.9A2.709,2.709,0,0,1,693.674,10029.4Z"
                                    transform="translate(-688.594 -10028.5)"></path>
                            </svg></div>
                        <div class="flow__entry">
                            <p class="flow__entry__step en">STEP 2</p>
                            <h3 class="flow__entry__title">スタッフ連携し、利用開始</h3>
                            <figure class="flow__entry__thumb"><img class="lazyload"
                                    src="{{ asset('assets/image/flow_img02.png') }}"
                                    data-src="{{ asset('assets/image/flow_img02.png') }}" data-aspectratio="2.367/1"
                                    width="251" alt="スタッフ連携し、利用開始"></figure>
                            <div class="flow__entry__text__wrap">
                                <p class="flow__entry__text">まずは、ご自身のスマホで連携して<br class="is-pcOnly">すべての機能を体験しましょう。</p>
                            </div>
                            <p class="flow__entry__note">※シフトボードからの連携申請を承認後に<br class="is-pcOnly">シフト表が表示されます。
                            </p>
                        </div>
                    </div>
                    <div class="register"><a class="main__link" href="http://localhost:5500/airid" target="_blank"
                            rel="noopener" data-analysis-trigger="entry_06">
                            <div class="main__link__button">アカウント登録</div>
                        </a><a class="main__login__link" target="_blank" rel="noopener"
                            data-analysis-trigger="login_06" href="http://localhost:5500">
                            <div class="main__login__link__button">AirIDをお持ちの方</div>
                        </a></div>
                </div>
            </section>
            <section class="faq__section home" id="faq">
                <div class="faq__inner">
                    <h2 class="faq__title home">よくあるご質問</h2>
                    <ul class="faq__list">
                        <li>
                            <p class="faq__question">連携している他のサービスはありますか
                            <div class="faq__answer">
                                <p>スタッフ向けシフト管理アプリ「<a class="ability__external__link" href=""
                                        target="_blank" rel="noopener">シフトボード</a>」、給与計算ソフト「<a
                                        class="ability__external__link" href="https://www.freee.co.jp/hr/"
                                        target="_blank" rel="noopener">freee人事労務</a>」と連携してご利用いただけます。</p>
                                <p>また、「<a class="ability__external__link" href=""
                                        target="_blank"
                                        rel="noopener">Airメイト</a>」にシフトデータ・勤怠データ・概算人件費データを連携しています。<br>その他のサービスとは、現時点では連携しておりません。
                                </p>
                            </div>
                            </p>
                        </li>
                        <li>
                            <p class="faq__question">シフトボードとは何ですか
                            <div class="faq__answer">
                                <p>スタッフ向けシフト管理アプリです。詳しくは<a class="ability__external__link" href=""
                                        target="_blank" rel="noopener">こちら</a>をご覧ください。</p>
                                <p>Airシフトでスタッフから希望シフトを集めたり、確定したシフトの連絡をするなど、スタッフとシフトに関するやりとりをするには、スタッフがシフトボードを使ってAirシフトと連携する必要があります。
                                </p>
                            </div>
                            </p>
                        </li>
                        <li>
                            <p class="faq__question">複数店舗での利用は可能ですか</p>
                            <div class="faq__answer">
                                <p>同じAirIDで店舗を複数作成して、管理いただくことができます。店舗追加の方法は<a class="ability__external__link"
                                        href="http://localhost:8800/ategories/articles" target="_blank"
                                        rel="noopener">こちら</a>をご覧ください。</p>
                            </div>
                        </li>
                    </ul>
                    <p class="faq__external__link"><a class="ability__external__link" target="_blank" rel="noopener"
                            href="http://localhost:8800/ategories/articles">よくあるご質問について詳しく見る</a></p>
                </div>
            </section>
            <section class="market">
                <div class="market__inner">
                    <h2 class="market__title">お店で課題を解決する<br class="is-spOnly">便利なサービスが、<br><span
                            class="en">Air</span>マーケットで続々登場。</h2>
                    <div class="market__wrap">
                        <p class="market__text"><span class="en">Air</span>マーケットでは、お客様からの予約情報を管理するアプリ「<span
                                class="en">Air</span>リザーブ」、食材仕入れを便利にする「八面六臂（はちめんろっぴ）」やチラシ1枚1.1円から印刷できる「ネット印刷のラクスル」など、いいお店をつくる多彩なサービスをご紹介しています。また、実際にサービスを利用された方々の声を多数掲載し、気になる利用した際のイメージをわかりやすくお伝えしています。便利なサービスが次々集まるAirマーケットを、ぜひ一度ご覧ください。
                        </p>
                        <figure class="market__img"><img class="lazyload"
                                src="{{ asset('assets/image/market_image01.png') }}"
                                data-src="{{ asset('assets/image/market_image01.png') }}" width="214"
                                height="224" alt="Airマーケット"></figure>
                    </div>
                </div>
            </section>
            <div class="other">
                <div class="other__inner">
                    <div class="other__link"><a href="" target="_blank" rel="noopener"
                            data-analysis-trigger="market_01"><img class="lazyload is-pcOnly"
                                src="{{ asset('assets/image/other_img.png') }}"
                                data-src="{{ asset('assets/image/other_img.png') }}" width="982" height="250"
                                alt="会計管理・決済・集客などお店に役立つ便利なサービス満載!!"><img class="lazyload is-spOnly"
                                src="{{ asset('assets/image/other_img_sp.png') }}"
                                data-src="{{ asset('assets/image/other_img_sp.png') }}" width="300"
                                height="125" alt="会計管理・決済・集客などお店に役立つ便利なサービス満載!!"></a></div>
                </div>
            </div>
            <div class="media" id="media">
                <div class="media__inner">
                    <h3 class="media__title">メディア掲載情報</h3>
                    <div class="media__item"><a href=""
                            data-analysis-trigger="media_20220908"><time class="media__item__date"
                                datetime="2022-09-08">2022/09/08<span
                                    class="media__item__ttl">月刊食品商業22年月10号</span></time>「Boulangerie
                            道」様のAirシフト導入事例が掲載されました</a></div>
                    <div class="media__item"><a href="./media/220820/index.html"
                            data-analysis-trigger="media_20220820"><time class="media__item__date"
                                datetime="2022-08-20">2022/08/20<span
                                    class="media__item__ttl">月刊食堂2022年9月号</span></time>「CAFÉ DE
                            FLEUR」様のAirシフト導入事例が掲載されました</a></div>
                    <p class="media__morelink"><a href="./media/">メディア掲載情報一覧へ &#062;</a></p>
                </div>
            </div>
            <div class="news" id="news">
                <div class="news__inner">
                    <h3 class="news__title">お知らせ</h3>
                    <div class="news__covid19">
                        <h4>【お店のみなさまへ】</h4>
                        <p>新型コロナウイルス感染症で影響を受けている事業者向けの政府の支援策のページです。支援策のまとめや資金繰り支援、相談窓口の電話番号などが記載されています。</p>
                        <p>みなさまにとって大変な毎日が続いているかと存じます。政府の支援策を最大限ご活用ください。</p>
                        <ul>
                            <li><a href="" target="_blank" rel="noopener">経済産業省
                                    新型コロナウィルス感染症関連施策</a></li>
                            <li><a href="" target="_blank"
                                    rel="noopener">中小企業庁 新型コロナウィルスに関連した感染症対策情報</a></li>
                        </ul>
                    </div>
                    <div class="news__entries"><a class="news__entry"
                            href="" target="_blank"
                            rel="noopener">
                            <p class="news__entry__date">2022年10月14日</p>
                            <p class="news__entry__text">「Airシフト サービス概要Webセミナー」を開催のお知らせ</p>
                        </a><a class="news__entry" href=""
                            target="_blank" rel="noopener">
                            <p class="news__entry__date">2022年3月23日</p>
                            <p class="news__entry__text">【新機能】概算人件費シミュレーションデータをAirシフトからfreee人事労務へ送信できるようになりました</p>
                        </a><a class="news__entry" href=""
                            target="_blank" rel="noopener">
                            <p class="news__entry__date">2022年3月8日</p>
                            <p class="news__entry__text">（新機能）ヘルプスタッフの募集・採用ができる「ヘルプ機能」リリースのお知らせ</p>
                        </a><a class="news__entry" href=""
                            target="_blank" rel="noopener">
                            <p class="news__entry__date">2021年10月28日</p>
                            <p class="news__entry__text">「iPadOS 15」でAirシフトがご利用いただけます</p>
                        </a><a class="news__entry" href=""
                            target="_blank" rel="noopener">
                            <p class="news__entry__date">2021年7月12日</p>
                            <p class="news__entry__text">【新機能】スマホアプリ（iOS用）のメッセージ画面から希望シフトを確定できるようになりました</p>
                        </a><a class="news__entry" href=""
                            target="_blank" rel="noopener">
                            <p class="news__entry__date">2021年4月12日</p>
                            <p class="news__entry__text">タイムカードの打刻画面で15分以内の勤務・5分以内の休憩の打刻ができるようになります</p>
                        </a><a class="news__entry" href=""
                            target="_blank" rel="noopener">
                            <p class="news__entry__text">その他のお知らせ</p>
                        </a></div>
                </div>
            </div>

        </div>
        <div class="action__footer">
            <ul class="action__footer__inner">
                <li class="action__footer__item">
                    <a class="action__footer__link action__footer__document-request"
                        href="/request/" data-analysis-trigger="document_request_action_footer">まずは資料請求する</a>
                </li>
                <li class="action__footer__item">
                    <a class="action__footer__link action__footer__seminar-request"
                        href="http://localhost:8800/categories/articles/answer" target="_blank" rel="noopener"
                        data-analysis-trigger="seminar_request_action_footer">セミナー詳細を見る</a></li>
            </ul>
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
        }
      ]
  }</script>
    <script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
      "@type": "Question",
      "name": "連携している他のサービスはありますか",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "スタッフ向けシフト管理アプリ「<a href=https://shiftboard.jp/>シフトボード</a>」、給与計算ソフト「<a href=https://www.freee.co.jp/hr/>freee人事労務</a>」と連携してご利用いただけます。また、「<a href=https://airregi.jp/mate/>Airメイト</a>」にシフトデータ・勤怠データ・概算人件費データを連携しています。その他のサービスとは、現時点では連携しておりません。"
      }
    },
    {
      "@type": "Question",
      "name": "シフトボードとは何ですか",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "スタッフ向けシフト管理アプリです。詳しくは<a href=https://shiftboard.jp/>こちら</a>をご覧ください。Airシフトでスタッフから希望シフトを集めたり、確定したシフトの連絡をするなど、スタッフとシフトに関するやりとりをするには、スタッフがシフトボードを使ってAirシフトと連携する必要があります。"
      }
    },
    {
      "@type": "Question",
      "name": "複数店舗での利用は可能ですか",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "同じAirIDで店舗を複数作成して、管理いただくことができます。店舗追加の方法は<a href=https://faq.airshift.jp/hc/ja/articles/360003861112>こちら</a>をご確認ください。"
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
