<?php

namespace App\Http\Controllers\shiftmanagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Shift;
use App\Models\Staff;
use App\Models\Card;
use App\Models\Manager;
use App\Models\CardTemplate;
use App\Models\Schedule;
use App\Models\ScheduleTemplate;
use App\Models\Group;
use App\Models\ColorSetting;



class dailyController extends Controller
{
    public $year, $month, $date;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('frontend.shiftservice.shiftmanagement.daily',['daily'=>$daily]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $year    = substr($id, 0, 4);
        $month   = substr($id, 4, 2);
        $day     = substr($id, 6, 2);
        $search  = $year . "-" . $month . "-" . $day;

        $manager = Manager::find(1);
        $basicsettings = $manager->basicsettings;
        $scheduletemps = $manager->s_templates;
        $schedules     = $manager->schedules->where('date', 'like', $search);
        $groups        = $manager->groups;
        $colors        = $manager->colors;
//basic setting management
        // foreach($basicsettings as $basicsetting){
            $basicsetting = $basicsettings[0];
            $starttime = strtotime($basicsetting->startTime);
            $endtime   = strtotime($basicsetting->endTime);
            $timeunit  = $basicsetting->timeUnit;
        // }

        $div_num     = $this->divnumber($starttime, $endtime);
        $firstNum    = (int)date('H', $starttime);
        $unitWidth   = $this->unitwidth($starttime, $endtime, $timeunit);
        $eachWidth   = $this->EachWidth($starttime, $endtime, $timeunit, $unitWidth, $div_num);
        $eachLeft    = $this->EachLeft($div_num, $eachWidth);

        foreach($colors as $color){
            $colorClass = $this->colorSelect($color->confirmColor);
        }

//schedule management

        $barLeft  = [];
        $barWidth = [];
        $needNum  = [];
        $schedule_views = [];

        if(count($schedules)>0){
            if(count($groups)>1){
                foreach ($groups as $group) {
                    $groupSchedule = $group->schedules;
                    $schedule_views = $groupSchedule->where('date', 'like', $search);
                    foreach ($schedule_views as $i => $schedule) {
                        $barWidth[$group->id][$i] = $this->cardWidth($schedule->startTime, $schedule->endTime, $timeunit, $unitWidth);
                        $barLeft[$group->id][$i]  = $this->cardLeft($starttime, $schedule->startTime, $timeunit, $unitWidth);
                        $needNum[$group->id][$i]  = $schedule->needNum;
                    }
                }
            }else if (count($groups)==1){
                $schedule_views = $schedules->where('date', 'like' , $search);
                foreach ($schedule_views as $schedule) {
                    $barWidth[$schedule->id] = $this->cardWidth($schedule->startTime, $schedule->endTime, $timeunit, $unitWidth);
                    $barLeft[$schedule->id]  = $this->cardLeft($starttime, $schedule->startTime, $timeunit, $unitWidth);
                    $needNum[$schedule->id]  = $schedule->needNum;
                }

            }
        }
//table and card management


        $mystaffs    = $manager->staffs;
        $workstarts = [];
        $workends   = [];
        $totaltimes = [];
        $card_left  = [];
        $card_width = [];
        $confirm    = [];
        foreach ($mystaffs as $mystaff) {
            $i=0;
            $p_totaltime = 0;
            $staff_id    = $mystaff->id;
            $worktimes   = Staff::find($staff_id)->cards;
            $cards       = $worktimes->where('date','like', $search);

            foreach ($cards as $card) {
                    $workstarts[$staff_id][$i] = $this->startendtime($card->startTime);
                    $workends[$staff_id][$i]   = $this->startendtime($card->endTime);
                    $p_totaltime              += strtotime($workends[$staff_id][$i]) - strtotime($workstarts[$staff_id][$i]);
                    $card_width[$staff_id][$i] = $this->cardWidth($workstarts[$staff_id][$i], $workends[$staff_id][$i], $timeunit, $unitWidth);
                    $card_left[$staff_id][$i]  = $this->cardLeft($starttime, $workstarts[$staff_id][$i], $timeunit, $unitWidth);
                    $confirm[$staff_id][$i]    = $card->confirmed;
                $i++;
            }
            $totaltimes[$staff_id] = $this->stafftotalworktime($p_totaltime);
        }

        return view('frontend.shiftservice.shiftmanagement.daily')->with([
            'daily'        => $id,
            'staffs'       => $mystaffs,
            'workstarts'   => $workstarts,
            'workends'     => $workends,
            'P_totaltimes' => $totaltimes,
            'card_left'    => $card_left,
            'card_width'   => $card_width,
            'divNums'      => $div_num,
            'firstNum'     => $firstNum,
            'eachWidth'    => $eachWidth,
            'eachLeft'     => $eachLeft,
            'confirm'      => $confirm,
            'groups'       => $groups,
            'colorClass'   => $colorClass,
            'barWidth'     => $barWidth,
            'barLeft'      => $barLeft,
            'needNum'      => $needNum,
            'schedule_view'=> $schedule_views,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function stafftotalworktime($time)
    {
        $strtime = date('H:i', $time);
        $strH    = substr($strtime, 0, 2);
        $strM    = substr($strtime, 3, 2);
        $str     = $strH."時間".$strM."分";
        return $str;
    }

    public function startendtime($time)
    {
        $secondtime = strtotime($time);
        $strtime    = date('H:i', $secondtime);
        return $strtime;
    }

    public function cardWidth($start, $end, $timeunit, $unitWidth)
    {
        $T_time = (strtotime($end) - strtotime($start))/3600;
        $value  = $T_time / ($timeunit / 60);
        $width  = $unitWidth * $value;
        return $width;
    }

    public function cardLeft($start,  $workstart, $timeunit, $unitWidth)
    {
        $interval = (strtotime($workstart) - $start)/3600;
        $value    = $interval / ($timeunit / 60);
        $left     = $unitWidth * $value;
        return $left;
    }

    public function divnumber($start, $end)
    {
        $Shour    = date('H', $start);
        $Ehour    = date('H', $end);
        if($Ehour == '00'){
            $Ehour = 24;
        }
        $Eminute  = date('i', $end);
        $number   = (int)$Ehour - (int)$Shour;
        if($Eminute !="00"){
            $number += 1;
        }
        return $number;
    }

    public function unitwidth($start, $end, $timeunit)
    {
        $interval  = ($end - $start)/3600;
        $width     = round(100/$interval, 7);
        $unitWidth = $width * $timeunit/60;
        return $unitWidth;
    }

    public function EachWidth($start, $end, $timeunit, $unitWidth, $divNum)
    {
        $Sminutes    = date('i', $start);
        $Eminutes    = date('i', $end);
        for ($i=0; $i < $divNum; $i++) {
             if($i==0){
                $width[$i] = (60 - $Sminutes) / $timeunit * $unitWidth;
             }else if($i > 0 && $i < $divNum-1){
                $width[$i] = 60 / $timeunit * $unitWidth;
             }else if($i == $divNum-1){
                $width[$i] = (60 - $Eminutes) / $timeunit * $unitWidth;
             }
        }
        return $width;
    }

    public function EachLeft($div_num, $eachWidth)
    {
        $left[0] = 0;
        for ($i=0; $i < $div_num-1; $i++) {
            $left[$i+1] =$left[$i] + $eachWidth[$i];
        }
        return $left;
    }

    public function colorSelect($value)
    {
        $color  = ["barContent__blue___1WZzjKmz",
                    "barContent__green___CvMAcv9x",
                    "barContent__orange___1jrAZOp7",
                    "barContent__red___2_LqkiwO",
                    "barContent__violet___126nXcWE",
                    "barContent__black___hvpokNAV"
                ];
        return $color[$value];
    }

}
