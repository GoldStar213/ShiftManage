@extends('layouts.frontend')
@section('title', '資料請求 | シフト管理システム・アプリ【Airシフト】')

@section('head')
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script src="{{ asset('assets/js/style.js') }}"> </script>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description"
        content="【リクルート：Airシフト】資料請求ページです。フォーム送信完了後、メールにてダウンロード形式の資料が送付されます。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト,資料請求">
    <meta property="og:title" content="資料請求 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/document_request/">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】資料請求ページです。フォーム送信完了後、メールにてダウンロード形式の資料が送付されます。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="https://airregi.jp/shift/document_request/">
    <link rel="apple-touch-icon" href="https://cdn.airregi.jp/res/apple-touch-icon.png?v=610a856">
    <link rel="shortcut icon" href="https://cdn.airregi.jp/res/favicon.ico?v=4341218">
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
                <section class="request" id="request">
                    <div class="request__inner">
                        <h1 class="request__title">資料請求</h1>
                        <div class="request__figure">
                            <p class="request__figure__text">フォーム送信完了後、メールにて<br>ダウンロード形式の資料が送付されます。</p>
                            <figure class="request__figure__img"><img class="lazyload"
                                    src="{{ asset('assets/image/frontend/request/shiryo.png') }}"
                                    data-src="{{ asset('assets/image/frontend/request/shiryo.png') }}" width="305" height="215"
                                    alt="これひとつでわかる「Airシフト」"></figure>
                        </div>
                        <div class="form__wrap">
                            <form id="mktoForm_1639"></form>
                        </div>
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
    <script src="{{ asset('assets/js/forms2.min.js') }}"></script>
    <script type="text/javascript">
        MktoForms2.loadForm("//pages.airregi.jp", "875-JJP-228", 1639, function(form) {
            form.onSuccess(function(values, followUpUrl) {
                location.href = "./thanks/index.html";
                return false;
            });
        });
    </script>
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
              "@id": "https://airregi.jp/shift/document_request/",
              "name": "資料請求"
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
