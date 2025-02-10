<?php

namespace App\Livewire;

use App\Models\Socio;
use Livewire\Component;

class SocioIndex extends Component
{
    public $codigo;
    public $nombre;
    public $socioid;
    public $estaEditando = false;

    public function crear()
    {
        Socio::create($this->pull());
    }

    public function editar($socioid)
    {
        $this->socioid = $socioid;
        $socio = Socio::findOrFail($socioid);
        $this->codigo = $socio->codigo;
        $this->nombre = $socio->nombre;
        $this->estaEditando = true;
    }

    public function actualizar()
    {
        // Hace la actualización
        $socio = Socio::findOrFail($this->socioid);
        $socio->fill(
            $this->pull()
        );
        $socio->save();
        $this->reset();
    }

    public function eliminar($socioid)
    {
        $socio = Socio::findOrFail($socioid);
        $socio->delete();
    }

    public function cancelar()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.socio-index')->with([
            'socios' => Socio::all(),
        ]);
    }
}
