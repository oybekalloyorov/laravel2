<?php

namespace App\Console;

use App\Models\Post;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        // Artisan buyruqlarini ro‘yxatdan o‘tkazish
        $this->load(__DIR__ . '/Commands');

        // routes/console.php faylini yuklash
        require base_path('routes/console.php');
    }

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Misol: har kuni soat 12:00 da bajariladigan buyruq
        $schedule->command('inspire')->everyMinute();

        $schedule->call(function () {
            Post::first()->delete();
        })->everyMinute();
    }
}
