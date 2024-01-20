<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use InfyOm\Generator\Commands\API\APIControllerGeneratorCommand;
use InfyOm\Generator\Commands\API\APIGeneratorCommand;
use InfyOm\Generator\Commands\API\APIRequestsGeneratorCommand;
use InfyOm\Generator\Commands\API\TestsGeneratorCommand;
use InfyOm\Generator\Commands\APIScaffoldGeneratorCommand;
use InfyOm\Generator\Commands\Common\MigrationGeneratorCommand;
use InfyOm\Generator\Commands\Common\ModelGeneratorCommand;
use InfyOm\Generator\Commands\Common\RepositoryGeneratorCommand;
use InfyOm\Generator\Commands\Publish\GeneratorPublishCommand;
use InfyOm\Generator\Commands\Publish\PublishTablesCommand;
use InfyOm\Generator\Commands\Publish\PublishUserCommand;
use InfyOm\Generator\Commands\RollbackGeneratorCommand;
use InfyOm\Generator\Commands\Scaffold\ControllerGeneratorCommand;
use InfyOm\Generator\Commands\Scaffold\RequestsGeneratorCommand;
use InfyOm\Generator\Commands\Scaffold\ScaffoldGeneratorCommand;
use InfyOm\Generator\Commands\Scaffold\ViewsGeneratorCommand;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */

    protected $commands=[APIScaffoldGeneratorCommand::class,

        APIGeneratorCommand::class,
        APIControllerGeneratorCommand::class,
        APIRequestsGeneratorCommand::class,
        TestsGeneratorCommand::class,

        MigrationGeneratorCommand::class,
        ModelGeneratorCommand::class,
        RepositoryGeneratorCommand::class,

        GeneratorPublishCommand::class,
        PublishTablesCommand::class,
        PublishUserCommand::class,

        ControllerGeneratorCommand::class,
        RequestsGeneratorCommand::class,
        ScaffoldGeneratorCommand::class,
        ViewsGeneratorCommand::class,

        RollbackGeneratorCommand::class,];
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
