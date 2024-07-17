<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feed;

class FeedList extends Component
{
    public $amount = 5;
    public bool $canLoadMore;
    public function loadMore(){
//dd('test');
        if(!$this->canLoadMore){
            return null;
        }
        $this->amount += 5;
    }
    public function render()
    {
        $feeds = Feed::orderBy('id', 'DESC')->take($this->amount)->get();
        $this->canLoadMore = count($feeds)>=$this->amount;
        return view('livewire.feed-list', compact('feeds'));
    }
}
