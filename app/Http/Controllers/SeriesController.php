<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) 
    {
        $series = Serie::query()->orderBy('nome')->get();
        $successMessage = session('success.message');

        return view('series.index')->with('series', $series)
            ->with('successMessage', $successMessage);
    }

    public function create()
    {
        return view('series.create');
    }
    
    public function store(Request $request) 
    {
        $serie = Serie::create($request->all());
        $request->session()->flash('success.message', "Série '{$serie->nome}' adicionada com sucesso!");
        
        return to_route('series.index');
    }

    public function destroy(Serie $series, Request $request)
    {
        $series->delete();
        $request->session()->flash('success.message', "Série '{$series->nome}' removida com sucesso!");

        return to_route('series.index');
    }
}
