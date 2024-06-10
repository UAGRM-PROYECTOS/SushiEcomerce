<?php

namespace App\Livewire;

use App\Models\Producto;
use App\Models\Tamano;
use App\Models\Descuento;
use Livewire\Component;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class FormProductos extends Component
{

    public $nombre;
    public $precio;
    public $tamano_id;
    public $categoria_id;
    public $descuento_id;
    public $descripcion;
    public $foto;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required',
        'precio' => 'required|numeric',
        'tamano_id' => 'required',
        'categoria_id' => 'required',
        'descuento_id' => 'required',
        'descripcion' => 'required',
        'foto' => 'required|image|max:2048'
    ];

    public function render()
    {
        $cat = Categoria::all();
        $tam = Tamano::all();
        $des = Descuento::all();
        return view('livewire.form-productos', [
            'categorias' => $cat,
            'tamanos' => $tam,
            'descuentos' => $des,
        ]);
    }

    public function store()
    {
        $this->validate();
        $imagen_url = Cloudinary::upload($this->foto->getRealPath())->getSecurePath();
        Producto::create([
            'nombre' => Str::upper($this->nombre),
            'precio' => $this->precio,
            'categoria_id' => $this->categoria_id,
            'descuento_id' => $this->descuento_id,
            'tamano_id' => $this->tamano_id,
            'imagen_url' => $imagen_url,
            'descripcion' => Str::upper($this->descripcion)
        ]);

        return redirect()->route('productos.index')->with('success','producto creado correctamente');
    }
}
