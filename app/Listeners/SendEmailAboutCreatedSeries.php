<?php

namespace App\Listeners;

use App\Events\SeriesCreated as SeriesCreatedEvent;
use App\Mail\SeriesCreated;
use App\Models\User;
use DateTime;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailAboutCreatedSeries implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle(SeriesCreatedEvent $event)
    {
        $users = User::all();

        foreach ($users as $key => $user) {
            $email = new SeriesCreated(
                route('seasons.index', $event->seriesId),
                $event->seriesName, $event->seriesQtdSeasons,
                $event->seriesNumberOfEpisodes
            );
            $seconds = $key * 5;
            $when = new DateTime('+'.$seconds.' seconds');
            Mail::to($user)->later($when, $email);
        }
    }
}
