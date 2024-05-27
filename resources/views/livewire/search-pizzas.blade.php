<div class="p-3">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">{{__('Buscar Sushi')}}</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent='sendData'>
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">Sushi 
                    </label>
                    <input
                        id="termino"
                        wire:model="termino"
                        type="text"
                        placeholder="Buscar por término: ej. Chesseburger"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">{{__('Categoria')}}</label>
                    <select class="border-gray-300 p-2 w-full rounded-lg" wire:model="categoria" >
                        <option hidden selected>- SELECCIONE -</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                <div class="flex justify-end p-2 w-full">
                <x-button class="ms-4">
                    {{ __('Buscar') }}
                </x-button>
            </div>
                </div>
            </div>

            
        </form>
    </div>
</div>
