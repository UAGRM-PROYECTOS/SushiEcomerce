<?php

namespace App\Livewire;

use App\Models\Producto;
use App\Models\Tamano;
use App\Models\Descuento;
use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithFileUploads;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class EditProducto extends Component
{

    use WithFileUploads;

    public $id;
    public $nombre;
    public $precio;
    public $tamano_id;
    public $categoria_id;
    public $descuento_id;
    public $descripcion;
    public $foto;
    public $foto_act;

    protected $rules = [
        'nombre' => 'required',
        'precio' => 'required|numeric',
        'tamano_id' => 'required',
        'categoria_id' => 'required',
        'escuento_id'  => 'required',
        'descripcion' => 'required',
        // 'foto' => 'required|image|max:2048'
    ];

    public function mount($producto)
    {
        $this->nombre = $producto->nombre;
        $this->precio = $producto->precio;
        $this->tamano_id = $producto->tamano_id;
        $this->categoria_id = $producto->categoria_id;
        $this->descuento_id = $producto->descuento_id;
        $this->descripcion = $producto->descripcion;
        $this->foto_act = $producto->imagen_url;

        $this->id = $producto->id;
    }

    public function render()
    {
        $cat = Categoria::all();
        $tam = Tamano::all();
        $des = Descuento::all();
        return view('livewire.edit-productos', [
            'categorias' => $cat,
            'tamanos' => $tam,
            'descuentos'=> $des
        ]);
    }

    public function update(){
        $this->validate();
        if($this->foto != null){
            $this->validate([
                'foto' => 'required|image|max:2048'
            ]);
            $imagen_url = Cloudinary::upload($this->foto->getRealPath())->getSecurePath();
        }

        $producto = Producto::find($this->id);
        $producto->update([
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'categoria_id' => $this->categoria_id,
            'descuento_id' => $this->descuento_id,
            'tamano_id' => $this->tamano_id,
            'imagen_url' => $this->foto ? $imagen_url : $this->foto_act,
            'descripcion' => $this->descripcion
        ]);

        return redirect()->route('productos.index')->with('success','producto editado correctamente');
    }
}
