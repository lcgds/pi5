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
                    <a href="{{ Route('funcionario.index'); }}">Funcionários</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Cadastrar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Cadastro de Funcionário</h2>

        <form class="bg-gray-3 p-5 mb-5" method="POST" action="{{ route('funcionario.store') }}">
            @csrf

            <p class="text-bold">Informações básicas</p>

            <div class="row">

                <div class="col-lg-9 col-md-8 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-nome" class="form-label">Nome</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-user" aria-hidden="true"></i>
                            </div>
                            <input id="input-cliente-nome" type="text" class="form-control" name="nome"
                                placeholder="Ex.: Fulano"></input>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">

                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-departamento">Departamento</label>

                            <div class="input-group">
                                <div class="input-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <input id="select-departamento" type="text" placeholder="Selecione um departamento" />
                            </div>

                            <button class="br-button circle small" type="button" tabindex="-1" data-trigger>
                                <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="br-list" tabindex="0">

                            <div class="br-item divider" tabindex="-1">
                                <div class="br-radio">
                                    <input id="rb0" type="radio" name="opcao" value="opcao1" />
                                    <label for="rb0">Opção 1</label>
                                </div>
                            </div>

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
                                placeholder="Ex.: fulano@email.com.br"></input>
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
                                placeholder="Ex.: 99999-9999"></input>
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
