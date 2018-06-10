<?php

namespace PRDesign\SiteGen\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class SiteGenPublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitegen:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install SiteGen dependencies into the parent application.';

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
    public function handle(Filesystem $filesystem)
    {
        $this->info('Creating an additional database connector in config/database.php');

        $database_config = $filesystem->get(base_path('config/database.php'));

        if (false === strpos($database_config, "'mysql_sitegen'")) {

            $config_array = explode( PHP_EOL , $database_config );

            $write_flag = false;

            foreach( $config_array as $row ){

                $test = strpos($row, "'mysql' =>");


                if ( $test == true ) { $write_flag = true; }

                if ( $write_flag == true && empty($row) ){

                    $filesystem->append(
                        base_path('config/database_tmp.php'),
                        "\n        'mysql_sitegen' => [
            'driver' => 'mysql',
            'host' => env('DB_SITEGEN_HOST', '127.0.0.1'),
            'port' => env('DB_SITEGEN_PORT', '3306'),
            'database' => env('DB_SITEGEN_DATABASE', 'dbSiteGen'),
            'username' => env('DB_SITEGEN_USERNAME', 'nobody'),
            'password' => env('DB_SITEGEN_PASSWORD', 'password'),
            'unix_socket' => env('DB_SITEGEN_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],\n\n"
                    );

                    $write_flag = false;

                } else {

                    $filesystem->append(
                        base_path('config/database_tmp.php'),
                        $row.PHP_EOL
                    );

                }

            }

            $filesystem->delete(base_path('config/database.php'));
            $filesystem->copy(base_path('config/database_tmp.php'),base_path('config/database.php'));
            $filesystem->delete(base_path('config/database_tmp.php'));

        } else {

            $this->info('Database configuration file already configured!');

        }

        $this->info('Publishing SiteGen assets (Using Force):-');
        $this->call('vendor:publish', ['--force' => true , '--provider' => SiteGenServiceProvider::class ] );
        $this->info('Successfully installed SiteGen! Enjoy');
    }
}
