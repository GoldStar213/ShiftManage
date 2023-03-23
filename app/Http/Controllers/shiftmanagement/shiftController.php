<?php

namespace App\Http\Controllers\shiftmanagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Response;

use App\Models\Shift;
use App\Models\Manager;

class shiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date    = $request->date;
        $year    = substr($date, 0,4);
        $month   = substr($date, 4,2);
        $day     = substr($date, 6,2);
        $shiftdate = $year."-".$month."-".$day;
        $shifts = Manager::find(1)->shifts;
        $shift  = $shifts->where('shiftDate','like', $shiftdate);
        if(count($shift)==0){
            return redirect()->route('shiftmemo.create', ['shiftDate' => $shiftdate, 'manager_id'=>"1"]);
        }

        foreach ($shift as $field) {
            $star   = $field->star;
            $circle = $field->circle;
            $memo   = $field->memo;
        }
        return response()->json([
            'star'   => $star,
            'circle' => $circle,
            'memo'   => $memo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $shiftdate = $request->shiftDate;
        $managerid = $request->manager_id;
        Shift::create([
            'star'       => 0,
            'circle'     => 0,
            'memo'       => "null",
            'shiftDate'  => $shiftdate,
            'manager_id' => $managerid,
        ]);
        return response()->json(['star'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $date    = $id;
        $year    = substr($date, 0,4);
        $month   = substr($date, 4,2);
        $day     = substr($date, 6,2);
        $shiftdate = $year."-".$month."-".$day;
        $managerid = 1;
        $shifts = Manager::find(1)->shifts;
        $shift  = $shifts->where('shiftDate','like', $shiftdate);
        $circle = $request->circle;
        $star   = $request->star;
        $memo   = $request->memo;

        foreach ($shift as $field) {
            if(isset($circle)){
                if($circle == $field->circle){
                    $circle = 0;
                }
                $field -> update([
                    'circle' => $circle,
                ]);
            }else if(isset($star)){
                if($star == $field->star){
                    $star = 0;
                }
                $field -> update([
                    'star' => $star,
                ]);
            }else if(isset($memo)){
                $field ->update([
                    'memo' => $memo
                ]);
            }
        }

        if (isset($circle)) {
            return response()->json($circle);
        }else if(isset($star)){
            return response()->json($star);
        }else if(isset($memo)){
            return response()->json("success");
        }
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
}
