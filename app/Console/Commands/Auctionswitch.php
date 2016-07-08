<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Auction;
use Mail;

class Auctionswitch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auction:switch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for the time and adjust auction status';

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
        $auctions = Auction::All();
        foreach($auctions as $auction) {
            if($auction->status == "Active") {
                if($auction->end <= Carbon::now()) {
                    if(count($auction->bidders) > 0) {
                        $this->info($auction);
                        $auction->status = 'Sold';
                        $highest = 0;
                        Mail::send('emails.sorrysold', ['user' => $user], function($m) use ($user) {
                                $m->from('info@landoretti.com', 'Landoretti');

                                $m->to($user->email, $user->name)->subject("Sorry, uw bieding is door iemand gekocht");
                            });
                        foreach($auction->bidders as $bidder) {
                            if($bidder->price > $highest) {
                                $winner = $bidder->user;
                                $highest = $bidder->price;
                            }
                        } if(isset($winner)) {
                            $winner->auctionsbuyer()->save($auction);
                            Mail::send('emails.won', ['user' => $winner], function($m) use ($user) {
                                $m->from('info@landoretti.com', 'Landoretti');

                                $m->to($user->email, $auction->auctionsbuyer->name)->subject("Proficiat u hebt een veiling gewonnen!");
                            });
                        }

                    } else {
                        $this->info($auction->status);

                        $auction->status = 'Expired';
                            Mail::send('emails.expired', ['user' => $auction->auctionsowner], function($m) use ($user) {
                                $m->from('info@landoretti.com', 'Landoretti');

                                $m->to($user->email, $user->name)->subject("Uw bieding is verlopen zonder biedingen te ontvangen");
                            });
                        $auction->save();
                    }
                }
            }
        }

    }
}
