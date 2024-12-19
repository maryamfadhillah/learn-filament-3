<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Livewire\Component;

class ViewPatient extends Component implements HasForms, HasInfolists
{
    use InteractsWithInfolists;
    use InteractsWithForms;
 
    public function render()
    {
        return view('livewire.view-patient')->layout('components.layouts.app');
    }

    public function patientInfolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->state([
                'name' => 'MacBook Pro',
                'category' => [
                    'name' => 'Laptops',
                ],
                // ...
            ])
            ->schema([
                TextEntry::make('name'),
                // ...
            ]);
    }
}
