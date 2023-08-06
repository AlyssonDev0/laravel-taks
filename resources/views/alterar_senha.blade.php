<x-app-layout>
    <div class="py-12">
        <div class="max-w-screen-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-center mb-4 text-xl text-gray-800 leading-tight">
                        {{ __('Alterar Senha') }}
                    </h2>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <x-auth-session-status :status="session('status')" />
                    <form method="POST" action="{{ route('update-senha') }}">
                        @csrf
                        <x-label for="tarefa"  :value="__('Senha Atual')" />
                        <x-input id="tarefa" type="password" class="block mt-1 w-full" name="senha_atual" required autofocus />
                        <div class="mt-3">
                            
                            <x-label for="tarefa" :value="__('Nova Senha')" />
                            <x-input id="tarefa" type="password" class="block mt-1 w-full" name="nova_senha" required autofocus />
                        </div>
                        <div class="mt-3">
                            <x-label for="tarefa" :value="__('Repetir Nova Senha')" />
                            <x-input id="tarefa" type="password" class="block mt-1 w-full"  name="nova_senha_confirmation" required autofocus />
                        </div>

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