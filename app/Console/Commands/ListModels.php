<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ListModels extends Command
{
    protected $signature = 'models:list';
    protected $description = 'List all Eloquent models in the application';

    public function handle()
    {
        $models = File::allFiles(app_path());

        $this->info("List of Eloquent models:");
        foreach ($models as $model) {
            $class = sprintf(
                '\%s%s',
                app()->getNamespace(),
                str_replace(
                    ['/', '.php'],
                    ['\\', ''],
                    $model->getRelativePathname()
                )
            );

            if (is_subclass_of($class, 'Illuminate\Database\Eloquent\Model')) {
                $this->line("- $class");
            }
        }
    }
}
