<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>
    <x-header />

    <main class="container-md">

        <div class="br-breadcrumb my-4">
            <ul class="crumb-list">
                <li class="crumb home">
                    <div onclick="window.location = '{{Route('dashboard')}}'" class="br-button circle">
                        <span class="sr-only">
                            Painel inicial
                        </span>
                        <i class="icon fas fa-home"></i>
                    </div>
                </li>

                <li class="crumb">
                    <i class="icon fas fa-chevron-right"></i>
                    <a href="{{ Route('documento.index'); }}">Documentos</a>
                </li>

                <li class="crumb">
                    <i class="icon fas fa-chevron-right"></i>
                    <a href="{{ Route('tipodocumento.index'); }}">Tipos de Documentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Editar</span>
                </li>
            </ul>
        </div>

        <p class="my-5 h4">Detalhes do Tipo de Documentos</p>

        <div class="bg-gray-3 p-5">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="br-input">
                        <label for="input-tipoDocumento-nome" class="form-label">Título</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-file" aria-hidden="true"></i>
                            </div>
                            <input disabled id="input-tipoDocumento-nome" type="text" class="form-control" name="nome"
                                placeholder="Ex.: Memorando" value="{{$tipodocumento->nome}}"></input>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="br-textarea">
                        <label for="descricao">Descrição</label>
                        <textarea disabled id="descricao" name="descricao"
                            placeholder="Digite aqui a descrição do tipo de documento." rows="4"
                            maxlength="300">{{$tipodocumento->descricao}}</textarea>
                        <div class="text-base mt-1">
                            <span class="limit">Limite máximo de <strong>300</strong> caracteres</span>
                            <span class="current"></span>
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
                                    <p>Você tem certeza que deseja deletar o Tipo de Documento selecionado?</p>
                                    <p>Essa ação não poderá ser desfeita.</p>
                                </div>

                                <div class="br-modal-footer justify-content-center">

                                    <button class="br-button secondary" type="button" id="scrimfechar"
                                        data-dismiss="scrimexample">Cancelar
                                    </button>

                                    <button
                                        onclick="window.location = '{{ url('tipodocumento/delete/'.$tipodocumento->id); }}'"
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

                <button onclick="window.location = '{{ url('tipodocumento/edit/'.$tipodocumento->id); }}'"
                    class="br-button primary ml-4" type="button" aria-label="Editar">
                    <i class="fas fa-edit mr-1" aria-hidden="true"></i>Editar
                </button>
            </div>
        </div>
    </main>

    <x-footer-fixed/>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
