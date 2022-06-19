<x-guest-layout>
<div class="br-card rounded col-lg-4 col-md-6 col-sm-8 py-2 px-6">
<div class="card-header h2 text-center">Cadastro</div>

        <x-slot name="logo">
            <a href="/">
                <img height="20rem" src="{{ asset('docs-b.svg') }}"/>
                <span>Pro Doc</span>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mx-2">
                    <div class="br-input input-highlight">
                        <label class="text-bold" for="name">Nome</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-user" aria-hidden="true"></i>
                            </div>
                            <input id="name" type="text" name="name" placeholder="Digite seu nome" required
                                autofocus />
                        </div>
                    </div>
                </div>

            <!-- Email Address -->
            <div class="mx-2 my-4">
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


            <!-- Confirm Password -->
            <div class="mx-2 my-4">
                    <div class="br-input input-highlight input-button">
                        <label class="text-bold" for="password_confirmation">Confirmar senha</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-lock" aria-hidden="true"></i>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="Repita sua senha de segurança" required />
                        </div>
                    </div>
                </div>


            <div class="flex items-center justify-end mt-6 mb-3">
                <x-button>
                    {{ __('Cadastrar-se') }}
                </x-button>
            </div>
        </form>
</div>
</x-guest-layout>
