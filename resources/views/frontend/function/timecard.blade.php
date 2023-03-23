@extends('layouts.frontend')
@section('title', 'タイムカード・勤怠管理 | シフト管理システム・アプリ【Airシフト】')

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
        content="【リクルート：Airシフト】Airシフトのタイムカード・勤怠管理システムについてご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <meta name="keywords" content="エアシフト,Airシフト,シフト作成,シフト管理,シフト">
    <meta property="og:title" content="タイムカード・勤怠管理 | シフト管理システム・アプリ【Airシフト】">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://airregi.jp/shift/function/timecard/">
    <meta property="og:image" content="https://airregi.jp/shift/img/common/og.png">
    <meta property="og:site_name" content="Airシフト(エアシフト)">
    <meta property="og:description"
        content="【リクルート：Airシフト】Airシフトのタイムカード・勤怠管理システムについてご紹介します。Airシフトはシフト作成はもちろん、シフトのやりとりもラクになるシフト管理アプリ。Airシフトは店長はもちろんスタッフにも喜ばれるシフト管理サービスです。">
    <link rel="canonical" href="https://airregi.jp/shift/function/timecard/">
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
                        <li class="breadcrumb__item"><span>タイムカード・勤怠管理</span></li>
                    </ul>
                </div>
                <div class="ability">
                    <div class="ability__inner">
                        <h1 class="ability__title">タイムカード・勤怠管理</h1>
                        <p class="ability__sub__description">
                            タイムカード（出退勤打刻）機能は無料で使い続けられます。<br>労働時間や設定した時給等を元に、概算人件費のシミュレーションをすることができます。</p>
                        <div class="ability__section">
                            <div class="ability__entries">
                                <div class="ability__entry ability__entry-1">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability05_img01" title="タイムカード（出退勤打刻）"
                                            data-analysis-trigger="ability_05_01"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img01.png') }}"
                                                data-aspectratio="1.417/1" width="320" height="226"
                                                alt="タイムカード（出退勤打刻）"></a></figure>
                                    <h2 class="ability__entry__title">タイムカード（出退勤打刻）</h2>
                                    <p class="ability__entry__text">スタッフの出勤・退勤・休憩時刻を打刻し、労働時間を集計することができます。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability05_img01">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img01.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img01.png') }}" alt="タイムカード（出退勤打刻）"
                                                width="640" height="452"></figure>
                                        <p class="mfp-modal__title">タイムカード（出退勤打刻）</p>
                                        <p class="mfp-modal__caption">スタッフの出勤・退勤・休憩時刻を打刻し、労働時間を集計することができます。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-2">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability05_img02" title="概算人件費シミュレーション"
                                            data-analysis-trigger="ability_05_02"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img02png') }}"
                                                data-src="{{ asset('assets/image/ability05_img02.png') }}"
                                                data-aspectratio="1.417/1" width="320" height="226"
                                                alt="概算人件費シミュレーション"></a></figure>
                                    <h2 class="ability__entry__title">概算人件費シミュレーション</h2>
                                    <p class="ability__entry__text">労働時間と設定した時給・交通費などを元に、概算の人件費を計算することができます。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability05_img02">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img02.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img02.png') }}" alt="概算人件費シミュレーション"
                                                width="640" height="452"></figure>
                                        <p class="mfp-modal__title">概算人件費シミュレーション</p>
                                        <p class="mfp-modal__caption">労働時間と設定した時給・交通費などを元に、概算の人件費を計算することができます。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-3">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability05_img03" title="勤怠記録の保管"
                                            data-analysis-trigger="ability_05_03"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img03.png') }}"
                                                data-aspectratio="1.417/1" width="320" height="226"
                                                alt="勤怠記録の保管"></a></figure>
                                    <h2 class="ability__entry__title">勤怠記録の保管</h2>
                                    <p class="ability__entry__text">勤怠記録をデジタルで保管できます。保管義務の3年分も場所を取らず、紛失の心配もありません。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability05_img03">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img03.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img03.png') }}" alt="勤怠記録の保管"
                                                width="640" height="452"></figure>
                                        <p class="mfp-modal__title">勤怠記録の保管</p>
                                        <p class="mfp-modal__caption">勤怠記録をデジタルで保管できます。保管義務の3年分も場所を取らず、紛失の心配もありません。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-4">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability05_img04" title="クラウド管理で他店舗にも対応"
                                            data-analysis-trigger="ability_05_04"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img04.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img04.png') }}"
                                                data-aspectratio="1.417/1" width="320" height="226"
                                                alt="クラウド管理で他店舗にも対応"></a></figure>
                                    <h2 class="ability__entry__title">クラウド管理で他店舗にも対応</h2>
                                    <p class="ability__entry__text">クラウドタイムカードシステムだから、複数店舗の勤怠を一括管理できます。面倒なカードの収集も不要です。
                                    </p>
                                    <div class="mfp-hide mfp-modal__content" id="ability05_img04">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img04.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img04.png') }}" alt="クラウド管理で他店舗にも対応"
                                                width="640" height="452"></figure>
                                        <p class="mfp-modal__title">クラウド管理で他店舗にも対応</p>
                                        <p class="mfp-modal__caption">
                                            クラウドタイムカードシステムだから、複数店舗の勤怠を一括管理できます。面倒なカードの収集も不要です。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-5">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability05_img05" title="正確かつ不正打刻を防止"
                                            data-analysis-trigger="ability_05_05"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img05.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img05.png') }}"
                                                data-aspectratio="1.417/1" width="320" height="226"
                                                alt="正確かつ不正打刻を防止"></a></figure>
                                    <h2 class="ability__entry__title">正確かつ不正打刻を防止</h2>
                                    <p class="ability__entry__text">出勤ボタン1つで、簡単に正確な打刻ができます。書き換えなどの不正打刻も防止できます。</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability05_img05">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img05.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img05.png') }}" alt="正確かつ不正打刻を防止"
                                                width="640" height="452"></figure>
                                        <p class="mfp-modal__title">正確かつ不正打刻を防止</p>
                                        <p class="mfp-modal__caption">出勤ボタン1つで、簡単に正確な打刻ができます。書き換えなどの不正打刻も防止できます。</p>
                                    </div>
                                </div>
                                <div class="ability__entry ability__entry-6">
                                    <figure class="ability__entry__thumb"><a class="js-image-modal"
                                            href="#ability05_img06" title="給与計算ソフトへのデータ送信"
                                            data-analysis-trigger="ability_05_06"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img06.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img06.png') }}"
                                                data-aspectratio="1.415/1" width="320" height="226"
                                                alt="給与計算ソフトへのデータ送信"></a></figure>
                                    <h2 class="ability__entry__title"><span
                                            class="new_release">NEW</span>給与計算ソフトへのデータ送信</h2>
                                    <p class="ability__entry__text">給与計算ソフトにデータ送信し、給与の計算に利用することができます。<br>※現在は<a
                                            class="ability__external__link" href="https://www.freee.co.jp/hr/"
                                            target="_blank" rel="noopener">freee人事労務</a>のみ対応</p>
                                    <div class="mfp-hide mfp-modal__content" id="ability05_img06">
                                        <figure class="mfp-modal__image"><img class="lazyload"
                                                src="{{ asset('assets/image/ability05_img06.png') }}"
                                                data-src="{{ asset('assets/image/ability05_img06.png') }}" alt="給与計算ソフトへのデータ送信"
                                                width="640" height="452"></figure>
                                        <p class="mfp-modal__title">給与計算ソフトへのデータ送信</p>
                                        <p class="mfp-modal__caption">給与計算ソフトにデータ送信し、給与の計算に利用することができます。<br>※現在は<a
                                                class="ability__external__link" href="https://www.freee.co.jp/hr/"
                                                target="_blank" rel="noopener">freee人事労務</a>のみ対応</p>
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
                            <li class="ability__list__help"><a href="function/help/"
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
                                <p class="faq__question">無料版の機能として使えますか</p>
                                <div class="faq__answer">
                                    <p>タイムカード機能は、無料版の機能として使い続けられます。<br>無料版と有料版の機能差分は<a class="ability__external__link"
                                            href="" target="_blank"
                                            rel="noopener">こちら</a></p>
                                </div>
                            </li>
                            <li>
                                <p class="faq__question">対応端末は何がありますか</p>
                                <div class="faq__answer">
                                    <p>他の機能と同じく、パソコン・タブレット（iPad）でご利用いただけます。<br>現時点では、スマホWebでのご利用は推奨していません。<br>詳細は<a
                                            class="ability__external__link"
                                            href="http://localhost:8800/categories/articles/action" target="_blank"
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
                        <p class="freetrial__button freetrial__login__button"><a href="http://localhost:5500/"
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
            "@id": "https://airregi.jp/shift/function/timecard/",
            "name": "タイムカード・勤怠管理"
          }
      }
    ]
}</script>
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "無料版の機能として使えますか",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "タイムカード機能は、無料版の機能として使い続けられます。無料版と有料版の機能差分は<a href=https://faq.airshift.jp/hc/ja/articles/360029561532>こちら</a>"
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
            var pageId = ".page-airshift-" + "function-timecard";
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
