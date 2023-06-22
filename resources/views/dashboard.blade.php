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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
