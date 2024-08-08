<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Forms\EditForm;
use App\Models\Agenda;
use Livewire\Component;

class Edit extends Component
{
    public $agenda;
    public EditForm $form;

    public function mount($id)
    {
        $this->agenda = Agenda::find($id);
        $this->form->fill($this->agenda);
        $this->form->agenda = $this->agenda;
    }

    public function render()
    {
        return view('livewire.dashboard.edit');
    }

    public function save()
    {
        $this->form->update();

        session()->flash('success', 'Data berhasil disimpan');
        
        $this->redirectRoute('dashboard', navigate: true);
    }
}
