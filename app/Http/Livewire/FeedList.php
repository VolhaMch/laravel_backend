<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feed;

class FeedList extends Component
{
    public $amount = 5;
    public function render()
    {
        $feeds = Feed::orderBy('id', 'DESC')->take($this->amount)->get();
        return view('livewire.feed-list', compact('feeds'));
    }
}
