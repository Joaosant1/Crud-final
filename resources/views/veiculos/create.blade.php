<x-admin-layout>

<h3 class="text-gray-700 text-3xl font-medium">Criar veiculo</h3>

<form class="max-w-sm mx-auto" action="{{ route('veiculos.store') }}" method="POST">
@csrf
<div class="mb-5">
      <label for="modelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo</label>
      <input type="text" id="modelo" name="modelo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  </br>
  <div class="mb-5">
      <label for="marca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca</label>
      <input type="text" id="marca" name="marca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  </br>
  <div class="mb-5">
      <label for="ano" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano</label>
      <input type="number" id="ano" name="ano" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  </br>
  <div class="mb-5">
      <label for="placa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Placa</label>
      <input type="text" id="plca" name="placa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
</br>

  <button class="px-4 py-3 bg-indigo-600 rounded-md text-white font-medium tracking-wide hover:bg-indigo-500" type="submit">Salvar</button>
</form>

</x-admin-layout>