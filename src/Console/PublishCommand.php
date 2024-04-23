<?php

namespace Sajadsdi\LaravelSeoBooster\Console;

use Illuminate\Console\Command;

class PublishCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Laravel Seo Booster configure!';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        $this->info('Publishing Laravel Seo Booster ...');
        $this->publish();
        return null;
    }

    private function publish()
    {
        $this->comment('Publishing configure ...');
        $this->call('vendor:publish', ['--tag' => "laravel-seo-booster-configure"]);
    }
}
