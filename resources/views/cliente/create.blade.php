<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>
    <x-header />

    <main class="container-md">

        <div class="br-breadcrumb my-4">
            <ul class="crumb-list">
                <li class="crumb home">
                    <div class="br-button circle">
                        <span class="sr-only">
                            Página inicial
                        </span>
                        <i class="icon fas fa-home"></i>
                    </div>
                </li>

                <li class="crumb">
                    <i class="icon fas fa-chevron-right"></i>
                    <a href="{{ Route('dashboard'); }}">Dashboard</a>
                </li>

                <li class="crumb">
                    <i class="icon fas fa-chevron-right"></i>
                    <a href="{{ Route('cliente.index'); }}">Clientes</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Cadastrar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Cadastro de Cliente</h2>

        <form class="bg-gray-3 p-5 mb-5" method="POST" action="{{ route('cliente.store') }}">
            @csrf
            <p class="text-bold">Informações básicas</p>

            <div class="row">

                <div class="col-lg-7 col-md-7 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-nome" class="form-label">Razão social</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-building" aria-hidden="true"></i>
                            </div>
                            <input id="input-cliente-nome" type="text" class="form-control" name="nome"
                                placeholder="Ex.: PRO DOC LTDA." required autofocus></input>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-5 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-check"></i>
                            </div>
                            <input type="text" id="input-cliente-cnpj" class="form-control" name="cnpj"
                                placeholder="Ex.: 00.000.000/0000-00" required></input>
                        </div>

                    </div>
                </div>

            </div>

            <p class="text-bold">Dados para contato</p>

            <div class="row">
                <div class="col-lg-8 col-md-8 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-email" class="form-label">E-mail</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-envelope" aria-hidden="true"></i>
                            </div>
                            <input id="input-cliente-email" type="email" class="form-control" name="email"
                                placeholder="Ex.: prodoc@email.com.br" required></input>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-telefone" class="form-label">Telefone</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-phone" aria-hidden="true"></i>
                            </div>
                            <input type="tel" id="input-cliente-telefone" class="form-control" name="telefone"
                                placeholder="Ex.: 99999-9999" required></input>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-end">
                <x-btn-cancel/>
                <button type="submit" class="br-button primary">Cadastrar</button>
            </div>

        </form>
    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>
    
</body>

</html>
