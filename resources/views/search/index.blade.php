<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resultados de búsqueda') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight m-5">
                    {{ __('Sushis') }}
                </h2>
                @forelse ($productos as $producto)
                <div class="bg-white m-2 rounded-lg flex border justify-between">
                    <div>
                        <p class=" pt-3 px-3 hover:text-xl font-bold">{{$producto->nombre}}</p>
                        <p class=" px-3">Precio: {{$producto->precio}} Bs.</p>
                        <p class="px-3 lowercase">Descripcion: {{$producto->descripcion}}</p>
                    </div>
                </div>
                @empty 
                <div class="p-2 bg-gray-200">
                    <p>Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$productos->links()}}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight m-5">
                    {{ __('Categorias') }}
                </h2>
                @forelse ($categorias as $categoria)
                <div class="bg-white m-2 rounded-lg flex border justify-between">
                    <div>
                        <p class=" pt-3 px-3 hover:text-xl font-bold">{{$categoria->nombre}}</p>
                        
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200">
                    <p>Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$categorias->links()}}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight m-5">
                    {{ __('Tamaños') }}
                </h2>
                @forelse ($tamanos as $tamano)
                <div class="bg-white m-2 rounded-lg flex border justify-between">
                    <div>
                        <p class=" pt-3 px-3 hover:text-xl font-bold">{{$tamano->nombre}}</p>
                        
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200">
                    <p>Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$tamanos->links()}}
                </div>
            </div>
        </div>

       

    </div>



</x-app-layout>
