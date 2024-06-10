<?php

namespace App\Livewire;

use App\Models\Tamano;
use App\Models\Descuento;
use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithPagination;

class SearchProductos extends Component
{

    public $termino;
    public $categoria;
    public $tamano;
    public $descuento;


    public function sendData(){
        $this->dispatch('sendData', $this->termino, $this->categoria, $this->tamano, $this->descuento);
        // dd('updatingSearch');
    }

    public function render()
    {
        $categorias = Categoria::all();
        $tamanos = Tamano::all();
        $descuentos = Descuento::all();
        return view('livewire.search-productos', [
            'categorias' => $categorias,
            'tamanos' => $tamanos,
            'descuentos' => $descuentos
        ]);
    }
}
