<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Lista de Tarefas') }}
                        </h2>
          
                        <x-button>
                            <a href="{{ route('cadastrar-tarefa')}}">{{ __('Nova Tarefa') }}</a>
                        </x-button>
                    </div>

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                    <th scope="col" class="px-6 py-4"></th>
                                    <th scope="col" class="px-6 py-4">Descrição</th>
                                    <th scope="col" class="px-6 py-4">Completa</th>
                                    <th scope="col" class="px-6 py-4">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listaTarefas as $tarefa)
                                        <tr
                                        class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $tarefa -> nome }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">Editar | Apagar</td>
                                        </tr>       
                                    @endforeach                             
                                </tbody>
                                </table>
                            </div>
                            </div>
                            {{ $listaTarefas->links() }}
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
