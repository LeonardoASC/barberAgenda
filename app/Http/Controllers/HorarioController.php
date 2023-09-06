<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Http\Requests\StoreHorarioRequest;
use App\Http\Requests\UpdateHorarioRequest;
use Illuminate\Http\Request;


class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $horarios = Horario::all();


        return view('pages.horario.index', compact('horarios') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.horario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Horario::create($request->all());
        return redirect()->route('horario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        return view('pages.horario.edit', ['horario' => $horario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        $horario->update($request->all());
        return redirect()->route('horario.index', ['horario' => $horario->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        $horario->delete();
        return redirect()->route('horario.index');
    }
}
