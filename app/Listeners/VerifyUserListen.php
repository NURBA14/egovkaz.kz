<?php

namespace App\Listeners;

use App\Events\VerifyUser;
use App\Notifications\TelegramVerifyNotify;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class VerifyUserListen
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(VerifyUser $event): void
    {
        $code = fake()->randomNumber(6, true);
        DB::table('verify_codes')->where("user_id", $event->user->id)->delete();
        DB::table('verify_codes')->insert([
            "user_id" => $event->user->id,
            "code" => $code
        ]);
        Notification::route('telegram', $event->user->telegram_user_id)
            ->notify(new TelegramVerifyNotify($code, $event->user->telegram_user_id));
    }
}
