<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Mail;

class NotifyPostCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        $users = User::all();

        /*echo "<pre>";
        print_r($users);
        echo "</pre>";
        exit;*/

        foreach($users as $user) {
            User::where('id', $user->id)
                      ->update(['remember_token' => "XYZ123"]);
           //Mail::to($user)->send('emails.post_created', $event->post);
        }
    }
}