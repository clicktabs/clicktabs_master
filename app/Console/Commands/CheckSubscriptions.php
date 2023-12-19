<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;
use Carbon\Carbon;

class CheckSubscriptions extends Command
{
    protected $signature = 'subscriptions:check';
    protected $description = 'Check and update subscription statuses';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */

     public function __construct()
    {
        parent::__construct();
    }

    // protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // Get subscriptions that have expired
        $expiredSubscriptions = Subscription::where('expires_at', '<', now())->get();

        foreach ($expiredSubscriptions as $subscription) {
            // Update the status to 'expired'
            $subscription->update(['status' => 'inactive']);
        }

        $this->info('Subscription statuses checked and updated.');
    }
}
