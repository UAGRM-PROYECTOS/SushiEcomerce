<?php

namespace App\Livewire\Tamanos;

use App\Models\Tamano;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $tamanos = Tamano::paginate();

        return view('livewire.tamano.index', compact('tamanos'))
            ->with('i', $this->getPage() * $tamanos->perPage());
    }

    public function delete(Tamano $tamano)
    {
        $tamano->delete();

        return $this->redirectRoute('tamanos.index', navigate: true);
    }
}
