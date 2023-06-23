<x-app-layout>
    <div class="py-12">
        <div class="max-w-screen-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-center mb-4 text-xl text-gray-800 leading-tight">
                            {{ __('Cadastrar Nova Tarefa') }}
                    </h2>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                    <!-- Validation Errors -->
                     <x-auth-validation-errors class="mb-4" :errors="$errors" />

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
