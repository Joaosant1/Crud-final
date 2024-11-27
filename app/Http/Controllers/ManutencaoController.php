<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function index()
    {
        $manutencoes = Manutencao::with('veiculo')->get(); 
        return view('manutencao.index', compact('manutencoes'));
    }

    public function create()
    {
        $veiculos = Veiculo::all(); 
        return view('manutencao.create', compact('veiculos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_manutencao' => 'required|date',
            'tipo_servico' => 'required|string',
            'custo' => 'required|numeric'
        ]);

        Manutencao::create($request->all());

        return redirect()->route('manutencao.index')->with('success', 'Manutenção registrada com sucesso!');
    }

    public function edit($id)
    {
        $manutencao = Manutencao::findOrFail($id);
        $veiculos = Veiculo::all();  
        return view('manutencao.edit', compact('manutencao', 'veiculos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_manutencao' => 'required|date',
            'tipo_servico' => 'required|string',
            'custo' => 'required|numeric'
        ]);

        $manutencao = Manutencao::findOrFail($id);
        $manutencao->update($request->all());

        return redirect()->route('manutencao.index')->with('success', 'Manutenção atualizada com sucesso!');
    }

    public function destroy($id)
    {
        Manutencao::destroy($id);
        return redirect()->route('manutencao.index')->with('success', 'Manutenção excluída com sucesso!');
    }
}
