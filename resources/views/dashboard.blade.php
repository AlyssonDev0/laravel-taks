<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Lista de Tarefas') }}
                    </h2>

                    <form method="POST" action="{{ route('store-tarefa') }}">
                        @csrf

                        <div class="flex mt-2">
                            <x-input id="tarefa" class="block mt-1 w-full" type="text" name="nome" placeholder="O que precisa ser feito?" :value="old('tarefa')" required autofocus />
                            <x-button class="mt-1 ml-2">
                                {{ __('ADICIONAR') }}
                            </x-button>
                        </div>

                    </form>

                    <!-- Mensagens Alerts -->
                    <div class="mt-4">
                        <x-auth-session-status :status="session('status')" />
                        <x-auth-validation-errors  :errors="$errors" />
                    </div>


                    <div class="flex flex-col mt-2">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">

                                @if(count($listaTarefas) > 0)   
                                <table class="border-rounded min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium bg-gray-200 dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">Nº</th>
                                                <th scope="col" class="px-6 py-4">Descrição</th>
                                                <th scope="col" class="px-6 py-4">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listaTarefas as $tarefa)
                                            <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-100">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $contadorInicial++ }}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $tarefa -> nome }}</td>
                                                <td class="flex dap-2 whitespace-nowrap px-6 py-4">
                                                    <x-button-edit>
                                                        <a href="{{ route('create-update-tarefa', ['id' => $tarefa->id]) }}">
                                                            <span class="material-symbols-outlined">
                                                                edit
                                                            </span>
                                                        </a>
                                                    </x-button-edit>

                                                    <form class="ml-1" method="POST" action="{{ route('destroy-tarefa', $tarefa->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-button-delete name="submit" type="submit">
                                                            <span class="material-symbols-outlined">
                                                                delete
                                                            </span>
                                                        </x-button-delete>

                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                        <h2 class="text-center mt-6 text-xl">Nenhuma tarefa   registrada.</h2>
                                    @endif
                                    <div class="mt-4">
                                        {{ $listaTarefas->links() }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>