<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Pergunta;

class EventoController extends Controller
{
    /**
     * Exibe um evento e suas perguntas.
     */
    public function show($id)
    {
        $evento = Evento::findOrFail($id);

        $perguntas = Pergunta::where('evento_id', $evento->id)
            ->latest()
            ->paginate(10);

        return view('eventos.show', compact('evento', 'perguntas'));
    }
}
