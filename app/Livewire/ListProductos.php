<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class ListProductos extends Component
{

    use WithPagination;


    protected $listeners = ['sendData' => 'searchProductos'];

    public $termino;
    public $categoria;
    public $tamano;
    public $descuento;

    public function searchProductos($termino, $categoria, $tamano, $descuento){
        $this->termino = $termino;
        $this->categoria = $categoria;
        $this->tamano = $tamano;
        $this->descuento = $descuento;
        $this->resetPage(); //esto me costó 2 horas de pensamiento logico xd
    }

    public function render()
    {
        $productos = Producto::when($this->termino, function($query){
            $query->where('nombre', 'LIKE', '%'.Str::upper($this->termino).'%');
        })->when($this->termino, function($query){
            $query->orWhere('descripcion', 'LIKE', '%'.Str::upper($this->termino).'%');
        })->when($this->categoria, function($query){
            $query->where('categoria_id', '=', $this->categoria);
        })->when($this->tamano, function($query){
            $query->where('tamano_id', '=', $this->tamano);
        })->when($this->descuento, function($query){
            $query->where('descuento_id', '=', $this->descuento);
        })
        ->paginate(10);

        return view('livewire.list-productos', compact('productos'));
    }
}
