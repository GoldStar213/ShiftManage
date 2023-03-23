@extends('layouts.frontend')
@section('title','導入事例 | シフト管理システム・アプリ【Airシフト】')
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
        content="【リクルート：Airシフト】実際にご利用いただいているお客様の声（導入事例）をご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="導入事例,Airシフト,シフト作成,シフト管理,シフト">
    <meta property="og:title" content="導入事例 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/case/">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】実際にご利用いただいているお客様の声（導入事例）をご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="http://localhost:8000/case/">
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
                    <li class="breadcrumb__item"><span>導入事例</span></li>
                </ul>
            </div>
            <section class="case" id="case">
                <div class="case__inner">
                    <h1 class="case__title">導入事例一覧</h1>
                    <p class="case__caption">さまざまな業種・業態でご利用の方にAirシフトを導入した感想をお聞きしました。</p>
                    <div class="case__filter">
                        <h2 class="case__filter__title">絞り込み</h2>
                        <div class="case__filter__type"><span class="case__filter__type__title">業種</span>
                            <ul class="case__filter__items">
                                <li><input type="radio" name="nd-genre" value="genre_all"
                                        id="narrow_down-genre_all" checked><label
                                        for="narrow_down-genre_all">全て</label></li>
                                <li><input type="radio" name="nd-genre" value="genre_food"
                                        id="narrow_down-genre_food"><label for="narrow_down-genre_food">飲食</label>
                                </li>
                                <li>
                                    <input type="radio" name="nd-genre" value="genre_retail" id="narrow_down-genre_retail">
                                    <label for="narrow_down-genre_retail">小売</label>
                                </li>
                                <li>
                                    <input type="radio" name="nd-genre" value="genre_service" id="narrow_down-genre_service">
                                    <label for="narrow_down-genre_service">サービス</label>
                                </li>
                            </ul>
                        </div>
                        <div class="case__filter__type"><span class="case__filter__type__title">スタッフ人数</span>
                            <ul class="case__filter__items">
                                <li><input type="radio" name="nd-staff" value="staff_all"
                                        id="narrow_down-staff_all" checked><label
                                        for="narrow_down-staff_all">全て</label></li>
                                <li><input type="radio" name="nd-staff" value="staff_under5"
                                        id="narrow_down-staff_under5"><label
                                        for="narrow_down-staff_under5">5人以下</label></li>
                                <li><input type="radio" name="nd-staff" value="staff_6_20"
                                        id="narrow_down-staff_6_20"><label
                                        for="narrow_down-staff_6_20">6-20人</label></li>
                                <li><input type="radio" name="nd-staff" value="staff_over21"
                                        id="narrow_down-staff_over21"><label
                                        for="narrow_down-staff_over21">21人以上</label></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="case__entries">
                        <li class="case__entrie" data-nd-genre="genre_food" data-nd-staff="staff_6_20"><a
                                href="/case/001">
                                <div class="case__content__on-image">
                                    <figure class="case__entry__thumb">
                                        <img class="lazyload"
                                            src="{{ asset('assets/image/frontend/case/case_img01.jpg') }}"
                                            data-src="{{ asset('assets/image/frontend/case/case_img01.jpg') }}" data-aspectratio="1.683/1"
                                            width="302" alt="「VANDALISM 渋谷」の導入事例">
                                    </figure>
                                    <div class="case__entry__prof"><span
                                            class="case__entry__prof__item">飲食</span><span
                                            class="case__entry__prof__item">スタッフ11人</span></div>
                                </div>
                                <div class="case__content">
                                    <p class="case__entry__prof__cat">ダイニングバー</p>
                                    <h3 class="case__entry__title">VANDALISM 渋谷</h3>
                                    <p class="case__entry__text">3時間以上かかっていたシフト管理が、30分程度に。辛かったシフト管理が楽しくなりました</p>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
            </section>
            <div class="freetrial">
                <div class="freetrial__inner">
                    <p class="freetrial__title">最大2ヶ月（利用開始月と翌月）は無料で体験できます</p>
                    <p class="freetrial__button freetrial__register__button">
                        <a href="http://localhost:5500/airid"
                            target="_blank" rel="noopener" data-analysis-trigger="entry_02">アカウント登録</a></p>
                    <p class="freetrial__button freetrial__login__button"><a href="http://localhost:5500/"
                            target="_blank" rel="noopener" data-analysis-trigger="login_02">AirIDをお持ちの方</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <div class="pagetop">
        <img class="lazyload"
            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHAAAABwCAMAAADxPgR5AAAAb1BMVEUAAAAtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+Mtr+P////A5/eO1PDi9Puw4fVYwOm34/VcwekR705eAAAAHHRSTlMA9/ys19LLxIReOishGevppJh6dmpXTkhANAwJPCgkdgAAApdJREFUaN7M1VuugzAMRdE6T6ApfUCB0jP/cd77WwloEttS1wS2Ih0rp9/2frXNLbor4R9dXbw17et90nFp795gg/H39iJdOzceh3xzFnzbwyGDe8i8s7MGmYzt2Lk5okicWbkloFhYqnPJoopNdb2BUImGmkMIYAjFRzISWGgsyq0WbHYtWIuDAJ+yT72HiL7L600EITTl9J4GYsyT0VMqTgaizPRlLwRhdLic1ENcnw7u3UGBX3eDFirsXm+EknHnfyAooe2/I0BN2OoNUDRsXARBESXmQvlLXaBsYS2Gv5sZ6uaPYIS6+MdrHaRACANBFEWJmAyI0Z3YKnr/Q04hTsDVUNWQvxbewpL2dSSsQh95ov6hDq1VqB0KOFuV5gIGq1IoZ8Iq9Tsa0SoVH7Azuus4LqPrno0a3bmh0+iGG0zGtm93u7GlG5yMDJ4oTtIrhKeI5SWurVHBk8V2BbgYFTyHuNCbgecRE/vZw3OJEWA2RHguMZdjT+9T22pPnYq3IYkB4Kh5mjgCbCRPFBuAkieLABVPFwEKnkMEyHseEWDDeh6xATiSnkscAQbO84kBYE95TrEHmBnPK2aAkfDcYgSYCM/9XPrzi/Gt3tyRAASBGFpZWtgzs4xw/zPa2TAS0N0Y9gBm6PJ5WvsdrGg9iwFMVG71sGLumShgEx/0gCLy+gd44a2HFPELD2T1rdXDioas/o5SS0mDV1DG2XFcO81qGr7aT3EbPZDSIze7VKDXJvRiiF190cs9dn1JL2jZFTS9ZGfPCP8PJcFTkMLYFTrnaQyWcZOszugcNKsrgQMRaIQa/OGNtygCPJ6IkiqE5YWZKYN0DqigPgz5CfdcBWh9h+yuBiXPYderguUz6PzKPwc43QXbNAzf5IrxPgAAAABJRU5ErkJggg=="
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
            "item": {
              "@id": "https://airregi.jp/shift/",
              "name": "Airシフト"
            }
          },
          {
            "@type": "ListItem",
            "position": 3,
            "item": {
              "@id": "https://airregi.jp/shift/case/",
              "name": "導入事例"
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
