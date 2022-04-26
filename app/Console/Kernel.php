<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Phpfastcache\Helper\Psr16Adapter;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'zidan.abidin07', 'Zidanstart11', new Psr16Adapter('Files'));
            $instagram->login();
            $instagram->saveSession();
            $account = $instagram->getAccount('darasna.network');
            $accountMedias = $account->getMedias();

            foreach ($accountMedias as $key => $accountMedia) {
                // dump($key);
                $images[$key] = str_replace("&amp;", "&", $accountMedia->getImageHighResolutionUrl());
                // $images[$key] = "a";
                // dump($images[$key]);
                $path = $accountMedia->getImageHighResolutionUrl();
                $imageName = $key . '.png';
                $img = public_path('insta/images' . $imageName);
                // // dump($img);
                file_put_contents($img, file_get_contents($path));
            }
        })->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
