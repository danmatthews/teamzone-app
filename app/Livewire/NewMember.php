<?php

namespace App\Livewire;

use App\Models\TeamMember;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewMember extends Component
{

    use WithFileUploads;

    #[Rule('image|max:1024')] // 1MB Max
    public $avatar;

    #[Rule('required|min:2')]
    public string $name;

    #[Rule('required')]
    public string $timezone;

    public function save()
    {

        $avatar = $this->avatar ? $this->avatar->store('avatars', 'local') : null;

        TeamMember::create([
            'name' => $this->name,
            'timezone' => $this->timezone,
            'avatar_url' => $avatar,
        ]);

        $this->redirect('/', navigate: true);
    }


    public function render()
    {
        return view('livewire.new-member', [
            'timezones' => collect(timezone_identifiers_list())->groupBy(function ($item) {
                return explode('/', $item)[0];
            })
                ->map(function ($group) {
                    return $group->mapWithKeys(fn ($s) => [$s => explode('/', $s)[1] ?? null])->reject(fn ($s) => is_null($s));
                })
        ]);
    }
}
