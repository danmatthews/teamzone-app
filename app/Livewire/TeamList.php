<?php

namespace App\Livewire;

use App\Models\TeamMember;
use Livewire\Component;
use Native\Laravel\Facades\Window;

class TeamList extends Component
{

    public function openTeamMemberForm()
    {
        Window::open('new-member-form')
            ->width(800)
            ->height(800);
    }

    public function delete($id)
    {
        TeamMember::where('id', $id)->first()?->delete();
    }

    public function truncate()
    {
        TeamMember::all()->each->delete();
    }

    public function render()
    {
        return view('livewire.team-list',[
            'members' => TeamMember::all(),
        ]);
    }
}
