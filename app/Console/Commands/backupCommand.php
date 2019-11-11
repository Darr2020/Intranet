<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\DbDumper\Databases\PostgreSql;

class backupCommand extends Command{
    
    protected $signature = 'backup:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Respaldo de la base de datos, seguridad a el sistema';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
      //  File::put('dump.sql', '');
        PostgreSql::create()
            ->setDbName('intranet2')
            ->setUserName('diego')
            ->setPassword('123456')
            ->dumpToFile('dump.sql');
    }
}
