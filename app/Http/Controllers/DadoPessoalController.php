<?php

namespace App\Http\Controllers;

use App\Models\DadoPessoal;
use App\Models\Horario;
use App\Models\Agendamento;
use App\Http\Requests\StoreDadoPessoalRequest;
use App\Http\Requests\UpdateDadoPessoalRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class DadoPessoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::all();

        return view('pages.dadospessoais.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|string',
            'dia' => ['required','date',],
            'horario' => ['required', 'date_format:H:i', Rule::unique('agendamentos')->where(function ($query) use ($request) {
                return $query->where('dia', $request->dia)
                             ->where('horario', $request->horario);
            })]
        ]);


        session(['nome' => $request->nome]);
        session(['dia' => $request->dia]);
        session(['horario' => $request->horario]);


        return redirect()->route('servico.index')->with('success', 'Dados armazenados na sessão com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(DadoPessoal $dadoPessoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DadoPessoal $dadoPessoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDadoPessoalRequest $request, DadoPessoal $dadoPessoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DadoPessoal $dadoPessoal)
    {
        //
    }
}
