<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="bg-white m-2 rounded-lg flex border">
        <img src="{{$producto->imagen_url}}" class="rounded-l-lg" width="500" alt="{{$producto->nombre}}">
        <div class=" flex flex-col justify-center">
            <p class=" pt-3 px-3 text-xl font-bold ">{{$producto->nombre}}</p>
            <p class=" px-3"><span class="font-bold">Precio:</span> {{$producto->precio}} Bs.</p>
            <p class=" px-3 lowercase">
                <span class="font-bold capitalize">Descripción: </span>
                {{$producto->descripcion}}
            </p>

        </div>
    </div>

</div>
