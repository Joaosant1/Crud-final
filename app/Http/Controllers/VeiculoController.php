<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        return view('veiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required|integer',
            'placa' => 'required'
        ]);

        Veiculo::create($request->all());

        return redirect()->route('veiculos.index')->with('success', 'Veículo criado com sucesso!');
    }

    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required|integer',
            'placa' => 'required'
        ]);

        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update($request->all());

        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Veiculo::destroy($id);
        return redirect()->route('veiculos.index')->with('success', 'Veículo excluído com sucesso!');
    }
}
