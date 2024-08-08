<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\CreateForm;
use Livewire\Component;

class Create extends Component
{
    public CreateForm $form;

    public function render()
    {
        return view('livewire.dashboard.create');
    }

    public function save()
    {
        $this->form->store();

        session()->flash('success', 'Data berhasil disimpan');

        return $this->redirectRoute('dashboard', navigate: true);
    }
}
