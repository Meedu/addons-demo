<?php


namespace Addons\AddonsDemo\Commands;

use Addons\AddonsDemo\App;
use Illuminate\Console\Command;

class AppCommand extends Command
{

    protected $signature = 'AddonsDemo {action}';

    protected $description = '';

    public function handle()
    {
        $action = $this->argument('action');
        $method = 'action' . ucfirst($action);
        $this->{$method}();
    }

    protected function actionInstall()
    {
        App::install();
    }

    protected function actionUninstall()
    {
        App::uninstall();
    }

    protected function actionUpgrade()
    {
        App::upgrade();
    }

}