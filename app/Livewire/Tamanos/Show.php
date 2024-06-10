<?php

namespace App\Livewire\Tamanos;

use App\Livewire\Forms\TamanoForm;
use App\Models\Tamano;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public TamanoForm $form;

    public function mount(Tamano $tamano)
    {
        $this->form->setTamanoModel($tamano);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tamano.show', ['tamano' => $this->form->tamanoModel]);
    }
}
