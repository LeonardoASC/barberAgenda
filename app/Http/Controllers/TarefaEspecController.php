<?php

namespace App\Http\Controllers;

use App\Models\TarefaEspec;
use App\Models\Tarefa;
use App\Http\Requests\StoreTarefaEspecRequest;
use App\Http\Requests\UpdateTarefaEspecRequest;
use Illuminate\Http\Request;

class TarefaEspecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefaespecs = TarefaEspec::all();
        return view('adm.tarefaespec.index', compact('tarefaespecs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tarefas = Tarefa::all();
        return view('adm.tarefaespec.create', compact('tarefas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0', // Supondo que o preço não pode ser negativo
            'tempo_de_duracao' => 'required|numeric|min:0', // Supondo que o tempo não pode ser negativo
            // 'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tarefa_id' => 'required|integer|exists:tarefas,id', // Verificando se tarefa_id existe na tabela tarefas
        ]);

        TarefaEspec::create($request->all());
        return redirect()->route('tarefaespec.index')->with('success', 'Serviço criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TarefaEspec $tarefaEspec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TarefaEspec $tarefaespec)
    {
        $tarefas = Tarefa::all();
        return view('adm.tarefaespec.edit', compact('tarefaespec', 'tarefas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TarefaEspec $tarefaespec)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0', // Supondo que o preço não pode ser negativo
            'tempo_de_duracao' => 'required|numeric|min:0', // Supondo que o tempo não pode ser negativo
            // 'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tarefa_id' => 'required|integer|exists:tarefas,id', // Verificando se tarefa_id existe na tabela tarefas
        ]);

        $tarefaespec->update($request->all());
        return redirect()->route('tarefaespec.index')->with('success', 'Serviço atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TarefaEspec $tarefaespec)
    {
        $tarefaespec->delete();
        return redirect()->route('tarefaespec.index')->with('success', 'Serviço deletado com sucesso.');
    }
}
