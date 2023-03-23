<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Tests\DuskTestCase;
use Artisan;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\ElementResolver;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome\ChromeProcess;
use App\Models\Scrape;

class scrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shift');
    }

    public $elements = array();

    public $elem_url = array();

    public $elem_info = array();

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function Register($num, $browser){
        $elems =$browser->driver->findElements(WebDriverBy::xpath('//*[@jscontroller="AtSb"]'));
        foreach($elems as $elem){
            $this->elements[] = $elem->findElement(WebDriverBy::cssSelector("[class='OSrXXb']"))->getText();
            $this->elem_info[] = $elem->findElement(WebDriverBy::cssSelector("[class='rllt__details']"))->getText();
            $this->elem_url[] = $elem->findElement(WebDriverBy::tagName("img"))->getAttribute('src');

        }



        $browser->mouseover('div.CR1S4b');

        $browser->driver->executeScript('window.scrollTo(0, 1300);');
        $browser->pause(3000);

        $browser->clickAtXPath('//a[@aria-label = "Page '.$num.'"]');


        $browser->screenshot('laravel_scrape\public\assets\image\scrape\screen'.$num);
        $browser->pause(3000);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Scrape $scrape)
    {


        $keyword = $request->get('keyword');
        (float)$longitude = (float)$request->get('longitude');
        (float)$latitude = (float)$request->get('latitude');
        (float)$longitude1 = $longitude-0.0195961;
        (float)$latitude1 = $latitude-0.0164849;


        $process = (new ChromeProcess)->toProcess();
        $process->start();

        $options = (new ChromeOptions)->addArguments(['--disable-gpu']);
        $capabilities = DesiredCapabilities::chrome()->setCapability(ChromeOptions::CAPABILITY, $options)
        ->setPlatform("windows");
        $driver = RemoteWebDriver::create(env('SELENIUM_HUB', 'http://localhost:9515'), $capabilities);
        $browser = new Browser($driver, new ElementResolver($driver, ''));
        $browser->resize(1920, 1080);
        $browser->maximize();
        $browser -> visit('https://www.google.co.jp/search?q=food&glp=1&adtest=on&hl=JA&safe=images&safe=high&pws=0');

        $browser-> visit('https://www.google.co.jp/search?q='.$keyword.'&glp=1&adtest=on&hl=JA&safe=images&safe=high&pws=0');


        $browser->driver->executeScript('window.scrollTo(0, 400);');
        $browser->pause(1000);
        $browser->screenshot('laravel-scrape\public\assets\image\scrape\screen');
        $browser->click('.iNTie>g-more-link>a');
        $CurrentUrl = $browser->driver->getCurrentURL();
        $start1 = strpos($CurrentUrl,"[[")+1;
        $end1 = strpos($CurrentUrl, "]]");
        $string_num = $end1-$start1+1;
        $change_part = substr($CurrentUrl, $start1, $string_num);
        $new_part = "[$latitude,$longitude],[$latitude1, $longitude1]";


        $changeUrl = str_replace($change_part, $new_part, $CurrentUrl);

        // dd($changeUrl);
        $browser->visit($changeUrl);

        $browser->pause(2000);

        $browser->screenshot('laravel-laravel-091aa7d\public\assets\image\scrape\screen1');
        $browser = $browser;
        $this->elements=array();
        $this->elem_url = array();

        $this->elem_info = array();

        for ($i = 2; $i < 5; $i ++) {
            $this->Register($i, $browser);
        }
        $store_data= json_encode($this->elements);
        $store_url = json_encode($this->elem_url);
        $store_info = json_encode($this->elem_info);
        $browser->pause(3000);

        $browser->quit();
        $process->stop();
        $scrape->store_data = $store_data;
        $scrape->keyword = $keyword;
        $scrape->longitude = $longitude;
        $scrape->latitude = $latitude;
        $scrape->capture_name = $keyword;
        $scrape->store_url = $store_url;
        $scrape->store_info = $store_info;
        $date = date_create();
        $scrape->exec_date = date_format($date,"Y/m/d h:i:s");
        $scrape->save();

        $id = $scrape->max('id');
        return $this->show($id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scrapes = Scrape::find($id);

        $keyword = $scrapes->keyword;
        $store_data = json_decode($scrapes->store_data);
        $store_url = json_decode($scrapes->store_url);
        $store_info = json_decode($scrapes->store_info);
        $latitude = $scrapes->latitude;
        $longitude = $scrapes->longitude;
        $date = $scrapes->exec_date;
        return view('data_display',[
            'scrapes'=>$scrapes,
            'store_data'=>$store_data,
            'store_info'=>$store_info,
            'store_url'=>$store_url
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
}
