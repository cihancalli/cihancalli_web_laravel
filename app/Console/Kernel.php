<?php

namespace App\Console;

use GuzzleHttp\Client;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\File;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule){
        $schedule->call(function () {
            info('called every minute');
            $posts = Post::where('published_at', '<=', Carbon::now()->timezone('Europe/Istanbul'))->where('published', 0)->get();
            foreach ($posts as $post) {
                $post->published = 1;
                $post->save();
            }
        })->everyMinute();
    }


    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
