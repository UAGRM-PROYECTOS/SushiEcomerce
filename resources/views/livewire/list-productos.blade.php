<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <livewire:search-productos/>
    <div class="flex justify-between">
        <h1 class="mt-3 text-2xl font-medium text-gray-900">
            Catalogo
        </h1>
        <a class="m-5 p-2 bg-red-800 hover:bg-red-700 rounded-lg" href="{{route('productos.create')}}">
            <p class="text-white">+ Nueva pizza</p>
        </a>
    </div>

    <div class="flex flex-col lg:grid lg:grid-cols-2 lg:grid-rows-5">
        @forelse ($productos as $producto)
            <div class="bg-white m-2 rounded-lg flex border">
                <img src="{{$producto->imagen_url}}" class="rounded-l-lg" width="300" alt="{{$producto->nombre}}">
                <div>
                    <a class=" pt-3 px-3 hover:text-xl font-bold hover:cursor-pointer" href="{{route('productos.show', $producto->id)}}">{{$producto->nombre}}</a>
                    <p class=" px-3"><span class="font-bold">Precio:</span> {{$producto->precio}} Bs.</p>
                    <p class=" px-3 lowercase">
                        <span class="font-bold capitalize">Descripción: </span>
                        {{$producto->descripcion}}
                    </p>
                    <p class=" px-3"><span class="font-bold">Categoria:</span> {{ $producto->categoria->nombre }}.</p>
                    <p class=" px-3"><span class="font-bold">Tamano:</span> {{$producto->tamano->nombre}}.</p>
                    <p class=" px-3"><span class="font-bold">De scuento:</span> {{$producto->descuento->descuento*100}} %.</p>

                    <a class="m-3 bg-red-800 hover:bg-red-700 p-5 inline-block rounded-lg" href="{{route('productos.show', $producto->id)}}" >
                        <div class="flex justify-center">
                            <p class="text-white">+</p>
                            <x-car></x-car>
                        </div>
                    </a>


                    @if (auth()->user()->is_admin)
                    <div class="flex justify-around m-3">
                        <div class="bg-green-800 p-2 rounded-lg">
                            <a href="{{route('productos.edit', $producto->id)}}">
                                <p class="text-white text-sm uppercase"> Editar </p>
                            </a>
                        </div>

                        <!--<form action="{{route('productos.destroy', $producto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="mx-2">
                                Eliminar
                            </x-button>
                        </form>-->
                    </div>
                    @endif

                </div>
            </div>
        @empty

        <p class="bg-red-700 rounded-lg p-2 text-white">No se encuentran pizzas con esos términos</p>

        @endforelse
    </div>

    <div class="mt-6">
        {{$productos->links()}}
    </div>

</div>
