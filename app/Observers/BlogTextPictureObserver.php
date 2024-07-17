<?php

namespace App\Observers;

use App\Models\BlogTextPicture;
use Illuminate\Support\Facades\App;

class BlogTextPictureObserver
{
    /**
     * Handle the BlogTextPicture "created" event.
     *
     * @param  \App\Models\BlogTextPicture  $blogTextPicture
     * @return void
     */
    public function created(BlogTextPicture $blogTextPicture)
    {
        App::make(App\Actions\Feeder::class)->save($blogTextPicture, 'BlogTextPicture', 'created');
    }

    /**
     * Handle the BlogTextPicture "updated" event.
     *
     * @param  \App\Models\BlogTextPicture  $blogTextPicture
     * @return void
     */
    public function updated(BlogTextPicture $blogTextPicture)
    {
        App::make(App\Actions\Feeder::class)->save($blogTextPicture, 'BlogTextPicture', 'updated');
    }

    /**
     * Handle the BlogTextPicture "deleted" event.
     *
     * @param  \App\Models\BlogTextPicture  $blogTextPicture
     * @return void
     */
    public function deleted(BlogTextPicture $blogTextPicture)
    {
        //
    }

    /**
     * Handle the BlogTextPicture "restored" event.
     *
     * @param  \App\Models\BlogTextPicture  $blogTextPicture
     * @return void
     */
    public function restored(BlogTextPicture $blogTextPicture)
    {
        //
    }

    /**
     * Handle the BlogTextPicture "force deleted" event.
     *
     * @param  \App\Models\BlogTextPicture  $blogTextPicture
     * @return void
     */
    public function forceDeleted(BlogTextPicture $blogTextPicture)
    {
        //
    }
}
