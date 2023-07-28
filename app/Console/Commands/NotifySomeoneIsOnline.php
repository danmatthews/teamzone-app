<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Native\Laravel\Facades\Notification;

class NotifySomeoneIsOnline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:online';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Notification::title('Someone will be online shortly!')
            ->message('{person} should be online in the next 5 minutes.')
            ->show();
    }
}
