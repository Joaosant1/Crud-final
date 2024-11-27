<x-admin-layout>

<h3 class="text-gray-700 text-3xl font-medium">Editar Venda de carro</h3>

<form class="max-w-sm mx-auto" action="{{ route('vendas.update', $venda->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="veiculo_id">Veículo</label>
    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="veiculo_id" id="veiculo_id" required>
        @foreach($veiculos as $veiculo)
            <option value="{{ $veiculo->id }}" {{ $veiculo->id == $venda->veiculo_id ? 'selected' : '' }}>
                {{ $veiculo->modelo }} - {{ $veiculo->marca }}
            </option>
        @endforeach
    </select>
    </br>

    <div class="mb-5">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comprador</label>
      <input type="text" id="comprador" name="comprador" value="{{ $venda->comprador }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  </br>

  <div class="mb-5">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de venda</label>
      <input type="date" id="data_venda" name="data_venda" value="{{ $venda->data_venda }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  </br>

  <div class="mb-5">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">valor</label>
      <input type="number" id="valor" name="valor" value="{{ $venda->valor }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
</br>
    <button class="px-4 py-3 bg-indigo-600 rounded-md text-white font-medium tracking-wide hover:bg-indigo-500" type="submit">Salvar</button>
</form>
    

</x-admin-layout>