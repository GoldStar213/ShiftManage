<!DOCTYPE html>
<html lang="ja">

<head>
    <style>
        body {
            transition: opacity ease-in 0.2s;
        }

        body[unresolved] {
            opacity: 0;
            display: block;
            overflow: hidden;
            position: relative;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=0.69">
    <meta name="theme-color" content="#20aee5">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" as="style" crossorigin="">


    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/service/bootstrap-min.css') }}" media="screen, projection" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/service/main-min.css') }}" media="screen, projection" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/service/staff-min.css') }}" media="screen, projection" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/service/shift-min.css') }}" media="screen, projection" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/service/setting-min.css') }}" media="screen, projection" rel="stylesheet"
        type="text/css">
    <link rel="icon" href="{{ asset('assets/image/service/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('assets/image/service/favicon.ico') }}" type="image/vnd.microsoft.ico">
    <link rel="apple-touch-icon" href="{{ asset('assets/image/service/favicon.ico') }}">
    <link id="font" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/service/style.css') }}">
    <link rel="stylesheet" id="mttstyle" href="{{ asset('assets/css/service/mttstyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/service/common.css') }}">

    <style data-react-helmet="true">
        #centerSpacer {
            display: block;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/service/attendance-min.css') }}">
    <link href="{{ asset('assets/css/service/attendance-min.css') }}" media="screen, projection" rel="stylesheet"
        type="text/css">

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    @yield('style')
</head>

<body>
    <div id="root">
        <div>
            <div class="root___container">
                <div id="air-common-header" class="menubar___header">
                    <div class="air-common-header-inner-wrap">
                        <ul class="cmn-hdr-navigation">
                            <li class="cmn-hdr-menu-btn cmn-hdr-account">
                                <div class="cmn-hdr-icon cmn-hdr-account-icon cmn-hdr-icon-small">
                                    <svg viewBox="0 0 16 20">
                                        <path
                                            d="M7.953,11.058a5.529,5.529,0,1,1,5.529-5.529A5.535,5.535,0,0,1,7.953,11.058Zm0-9.955a4.426,4.426,0,1,0,4.426,4.426A4.431,4.431,0,0,0,7.953,1.1Z">
                                        </path>
                                        <path
                                            d="M13.857,20H1.749A1.751,1.751,0,0,1,0,18.251V15.812a6.832,6.832,0,0,1,2.4-5.2.551.551,0,0,1,.765.795A5.741,5.741,0,0,0,1.1,15.812v2.439a.647.647,0,0,0,.647.647H13.857a.648.648,0,0,0,.647-.647V15.812A5.741,5.741,0,0,0,12.436,11.4a.551.551,0,1,1,.764-.8,6.832,6.832,0,0,1,2.406,5.209v2.439A1.751,1.751,0,0,1,13.857,20Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="cmn-hdr-account-name cmn-hdr-btn-text">B56982</div>
                                <div class="cmn-hdr-icon cmn-hdr-arrow-down"><svg viewBox="0 0 7 7">
                                        <path style="&amp;st0;"
                                            d="M0.206,1.198l2.789,2.789c0.134,0.134,0.312,0.205,0.503,0.205c0.193-0.005,0.372-0.071,0.506-0.205 l2.789-2.789C6.927,1.066,7,0.889,7,0.702c0-0.187-0.073-0.364-0.206-0.496c-0.274-0.274-0.719-0.274-0.993,0L3.5,2.507L1.199,0.205 c-0.274-0.274-0.719-0.274-0.993,0C0.073,0.338,0,0.514,0,0.702C0,0.889,0.073,1.066,0.206,1.198z">
                                        </path>
                                    </svg></div>
                            </li>
                            <li class="cmn-hdr-menu-btn cmn-hdr-store">
                                <div class="cmn-hdr-icon cmn-hdr-icon-small"><svg viewBox="0 0 20 20">
                                        <g>
                                            <path style="&amp;st0;"
                                                d="M8.214,15.714h1.071h5.369c0.388,0,0.702-0.317,0.702-0.709v-4.297c0-0.391-0.314-0.709-0.702-0.709H9.286 H8.214H5.345c-0.388,0-0.702,0.317-0.702,0.709v4.297c0,0.391,0.314,0.709,0.702,0.709H8.214z M9.286,11.063h5.018v3.588H9.286 V11.063z M5.696,11.063h2.518v3.588H5.696V11.063z">
                                            </path>
                                            <path style="&amp;st0;"
                                                d="M16.214,0h-1.071h-2.714h-1.071H8.643H7.571H4.857H3.786C1.698,0,0,1.698,0,3.786v2.357 c0,1.339,1.089,2.429,2.429,2.429c0.765,0,1.447-0.356,1.893-0.911c0.445,0.554,1.128,0.911,1.893,0.911 c0.765,0,1.447-0.356,1.893-0.911C8.553,8.215,9.235,8.571,10,8.571c0.765,0,1.447-0.356,1.893-0.911 c0.445,0.554,1.128,0.911,1.893,0.911c0.765,0,1.447-0.356,1.893-0.911c0.445,0.554,1.128,0.911,1.893,0.911v7.143 c0,0.789-0.64,1.429-1.429,1.429H3.857c-0.789,0-1.429-0.64-1.429-1.429v-2.5v-1.976v-0.524c0-0.296-0.24-0.536-0.536-0.536 s-0.536,0.24-0.536,0.536v0.524v1.976v2.5c0,1.379,1.121,2.5,2.5,2.5h12.286c1.379,0,2.5-1.121,2.5-2.5V8.319 C19.445,7.922,20,7.097,20,6.143V3.786C20,1.698,18.302,0,16.214,0z M3.786,6.143c0,0.75-0.608,1.357-1.357,1.357 S1.071,6.892,1.071,6.143V3.786c0-1.499,1.215-2.714,2.714-2.714V6.143z M7.571,6.143c0,0.75-0.608,1.357-1.357,1.357 c-0.75,0-1.357-0.608-1.357-1.357V1.071h2.714V6.143z M11.357,6.143C11.357,6.892,10.75,7.5,10,7.5 c-0.75,0-1.357-0.608-1.357-1.357V1.071h2.714V6.143z M15.143,6.143c0,0.75-0.608,1.357-1.357,1.357h0 c-0.75,0-1.357-0.608-1.357-1.357V1.071h2.714V6.143z M18.929,6.143c0,0.75-0.608,1.357-1.357,1.357 c-0.75,0-1.357-0.608-1.357-1.357V1.071c1.499,0,2.714,1.215,2.714,2.714V6.143z">
                                            </path>
                                        </g>
                                    </svg></div><span class="cmn-hdr-btn-text">牛カツ串焼き大衆酒場　トロ吉</span>
                                <div class="cmn-hdr-icon cmn-hdr-arrow-down"><svg viewBox="0 0 7 7">
                                        <path style="&amp;st0;"
                                            d="M0.206,1.198l2.789,2.789c0.134,0.134,0.312,0.205,0.503,0.205c0.193-0.005,0.372-0.071,0.506-0.205 l2.789-2.789C6.927,1.066,7,0.889,7,0.702c0-0.187-0.073-0.364-0.206-0.496c-0.274-0.274-0.719-0.274-0.993,0L3.5,2.507L1.199,0.205 c-0.274-0.274-0.719-0.274-0.993,0C0.073,0.338,0,0.514,0,0.702C0,0.889,0.073,1.066,0.206,1.198z">
                                        </path>
                                    </svg></div>
                            </li>
                            <li class="cmn-hdr-menu-btn cmn-hdr-service">
                                <div class="cmn-hdr-icon cmn-hdr-icon-small">
                                    <svg viewBox="0 0 20 20">
                                        <path
                                            d="M5,4A.945.945,0,0,1,4,5H2A.945.945,0,0,1,1,4V2A.945.945,0,0,1,2,1H4A.945.945,0,0,1,5,2Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M12,4a.945.945,0,0,1-1,1H9A.945.945,0,0,1,8,4V2A.945.945,0,0,1,9,1h2a.945.945,0,0,1,1,1Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M19,4a.945.945,0,0,1-1,1H16a.945.945,0,0,1-1-1V2a.945.945,0,0,1,1-1h2a.945.945,0,0,1,1,1Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M5,11a.945.945,0,0,1-1,1H2a.945.945,0,0,1-1-1V9A.945.945,0,0,1,2,8H4A.945.945,0,0,1,5,9Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M12,11a.945.945,0,0,1-1,1H9a.945.945,0,0,1-1-1V9A.945.945,0,0,1,9,8h2a.945.945,0,0,1,1,1Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M19,11a.945.945,0,0,1-1,1H16a.945.945,0,0,1-1-1V9a.945.945,0,0,1,1-1h2a.945.945,0,0,1,1,1Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M5,18a.945.945,0,0,1-1,1H2a.945.945,0,0,1-1-1V16a.945.945,0,0,1,1-1H4a.945.945,0,0,1,1,1Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M12,18a.945.945,0,0,1-1,1H9a.945.945,0,0,1-1-1V16a.945.945,0,0,1,1-1h2a.945.945,0,0,1,1,1Z"
                                            style="fill:#fff"></path>
                                        <path
                                            d="M19,18a.945.945,0,0,1-1,1H16a.945.945,0,0,1-1-1V16a.945.945,0,0,1,1-1h2a.945.945,0,0,1,1,1Z"
                                            style="fill:#fff"></path>
                                    </svg>
                                </div><span class="cmn-hdr-btn-text">サービス切り替え</span>
                                <div class="cmn-hdr-icon cmn-hdr-arrow-down"><svg viewBox="0 0 7 7">
                                        <path style="&amp;st0;"
                                            d="M0.206,1.198l2.789,2.789c0.134,0.134,0.312,0.205,0.503,0.205c0.193-0.005,0.372-0.071,0.506-0.205 l2.789-2.789C6.927,1.066,7,0.889,7,0.702c0-0.187-0.073-0.364-0.206-0.496c-0.274-0.274-0.719-0.274-0.993,0L3.5,2.507L1.199,0.205 c-0.274-0.274-0.719-0.274-0.993,0C0.073,0.338,0,0.514,0,0.702C0,0.889,0.073,1.066,0.206,1.198z">
                                        </path>
                                    </svg></div>
                            </li>
                        </ul>
                        <div class="cmn-hdr-balloon cmn-hdr-account-menu">
                            <span class="cmn-hdr-balloon-horn"></span>
                            <div class="cmn-hdr-account-info">
                                <span class="cmn-hdr-icon cmn-hdr-icon-large"><svg viewBox="0 0 16 20">
                                        <path
                                            d="M7.953,11.058a5.529,5.529,0,1,1,5.529-5.529A5.535,5.535,0,0,1,7.953,11.058Zm0-9.955a4.426,4.426,0,1,0,4.426,4.426A4.431,4.431,0,0,0,7.953,1.1Z">
                                        </path>
                                        <path
                                            d="M13.857,20H1.749A1.751,1.751,0,0,1,0,18.251V15.812a6.832,6.832,0,0,1,2.4-5.2.551.551,0,0,1,.765.795A5.741,5.741,0,0,0,1.1,15.812v2.439a.647.647,0,0,0,.647.647H13.857a.648.648,0,0,0,.647-.647V15.812A5.741,5.741,0,0,0,12.436,11.4a.551.551,0,1,1,.764-.8,6.832,6.832,0,0,1,2.406,5.209v2.439A1.751,1.751,0,0,1,13.857,20Z">
                                        </path>
                                    </svg>
                                </span><span class="cmn-hdr-account-name">C450401</span><span
                                    class="cmn-hdr-logout-menu"><a class="cmn-hdr-inner-btn cmn-hdr-logout-link">ログアウト
                                        <div class="cmn-hdr-icon cmn-hdr-arrow-right"><svg viewBox="0 0 5 8">
                                                <path style="&amp;st1;"
                                                    d="M1.369,7.765l3.188-3.188C4.71,4.424,4.792,4.22,4.791,4.002C4.785,3.781,4.71,3.576,4.557,3.423L1.37,0.235 C1.218,0.084,1.016,0,0.802,0C0.588,0,0.386,0.084,0.235,0.235c-0.313,0.313-0.313,0.822,0,1.135L2.865,4l-2.63,2.63 c-0.313,0.313-0.313,0.822,0,1.135C0.386,7.916,0.588,8,0.802,8C1.016,8,1.218,7.916,1.369,7.765z">
                                                </path>
                                            </svg>
                                        </div>
                                    </a></span>
                            </div>
                            <ul class="cmn-hdr-menu-item-list">
                                <li class="cmn-hdr-my-account account-menu-item"><a href=""
                                        target="_blank">マイアカウント</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cmn-hdr-balloon cmn-hdr-store-menu">
                            <span class="cmn-hdr-balloon-horn"></span>
                            <div class="cmn-hdr-store-info">
                                <div class="cmn-hdr-icon cmn-hdr-icon-large"><svg viewBox="0 0 20 20">
                                        <g>
                                            <path style="&amp;st0;"
                                                d="M8.214,15.714h1.071h5.369c0.388,0,0.702-0.317,0.702-0.709v-4.297c0-0.391-0.314-0.709-0.702-0.709H9.286 H8.214H5.345c-0.388,0-0.702,0.317-0.702,0.709v4.297c0,0.391,0.314,0.709,0.702,0.709H8.214z M9.286,11.063h5.018v3.588H9.286 V11.063z M5.696,11.063h2.518v3.588H5.696V11.063z">
                                            </path>
                                            <path style="&amp;st0;"
                                                d="M16.214,0h-1.071h-2.714h-1.071H8.643H7.571H4.857H3.786C1.698,0,0,1.698,0,3.786v2.357 c0,1.339,1.089,2.429,2.429,2.429c0.765,0,1.447-0.356,1.893-0.911c0.445,0.554,1.128,0.911,1.893,0.911 c0.765,0,1.447-0.356,1.893-0.911C8.553,8.215,9.235,8.571,10,8.571c0.765,0,1.447-0.356,1.893-0.911 c0.445,0.554,1.128,0.911,1.893,0.911c0.765,0,1.447-0.356,1.893-0.911c0.445,0.554,1.128,0.911,1.893,0.911v7.143 c0,0.789-0.64,1.429-1.429,1.429H3.857c-0.789,0-1.429-0.64-1.429-1.429v-2.5v-1.976v-0.524c0-0.296-0.24-0.536-0.536-0.536 s-0.536,0.24-0.536,0.536v0.524v1.976v2.5c0,1.379,1.121,2.5,2.5,2.5h12.286c1.379,0,2.5-1.121,2.5-2.5V8.319 C19.445,7.922,20,7.097,20,6.143V3.786C20,1.698,18.302,0,16.214,0z M3.786,6.143c0,0.75-0.608,1.357-1.357,1.357 S1.071,6.892,1.071,6.143V3.786c0-1.499,1.215-2.714,2.714-2.714V6.143z M7.571,6.143c0,0.75-0.608,1.357-1.357,1.357 c-0.75,0-1.357-0.608-1.357-1.357V1.071h2.714V6.143z M11.357,6.143C11.357,6.892,10.75,7.5,10,7.5 c-0.75,0-1.357-0.608-1.357-1.357V1.071h2.714V6.143z M15.143,6.143c0,0.75-0.608,1.357-1.357,1.357h0 c-0.75,0-1.357-0.608-1.357-1.357V1.071h2.714V6.143z M18.929,6.143c0,0.75-0.608,1.357-1.357,1.357 c-0.75,0-1.357-0.608-1.357-1.357V1.071c1.499,0,2.714,1.215,2.714,2.714V6.143z">
                                            </path>
                                        </g>
                                    </svg></div>
                                <div class="cmn-hdr-store-name">牛カツ串焼き大衆酒場　トロ吉</div>
                                <div class="cmn-hdr-store-change"><a href=""
                                        class="cmn-hdr-account-menu-link cmn-hdr-inner-btn" data-id="0000">店舗切り替え<div
                                            class="cmn-hdr-icon cmn-hdr-arrow-right"><svg viewBox="0 0 5 8">
                                                <path style="&amp;st1;"
                                                    d="M1.369,7.765l3.188-3.188C4.71,4.424,4.792,4.22,4.791,4.002C4.785,3.781,4.71,3.576,4.557,3.423L1.37,0.235 C1.218,0.084,1.016,0,0.802,0C0.588,0,0.386,0.084,0.235,0.235c-0.313,0.313-0.313,0.822,0,1.135L2.865,4l-2.63,2.63 c-0.313,0.313-0.313,0.822,0,1.135C0.386,7.916,0.588,8,0.802,8C1.016,8,1.218,7.916,1.369,7.765z">
                                                </path>
                                            </svg></div></a></div>
                            </div>
                            <ul class="cmn-hdr-menu-item-list">
                                <li><a href="" target="_blank" class="cmn-hdr-account-menu-link">店舗基本情報</a>
                                </li>
                                <li><a href="" target="_blank" class="cmn-hdr-account-menu-link">ご利用サービス管理</a>
                                </li>
                                <li><a href="" target="_blank"
                                        class="cmn-hdr-account-menu-link">ご利用明細・契約情報</a></li>
                                <li class="cmn-hdr-menu-separator"><span
                                        class="cmn-hdr-menu-separator-text">店舗グループ管理メニュー</span></li>
                                <li><a href="" target="_blank" class="cmn-hdr-account-menu-link">複数店舗管理</a>
                                </li>
                                <li><a href="" target="_blank" class="cmn-hdr-account-menu-link">ユーザー管理</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cmn-hdr-balloon cmn-hdr-service-menu">
                            <span class="cmn-hdr-balloon-horn"></span>
                            <div class="cmn-hdr-service-menu-list">
                                <ul>
                                    <li><a href="" target="_blank" class="cmn-hdr-service-menu-link"><img
                                                src="http://localhost/faqshift/assets/image/logo.png" alt="レジ"
                                                title="レジ" data-xblocker="passed"
                                                style="visibility: visible;"><span>レジ</span></a></li>
                                    <li><a href="" target="_blank" class="cmn-hdr-service-menu-link"><img
                                                src="{{ asset('assets/image/service/srv_logo.png') }}" alt="レストランボード"
                                                title="レストランボード" data-xblocker="passed"
                                                style="visibility: visible;"><span>レストランボード</span></a></li>
                                    <li><a href="" target="_blank" class="cmn-hdr-service-menu-link"><img
                                                src="{{ asset('assets/image/service/srv_logo2.png') }}"
                                                alt="ペイ" title="ペイ" data-xblocker="passed"
                                                style="visibility: visible;"><span>ペイ</span></a></li>
                                    <li><a href="" target="_blank" class="cmn-hdr-service-menu-link"><img
                                                src="{{ asset('assets/image/service/srv_logo3.png') }}"
                                                alt="ペイ QR" title="ペイ QR" data-xblocker="passed"
                                                style="visibility: visible;"><span>ペイ
                                                QR</span></a></li>
                                    <li><a href="http://localhost/shiftsystem/html/shiftmanagement" target="_blank"
                                            class="cmn-hdr-service-menu-link"><img
                                                src="{{ asset('assets/image/service/srv_logo4.png') }}"
                                                alt="シフト" title="シフト" data-xblocker="passed"
                                                style="visibility: visible;"><span>シフト</span></a></li>
                                    <li><a href="" target="_blank" class="cmn-hdr-service-menu-link"><img
                                                src="{{ asset('assets/image/service/srv_logo5.png') }}"
                                                alt="ホットペッパーグルメ" title="ホットペッパーグルメ" data-xblocker="passed"
                                                style="visibility: visible;"><span>ホットペッパーグルメ</span></a></li>
                                </ul>
                            </div>
                            <div class="cmn-hdr-airmarket-menu">
                                <ul class="cmn-hdr-menu-item-list">
                                    <li><a class="cmn-hdr-airmarket-link" href=""
                                            target="_blank">Airマーケットでサービスを追加する</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_top_container">
                    <a class="logo__icon" href="http://localhost/shiftsystem/html/shiftmanagement">
                        <img src="{{ asset('assets/image/service/logo.png') }}" alt="AirShift" width="150"
                            height="32">
                    </a>
                    <div>
                        <div class="root___y2Jf-sHE"><span class="spanLine___6mJBOaHQ"></span>
                            <div><span class="icon___3sGDXc9T">無料版(機能制限あり)</span><span>スタッフとの連携には有料利用（<a
                                        class="partialuseLink___aD71DusH" target="_blank" rel="noopener noreferrer"
                                        href="">有料版でできること<span class="newTabIcon___2RPyePUE"><span
                                                class="shifticon shifticon-new-tab "></span></span></a>）のお申込みが必要です。　<a
                                        class="partialuseLink___aD71DusH" target="_blank"
                                        href="">利用（有料）のお申込みはこちら<span class="newTabIcon___2RPyePUE"><span
                                                class="shifticon shifticon-new-tab "></span></span></a></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body__container">
                <div class="left__navigation">
                    <div class="root__inner_box root__open_box">
                        <div class="scrollableArea___1ErrHolD">
                            <div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa menuItem--active___lrvuEgXz"
                                            href="./"><span class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-user-clock "></span></span><span
                                                class="menuItemLabel___4mYFTju0">シフト管理</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"></span></a></div>
                                </div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa"
                                            href="/recordmanagement"><span
                                                class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-attendance "></span></span><span
                                                class="menuItemLabel___4mYFTju0">打刻実績管理</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"></span></a></div>
                                </div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa" href="/staffmanagement"><span
                                                class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-file "></span></span><span
                                                class="menuItemLabel___4mYFTju0">スタッフ管理</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"></span></a></div>
                                </div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa"><span
                                                class="menuItemIconWrapper___1BcMXUHq">
                                                <div class="iconComponent___2C5XtU3n"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                        fill="#fff">
                                                        <path fill="none" d="M0 0h48v48H0z"></path>
                                                        <path
                                                            d="M44.16 36.97l-2.88-2.88a4.578 4.578 0 00-5.69-.62l-3.22-3.22c-.45-.45-1.18-.45-1.63 0a14.516 14.516 0 01-10.33 4.28c-8.06 0-14.61-6.55-14.61-14.61S12.35 5.31 20.41 5.31s14.61 6.55 14.61 14.61c0 2.01-.4 3.95-1.19 5.78-.25.58.02 1.26.6 1.52.59.25 1.26-.02 1.52-.6a16.87 16.87 0 001.38-6.69c0-9.33-7.59-16.92-16.92-16.92S3.5 10.59 3.5 19.92s7.59 16.92 16.92 16.92c4.13 0 8.04-1.47 11.12-4.17l2.44 2.44s.04.03.07.04c-.94 1.74-.7 3.94.77 5.41l2.88 2.88a4.569 4.569 0 006.47 0 4.569 4.569 0 000-6.47z">
                                                        </path>
                                                        <path
                                                            d="M20.42 21.51c-2.94 0-5.34-2.4-5.34-5.34s2.4-5.34 5.34-5.34 5.34 2.4 5.34 5.34-2.4 5.34-5.34 5.34z">
                                                        </path>
                                                        <path
                                                            d="M20.43 22.9c-1.4 0-2.7-.43-3.77-1.16a.997.997 0 00-1.31.16c-.54.63-1.03 1.54-1.03 2.74v2.62c0 1.13 1.74 1.74 6.1 1.74 4.36 0 6.1-.62 6.1-1.74v-2.62c0-1.2-.5-2.11-1.03-2.74-.32-.38-.89-.44-1.31-.16a6.72 6.72 0 01-3.77 1.16">
                                                        </path>
                                                    </svg> </div>
                                            </span><span
                                                class="menuItemLabel___4mYFTju0 rateplan_view">スタッフ募集</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"></span></a></div>
                                </div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa" href="../download"><span
                                                class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-download "></span></span><span
                                                class="menuItemLabel___4mYFTju0">各種ダウンロード</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"></span></a></div>
                                </div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a target="_blank" role="menuitem" class="menuItem___2VL6yoZa"
                                            href="../timecard/timecard.html"><span
                                                class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-timecard "></span></span><span
                                                class="menuItemLabel___4mYFTju0">タイムカード</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"><span
                                                    class="shifticon shifticon-new-tab "></span></span></a></div>
                                </div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa" href="../setting"><span
                                                class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-setting "></span></span><span
                                                class="menuItemLabel___4mYFTju0">設定</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"></span></a></div>
                                </div>
                            </div>
                            <div class="info___3JCxryBu">
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa" target="_blank"
                                            rel="noopener noreferrer" href="http://localhost/faqshift/html/"><span
                                                class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-nav-question "></span></span><span
                                                class="menuItemLabel___4mYFTju0">よくあるご質問</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"><span
                                                    class="shifticon shifticon-new-tab "></span></span></a></div>
                                </div>
                                <div class="wrapper___1gxWggJg">
                                    <div><a role="menuitem" class="menuItem___2VL6yoZa" target="_blank"
                                            rel="noopener noreferrer"
                                            href="http://localhost/faqshift/html/request"><span
                                                class="menuItemIconWrapper___1BcMXUHq"><span
                                                    class="shifticon shifticon-nav-mail "></span></span><span
                                                class="menuItemLabel___4mYFTju0">お問い合わせ</span><span
                                                class="menuItemNewTabIconWrapper___1SM4_tZ5"><span
                                                    class="shifticon shifticon-new-tab "></span></span></a></div>
                                </div>
                            </div>
                            <div class="footer___courYYQL">
                                <div class="footerLink___2oZy82Ti"><a
                                        href="http://localhost/airshift/html/shift_using_term.html" target="_blank"
                                        rel="noopener noreferrer">利用規約<span class="newTabIcon___1PwTvpnW"><span
                                                class="shifticon shifticon-new-tab "></span></span></a></div>
                                <div class="footerLink___2oZy82Ti"><a
                                        href="http://localhost/loginshift/html/using_terms.html" target="_blank"
                                        rel="noopener noreferrer">サービス共通利用約款<span class="newTabIcon___1PwTvpnW"><span
                                                class="shifticon shifticon-new-tab "></span></span></a></div>
                                <div class="footerLink___2oZy82Ti"><a
                                        href="http://localhost/loginshift/html/private.html" target="_blank"
                                        rel="noopener noreferrer">プライバシーポリシー<span class="newTabIcon___1PwTvpnW"><span
                                                class="shifticon shifticon-new-tab "></span></span></a></div>
                            </div>
                        </div><span class="toggleButton___13SDH1aq" aria-label="閉じる"><span
                                class="toggleButtonIcon___Truw0Ema"><span
                                    class="shifticon shifticon-nav-arrow-left "></span></span></span>
                    </div>
                </div>
                @yield('content')
                <div class="right___2qJ1zsA3">
                    <div class="root___2ceo-n66 root--close___3vljkwac">
                        <div class="inner___Ta9swKOi">
                            <div class="header___g2pv3n4i"><span class="headerLeftButton___36m5agHs"><span
                                        class="shifticon shifticon-close "></span></span>
                                <div class="headerTitle___3f2m-FXv">
                                    <div class="headerTitleText___Kripo5d3"></div>
                                </div>
                            </div>
                            <div class="body___16R5Ff1f roomSettings-close___2qg9dTsh"></div>
                        </div>
                    </div>
                    <div class="root___1znIY-8- root--open___1C3Vir1M">
                        <div class="menu___1Qwyg3RL" role="menu">
                            <div class="wrapper___1gxWggJg"><a role="menuitem"
                                    class="menuItem___3FvcGHSf menuItem--inactive___3CkpZ4WS">
                                    <div class="menuItemIcon___2H-0E3ea"><span
                                            class="shifticon shifticon-circle-info "></span></div>
                                    <div class="menuItemLabel___1ipTBFrR">
                                        <div class="menuItemLabelMain___1aWU8x6S">お知らせ</div>
                                    </div>
                                </a></div>
                            <div class="wrapper___1gxWggJg"><a role="menuitem"
                                    class="menuItem___3FvcGHSf menuItem--inactive___3CkpZ4WS">
                                    <div class="menuItemIcon___2H-0E3ea" id="addUserIconContainer"><span
                                            class="shifticon shifticon-add-user "></span></div>
                                    <div class="menuItemLabel___1ipTBFrR">
                                        <div class="menuItemLabelMain___1aWU8x6S">スタッフ連携承認</div>
                                    </div>
                                </a></div>
                            <div class="wrapper___1gxWggJg"><a role="menuitem"
                                    class="menuItem___3FvcGHSf menuItem--inactive___3CkpZ4WS">
                                    <div class="menuItemIcon___2H-0E3ea"><span
                                            class="shifticon shifticon-memo-check "></span></div>
                                    <div class="menuItemLabel___1ipTBFrR">
                                        <div class="menuItemLabelMain___1aWU8x6S">シフト調整の承認</div>
                                    </div>
                                </a></div>
                            <div class="wrapper___1gxWggJg"><a role="menuitem"
                                    class="menuItem___3FvcGHSf menuItem--inactive___3CkpZ4WS">
                                    <div class="menuItemIcon___2H-0E3ea"><span
                                            class="shifticon shifticon-memo-sand-clock "></span></div>
                                    <div class="menuItemLabel___1ipTBFrR">
                                        <div class="menuItemLabelMain___1aWU8x6S">シフトの回答待ち</div>
                                    </div>
                                </a></div>
                            <div class="wrapper___1gxWggJg"><a role="menuitem"
                                    class="menuItem___3FvcGHSf menuItem--inactive___3CkpZ4WS">
                                    <div class="menuItemIcon___2H-0E3ea"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="20">
                                            <g fill-rule="evenodd">
                                                <path
                                                    d="M14.286 19.285a5.071 5.071 0 115.072-5.107 5.09 5.09 0 01-5.072 5.107zm0-9.178a4.036 4.036 0 104.036 4.036 4.054 4.054 0 00-4.036-4.036z">
                                                </path>
                                                <path
                                                    d="M5 20H3.93A3.996 3.996 0 010 15.928V4.071A3.996 3.996 0 013.93 0h9.106a3.996 3.996 0 013.929 4.071.536.536 0 01-1.072 0 2.954 2.954 0 00-2.857-3.035H3.965A2.954 2.954 0 001.108 4.07v11.857a2.954 2.954 0 002.857 3.036h1.071A.518.518 0 115.001 20z">
                                                </path>
                                                <path fill-rule="nonzero"
                                                    d="M8.75 9.107a3.214 3.214 0 100-6.428 3.214 3.214 0 000 6.428zM6.609 5.893A2.143 2.143 0 118.75 8.036a2.121 2.121 0 01-2.143-2.143z">
                                                </path>
                                                <path
                                                    d="M7.322 13.75H5.536a.229.229 0 01-.21-.214v-.825c0-1.036.382-1.85 1.271-2.675.1-.094.164-.22.179-.358a.536.536 0 00-.143-.392.575.575 0 00-.393-.179.407.407 0 00-.357.143 4.518 4.518 0 00-1.597 3.46v.822a1.279 1.279 0 001.279 1.29h1.757a.536.536 0 100-1.072zm0 2.5H4.644a.536.536 0 000 1.071h2.678a.536.536 0 100-1.071z">
                                                </path>
                                                <path fill-rule="nonzero"
                                                    d="M13.893 15.928a.818.818 0 01-.582-.246L12.143 14.5a.822.822 0 011.175-1.15l.583.578 1.457-1.428a.822.822 0 111.164 1.16l-2.032 2.033a.814.814 0 01-.597.235z">
                                                </path>
                                            </g>
                                        </svg></div>
                                    <div class="menuItemLabel___1ipTBFrR">
                                        <div
                                            class="menuItemLabelMain___1aWU8x6S menuItemLabelMain--fullText___z-YOMHqc">
                                            スタッフの採用</div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="root___mzOoIcJx root--open___-SuaiYVe">
                            <div class="messageHeader___ytT632Ts">
                                <div class="messageHeaderIcon___1iBuTFDf"><span
                                        class="shifticon shifticon-message "></span></div>
                                <div class="messageHeaderLabel___14ll1RwK">メッセージ</div><span
                                    class="messageHeaderCheckUserButton___3DEj6Ff6"><span
                                        class="shifticon shifticon-check-user "></span></span><span
                                    class="messageHeaderSearchButton___3Y-u-iZl"><span
                                        class="shifticon shifticon-search "></span></span><span
                                    class="messageHeaderAddButton___2Ite2TKI"><span
                                        class="shifticon shifticon-plus "></span></span>
                            </div>
                            <div class="messageCheckUserBox___tGS3sf37 messageCheckUserBox--close___3_uNh_Wj">
                                <div class="messageCheckUserBoxInner___1ITWjoCQ">
                                    <div class="root___-nT-Ig5F"><input type="checkbox" class="checkbox___3zavhkGb"
                                            id="showRetiredStaff"><label for="showRetiredStaff"><span
                                                class="face___2riV5YUf"></span><span class="label___1541MBG8"
                                                style="font-size:14px">退職者を表示する</span></label></div>
                                </div>
                            </div>
                            <div class="messageSearchbox___2-jLHUnA messageSearchbox--close___b83Rek7p">
                                <div class="messageSearchboxInner___3VdjcWaV"><span class="root___1l69jhrz"><span
                                            class="iconWrapper___2MSm-Xlg iconWrapper--position-left___2n93bwEn search___Bo__N2tS"><span
                                                class="shifticon shifticon-search "></span></span><input
                                            type="text"
                                            class="input___eLGarZeE input--icon-left___2ediH8qB input--size-small___3ZJmnZyo "
                                            placeholder="名前で検索する" value="" maxlength="100"></span></div>
                            </div>
                        </div>
                        <div class="rooms___2rwNOUHm" role="menu" id="sidebarRight-rooms"><span></span>
                            <div class="root___bDo0egCG">
                                <p>メッセージができる<br>スタッフはいません</p><a href="../staffmanagement/invitation.html">スタッフを連携する</a>
                            </div><span></span>
                        </div><span class="toggleButton___TnY1DWHW" aria-label="閉じる"><span
                                class="toggleButtonIcon___1x_LqL3N"><span
                                    class="shifticon shifticon-nav-arrow-right "></span></span></span>
                    </div>
                </div>
            </div>
            <div id="tooltipContainer"></div>
            <div id="modalContainer1" style="display: none;">
                <div class="background___2DFyGIKm">
                    <div class="windowContainer___1B8r0CHJ">
                        <div class="root___a_0fJKTu">
                            <div class="root___2KhfRaSd">
                                <div class="closeButton___3BLMvxUH"><span class="shifticon shifticon-close "></span>
                                </div>
                                <div class="title___3x6gYZqH">スタッフを追加する</div>
                            </div>
                            <div class="row___2nkepbQw">
                                <div class="root___3OVFsMuG"><span
                                        class="button___3gUh5UFK button--state-active___1DkOSpFK button change_btn1">連携する</span><span
                                        class="button___3gUh5UFK button--state-inactive___3u5w3Zto change_btn2">連携しないで追加する</span>
                                </div>
                            </div>
                            <div class="root___1vy1EtM2">
                                <div class="slides___I-soWC_0" style="margin-left: 0%;">
                                    <div>
                                        <section class="section01___1zDhE4oq">
                                            <div class="section01Image___2Uiv0VH4"><img
                                                    src="{{ asset('assets/image/service/invite_staff (1).png') }}"
                                                    height="148" alt="">
                                            </div>
                                            <p class="section01Paragraph___1mbgSFCZ">
                                                スタッフ用アプリ「シフトボード」と連携すると、希望シフト収集、確定したシフトの共有、シフト調整等、様々な機能が利用できます。</p>
                                            <p class="section01Note___1qWC2AdB">※スタッフ連携は有料の機能です。</p>
                                            <div class="section01ButtonContainer___wN8Ujj4l"><button type="button"
                                                    class="root___2eBX69w2 root--type-primary___fsKispjw root--stretch___1YO2ETXQ"
                                                    id="invitation_btn">連携ページへ</button>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="slide02___1jdS4j_0">
                                        <div class="slide02Body___1LWJclIA">
                                            <div class="errors___zG--eDxO"></div>
                                            <p class="description___dhea_EhU">
                                                スタッフ情報を入力し、管理者がシフトだけでスタッフを管理します。あらかじめ収集した希望シフトを参照し、シフトを作成します。</p>
                                            <p class="caution___3j6Gl976">※シフト提出や確定シフトの共有などの連携機能はご利用できません。</p>
                                            <div class="list___1e9knfNl">
                                                <div class="listItem___1RdrdTdN"><span
                                                        class="listItemFieldWrapper___Ii1kLW6t"><span
                                                            class="root___1l69jhrz"><input name="family"
                                                                class="input___eLGarZeE " type="text"
                                                                placeholder="姓" maxlength="20"
                                                                value=""></span></span><span
                                                        class="listItemFieldWrapper___Ii1kLW6t"><span
                                                            class="root___1l69jhrz"><input name="first"
                                                                class="input___eLGarZeE " type="text"
                                                                placeholder="名" maxlength="20"
                                                                value=""></span></span></div>
                                            </div>
                                        </div>
                                        <div class="root___1Z3rjPVs">
                                            <div class="leftButtons___32NXIlyr"><span></span></div>
                                            <div class="rightButtons___3QHsto_5"><span>
                                                    <div class="button___3eD7p7cW"><button type="button"
                                                            class="root___2eBX69w2 root--type-primary___fsKispjw"
                                                            disabled="">追加する</button></div>
                                                </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalContainer" style="display:none">
                <div class="background___2DFyGIKm">
                    <div class="windowContainer___1B8r0CHJ">
                        <div class="root___2wTOLkBf">
                            <div class="closeButton___3-eRwwoC"><span class="shifticon shifticon-close "></span></div>
                            <div class="contents___3z8JfzPo">
                                <div class="mainText___L6LgJtOj">
                                    シフトで継続利用（有料）をお申込みしていただくと、<br>ヘルプ機能を用いたスタッフ（アルバイト）の募集・採用が できます。</div><img
                                    class="helpImage___11hg8CsN"
                                    src="{{ asset('assets/image/service/help-intro.png') }}" alt="">
                                <div class="description___1nLXeBBr">
                                    ※ヘルプ機能を用いたアルバイト募集・採用に追加料金はかかりません。<br>※シフトのシフト利用に関する審査とは別にヘルプ機能の利用に関する審査があります。ヘルプ機能の利用に関する審査が通過した場合に、ヘルプ機能を用いたアルバイト募集・採用が可能になります。<br>※審査には、1週間〜1ヶ月ほどのお時間をいただいております。
                                </div>
                            </div>
                            <div class="footer___TyC34iMW"><a href="./rateplan.html" target="_blank"
                                    rel="noopener noreferrer"
                                    class="root___2eBX69w2 root--link___hgDQJyeY root--type-primary___fsKispjw"
                                    id="rateplan_btn">利用を申込む</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalContainer2" style="display:none">
                <div class="background___1aaJfMQu">
                    <div class="root___2tVSjGoJ">
                        <div class="root___2KhfRaSd">
                            <div class="closeButton___3BLMvxUH"><span class="shifticon shifticon-close "></span></div>
                            <div class="title___3x6gYZqH">新規シフト追加</div>
                        </div>
                        <div class="body___12zIWbPO">
                            <div class="bodyInner___2y1WZCeW">
                                <div class="row___1hiXvh5L">
                                    <div class="root___3OVFsMuG"><span
                                            class="button___3gUh5UFK button--state-active___1DkOSpFK">シフト</span><span
                                            class="button___3gUh5UFK button--state-inactive___3u5w3Zto">休み</span></div>
                                </div>
                                <div class="row___1hiXvh5L">
                                    <div class="doubleColWrapper___2pvn4tn-">
                                        <div class="col___2kCO_vT1"><label class="label___2rNPT5pO">スタッフ名</label>
                                            <div><span class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="staffId"
                                                        style="font-size: 16px;">
                                                        @foreach ($staffs as $staff)
                                                            <option value="{{ $staff->id }}">{{ $staff->lastname_h }} {{ $staff->firstname_h }}</option>
                                                        @endforeach

                                                    </select></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row___1hiXvh5L">
                                    <div class="label___2rNPT5pO">日付</div>
                                    <div class="dateRow___38kgzEmH"><span class="date___1xoBX525">
                                            <div class="root___1IznchSH">
                                                <div class="react-datepicker-wrapper">
                                                    <div class="react-datepicker__input-container"><span
                                                            class="root___1l69jhrz"><span
                                                                class="iconWrapper___2MSm-Xlg iconWrapper--position-right___74ajMz1O calendar___12p-yx70"><span
                                                                    class="shifticon shifticon-calendar "></span></span><input
                                                                class="input___eLGarZeE input--icon-right___2L2HbrA- "
                                                                type="text" placeholder="" maxlength="10"
                                                                value="2023/03/01"></span></div>
                                                </div>
                                            </div>
                                        </span></div>
                                </div>
                                <div class="row___1hiXvh5L">
                                    <div class="label___2rNPT5pO">勤務時間</div>
                                    <div>
                                        <div class="selectTimeRange___1F6ZjWVr">
                                            <div class="pulldown___3iMPWHep pulldown--startHour___3TOg_Uhn"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="workTimeStartHour"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        @for ($i = 0; $i <= $divNums; $i++)
                                                            <option value="{{ $firstNum + $i }}">{{ $firstNum + $i }}</option>
                                                        @endfor


                                                    </select></span></div><span class="hour___2gcj1you">時</span>
                                            <div class="pulldown___3iMPWHep pulldown--startMinute___hpCDL41E"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="workTimeStartMinute"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        <option value="00">00</option>
                                                        <option value="30">30</option>
                                                    </select></span></div><span class="minute___3bbr46VL">分</span><span
                                                class="dash___1xWwy8sH">〜</span>
                                            <div class="pulldown___3iMPWHep pulldown--endHour___3I21wQBq"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="workTimeEndHour"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        @for ($i = 0; $i <= $divNums; $i++)
                                                            <option value="{{ $firstNum + $i }}">{{ $firstNum + $i }}</option>
                                                        @endfor
                                                    </select></span></div><span class="hour___2gcj1you">時</span>
                                            <div class="pulldown___3iMPWHep pulldown--endMinute___2E13S2wK"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="workTimeEndMinute"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        <option value="00">00</option>
                                                        <option value="30">30</option>
                                                    </select></span></div><span class="minute___3bbr46VL">分</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row___1hiXvh5L">
                                    <div class="label___2rNPT5pO">休憩時間</div>
                                    <div>
                                        <div class="selectTimeRange___1F6ZjWVr">
                                            <div class="pulldown___3iMPWHep pulldown--startHour___3TOg_Uhn"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="breakTimeStartHour"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                    </select></span></div><span class="hour___2gcj1you">時</span>
                                            <div class="pulldown___3iMPWHep pulldown--startMinute___hpCDL41E"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="breakTimeStartMinute"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        <option value="00">00</option>
                                                        <option value="05">05</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                        <option value="20">20</option>
                                                        <option value="25">25</option>
                                                        <option value="30">30</option>
                                                        <option value="35">35</option>
                                                        <option value="40">40</option>
                                                        <option value="45">45</option>
                                                        <option value="50">50</option>
                                                        <option value="55">55</option>
                                                    </select></span></div><span class="minute___3bbr46VL">分</span><span
                                                class="dash___1xWwy8sH">〜</span>
                                            <div class="pulldown___3iMPWHep pulldown--endHour___3I21wQBq"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="breakTimeEndHour"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                    </select></span></div><span class="hour___2gcj1you">時</span>
                                            <div class="pulldown___3iMPWHep pulldown--endMinute___2E13S2wK"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="breakTimeEndMinute"
                                                        style="font-size: 16px;">
                                                        <option value="-">-</option>
                                                        <option value="00">00</option>
                                                        <option value="05">05</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                        <option value="20">20</option>
                                                        <option value="25">25</option>
                                                        <option value="30">30</option>
                                                        <option value="35">35</option>
                                                        <option value="40">40</option>
                                                        <option value="45">45</option>
                                                        <option value="50">50</option>
                                                        <option value="55">55</option>
                                                    </select></span></div><span class="minute___3bbr46VL">分</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="root___1Z3rjPVs">
                            <div class="leftButtons___32NXIlyr"><span></span></div>
                            <div class="rightButtons___3QHsto_5"><span>
                                    <div class="button___3eD7p7cW"><button type="button"
                                            class="root___2eBX69w2 root--type-primary___fsKispjw">勤務を確定する</button>
                                    </div>
                                    <div class="button___3eD7p7cW"><button type="button"
                                            class="root___2eBX69w2 root--type-primary___fsKispjw">下書きのまま保存する</button>
                                    </div>
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.center___JQMcFu9F #day_method').click(function() {

                location.href = "/shiftdaily/{{ $daily }}";
            });
            $('.center___JQMcFu9F #week_method').click(function() {

                location.href = "/shiftweekly";
            });
            $('.center___JQMcFu9F #semi_method').click(function() {

                location.href = "/shiftsemimonthly";
            });
            $('.center___JQMcFu9F #month_method').click(function() {

                location.href = "/shiftmonthly";
            });
        });
    </script>
    @yield('bscript')
</body>


</html>
