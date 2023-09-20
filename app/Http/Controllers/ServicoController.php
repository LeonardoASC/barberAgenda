<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\Tarefa;
use App\Models\TarefaEspec;
use App\Http\Requests\StoreServicoRequest;
use App\Http\Requests\UpdateServicoRequest;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::with('tarefaespec')->get();
        // $tarefaespecs = Tarefa::with('tarefaespec')->get();
        // dd($tarefas[0]);
        return view('pages.servico.index', compact('tarefas'));
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
            'tipo_servico' => 'required|string',
        ]);

        // Guardando os dados na sessão usando o helper global
        session(['tipo_servico' => $request->tipo_servico]);


        // Redireciona de volta para a view de servico com uma mensagem
        return redirect()->route('servico.getSubServices')->with('success', 'Serviço selecionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicoRequest $request, Servico $servico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servico $servico)
    {
        //
    }

    public function getSubServices()
    {
        // dd(session('tipo_servico'));
        $tarefas = TarefaEspec::where('tarefa_id', 1)->get();
        // session('tipo_servico')
        return view('pages.servico.subservice', compact('tarefas'));
    }

    public function postSubServices(Resquest $resquest, Servico $servico)
    {
        $request->validate([
            'servico_especifico' => 'required|string'
        ]);
        session(['servico_especifico' => $request->servico_especifico]);

        return redirect()->route('agendamento.index')->with('success', 'Serviço selecionado com sucesso!');
    }
}
