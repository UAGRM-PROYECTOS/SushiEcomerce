<?php

namespace App\Livewire\Forms;

use App\Models\Tamano;
use Livewire\Form;

class TamanoForm extends Form
{
    public ?Tamano $tamanoModel;
    
    public $nombre = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
        ];
    }

    public function setTamanoModel(Tamano $tamanoModel): void
    {
        $this->tamanoModel = $tamanoModel;
        
        $this->nombre = $this->tamanoModel->nombre;
    }

    public function store(): void
    {
        $this->tamanoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->tamanoModel->update($this->validate());

        $this->reset();
    }
}
