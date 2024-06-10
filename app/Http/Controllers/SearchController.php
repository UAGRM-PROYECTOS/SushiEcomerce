<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Producto;
use App\Models\Tamano;
use App\Models\Categoria;
use App\Models\Descuento;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index($query){
        $users = User::where('name', 'like', '%'.$query.'%')->paginate(4);
        $productos = Producto::where('nombre', 'like', '%'.$query.'%')->paginate(4);
        $categorias = Categoria::where('nombre', 'like', '%'.$query.'%')->paginate(4);
        $tamanos = Tamano::where('nombre', 'like', '%'.$query.'%')->paginate(4);
        $descuentos = Descuento::where('descuento', 'like', '%'.$query.'%')->paginate(4);

        return view('search.index', compact('users', 'productos', 'categorias', 'tamanos','descuentos'));
    }
}
