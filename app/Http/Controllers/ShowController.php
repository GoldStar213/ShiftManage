<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Scrape;

class ShowController extends Controller
{
    public function index(Scrape $scrapes)
    {
        $scrapes = Scrape::all();
        return view('alldata_display',[
            'scrapes'=>$scrapes
        ]);
    }
}
