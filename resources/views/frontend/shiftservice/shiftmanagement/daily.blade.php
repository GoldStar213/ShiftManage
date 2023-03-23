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
                        <div class="root___15r-l6zD">
                            <div class="root___3dDHemkX">
                                <div class="left___1hwpLfLL">
                                    <div class="segmentedControlWrapper___3Qtbxr-w">
                                        <div class="root___3OVFsMuG"><span
                                                class="button___3gUh5UFK button--state-active___1DkOSpFK">日</span><span
                                                class="button___3gUh5UFK button--state-inactive___3u5w3Zto"
                                                id="week_method">週</span><span
                                                class="button___3gUh5UFK button--state-inactive___3u5w3Zto"
                                                id="semi_method">半月</span><span
                                                class="button___3gUh5UFK button--state-inactive___3u5w3Zto"
                                                id="month_method">月</span>
                                        </div>
                                    </div>
                                    <div class="calendarLink___25yO9ILr"><a class="calendar___PMF8rgyu"
                                            href="./calendar.html">カレンダー</a>
                                        <div class="printPreview___3GDXf0lo"><button class="normal___2Ft303yo"
                                                type="button"><span class="inner___1zafqBi7"><span
                                                        class="content___vochnIhs">印刷プレビュー</span></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="center___2jUqNn52">
                                    <div class="root___2TkTQauS"><span class="prev___2sW1aJ7d"><span
                                                class="shifticon shifticon-angle-left "
                                                id="shifticon-angle-left"></span></span>
                                        <div class="body___3y1EuEGY">
                                            <span class="root___2YHfw6NQ root--type-day___1MRaTucQ">
                                                <span class="year___1WfLid7R">
                                                    <span class="number___dYpbUZlm f_year)">2023</span>
                                                    <span class="japanese___3zox1MSj">年</span>
                                                </span>
                                                    <span class="monthDay___3pDBSn6O">
                                                        <span class="month___n-gDfV73">
                                                        <span class="number___dYpbUZlm f_month"></span>
                                                        <span class="japanese___3zox1MSj">月</span></span>
                                                        <span class="day___2nSLbEke">
                                                            <span class="number___dYpbUZlm f_date"></span>
                                                            <span class="japanese___3zox1MSj">日
                                                                <span class="wday___3OSLiv9a">（
                                                                    <span class="f_day"></span>）</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                            <div class="datepickerWrapper___14Pr5sba">
                                                <div class="root___1IznchSH">
                                                    <div class="react-datepicker-wrapper">
                                                        <div class="react-datepicker__input-container"><span
                                                                value="2023/03/01" class="calendarIconWrapper"><span
                                                                    class="shifticon shifticon-calendar "></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><span class="next___33mmh1eQ"><span class="shifticon shifticon-angle-right "
                                                id="shifticon-angle-right"></span></span>
                                    </div>
                                </div>
                                <div class="right___3TYZechV"><a class="today___3RUiC5Y0" href="javascript:today()">今日</a>
                                    <div class="headerRightArea___1OgYDM9Q">
                                        <div class="airWorkTextLink___Ncqwtn7_"><a href="" target="_blank"
                                                rel="noopener noreferrer">0円で求人募集。indeedにも掲載。</a><span
                                                class="newTabIcon___1AMea-k0"><span
                                                    class="shifticon shifticon-new-tab "></span></span>
                                        </div>
                                        <div class="helpLinkWrapper___XU8Rkp_G">
                                            <div class="root--shiftHeader___3vj8et9R"><a
                                                    href="http://localhost/faqshift/html/" target="_blank"
                                                    class="link___2unXWDaz">よくあるご質問<span class="newTabIcon___j5licMtp"><span
                                                            class="shifticon shifticon-new-tab "></span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="showDisplaySettings___3ckfVw5C">
                                <span class="shifticon shifticon-chevron-up "></span>
                                <span class="displaySettingsLabel___3ppVu2eC">表示設定</span>
                            </div>
                            <div class="infoBar___3e6CHBpt">
                                <div class="root___3IwNrYan">
                                    <div class="starArea___12Do3M-F"><span
                                            class="icon___2JL-vxzU star___2N-FsSrn icon--off___3GYPMPcY"><span
                                                class="shifticon shifticon-star "></span></span></div>
                                    <div class="busynessArea___11XX5DNx"><span class="label___2H1_eSr0">忙しさ</span>
                                        <span class="icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY">
                                            <span class="shifticon shifticon-circle-empty "></span>
                                        </span>
                                        <span class="icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY"><span
                                                class="shifticon shifticon-circle-half "></span></span><span
                                            class="icon___2JL-vxzU busyness___1JDTC0Yy icon--off___3GYPMPcY"><span
                                                class="shifticon shifticon-circle-full "></span></span>
                                    </div>
                                    <div class="memoArea___13-7Hwnc"><span class="label___2H1_eSr0">メモ</span>
                                        <div class="memoAreaContent___3ilLFe6B">
                                            <div class="memoWrapper___LDzGbsi5 memoshow">
                                                <div class="memo___DI77u7nR memo--empty___1_Z5U4of">メモはありません
                                                </div>
                                            </div>
                                            <div class="buttonWrapper___mkVVth2k"><button class="normal___2Ft303yo memodisplay"
                                                    type="button"><span class="inner___1zafqBi7"><span
                                                            class="content___vochnIhs ">編集する</span></span></button>
                                            </div>
                                        </div>
                                        <form class="memoAreaContent___3ilLFe6B" style="display:none">
                                            <div class="memoWrapper___LDzGbsi5 input"><span class="root___1l69jhrz"><input
                                                        name="memo" id="memo" class="input___eLGarZeE " type="text"
                                                        placeholder="メモを入力してください" maxlength="2000"
                                                        value=""></span><input type="hidden" name="date"
                                                    value="20230301"></div>
                                            <div class="buttonWrapper___mkVVth2k"><button class="normal___2Ft303yo memosave"
                                                    type="button"><span class="inner___1zafqBi7"><span
                                                            class="content___vochnIhs">保存する</span></span></button></div>
                                            <div class="buttonWrapper___mkVVth2k"><button class="normal___2Ft303yo memocancel"
                                                    type="button"><span class="inner___1zafqBi7"><span
                                                            class="content___vochnIhs">キャンセルする</span></span></button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="root___3IzzFDG8">
                                <div class="pulldownsWrapper___1DIuR-he">
                                    <div><span class="pulldownsLabel___2PPO1fod">絞り込み</span></div>
                                    <div class="pulldownsBody___3ANkoaWs"><span class="pulldown___2hd8p1wl"><span
                                                class="root___2yX5Sxc0 root--width-full___1NTKLJFB"><span
                                                    class="iconWrapper___1SH2cQja"><span
                                                        class="shifticon shifticon-chevron-down "></span>
                                                    </span>
                                                <select class="select___3YDpguoF" name="filter-staff" style="font-size: 11px;">
                                                    <option value="all">全てのスタッフ</option>
                                                    <option value="fixed">確定シフトのあるスタッフ</option>
                                                    <option value="draft">下書きシフトのあるスタッフ</option>
                                                    <option value="request">希望シフトのあるスタッフ</option>
                                                </select></span></span></div>
                                </div>
                                <div class="checkboxesWrapper___1T5jnWRx">
                                    <div class="checkboxesHeader___3sBctohu"><span
                                            class="checkboxesLabel___1Sh8dmwO">表示項目</span></div>
                                    <div class="checkboxesBody___1xLoCmqe">
                                        <div class="checkboxes___2BA59Vfs">
                                            <span class="checkbox___2SsrnOIE" >
                                                <div class="root___-nT-Ig5F" id="checkbox___2SsrnOIE1"><input class="checkbox___3zavhkGb"
                                                        id="requestShiftVisibility" type="checkbox" checked=""><label
                                                        for="requestShiftVisibility"><span
                                                            class="face___2riV5YUf face--size-small___2TuN98UN"></span><span
                                                            class="label___1541MBG8"
                                                            style="font-size: 11px;">希望シフト</span></label>
                                                </div>
                                            </span>
                                            <span class="checkbox___2SsrnOIE" >
                                                <div class="root___-nT-Ig5F" id="checkbox___2SsrnOIE2"><input class="checkbox___3zavhkGb"
                                                        id="helpLineVisibility" type="checkbox" checked=""><label
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
                                        <div class="root___2pRQ96Qt"><span class="root___2iL7uhy9">シフトの凡例を見る</span>
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

                            <div class="tableGroup___BUcYJYsh">
                                <div class="sticky___3S--0roF" style="top: 0px; z-index: 1;">
                                    <div class="tableGroupHeader___3DaV71OK">
                                        <div class="root___1EwzAYNl">
                                            @for ($i = 0; $i < $divNums; $i++)
                                                <div style="left:{{ $eachLeft[$i] }}%;width:{{ $eachWidth[$i] }}%">
                                                    {{ $firstNum + $i }}</div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                                @if (count($groups) > 1)
                                    @foreach ($groups as $group)
                                        <div class="tableWrapper___3APkWbPX">
                                            <div>
                                                <div class="sticky___3S--0roF" style="top: 0px; z-index: 1;">
                                                    <div class="caption___2DvD4QVl">
                                                        <div class="groupName___1wv-KGEx">{{ $group->name }}</div>
                                                    </div>
                                                </div>
                                                <div class="root___3zlHL6Mu">
                                                    <div class="th___3pZb1qob">
                                                        <div class="thLabel___2DrJ_Z2r">必要人数</div>
                                                        <div class="thHelpTooltipWrapper___29WEX0AX">
                                                            <div class="wrapper___1gxWggJg"><span
                                                                    class="iconWrapper___3Rlm-Yit"
                                                                    style="font-size: 20px;"><span
                                                                        class="shifticon shifticon-question-circle "></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="thButtonWrapper___2uMVUaEP"><button
                                                                class="normal___2Ft303yo" type="button"><span
                                                                    class="inner___1zafqBi7"><span
                                                                        class="content___vochnIhs">編集する</span></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="td___3-r4a9pJ">
                                                        <div class="cells___33BABnMy">
                                                            @for ($i = 0; $i < $divNums; $i++)
                                                                <div class="cell___3HOEM-02"
                                                                    style="left:{{ $eachLeft[$i] }}%;width:{{ $eachWidth[$i] }}%">
                                                                </div>
                                                            @endfor
                                                        </div>
                                                        <div class="barContainer___1CdmLeTA">
                                                            @if (isset($barWidth[$group->id]))
                                                                @for ($i = 0; $i < count($barWidth[$group->id]); $i++)
                                                                    @if ($i == 0)
                                                                        <div style="width:{{ $barLeft[$group->id][$i] }}%">
                                                                        </div>
                                                                        <div class="barWrapper___2x6m-YtV"
                                                                            style="width:{{ $barWidth[$group->id][$i] }}%">
                                                                            <span
                                                                                class="root___r8z9K3c3 root--daily___clvxD6WE root--lt___1zICsk1L"><span><span
                                                                                        class="current___hkDVPb4y">0</span>/
                                                                                    <!-- -->{{ $needNum[$group->id][$i] }}
                                                                                </span></span>
                                                                            <div class="barTooltipWrapper___rvoctJL-">
                                                                                <div
                                                                                    class="root___25__Qdj8 root--type-default___2zBQAcpl root--direction-bottom___1imcBc6s">
                                                                                    <table class="table___sgGV8GM9">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <th>シフト人数</th>
                                                                                                <td class="td___1kI6Ke-Q">
                                                                                                    <span
                                                                                                        class="bold___3MTIHzXP">0</span>人
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>必要人数</th>
                                                                                                <td class="td___1kI6Ke-Q">
                                                                                                    {{ $needNum[$group->id][$i] }}
                                                                                                    <!-- -->人
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div
                                                                            style="width:{{ $barLeft[$group->id][$i] - $barLeft[$group->id][$i - 1] - $barWidth[$group->id][$i - 1] }}%">
                                                                        </div>
                                                                        <div class="barWrapper___2x6m-YtV"
                                                                            style="width:{{ $barWidth[$group->id][$i] }}%">
                                                                            <span
                                                                                class="root___r8z9K3c3 root--daily___clvxD6WE root--lt___1zICsk1L"><span><span
                                                                                        class="current___hkDVPb4y">0</span>/
                                                                                    <!-- -->{{ $needNum[$group->id][$i] }}
                                                                                </span></span>
                                                                            <div class="barTooltipWrapper___rvoctJL-">
                                                                                <div
                                                                                    class="root___25__Qdj8 root--type-default___2zBQAcpl root--direction-bottom___1imcBc6s">
                                                                                    <table class="table___sgGV8GM9">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <th>シフト人数</th>
                                                                                                <td class="td___1kI6Ke-Q">
                                                                                                    <span
                                                                                                        class="bold___3MTIHzXP">0</span>人
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>必要人数</th>
                                                                                                <td class="td___1kI6Ke-Q">
                                                                                                    {{ $needNum[$group->id][$i] }}
                                                                                                    <!-- -->人
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endfor
                                                            @else
                                                                <div style="width: 0%;"></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                @foreach ($group->staffs as $staff)
                                                    <div class="tr___2CNcHw4v">
                                                        <div class="root___1BOvxe1y">
                                                            <div class="inner___YZjnku0p">
                                                                <div class="name___1yaaRDba">
                                                                    {{ $staff->lastname_h }}{{ $staff->firstname_h }}
                                                                </div>
                                                                <div class="worktime___1N2NXLC5">
                                                                    @if ($P_totaltimes == 0)
                                                                        <span>00時間00分</span>
                                                                    @else
                                                                        <span>{{ $P_totaltimes[$staff->id] }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="createShiftButton___2OLzFyMU"><span
                                                                        class="iconWrapper___3FKNP5rB"><span
                                                                            class="shifticon shifticon-plus-circle "></span></span>シフトを追加する
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="td___35PqsKVU">
                                                            <div class="cells___1BMuOT7w">
                                                                @for ($i = 0; $i < $divNums; $i++)
                                                                    <div class="cell___2VmPggHr"
                                                                        style="left:{{ $eachLeft[$i] }}%;width:{{ $eachWidth[$i] }}%">
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                            <div class="root___3MTW-DIa" style="height: 68px;">
                                                                <div class="createArea___2CsM9zMP">
                                                                    <div class="dropArea___2SK2iU9E">
                                                                        <div class="dropPreview___3Up6NjtQ"
                                                                            style="display: none;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="asdfasdf">
                                                                        @for ($i = 0; $i < $divNums; $i++)
                                                                            <div class="createIcon___kHaOwDWv"
                                                                                style="left:{{ $eachLeft[$i] }}%;width:{{ $eachWidth[$i] }}%">
                                                                                <span
                                                                                    class="shifticon shifticon-plus-circle "></span>
                                                                            </div>
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                                @if (isset($workstarts[$staff->id]))
                                                                    @for ($i = 0; $i < count($workstarts[$staff->id]); $i++)
                                                                        @if ($confirm[$staff->id][$i] == false)
                                                                            <div class="barWrap___2oM3ve3z"
                                                                                draggable="true"
                                                                                style="top: 22px; left: {{ $card_left[$staff->id][$i] }}%; width: {{ $card_width[$staff->id][$i] }}%;">
                                                                                <div
                                                                                    class="bar___bvr3y4CY bar--draft___2PiLGR8-">
                                                                                    <div class="barInner___hCY0DCDT"
                                                                                        style="left: 0%; width: 100%;">
                                                                                        <div
                                                                                            class="barContent___3VxanJDb {{ $colorClass }}">
                                                                                            <span
                                                                                                class="barTextWrapper___3vnTX3-G"><span
                                                                                                    class="barText___2ZhSqd4e">{{ $workstarts[$staff->id][$i] }}
                                                                                                    -
                                                                                                    {{ $workends[$staff->id][$i] }}</span></span>
                                                                                            <div
                                                                                                class="leftHandle___mRzmQCY-">
                                                                                            </div>
                                                                                            <div
                                                                                                class="rightHandle___kvbDva7i">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="shiftbarTooltip___1IZstRzH">
                                                                                    <div class="root___25__Qdj8 root--type-default___2zBQAcpl root--direction-bottom___1imcBc6s"
                                                                                        style="width: auto;">
                                                                                        <dl class="dl___1KMsSj8E">
                                                                                            <dt class="">下書きシフト
                                                                                            </dt>
                                                                                            <dd class="">3/1（水）
                                                                                                {{ $workstarts[$staff->id][$i] }}
                                                                                                -
                                                                                                {{ $workends[$staff->id][$i] }}
                                                                                            </dd>
                                                                                        </dl>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        @if ($confirm[$staff->id][$i] == true)
                                                                            <div class="barWrap___2oM3ve3z"
                                                                                style="top: 22px; left: {{ $card_left[$staff->id][$i] }}%; width: {{ $card_width[$staff->id][$i] }}%;">
                                                                                <div
                                                                                    class="bar___bvr3y4CY bar--fixed___2g5AMVE-">
                                                                                    <div class="barInner___hCY0DCDT"
                                                                                        style="left: 0%; width: 100%;">
                                                                                        <div
                                                                                            class="barContent___3VxanJDb {{ $colorClass }}">
                                                                                            <span
                                                                                                class="barTextWrapper___3vnTX3-G"><span
                                                                                                    class="barText___2ZhSqd4e">{{ $workstarts[$staff->id][$i] }}
                                                                                                    -
                                                                                                    {{ $workends[$staff->id][$i] }}</span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="shiftbarTooltip___1IZstRzH">
                                                                                    <div class="root___25__Qdj8 root--type-default___2zBQAcpl root--direction-bottom___1imcBc6s"
                                                                                        style="width: auto;">
                                                                                        <dl class="dl___1KMsSj8E">
                                                                                            <dt class="">確定シフト
                                                                                            </dt>
                                                                                            <dd class="">3/1（水）
                                                                                                {{ $workstarts[$staff->id][$i] }}
                                                                                                -
                                                                                                {{ $workends[$staff->id][$i] }}
                                                                                            </dd>
                                                                                        </dl>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endfor
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <div class="tr___2CNcHw4v tr--isHelpLine___126XEkMw" style="height: 6px;">
                                                    <div class="root___1BOvxe1y">
                                                        <div class="inner___YZjnku0p">
                                                            <div class="name___1yaaRDba">スタッフ採用</div>
                                                            <div class="worktime___1N2NXLC5"><span>00時間00分</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="td___35PqsKVU">
                                                        <div class="cells___1BMuOT7w">
                                                            @for ($i = 0; $i < $divNums; $i++)
                                                                <div class="helpLineCell___2O42TDp-"
                                                                    style="width:{{ $eachWidth[$i] }}%"></div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="tableWrapper___3APkWbPX">
                                        <div>
                                            <div class="sticky___3S--0roF" style="top: 0px; z-index: 1;">
                                                <div class="caption___2DvD4QVl">
                                                    <div class="groupName___1wv-KGEx"></div>
                                                </div>
                                            </div>
                                            <div class="root___3zlHL6Mu">
                                                <div class="th___3pZb1qob">
                                                    <div class="thLabel___2DrJ_Z2r">必要人数</div>
                                                    <div class="thHelpTooltipWrapper___29WEX0AX">
                                                        <div class="wrapper___1gxWggJg"><span
                                                                class="iconWrapper___3Rlm-Yit"
                                                                style="font-size: 20px;"><span
                                                                    class="shifticon shifticon-question-circle "></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="thButtonWrapper___2uMVUaEP"><button
                                                            class="normal___2Ft303yo" type="button"><span
                                                                class="inner___1zafqBi7"><span
                                                                    class="content___vochnIhs">編集する</span></span></button>
                                                    </div>
                                                </div>
                                                <div class="td___3-r4a9pJ">
                                                    <div class="cells___33BABnMy">
                                                        @for ($i = 0; $i < $divNums; $i++)
                                                            <div class="cell___3HOEM-02"
                                                                style="left:{{ $eachLeft[$i] }}%;width:{{ $eachWidth[$i] }}%">
                                                            </div>
                                                        @endfor
                                                    </div>
                                                    <div class="barContainer___1CdmLeTA">
                                                        @if (count($schedule_view) > 0)
                                                            @foreach ($schedule_view as $schedule)
                                                                <div class="barWrapper___2x6m-YtV"
                                                                    style="width:{{ $barWidth[$schedule->id] }}%; left:{{ $barLeft[$schedule->id] }}">
                                                                    <span
                                                                        class="root___r8z9K3c3 root--daily___clvxD6WE root--lt___1zICsk1L"><span><span
                                                                                class="current___hkDVPb4y">0</span>/
                                                                            <!-- -->{{ $schedule->needNum }}
                                                                        </span></span>
                                                                    <div class="barTooltipWrapper___rvoctJL-">
                                                                        <div
                                                                            class="root___25__Qdj8 root--type-default___2zBQAcpl root--direction-bottom___1imcBc6s">
                                                                            <table class="table___sgGV8GM9">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>シフト人数</th>
                                                                                        <td class="td___1kI6Ke-Q"><span
                                                                                                class="bold___3MTIHzXP">0</span>人
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>必要人数</th>
                                                                                        <td class="td___1kI6Ke-Q">
                                                                                            {{ $schedule->needNum }}
                                                                                            <!-- -->人
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div style="width: 0%;"></div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>

                                            @foreach ($staffs as $staff)
                                                <div class="tr___2CNcHw4v">
                                                    <div class="root___1BOvxe1y">
                                                        <div class="inner___YZjnku0p">
                                                            <div class="name___1yaaRDba">
                                                                {{ $staff->lastname_h }}{{ $staff->firstname_h }}</div>
                                                            <div class="worktime___1N2NXLC5">
                                                                @if ($P_totaltimes == 0)
                                                                    <span>00時間00分</span>
                                                                @else
                                                                    <span>{{ $P_totaltimes[$staff->id] }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="createShiftButton___2OLzFyMU"><span
                                                                    class="iconWrapper___3FKNP5rB"><span
                                                                        class="shifticon shifticon-plus-circle "></span></span>シフトを追加する
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="td___35PqsKVU">
                                                        <div class="cells___1BMuOT7w">
                                                            @for ($i = 0; $i < $divNums; $i++)
                                                                <div class="cell___2VmPggHr"
                                                                    style="left:{{ $eachLeft[$i] }}%;width:{{ $eachWidth[$i] }}%">
                                                                </div>
                                                            @endfor
                                                        </div>
                                                        <div class="root___3MTW-DIa" style="height: 68px;">
                                                            <div class="createArea___2CsM9zMP">
                                                                <div class="dropArea___2SK2iU9E">
                                                                    <div class="dropPreview___3Up6NjtQ"
                                                                        style="display: none;">
                                                                    </div>
                                                                </div>
                                                                <div class="asdfasdf">
                                                                    @for ($i = 0; $i < $divNums; $i++)
                                                                        <div class="createIcon___kHaOwDWv"
                                                                            style="left:{{ $eachLeft[$i] }}%;width:{{ $eachWidth[$i] }}%">
                                                                            <span
                                                                                class="shifticon shifticon-plus-circle "></span>
                                                                        </div>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                            @if (isset($workstarts[$staff->id]))
                                                                @for ($i = 0; $i < count($workstarts[$staff->id]); $i++)
                                                                    @if ($confirm[$staff->id][$i] == false)
                                                                        <div class="barWrap___2oM3ve3z" draggable="true"
                                                                            style="top: 22px; left: {{ $card_left[$staff->id][$i] }}%; width: {{ $card_width[$staff->id][$i] }}%;">
                                                                            <div
                                                                                class="bar___bvr3y4CY bar--draft___2PiLGR8-">
                                                                                <div class="barInner___hCY0DCDT"
                                                                                    style="left: 0%; width: 100%;">
                                                                                    <div
                                                                                        class="barContent___3VxanJDb {{ $colorClass }}">
                                                                                        <span
                                                                                            class="barTextWrapper___3vnTX3-G"><span
                                                                                                class="barText___2ZhSqd4e">{{ $workstarts[$staff->id][$i] }}
                                                                                                -
                                                                                                {{ $workends[$staff->id][$i] }}</span></span>
                                                                                        <div class="leftHandle___mRzmQCY-">
                                                                                        </div>
                                                                                        <div
                                                                                            class="rightHandle___kvbDva7i">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="shiftbarTooltip___1IZstRzH">
                                                                                <div class="root___25__Qdj8 root--type-default___2zBQAcpl root--direction-bottom___1imcBc6s"
                                                                                    style="width: auto;">
                                                                                    <dl class="dl___1KMsSj8E">
                                                                                        <dt class="">下書きシフト</dt>
                                                                                        <dd class="">3/1（水）
                                                                                            {{ $workstarts[$staff->id][$i] }}
                                                                                            -
                                                                                            {{ $workends[$staff->id][$i] }}
                                                                                        </dd>
                                                                                    </dl>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($confirm[$staff->id][$i] == true)
                                                                        <div class="barWrap___2oM3ve3z"
                                                                            style="top: 22px; left: {{ $card_left[$staff->id][$i] }}%; width: {{ $card_width[$staff->id][$i] }}%;">
                                                                            <div
                                                                                class="bar___bvr3y4CY bar--fixed___2g5AMVE-">
                                                                                <div class="barInner___hCY0DCDT"
                                                                                    style="left: 0%; width: 100%;">
                                                                                    <div
                                                                                        class="barContent___3VxanJDb {{ $colorClass }}">
                                                                                        <span
                                                                                            class="barTextWrapper___3vnTX3-G"><span
                                                                                                class="barText___2ZhSqd4e">{{ $workstarts[$staff->id][$i] }}
                                                                                                -
                                                                                                {{ $workends[$staff->id][$i] }}</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="shiftbarTooltip___1IZstRzH">
                                                                                <div class="root___25__Qdj8 root--type-default___2zBQAcpl root--direction-bottom___1imcBc6s"
                                                                                    style="width: auto;">
                                                                                    <dl class="dl___1KMsSj8E">
                                                                                        <dt class="">確定シフト</dt>
                                                                                        <dd class="">3/1（水）
                                                                                            {{ $workstarts[$staff->id][$i] }}
                                                                                            -
                                                                                            {{ $workends[$staff->id][$i] }}
                                                                                        </dd>
                                                                                    </dl>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endfor
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="tr___2CNcHw4v tr--isHelpLine___126XEkMw" style="height: 6px;">
                                                <div class="root___1BOvxe1y">
                                                    <div class="inner___YZjnku0p">
                                                        <div class="name___1yaaRDba">スタッフ採用</div>
                                                        <div class="worktime___1N2NXLC5"><span>00時間00分</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="td___35PqsKVU">
                                                    <div class="cells___1BMuOT7w">
                                                        @for ($i = 0; $i < $divNums; $i++)
                                                            <div class="helpLineCell___2O42TDp-"
                                                                style="width:{{ $eachWidth[$i] }}%"></div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="addStaffLink___2yGqZI93"><button id="staff_getting" class="normal___2Ft303yo"
                                    type="button"><span class="inner___1zafqBi7"><span
                                            class="content___vochnIhs">スタッフを追加</span></span></button></div>
                            <div class="addGroupLink___38OBQl7h"><a href="../setting/group.html">グループを追加・編集</a></div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="centerSpacer___v9JlAllu" id="centerSpacer">
            <div class="root___krwNb48I">
                <div class="left___CpQxIMS-">
                    <div class="leftItem___Li615BII"></div>
                    <div class="leftItem___Li615BII"></div>
                </div>
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
                            class="root___2eBX69w2 root--type-primary___fsKispjw" disabled="">この日の下書きを一括確定する</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="date123" id="date" value="{{ $daily }}">
@endsection
@section('bscript')
    <script src="{{ asset('assets/js/service/filter-staff.js') }}"></script>
    <script src="{{ asset('assets/js/service/day_calendar.js') }}"></script>
    <script src="{{ asset('assets/js/service/shiftAjax.js') }}"></script>
@endsection
