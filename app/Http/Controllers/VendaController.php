<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::with('veiculo')->get();  
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $veiculos = Veiculo::all();  
        return view('vendas.create', compact('veiculos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'comprador' => 'required|string',
            'data_venda' => 'required|date',
            'valor' => 'required|numeric'
        ]);

        Venda::create($request->all());

        return redirect()->route('vendas.index')->with('success', 'Venda registrada com sucesso!');
    }

    public function edit($id)
    {
        $venda = Venda::findOrFail($id);
        $veiculos = Veiculo::all(); 
        return view('vendas.edit', compact('venda', 'veiculos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'comprador' => 'required|string',
            'data_venda' => 'required|date',
            'valor' => 'required|numeric'
        ]);

        $venda = Venda::findOrFail($id);
        $venda->update($request->all());

        return redirect()->route('vendas.index')->with('success', 'Venda atualizada com sucesso!');
    }

    public function destroy($id)
    {
        Venda::destroy($id);
        return redirect()->route('vendas.index')->with('success', 'Venda excluída com sucesso!');
    }
}
