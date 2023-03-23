@extends('layouts.frontend')
@section('title','「VANDALISM 渋谷」の導入事例 | シフト管理システム・アプリ【Airシフト】')
@section('head')
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script src="{{ asset('assets/js/style.js') }}" ></script>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description"
        content="【リクルート：Airシフト】実際にご利用いただいている「VANDALISM 渋谷」様の事例をご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="導入事例,飲食,ダイニングバー,Airシフト,シフト作成,シフト管理,VANDALISM">
    <meta property="og:title" content="「VANDALISM 渋谷」の導入事例 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/case/001/">
    <meta property="og:image" content="https://airregi.jp/shift/img/case/001/main_img.jpg">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】実際にご利用いただいている「VANDALISM 渋谷」様の事例をご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="http://localhost:8000/case/001/">
    <link rel="apple-touch-icon" href="{{ asset('assets/image/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/case.css') }}">
</head>
@endsection
@section('content')


        <main>
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__inner">
                        <li class="breadcrumb__item"><a href="/">Airシフト</a>&nbsp;&gt;&nbsp;</li>
                        <li class="breadcrumb__item"><a href="/case">導入事例</a>&nbsp;&gt;&nbsp;</li>
                        <li class="breadcrumb__item"><span>VANDALISM 渋谷</span></li>
                    </ul>
                </div>
                <p class="page__title">導入事例</p>
                <section class="main">
                    <div class="main__inner">
                        <div class="main__imgarea"><img class="lazyload"
                                src="{{ asset('assets/image/frontend/case/case_img01.jpg') }}"
                                data-src="{{ asset('assets/image/frontend/case/case_img01.jpg') }}" alt="VANDALISM 渋谷 / 取締役 山口 隆実さん">
                        </div>
                        <div class="main__textarea">
                            <h1 class="main__catch">「VANDALISM 渋谷」の導入事例</h1>
                            <div class="main__prof">
                                <h2 class="main__title"><span class="main__label">ダイニングバー</span>VANDALISM　渋谷</h2>
                                <p class="main__prof__staff"><span class="main__label">スタッフ数</span>11人</p>
                            </div>
                            <p class="main__prof__name"><span class="main__prof__position">取締役</span>山口 隆実<span
                                    class="text__small">さん</span></p>
                        </div>
                    </div>
                    <div class="movie">
                        <div class="movie__inner">
                            <div class="iframe__wrap"><iframe id="ytplayer" type="text/html" width="875"
                                    height="492" src="https://www.youtube.com/embed/Boe2Ksmw3X0"
                                    frameborder="0"></iframe></div>
                        </div>
                    </div>
                </section>
                <section class="contents">
                    <div class="contents__inner">
                        <div class="content__wrap content__wrap__L clear_fix">
                            <figure class="content__img__wrap"><img class="lazyload"
                                    src="{{ asset('assets/image/frontend/case/content_img_01.jpg') }}"
                                    data-src="{{ asset('assets/image/frontend/case/content_img_01.jpg') }}"
                                    alt="シフト管理に3時間以上。業務の合間や休日に取り組むことがストレスに"></figure>
                            <div class="content__text__wrap">
                                <h3 class="content__title">シフト管理に3時間以上。業務の合間や休日に取り組むことがストレスに</h3>
                                <p class="content__text">
                                    当店では、スタッフからの希望をできる限り反映できるようシフトを作成しています。スタッフは、役者志望のフリーターや学生が多いため、休み希望は最優先で。アルバイトの場合は、稼ぎたい給与額を事前にヒアリングし、その希望を考慮しながら人件費の予算に合うようシフトを組んでいきます。また、予約状況に応じてスタッフ配置を考えることも重要です。<br><br>以前のシフト管理では、希望シフトの提出方法がスタッフによって異なり、手書きのメモ、口頭、LINEやメールなどバラバラの状態。回収した希望シフトは、一旦エクセルに一つ一つ手で入力し、予約状況や人件費に合わせて調整をする。希望シフトを出していないスタッフへの催促や、シフト希望を叶えられないことをスタッフに伝えるのはかなりのストレスでした。時間的にもシフトを完成させるまでに3時間以上はかかっていたと思います。さらに、接客や調理といった通常業務が優先されるため、シフト管理はどうしても空いた時間や休日に取り組むことになりがちな作業です。そのことも余計にストレスを感じる原因となっていました。
                                </p>
                            </div>
                        </div>
                        <div class="content__wrap content__wrap__R clear_fix">
                            <h3 class="content__title">「シフト提出が楽になった」と、スタッフも大満足</h3>
                            <figure class="content__img__wrap"><img class="lazyload"
                                    src="{{ asset('assets/image/frontend/case/content_img_02.jpg') }}"
                                    data-src="{{ asset('assets/image/frontend/case/content_img_02.jpg') }}"
                                    alt="「シフト提出が楽になった」と、スタッフも大満足"></figure>
                            <div class="content__text__wrap">
                                <p class="content__text">
                                    導入前は、「こんな簡単にできるのかな？」と、半信半疑でした。しかし使ってみると、自分自身は勿論、「シフト提出が楽だ」とスタッフからの満足度も非常に高かったですね。大半のスタッフがすぐに使いこなせてました。「簡単すぎて不安でした」といった声が上がるぐらいで、私も驚いています。それから、今はネット予約が主流なので、外出先で予約を受ける際に、予約当日のスタッフが確認できるので安心です。
                                </p>
                            </div>
                        </div>
                        <div class="content__wrap content__wrap__L clear_fix">
                            <figure class="content__img__wrap"><img class="lazyload"
                                    src="{{ asset('assets/image/frontend/case/content_img_03.jpg') }}"
                                    data-src="{{ asset('assets/image/frontend/case/content_img_03.jpg') }}"
                                    alt="精神的にラクになっただけでなくシフト作成のミスも減少"></figure>
                            <div class="content__text__wrap">
                                <h3 class="content__title">精神的にラクになっただけでなくシフト作成のミスも減少</h3>
                                <p class="content__text">
                                    導入により精神面でもメリットが大きく、急なシフト変更もボタン一つで相手に通知を送れるところが本当に楽です。スタッフ側も単純にマルかバツを押すだけで返事ができる。デジタルを介すことで、余計な気を使わなくて済むため双方の精神的なしんどさが軽減できていると感じます。シフト作成にかかる時間も、今まで3時間以上かかっていたのが30分程度になりました。主に時間がかかっていた「希望シフトの反映」と「共有用の清書作業」が不要になり、同時にシフトの抜け漏れもなくなったためシフト作成のミスも減りました。
                                </p>
                            </div>
                        </div>
                        <div class="content__wrap content__wrap__R clear_fix">
                            <h3 class="content__title">辛かったシフト管理が「楽しくなった」</h3>
                            <figure class="content__img__wrap"><img class="lazyload"
                                    src="{{ asset('assets/image/frontend/case/content_img_04.jpg') }}"
                                    data-src="{{ asset('assets/image/frontend/case/content_img_04.jpg') }}"
                                    alt="辛かったシフト管理が「楽しくなった」"></figure>
                            <div class="content__text__wrap">
                                <p class="content__text">
                                    今までシフト管理は、店舗運営の業務の中で１、２位を争うくらいストレスがかかる作業でした。それがAirシフトを導入してからは、苦労していたシフト管理がボタンを押していくだけで終わる。いまはシフト管理が「楽しい」と思えるほどになりました。また、空いた時間でスタッフたちとのミーティングの時間を持つことができたり、休養もきちんと取れるようになりました。今後はさらに生産性を上げていき、売上や利益につなげ全国展開も狙っていきたいと考えています。
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="staffvoice">
                    <div class="staffvoice__inner">
                        <h3 class="staffvoice__title">スタッフの声</h3>
                        <p class="staffvoice__caption">掛け持ちしているアルバイトとのダブルブッキングがなくなりました</p>
                        <div class="staffvoice__content clear_fix">
                            <figure class="staffvoice__img"><img class="lazyload"
                                    src="{{ asset('assets/image/frontend/case/img_staff.jpg') }}"
                                    data-src="{{ asset('assets/image/frontend/case/img_staff.jpg') }}"
                                    alt="掛け持ちしているアルバイトとのダブルブッキングがなくなりました">
                                <figcaption class="staffvoice__name"><span class="staffvoice__position">スタッフ</span>富田
                                    愛<span class="text__small">さん</span></figcaption>
                            </figure>
                            <p class="staffvoice__text">
                                以前は、アルバイトを3つ掛け持ちしていたのでダブルブッキングしてしまうことがよくありました。バイト間の１時間だけ被ってしまっていたり、移動時間を計算していなかったりして、当日慌ててシフト変更することもしょっちゅうありました。しかしAirシフトが導入され、シフトボードで管理するようになってからは自分のシフトが一目瞭然で時間が被っていてもすぐに分かるのでダブルブッキングはなくなりました。また、これまではLINEグループで連絡を取り合っていたんですが、プライベートの内容と混ざってしまうため、シフトの話が流れてしまい行き違いも結構ありました。しかし、シフトボードだとシフトの話専用になっているので、確認がしやすいです。
                            </p>
                        </div>
                    </div>
                </section>
                <section class="shopinfo">
                    <div class="shopinfo__inner">
                        <div class="shopinfo__text">
                            <p class="shopinfo__label">店舗情報</p>
                            <h3 class="shopinfo__title">Cafe＆Diner　VANDALISM　渋谷</h3>
                            <p class="shopinfo__address">東京都渋谷区宇田川町26-9 太田ビル B1F</p>
                            <p class="shopinfo__info">創業年：2015年<br>業種：飲食／ダイニングバー<br>席数：50席<br>スタッフ数：11人</p>
                        </div>
                        <figure class="shopinfo__img"><img class="lazyload"
                                src="{{ asset('assets/image/frontend/case/img_shopinfo.jpg') }}"
                                data-src="{{ asset('assets/image/frontend/case/img_shopinfo.jpg') }}" alt="Cafe＆Diner VANDALISM 渋谷">
                        </figure>
                    </div>
                </section>
                <section class="backto__caseindex"><a href="../">導入事例一覧へ戻る</a></section>
                <section class="case">
                    <div class="case__inner">
                        <p class="case__title">その他の導入事例</p>
                        <ul class="case__entries"></ul>
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
        <div class="pagetop"><img class="lazyload"
                src="{{ asset('assets/image/download.png') }}"
                data-src="{{ asset('assets/image/download.png') }}"
                width="56" height="56">
        </div>
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
                "@id": "https://airregi.jp/shift/case/",
                "name": "導入事例"
              }
          },
          {
            "@type": "ListItem",
            "position": 4,
            "item":
              {
                "@id": "https://airregi.jp/shift/case/001/",
                "name": "VANDALISM 渋谷"
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
</body>

</html>
