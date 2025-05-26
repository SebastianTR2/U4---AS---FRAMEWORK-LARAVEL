<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;

class VueloController extends Controller
{
    public function index(Request $request)
    {
        $query = Vuelo::query();
    
        if ($request->filled('buscar')) {
            $query->where('destino', 'like', '%' . $request->buscar . '%');
        }
    
        if ($request->filled('continente')) {
            $query->where('continente', $request->continente);
        }
    
        $vuelos = $query->get();
    
        return view('vuelos.index', compact('vuelos'));
    }
    

    public function show($id)
    {
        $vuelo = Vuelo::findOrFail($id);
        return view('vuelos.show', compact('vuelo'));
    }
}

