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

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Editar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Dados do Documento</h2>

        <form method="POST" action="{{route ('documento.update', $documento->id) }}">

            @method('PATCH')
            @csrf

            <div class="bg-gray-3 p-5 mb-5">

            <div class="row">

                <div class="col-sm-12 col-md-5 col-lg-6 mb-4">

                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-tipoDocumento">Tipo de documento</label>

                            <div class="input-group">

                                <div class="input-icon"><i class="fas fa-search"></i></div>
                                <input id="select-tipoDocumento" type="text" value="{{$documento->tipodocumento->nome}}"
                                    placeholder="Selecione um item" />
                            </div>

                            <button class="br-button circle small" type="button" tabindex="-1" data-trigger>
                                <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="br-list" tabindex="0">

                            @foreach($tipodocumento as $tipodoc)

                            <div class="br-item divider" tabindex="-1">
                                <div class="br-radio">
                                    <input name="tipodocumentos_id" id="td{{$tipodoc->id}}" type="radio"
                                        value="{{$tipodoc->id}}" />
                                    <label for="td{{$tipodoc->id}}">{{$tipodoc->nome}}</label>
                                </div>
                            </div>

                            @endforeach

                        </div>

                    </div>

                </div>

                <div class="col-sm-12 col-md-5 col-lg-6 mb-4">
                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-cliente">Emissor</label>

                            <div class="input-group">

                                <div class="input-icon"><i class="fas fa-search"></i></div>
                                <input id="select-cliente" type="text" value="{{$documento->cliente->nome}}"
                                    placeholder="Selecione um item" />
                            </div>

                            <button class="br-button circle small" onclick="" type="button" tabindex="-1" data-trigger>
                                <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="br-list" tabindex="0">

                            @foreach($cliente as $cli)

                            <div class="br-item divider" tabindex="-1">
                                <div class="br-radio">
                                    <input name="clientes_id" id="cl{{$cli->id}}" type="radio" value="{{$cli->id}}" />
                                    <label for="cl{{$cli->id}}">{{$cli->nome}}</label>
                                </div>
                            </div>

                            @endforeach

                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col mb-4">
                    <div class="br-textarea">
                        <label for="textarea-documento-descricao">Descrição</label>
                        <textarea id="textarea-documento-descricao" placeholder="Digite aqui a descrição do documento."
                            rows="4" maxlength="300" name="descricao">{{$documento->descricao}}</textarea>
                        <div class="text-base mt-1">
                            <span class="limit"></span>
                            <span class="current"></span>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            <div class="d-flex justify-content-end">
                <x-btn-cancel />
                <x-btn-update />
            </div>
        </form>
    </main>

    <x-footer-fixed/>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
