<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu a senha? Sem problemas. Entre com seu email e iremos enviá-lo um link para recuperação.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="flex items-center justify-between mt-4">
                <x-button-secondary>
                    <a  href="{{ route('login') }}">{{ __('Cancelar') }}</a>
                </x-button-secondary>
                <x-button>
                    {{ __('Enviar link para recuperação') }}
                </x-button>
            </div>
            
        </form>
    </x-auth-card>
</x-guest-layout>
