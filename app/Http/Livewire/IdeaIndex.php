<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaIndex extends Component
{
    public $idea;
    public $votesCount;
    public $hasVoted;

    public function mount(Idea $idea, $votesCount)
    {
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->hasVoted = $idea->voted_by_user;
    }

    public function vote()
    {
        if(!auth()->check()) {
            return redirect(route('login'));
        }

        if ($this->hasVoted) {
            try {
                $this->idea->removeVote(auth()->user());
            } catch (\Throwable $th) {
                //throw $th;
            }
            $this->votesCount--;
            $this->hasVoted = false;
        } else {
            try {
                $this->idea->vote(auth()->user());
            } catch (\Throwable $th) {
                //throw $th;
            }
            $this->votesCount++;
            $this->hasVoted = true;
        }
    }

    public function render()
    {
        return view('livewire.idea-index');
    }
}
