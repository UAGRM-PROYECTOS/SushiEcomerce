<div class="space-y-6">
    
    <div>
        <x-label for="nombre" :value="__('Nombre')"/>
        <x-text-area wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-button>Submit</x-button>
    </div>
</div>