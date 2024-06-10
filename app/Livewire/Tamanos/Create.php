<?php

namespace App\Livewire\Tamanos;

use App\Livewire\Forms\TamanoForm;
use App\Models\Tamano;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public TamanoForm $form;

    public function mount(Tamano $tamano)
    {
        $this->form->setTamanoModel($tamano);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('tamanos.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tamano.create');
    }
}
