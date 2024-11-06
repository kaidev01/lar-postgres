<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

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
        $this->renameExportFiles();
        return Command::SUCCESS;
    }


    /**
     * Rename index.html thành .html.
     */
    protected function renameExportFiles()
    {
        $exportPath = public_path(env('EXPORT_FOLDER', 'dist'));

        $directories = File::directories($exportPath);

        foreach ($directories as $directory) {
            $indexPath = $directory . '/index.html';

            if (File::exists($indexPath)) {
                $newFilePath = $exportPath . '/' . basename($directory) . '.html';

                File::move($indexPath, $newFilePath);

                File::deleteDirectory($directory);

                $this->info("Renamed {$indexPath} to {$newFilePath}");
            }
        }

        $this->info('All index.html files have been renamed.');
    }
}
