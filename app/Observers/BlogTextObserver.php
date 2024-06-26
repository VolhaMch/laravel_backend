<?php

namespace App\Observers;

use App\Models\BlogText;
use Illuminate\Support\Facades\App;

class BlogTextObserver
{
    /**
     * Handle the BlogText "created" event.
     *
     * @param  \App\Models\BlogText  $blogText
     * @return void
     */
    public function created(BlogText $blogText)
    {
        App::make(App\Actions\Feeder::class)->save($blogText, 'BlogText', 'created');
    }

    /**
     * Handle the BlogText "updated" event.
     *
     * @param  \App\Models\BlogText  $blogText
     * @return void
     */
    public function updated(BlogText $blogText)
    {
        App::make(App\Actions\Feeder::class)->save($blogText, 'BlogText', 'updated');
    }

    /**
     * Handle the BlogText "deleted" event.
     *
     * @param  \App\Models\BlogText  $blogText
     * @return void
     */
    public function deleted(BlogText $blogText)
    {
        //
    }

    /**
     * Handle the BlogText "restored" event.
     *
     * @param  \App\Models\BlogText  $blogText
     * @return void
     */
    public function restored(BlogText $blogText)
    {
        //
    }

    /**
     * Handle the BlogText "force deleted" event.
     *
     * @param  \App\Models\BlogText  $blogText
     * @return void
     */
    public function forceDeleted(BlogText $blogText)
    {
        //
    }
}
