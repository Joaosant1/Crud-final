<x-admin-layout>

<h1>Editar Manutenção</h1>

<form action="{{ route('manutencao.update', $manutencao->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="veiculo_id">Veículo</label>
    <select name="veiculo_id" id="veiculo_id" required>
        @foreach($veiculos as $veiculo)
            <option value="{{ $veiculo->id }}" {{ $veiculo->id == $manutencao->veiculo_id ? 'selected' : '' }}>
                {{ $veiculo->modelo }} - {{ $veiculo->marca }}
            </option>
        @endforeach
    </select>

    <label for="data_manutencao">Data da Manutenção</label>
    <input type="date" id="data_manutencao" name="data_manutencao" value="{{ $manutencao->data_manutencao }}" required>

    <label for="tipo_servico">Tipo de Serviço</label>
    <input type="text" id="tipo_servico" name="tipo_servico" value="{{ $manutencao->tipo_servico }}" required>

    <label for="custo">Custo</label>
    <input type="number" id="custo" name="custo" value="{{ $manutencao->custo }}" step="0.01" required>

    <button type="submit">Atualizar Manutenção</button>
</form>

</x-admin-layout>