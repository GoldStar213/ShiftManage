<?php

namespace Tests\Browser;

use App\Models\Scrape;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use Laravel\Dusk\DuskServiceProvider;

class ScrapeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    use DatabaseTruncation;
    protected $tablesToTruncate = ['scrapes'];
    protected $connectionsToTruncate = ['laravel_scrape'];

    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://www.google.co.jp/search?q=food&glp=1&adtest=on&hl=JA&safe=images&safe=high&pws=0')
                ->storeSource('firstpage')
                // ->type('keyword', 'keyword')
                // ->type('longitude', '23.45845')
                // ->type('latitude', '123.456')
                ->screenshot('first_shot');
                // ->attach('userimage', 'C:\images\taylor.jpg')
                // ->press('button')
                
                // ->assertPathIs('/send_param');
        });

        
    }
}
