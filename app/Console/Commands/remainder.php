<?php

namespace App\Console\Commands;

use App\Mail\RemainderMail;
use App\Models\AdsPost;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class remainder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remainder:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send remainder email to advertiser who have start ad date next day';

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
     * @return int
     */
    public function handle()
    {
        
        $tomorrow = date_create(date("Y-m-d", strtotime('tomorrow')));
        $ads = AdsPost::all();
        $advertisers=[];
        $emails = [];
        foreach($ads as $ad){
            $diff = date_diff($tomorrow,date_create($ad->start_date));
            if($diff->d == 1){
                $advertisers[] = $ad->user_id;
            }
        }
        foreach($advertisers as $advertiser){

            $email = User::where('id',$advertiser)->pluck('email')->toArray();
            $emails[] = $email[0];
        }
        //$data=['subject'=>'Remainder Email','body'=>'your ad will publish tommorow'];
       foreach($emails as $email){
            Mail::To($email)->send(new RemainderMail());      
       }

        
    }
}
