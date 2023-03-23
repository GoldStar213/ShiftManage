<!DOCTYPE html>
<html lang="ja">
<title>@yield('title')</title>
@yield('head')

<body class="page-airshift-home" id="page-airshift-home">
    <div class="htmlContainer">
        <header class="header">
            <div class="header__fixed">
                <div class="header__fixed__inner">
                    <div class="header__fixed__nav">
                        <p class="header__fixed__logo"><a href="/"><img class="lazyload"
                                    src="{{ asset('assets/image/hd_logo.png') }}"
                                    data-src="{{ asset('assets/image/hd_logo.png') }}" width="160px" height="44"
                                    alt="Air SHIFT - PRODUCED BY RECRUIT"></a></p>
                        <div class="globalBtn c-hover" id="globalBtn">
                            <div class="globalBtn__line globalBtn__line-1"></div>
                            <div class="globalBtn__line globalBtn__line-2"></div>
                            <div class="globalBtn__line globalBtn__line-3"></div>
                        </div>
                    </div>
                    <nav>
                        <div class="globalMenu">
                            <div class="globalMenu__list"><a href="/case/" data-analysis-trigger="case">導入事例</a></div>
                            <div class="globalMenu__list"><a href="/function/" data-analysis-trigger="function">機能</a>
                            </div>
                            <div class="globalMenu__list"><a href="/cost/" data-analysis-trigger="cost">費用</a></div>
                            <div class="globalMenu__list">
                                <a href="/#flow" data-analysis-trigger="/#flow">利用開始までの流れ</a>
                            </div>
                            <div class="globalMenu__list">
                                <a href="http://localhost:8800/categories" target="_blank" rel="noopener"
                                    data-analysis-trigger="faq_115000412811">よくある質問</a>
                            </div>
                            <div class="globalMenu__list is-nobdr"><a href="/request/"
                                    data-analysis-trigger="request">資料請求</a></div>
                            <div class="globalMenu__login"><a href="http://localhost:5500" target="_blank"
                                    rel="noopener" data-analysis-trigger="login_01">ログイン</a></div>
                            <div class="globalMenu__signup">
                                <div class="globalMenu__button"><a href="http://localhost:5500/airid" target="_blank"
                                        rel="noopener" data-analysis-trigger="entry_01">アカウント登録</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header__bar">
                <div class="header__bar__inner">
                    <p class="header__bar__left">やりとりも作成もラクになるシフト管理サービス</p>
                    <p class="header__bar__right"><span class="header__bar__right__text-1">お問い合わせ</span><span
                            class="header__bar__right__text-2">0000-888-555</span><span
                            class="header__bar__right__text-3">（平日10:00〜19:00）</span><span
                            class="header__bar__right__text-4"><a href="https://localhost:8800/requests/new"
                                target="_blank" rel="noopener" data-analysis-trigger="mail_01">メールはこちら</a></span><span
                            class="header__bar__right__text-5"><a class="js-document-request-modal"
                                href="#document__request__modal" data-analysis-trigger="tel_01">担当者から説明を受ける方</a></span>
                    </p>
                </div>
            </div>
        </header>
        <div class="mfp-hide mfp-modal__content" id="document__request__modal">
            <p class="document__request__modal__title">担当者から説明を受ける方</p>
            <div class="document__request__modal__content"><img class="document__request__modal__image"
                    src="../../img/common/document_request.jpg" alt="オンライン営業システム「ベルフェイス」を利用して、担当者が資料を投影します。">
                <div class="document__request__modal__open__bellface">
                    <p class="document__request__modal__description">オンライン営業システム「ベルフェイス」を利用して、担当者が資料を投影します。</p><a
                        class="document__request__modal__button" id="bfConnect" href="#"
                        data-analysis-trigger="open_bellface"><img src="{{ asset('assets/image/download1.png') }}"
                            alt="オンライン商談">
                        <script>
                            (function(d, id, key) {
                                var img = d.getElementById(id);
                                var bellwin;
                                img.style.cursor = 'pointer';
                                img.addEventListener('click', function() {
                                    var url = 'https://user.bell-face.com/connect/' + key;
                                    var name = 'slideWindow';
                                    var options =
                                        'screenX=,screenY=,width=1180,height=600,resizable=yes,scrollbars=1,toolbar=0,location=0,status=0';
                                    if (!bellwin || bellwin.closed) {
                                        bellwin = window.open(url, name, options);
                                    } else {
                                        bellwin.focus();
                                    }
                                });
                            })(document, "bfConnect", "25db9b5bca");
                        </script>
                    </a>
                </div>
            </div>
            <div class="document__request__modal__open__document"><a
                    href="{{ asset('assets/pdf/airshift_tel_document.pdf') }}" target="_blank"
                    data-analysis-trigger="open_document">ご自身で資料を開く</a></div>
        </div>
        @yield('content')
        <div class="pagetop"><img class="lazyload" src="{{ asset('assets/image/download.png') }}"
                data-src="{{ asset('assets/image/download.png') }}" width="56" height="56">
        </div>
        <footer class="footer">
            <div class="footer__inner">
                <div class="footer__menu">
                    <p class="footer__menu__title">Airシフトの関連サービス</p>
                    <ul class="footer__menu__list">
                        <li class="footer__menu__list__item"><a href="" target="_blank"
                                rel="noopener">Airレジ</a></li>
                        <li class="footer__menu__list__item"><a href="" target="_blank" rel="noopener">Airレジ
                                オーダー</a></li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airペイ</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">AirペイQR</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airペイ
                                ポイント</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airウェイト</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airリザーブ</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airメイト</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airカード</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airワーク
                                採用管理</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airキャッシュ</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airインボイス</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">おみせのでんき produced by Airレジ</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airマーケット</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">Airレジマガジン</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a href="" target="_blank" rel="noopener">レストランボード</a>
                        </li>
                    </ul>
                    <ul class="footer__menu__list footer__menu__list-2">
                        <li class="footer__menu__list__item">
                            <a target="_blank" rel="noopener" href="http://localhost:5500/private">プライバシーポリシー</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a target="_blank" rel="noopener" href="/shift_using_terms">利用規約</a>
                        </li>
                        <li class="footer__menu__list__item">
                            <a target="_blank" rel="noopener" href="http://localhost:8800/requests/new">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
                <ul class="footer__sns">
                    <li class="footer__sns__item">
                        <a href="https://www.facebook.com/AirREGI" target="_blank" rel="noopener">
                            <img class="lazyload" src="{{ asset('assets/image/icon_facebook.png') }}" data-src="" width="22" height="21"
                                alt="Facebook"></a>
                    </li>
                    <li class="footer__sns__item"><a href="https://twitter.com/AirREGI" target="_blank"
                            rel="noopener">
                            <img class="lazyload" src="{{ asset('assets/image/icon_twitter.png') }}" data-src="" width="22" height="21"
                                alt="Twitter"></a></li>
                </ul>
                <div class="footer__recruit">
                    <p class="footer__recruit__copyright">
                        <a href="https://www.recruit.co.jp/" target="_blank" rel="noopener">
                            <img class="lazyload footer__recruit__copyright__img"
                                src="{{ asset('assets/image/logo_recruit.png') }}"
                                data-src="{{ asset('assets/image/logo_recruit.png') }}" width="100" height="26"
                                alt="RECRUIT (C) Recruit Co.,Ltd."><span class="footer__recruit__copyright__text">(C)
                                Recruit Co., Ltd.</span></a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    @yield('jscript')


</body>

</html>
