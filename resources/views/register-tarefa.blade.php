<x-app-layout>
    <div class="py-12">
        <div class="max-w-screen-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-center mb-4 text-xl text-gray-800 leading-tight">
                            {{ __('Cadastrar Nova Tarefa') }}
                    </h2>

                    @if(session('msg'))
                    <div class="bg-green-100 mb-3 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Sucesso!</strong>
                        <span class="block sm:inline">{{ session('msg') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                        </div>
                    @endif  

                    <form method="POST" action="{{ route('store-tarefa') }}">
                        @csrf
                        <div clas>
                            <x-label for="tarefa" :value="__('Descrição da Tarefa')" />
                
                            <x-input id="tarefa" class="block mt-1 w-full" type="text" name="nome" :value="old('tarefa')" required autofocus />
                        </div>
                        <x-button class="mt-4">
                            {{ __('SALVAR') }}
                        </x-button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
