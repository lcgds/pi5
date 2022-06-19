<x-guest-layout>

    <div class="br-card col-lg-4 col-md-6 col-sm-8 py-2 px-6">
        <div class="card-header h2 text-center">Acesso ao sistema</div>
        <div class="card-content">

            <x-slot name="logo">
                <a href="/">
                    <img height="20rem" src="{{ asset('docs-b.svg') }}" />
                    <span>Pro Doc</span>
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mx-2">
                    <div class="br-input input-highlight">
                        <label class="text-bold" for="email">Login</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-envelope" aria-hidden="true"></i>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Ex.: fulano@email.com.br" required
                                autofocus />
                        </div>
                    </div>
                </div>

                <!-- Password -->

                <div class="mx-2 my-4">
                    <div class="br-input input-highlight input-button">
                        <label class="text-bold" for="password">Senha</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-lock" aria-hidden="true"></i>
                            </div>
                            <input id="password" type="password" name="password"
                                placeholder="Digite sua senha de segurança" required />
                        </div>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="block mx-3 my-4">
                    <div class="br-checkbox">
                        <input id="remember_me" name="remember" type="checkbox" />
                        <label for="remember_me">Continuar conectado</label>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6 mb-3Digite">

                    <x-button>
                        {{ __('Logar') }}
                    </x-button>

                    <span class="br-divider my-3"></span>

                    <a class="br-button block mt-3" href="{{ route('register') }}">
                        {{ __('Primeiro acesso? Cadastrar-se') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
