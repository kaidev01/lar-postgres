<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Artisan;

class ExportWithBuild extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run npm build and export site';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Running npm build in ben_app container...');
        $process = new Process(['npm', 'run', 'build']);
        $process->setTimeout(300);
        $process->run();

        // Kiểm tra lỗi
        if (!$process->isSuccessful()) {
            $this->error('Npm build failed: ' . $process->getErrorOutput());
            return Command::FAILURE;
        }

        $this->info('Npm build completed successfully.');

        // Chạy export
        $this->info('Running site export...');
        Artisan::call('export');

        $this->info('Export completed successfully.');

        return Command::SUCCESS;
    }
}
