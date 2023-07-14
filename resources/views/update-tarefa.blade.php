<x-app-layout>
    <div class="py-12">
        <div class="max-w-screen-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-center mb-4 text-xl text-gray-800 leading-tight">
                        {{ __('Editar Tarefa') }}
                    </h2>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('update-tarefa', ['id' => $tarefa->id]) }}">
                        @csrf
                        @method('PUT')
                        <x-label for="tarefa" :value="__('Descrição da Tarefa')" />
                        <x-input id="tarefa" class="block mt-1 w-full" type="text" name="nome" value="{{ $tarefa->nome }}" required autofocus />

                        <x-button-secondary>
                            <a href="{{ route('dashboard') }}">{{ __('Cancelar') }}</a>
                        </x-button-secondary>
                        <x-button class="mt-4 ml-1">
                            {{ __('SALVAR') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>