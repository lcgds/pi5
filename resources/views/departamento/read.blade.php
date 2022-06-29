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
                    <a href="{{ Route('departamento.index'); }}">Departamentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <p class="my-5 h4">Detalhes do Departamento</p>

        <div class="bg-gray-3 p-5">

            <div class="row">

                <div class="col-lg-9 col-md-8 mb-4">
                    <div class="br-input">
                        <label for="input-departamento-nome">Nome do Departamento</label>
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <input disabled id="input-departamento-nome" type="text" name="nome"
                                placeholder="Ex.: Administrativo" value="{{ $departamento->nome }}"></input>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-5">
                    <div class="br-input">
                        <label for="input-departamento-sigla_departamento">Sigla Departamento</label>
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="fas fa-spell-check"></i>
                            </div>
                            <input disabled id="input-departamento-sigla_departamento" type="text"
                                name="sigla_departamento" placeholder="Ex.: ADM"
                                value="{{ $departamento->sigla_departamento }}"></input>
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
                                    <p>Você tem certeza que deseja deletar o Departamento selecionado?</p>
                                    <p>Essa ação não poderá ser desfeita.</p>
                                </div>

                                <div class="br-modal-footer justify-content-center">

                                    <button class="br-button secondary" type="button" id="scrimfechar"
                                        data-dismiss="scrimexample">Cancelar
                                    </button>

                                    <button onclick="window.location = '{{ url('departamento/delete/'.$departamento->id); }}'"
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

                <button onclick="window.location = '{{ url('departamento/edit/'.$departamento->id); }}'"
                    class="br-button primary ml-4" type="button" aria-label="Editar">
                    <i class="fas fa-edit mr-1" aria-hidden="true"></i>Editar
                </button>
            </div>

            </form>
    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
