<?php

namespace App\Observers;

use App\Models\BlogText;

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
        //
    }

    /**
     * Handle the BlogText "updated" event.
     *
     * @param  \App\Models\BlogText  $blogText
     * @return void
     */
    public function updated(BlogText $blogText)
    {
        //
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
