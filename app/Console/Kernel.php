<?php

namespace App\Console;
use App\Console\Commands\backupCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        backupCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
   

    protected function schedule(Schedule $schedule){
<<<<<<< HEAD
       $schedule->command('backup:run')->daily()->at('03:22');
=======
       $schedule->command('backup:run')->daily()->at('14:17');
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
