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
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <p class="my-5 h4">Detalhes de Cliente</p>

        <div class="bg-gray-3 p-5">

            <div class="row">

                <div class="col-lg-7 col-md-7 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-nome" class="form-label">Razão social</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-building" aria-hidden="true"></i>
                            </div>
                            <input disabled id="input-cliente-nome" type="text" class="form-control" name="nome"
                                placeholder="Ex.: PRO DOC LTDA." value="{{ $cliente->nome }}"></input>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-5 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-check"></i>
                            </div>
                            <input disabled type="text" id="input-cliente-cnpj" class="form-control" name="cnpj"
                                placeholder="Ex.: 00.000.000/0000-00" value="{{ $cliente->cnpj }}"></input>
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
                            <input disabled id="input-cliente-email" type="email" class="form-control" name="email"
                                placeholder="Ex.: prodoc@email.com.br" value="{{ $cliente->email }}"></input>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-telefone" class="form-label">Telefone</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-phone" aria-hidden="true"></i>
                            </div>
                            <input disabled type="tel" id="input-cliente-telefone" class="form-control" name="telefone"
                                placeholder="Ex.: 99999-9999" value="{{ $cliente->telefone }}"></input>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-end">

                <div class="br-scrim-util foco" id="scrimutilexample" data-scrim="true">
                    <div class="br-modal medium">
                        <div class="br-modal-dialog p-4">
                            <div class="br-modal-content">
                                <div class="text-center br-modal-header">
                                    <i class="fas fa-exclamation fa-8x circle text-warning" aria-hidden="true"></i>
                                </div>
                                <div class="br-modal-body text-center">
                                    <p>Você tem certeza que deseja deletar o Cliente selecionado?</p>
                                    <p>Essa ação não poderá ser desfeita.</p>
                                </div>
                                <div class="br-modal-footer justify-content-center">
                                    <button class="br-button secondary" type="button" id="scrimfechar"
                                        data-dismiss="scrimexample">Cancelar
                                    </button>
                                    <button onclick="window.location = '{{ url('cliente/delete/'.$cliente->id); }}'"
                                        class="br-button primary mt-3 mt-sm-0 ml-sm-3" type="button">Deletar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-inline scrimutilexemplo">
                    <button class="br-button bg-danger text-pure-0" type="button" aria-label="Encerrar"><i
                            class="fas fa-trash mr-1" aria-hidden="true"></i>Excluir
                    </button>
                </div>

                <button onclick="window.location = '{{ url('cliente/edit/'.$cliente->id); }}'"
                    class="br-button primary ml-4" type="button" aria-label="Editar">
                    <i class="fas fa-edit mr-1" aria-hidden="true"></i>Editar
                </button>
            </div>



        </div>

    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
