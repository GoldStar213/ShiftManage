@extends('layouts.service')
@section('title', 'シフト管理｜シフト')
@section('style')
@endsection
@section('content')
<div class="center___JQMcFu9F">
    <div id="centerInner" class="centerInner___2z5Z5OSC">
        <div class="root___j0BZFjeW"></div>
        <div class="main___Qnv52De0">
            <main id="main" class="root___kEUF3NYB">
                <div>
                    <div>
                        <div class="root___2_DJdHJv" style="margin-bottom: 0px;">
                            <div class="shiftNavi___1cZZRa3A">
                                <div class="root___3dDHemkX">
                                    <div class="left___1hwpLfLL">
                                        <div class="segmentedControlWrapper___3Qtbxr-w">
                                            <div class="root___3OVFsMuG">
                                                <span
                                                    class="button___3gUh5UFK button--state-inactive___3u5w3Zto"
                                                    id="day_method">日</span>
                                                <span
                                                    class="button___3gUh5UFK button--state-active___1DkOSpFK"
                                                    id="week_method">週</span><span
                                                    class="button___3gUh5UFK button--state-inactive___3u5w3Zto"
                                                    id="semi_method">半月</span><span
                                                    class="button___3gUh5UFK button--state-inactive___3u5w3Zto"
                                                    id="month_method">月</span>
                                            </div>
                                        </div>
                                        <div class="calendarLink___25yO9ILr"><a
                                                class="calendar___PMF8rgyu"
                                                href="./calendar.html">カレンダー</a>
                                            <div class="printPreview___3GDXf0lo"><button
                                                    class="normal___2Ft303yo" type="button"><span
                                                        class="inner___1zafqBi7"><span
                                                            class="content___vochnIhs">印刷プレビュー</span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="center___2jUqNn52">
                                        <div class="root___2TkTQauS"><span class="prev___2sW1aJ7d"><span
                                                    class="shifticon shifticon-angle-left " id="shifticon-angle-left"></span></span>
                                            <div class="body___3y1EuEGY">
                                                <div class="root___3vmhWB_f">
                                                    <div class="date___2tCtKFZw"><span
                                                            class="root___2YHfw6NQ root--type-month___1F7YZY6P"><span
                                                                class="year___1WfLid7R"><span
                                                                    class="number___dYpbUZlm f_year">2023</span><span
                                                                    class="japanese___3zox1MSj">年</span></span><span
                                                                class="monthDay___3pDBSn6O"><span
                                                                    class="month___n-gDfV73"><span
                                                                        class="number___dYpbUZlm f_month">3</span><span
                                                                        class="japanese___3zox1MSj ">月</span></span><span
                                                                    class="day___2nSLbEke"><span
                                                                        class="number___dYpbUZlm f_date">1</span><span
                                                                        class="japanese___3zox1MSj">日<span
                                                                            class="wday___3OSLiv9a">（<span
                                                                                class="f_day_letter">水</span>）</span></span></span></span></span>
                                                    </div>
                                                    <div class="sign___30vj2-Ye">-</div>
                                                    <div class="date___2tCtKFZw"><span
                                                            class="root___2YHfw6NQ root--type-month___1F7YZY6P"><span
                                                                class="year___1WfLid7R"><span
                                                                    class="number___dYpbUZlm l_year">2023</span><span
                                                                    class="japanese___3zox1MSj">年</span></span><span
                                                                class="monthDay___3pDBSn6O"><span
                                                                    class="month___n-gDfV73"><span
                                                                        class="number___dYpbUZlm l_month">3</span><span
                                                                        class="japanese___3zox1MSj">月</span></span><span
                                                                    class="day___2nSLbEke"><span
                                                                        class="number___dYpbUZlm l_date">31</span><span
                                                                        class="japanese___3zox1MSj">日<span
                                                                            class="wday___3OSLiv9a">（<span
                                                                                class="l_day_letter">金</span>）</span></span></span></span></span>
                                                    </div>
                                                </div>
                                                <div class="datepickerWrapper___14Pr5sba">
                                                    <div class="root___1IznchSH">
                                                        <div class="react-datepicker-wrapper">
                                                            <div
                                                                class="react-datepicker__input-container">
                                                                <span value="2023/03/01"
                                                                    class="calendarIconWrapper"><span
                                                                        class="shifticon shifticon-calendar "></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><span class="next___33mmh1eQ"><span
                                                    class="shifticon shifticon-angle-right " id="shifticon-angle-right"></span></span>
                                        </div>
                                    </div>
                                    <div class="right___3TYZechV"><a class="today___3RUiC5Y0"
                                            href="javascript:today()">今日</a>
                                        <div class="headerRightArea___1OgYDM9Q">
                                            <div class="airWorkTextLink___Ncqwtn7_"><a href=""
                                                    target="_blank"
                                                    rel="noopener noreferrer">0円で求人募集。indeedにも掲載。</a><span
                                                    class="newTabIcon___1AMea-k0"><span
                                                        class="shifticon shifticon-new-tab "></span></span>
                                            </div>
                                            <div class="helpLinkWrapper___XU8Rkp_G">
                                                <div class="root--shiftHeader___3vj8et9R"><a
                                                        href="http://localhost/faqshift/html/"
                                                        target="_blank"
                                                        class="link___2unXWDaz">よくあるご質問<span
                                                            class="newTabIcon___j5licMtp"><span
                                                                class="shifticon shifticon-new-tab "></span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="showDisplaySettings___2xWy1wKE">
                                    <span class="shifticon shifticon-chevron-up "></span>
                                    <span class="displaySettingsLabel___1StS8lOI">表示設定</span>
                                </div>
                                <div class="root___3IzzFDG8">
                                    <div class="pulldownsWrapper___1DIuR-he">
                                        <div><span class="pulldownsLabel___2PPO1fod">絞り込み</span></div>
                                        <div class="pulldownsBody___3ANkoaWs"><span
                                                class="pulldown___2hd8p1wl"><span
                                                    class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                        class="iconWrapper___1SH2cQja"><span
                                                            class="shifticon shifticon-chevron-down "></span></span><select
                                                        class="select___3YDpguoF" name="filter-staff"
                                                        style="font-size: 11px;">
                                                        <option value="all">全てのスタッフ</option>
                                                        <option value="fixed">確定シフトのあるスタッフ</option>
                                                        <option value="draft">下書きシフトのあるスタッフ</option>
                                                        <option value="request">希望シフトのあるスタッフ</option>
                                                    </select></span></span></div>
                                    </div>
                                    <div class="checkboxesWrapper___1T5jnWRx">
                                        <div class="checkboxesHeader___3sBctohu"><span
                                                class="checkboxesLabel___1Sh8dmwO">表示項目</span><span
                                                class="checkboxesHelp___3mUFhpSG">
                                                <div class="wrapper___1gxWggJg"><span
                                                        class="iconWrapper___3Rlm-Yit"
                                                        style="font-size: 16px;"><span
                                                            class="shifticon shifticon-question-circle "></span></span>
                                                </div>
                                            </span><span class="checkboxesCaption___2sBJCyoK"><span
                                                    class="checkboxesCaptionMarker___l7CntN-m">※</span><span>各表示項目における合計値は下書きシフトと確定シフトの合計となります。</span></span>
                                        </div>
                                        <div class="checkboxesBody___1xLoCmqe">
                                            <div class="checkboxes___2BA59Vfs"><span
                                                    class="checkbox___2SsrnOIE widthFix___18enimP9">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="requestShiftVisibility" type="checkbox"
                                                            checked=""><label
                                                            for="requestShiftVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">希望シフト</span></label>
                                                    </div>
                                                </span><span
                                                    class="checkbox___2SsrnOIE widthFix___18enimP9">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="salesBudgetVisibility" type="checkbox"
                                                            checked=""><label
                                                            for="salesBudgetVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">売上予算</span></label>
                                                    </div>
                                                </span><span
                                                    class="checkbox___2SsrnOIE widthFix___18enimP9">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="workTimeVisibility" type="checkbox"
                                                            checked=""><label
                                                            for="workTimeVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">労働時間</span></label>
                                                    </div>
                                                </span><span
                                                    class="checkbox___2SsrnOIE widthFixFor3Spaces___1-DPUAtr">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="requiredStaff" type="checkbox"
                                                            checked=""><label for="requiredStaff"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">必要人数</span></label>
                                                    </div>
                                                </span><span class="checkbox___2SsrnOIE">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="IconAndMemoVisibility" type="checkbox"
                                                            checked=""><label
                                                            for="IconAndMemoVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">アイコン・メモ</span></label>
                                                    </div>
                                                </span></div>
                                            <div class="checkboxes___2BA59Vfs"><span
                                                    class="checkbox___2SsrnOIE widthFix___18enimP9">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb" onclick="wishrate()"
                                                            id="requestShiftPassedRateVisibility"
                                                            type="checkbox" checked=""><label
                                                            for="requestShiftPassedRateVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">希望叶え率</span></label>
                                                    </div>
                                                </span><span
                                                    class="checkbox___2SsrnOIE widthFix___18enimP9">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="costsVisibility" type="checkbox"
                                                            checked=""><label
                                                            for="costsVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">概算人件費</span></label>
                                                    </div>
                                                </span><span
                                                    class="checkbox___2SsrnOIE widthFix___18enimP9">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="headcountVisibility" type="checkbox"
                                                            checked=""><label
                                                            for="headcountVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">シフト人数</span></label>
                                                    </div>
                                                </span><span class="checkbox___2SsrnOIE">
                                                    <div class="root___-nT-Ig5F"><input
                                                            class="checkbox___3zavhkGb"
                                                            id="helpLineVisibility" type="checkbox"
                                                            checked=""><label
                                                            for="helpLineVisibility"><span
                                                                class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                                class="label___1541MBG8"
                                                                style="font-size: 11px;">スタッフ採用</span></label>
                                                    </div>
                                                </span></div>
                                        </div>
                                    </div>
                                    <div class="legendsWrapper____HNS5y5K">
                                        <div class="legendsBody___33-y-W4k">
                                            <div class="root___2pRQ96Qt"><span
                                                    class="root___2iL7uhy9">シフトの凡例を見る</span>
                                                <div class="legendsWrapper___2fOfAvPB">
                                                    <div class="row___31U4s-gy"><span
                                                            class="wrapper___37t2vGXg wrapper--default___13PK1LDK"><span
                                                                class="root___nj7yNSZL root--color-blue___jUyhDJ-Y root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--shiftFixed___kOqoOt27"></span><span
                                                                    class="text___-dAvxNk1">確定シフト</span></span></span><span
                                                            class="wrapper___37t2vGXg wrapper--long___1KUGMxft"><span
                                                                class="root___nj7yNSZL root--color-blue___jUyhDJ-Y root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--shiftDraft___2VJaEkfM"></span><span
                                                                    class="text___-dAvxNk1">下書きシフト</span></span></span><span
                                                            class="wrapper___37t2vGXg wrapper--default___13PK1LDK"><span
                                                                class="root___nj7yNSZL root--color-blue___jUyhDJ-Y root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--shiftRequest___3iIUk4Pw"></span><span
                                                                    class="text___-dAvxNk1">希望シフト</span></span></span><span
                                                            class="wrapper___37t2vGXg wrapper--auto___lxS1wHYa"><span
                                                                class="root___nj7yNSZL root--color-blue___jUyhDJ-Y root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--arranging___1h9pal-L"><span
                                                                        class="shifticon shifticon-triangle "></span></span><span
                                                                    class="text___-dAvxNk1">調整中</span></span></span>
                                                    </div>
                                                    <div class="row___31U4s-gy"><span
                                                            class="wrapper___37t2vGXg wrapper--default___13PK1LDK"><span
                                                                class="root___nj7yNSZL root--color-red___1zzIz_6H root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--restFixed___3i0BWajF"></span><span
                                                                    class="text___-dAvxNk1">休み</span></span></span><span
                                                            class="wrapper___37t2vGXg wrapper--long___1KUGMxft"><span
                                                                class="root___nj7yNSZL root--color-red___1zzIz_6H root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--restDraft___1Wuegl43"></span><span
                                                                    class="text___-dAvxNk1">下書き休み</span></span></span><span
                                                            class="wrapper___37t2vGXg wrapper--default___13PK1LDK"><span
                                                                class="root___nj7yNSZL root--color-red___1zzIz_6H root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--restRequest___299IV8Uk"></span><span
                                                                    class="text___-dAvxNk1">希望休み</span></span></span><span
                                                            class="wrapper___37t2vGXg wrapper--auto___lxS1wHYa"><span
                                                                class="root___nj7yNSZL root--color-red___1zzIz_6H root--size-small___3SwoZlGf"><span
                                                                    class="icon___34O6UIPv icon--undecided___41XW4oY9"></span><span
                                                                    class="text___-dAvxNk1">採否未判断</span></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shiftContent___3thIldC4">
                                <div class="shiftTable___AYK_8xWg">
                                    <div class="static_table_box">
                                        <div class="table_title column">
                                            <div class="table_title_item"></div>
                                            <div class="table_title_item">
                                                <div class="summaryTableTh___33vKY0IP"
                                                    style="border:none">
                                                    <div>売上予算<br><button class="normal___2Ft303yo"
                                                            type="button"><span
                                                                class="inner___1zafqBi7"><span
                                                                    class="content___vochnIhs">設定する</span></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_title_item">
                                                <div class="summaryTableTh___33vKY0IP"
                                                    style="border:none">
                                                    <div>人件費比率<br></div>
                                                </div>
                                            </div>
                                            <div class="table_title_item">
                                                <div class="summaryTableTh___33vKY0IP"
                                                    style="border:none">
                                                    <div><span>概算人件費<br>(うち交通費)</span><br></div>
                                                </div>
                                            </div>
                                            <div class="table_title_item">
                                                <div class="summaryTableTh___33vKY0IP"
                                                    style="border:none">
                                                    <div>労働時間<br></div>
                                                </div>
                                            </div>
                                            <div class="table_title_item">
                                                <div class="summaryTableTh___33vKY0IP"
                                                    style="border:none">
                                                    <div>シフト人数<br></div>
                                                </div>
                                            </div>
                                            <div class="table_title_item">
                                            </div>
                                            <div class="table_title_item">
                                                <div class="summaryTableTh___33vKY0IP"
                                                    style="border:none">
                                                    <div>スタッフ採用</div>
                                                    <span class="shifticon shifticon-plus-circle"></span>
                                                    <span class="createJobstaff">募集する</span>
                                                </div>
                                            </div>
                                            <div class="table_title_item">
                                                <span id="staff_getting">スタッフを追加</span>
                                            </div>
                                        </div>
                                        <div class="table_sum column">
                                            <div class="table_sum_item">
                                                    <span>合計</span>
                                            </div>
                                            <div class="table_sum_item">
                                                <span>¥-</span>
                                            </div>
                                            <div class="table_sum_item">
                                                <span>-%</span>
                                            </div>
                                            <div class="table_sum_item">
                                                <span>¥0<br>(¥0)</span>
                                            </div>
                                            <div class="table_sum_item">
                                                <span>0h00m</span>
                                            </div>
                                            <div class="table_sum_item">
                                                <span>0人</span>
                                            </div>
                                            <div class="table_sum_item">
                                                <div class="sum_item1">
                                                    <span style="text-align:center"> 根算人件董<br>(交通全なし)</span>
                                                </div>

                                                <div class="sum_item2">
                                                    <span style="text-align:center"> 労働時間</span>
                                                </div>
                                                <div class="sum_item3">
                                                    <span style="text-align:center"> 希望叶え率</span>
                                                </div>
                                            </div>
                                            <div class="table_sum_item">
                                                <div class="sum_item1">
                                                    <span style="text-align:center"> ¥0</span>
                                                </div>
                                                <div class="sum_item2">
                                                    <span style="text-align:center"> 0h00m</span>
                                                </div>
                                                <div class="sum_item3">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resizer_table_box">
                                        <div class="table_row row1" id="date_row"></div>
                                        <div class="table_row row2" id="price_row"></div>
                                        <div class="table_row row3" id="percent_row"></div>
                                        <div class="table_row row4" id="per_price_row"></div>
                                        <div class="table_row row5" id="work_time_row"></div>
                                        <div class="table_row row6" id="work_people_row"></div>
                                        <div class="table_row row7" id="date_symbole_row"></div>
                                        <div class="table_row row8" id="gather_person_row"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="centerSpacer___v9JlAllu" id="centerSpacer">
        <div class="root___krwNb48I">

            <div class="right___VFk6zP3u">
                <div class="rightItem___11EQB7qD">
                    <table class="workTimeTable___1P17zmuw">
                        <tbody>
                            <tr class="sumTempWorkTime___2mdbOLFa">
                                <th scope="row">下書きシフトの合計</th>
                                <td><span class="time___36ac0u6D">00時間00分</span></td>
                            </tr>
                            <tr class="sumFixedWorkTime___2AXl6PeV">
                                <th scope="row">確定シフトの合計</th>
                                <td><span class="time___36ac0u6D">00時間00分</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="rightItem___11EQB7qD"><button type="button"
                        class="root___2eBX69w2 root--type-normal___2R3-RP3j">シフト表を共有・印刷する</button></div>
                <div class="rightItem___11EQB7qD"><button type="button"
                        class="root___2eBX69w2 root--type-primary___fsKispjw"
                        disabled="">この月の下書きを一括確定する</button></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bscript')
<script src="{{ asset('assets/js/service/week_calendar.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('#staff_getting').click(function () {

                $('#modalContainer1').attr('style', 'display:block');

            });
            $('.closeButton___3BLMvxUH').click(function () {

                $('#modalContainer1').attr('style', 'display:none');

            });
            $('.createJobOfferButton___2bYQOcap').click(function () {

                $('#modalContainer').attr('style', 'display:block');

            });
            $('.createJobstaff').click(function () {

                $('#modalContainer').attr('style', 'display:block');

            });
            $('.closeButton___3-eRwwoC').click(function () {

                $('#modalContainer').attr('style', 'display:none');

            });
            $('.change_btn1').click(function () {

                $('.slides___I-soWC_0').attr('style', 'margin-left:0%');
                $('.change_btn1').attr('class',
                    'button___3gUh5UFK button--state-active___1DkOSpFK button change_btn1')
                $('.change_btn2').attr('class',
                    'button___3gUh5UFK button--state-inactive___3u5w3Zto change_btn1')


            });
            $('.change_btn2').click(function () {

                $('.slides___I-soWC_0').attr('style', 'margin-left:-100%');
                $('.change_btn2').attr('class',
                    'button___3gUh5UFK button--state-active___1DkOSpFK button change_btn2')
                $('.change_btn1').attr('class',
                    'button___3gUh5UFK button--state-inactive___3u5w3Zto change_btn1')
            });
            $('button#invitation_btn').click(function () {
                location.href = "../staffmanagement/invitation.html";
                $('#modalContainer1').attr('style', 'display:none');
            });
            $('#rateplan_btn').click(function () {

                $('#modalContainer').attr('style', 'display:none');

            });
            $('.menuItemLabel___4mYFTju0.rateplan_view').click(function () {

                $('#modalContainer').attr('style', 'display:block');

            });


            $('.resizer_table_box .table_row div span.date_border').click(function () {

                location.href="./daymethod.html"

            });


        });
    </script>
@endsection

