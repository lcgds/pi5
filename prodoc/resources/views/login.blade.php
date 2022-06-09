<!DOCTYPE html>

<html lang="pt-BR">
    
<x-head />

<body>
    <div class="template-base">

        <x-header />

        <main class="d-flex flex-fill justify-content-center align-items-center bg-blue-warm-vivid-80" id="main">

            <div class="br-card col-lg-4 col-md-6 col-sm-8 px-2">
                <div class="card-header h2 text-center">Acesso ao sistema</div>
                <div class="card-content">

                    <div class="mx-2">
                        <div class="br-input input-highlight">
                            <label class="text-bold" for="input-login">Login</label>
                            <div class="input-group">
                                <div class="input-icon"><i class="fas fa-user" aria-hidden="true"></i>
                                </div>
                                <input id="input-login" type="email" placeholder="Ex.: fulano@email.com.br" />
                            </div>
                        </div>
                    </div>

                    <div class="mx-2 my-4">
                        <div class="br-input input-highlight input-button">
                            <label class="text-bold" for="input-password">Senha</label>
                            <div class="input-group">
                                <div class="input-icon"><i class="fas fa-lock" aria-hidden="true"></i>
                                </div>
                                <input id="input-password" type="password"
                                    placeholder="Digite sua senha de segurança" />
                            </div>
                        </div>
                    </div>

                   <button class="br-button primary block mb-4" type="button">Entrar
                    </button>

                </div>
            </div>

        </main>

    </div>
</body>

</html>
