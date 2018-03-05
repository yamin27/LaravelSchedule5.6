<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RenewReminderEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'renew:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reminder Email For Product Renew';

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
    public function handle()
    {
        //fetch the renew date before 1 month
        $renew_product = \App\Product::where('renew_date', today()->addMonth())->get();
//        return $renew_product;

        if (!is_null($renew_product))
        {
            foreach($renew_product as $renew) {
                // Send the email to user
                \Mail::send('email', ['renew' => $renew], function ($mail) use ($renew) {
                    $mail->to($renew->users->email)
                        ->from('support@yourcompany.com', 'Your Name')
                        ->subject('Product Renew ');
                });
            }
        }
        $this->info('Renew Email Send Successfully ');
    }
}
