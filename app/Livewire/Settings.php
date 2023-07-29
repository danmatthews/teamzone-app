<?php

namespace App\Livewire;

use Livewire\Component;

class Settings extends Component
{

    public string $timezone = 'Europe/London';

    public function render()
    {
        return view('livewire.settings', [
            'timezones' => collect(timezone_identifiers_list())->groupBy(function ($item) {
                return explode('/', $item)[0];
            })
                ->map(function ($group) {
                    return $group->mapWithKeys(fn ($s) => [$s => explode('/', $s)[1] ?? null])->reject(fn ($s) => is_null($s));
                })
        ]);
    }
}
