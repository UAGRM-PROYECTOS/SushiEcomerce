<?php

namespace App\Livewire;

use Livewire\Component;

class ShowProducto extends Component
{

    public $producto;

    public $cantidad = 1;

    public function render()
    {
        return view('livewire.show-productos');
    }


}
