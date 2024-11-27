<x-admin-layout>

<h3 class="text-gray-700 text-3xl font-medium">Registrar venda de carro</h3>

<form class="max-w-sm mx-auto"  action="{{ route('vendas.store') }}" method="POST">
    @csrf

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="veiculo_id">Veículo</label>
    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="veiculo_id" id="veiculo_id" required>
        @foreach($veiculos as $veiculo)
            <option value="{{ $veiculo->id }}">{{ $veiculo->modelo }} - {{ $veiculo->marca }}</option>
        @endforeach
    </select>
    </br>

    <div class="mb-5">
      <label for="comprador" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comprador</label>
      <input type="text" id="comprador" name="comprador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  </br>

  <div class="mb-5">
      <label for="data_venda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data_venda</label>
      <input type="date" id="data_venda" name="data_venda" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  </br>
  
  <div class="mb-5">
      <label for="valor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor</label>
      <input type="number" id="valor" name="valor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  </br>

    <button class="px-4 py-3 bg-indigo-600 rounded-md text-white font-medium tracking-wide hover:bg-indigo-500" type="submit">Registrar venda</button>
</form>
    

</x-admin-layout>