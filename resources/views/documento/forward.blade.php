<!DOCTYPE html>
<html lang="pt-BR">

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
                    <span>Encaminhar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Detalhes do Documento</h2>

        <div class="bg-gray-3 p-5 mb-5">

            <div class="row">

                <div class="col-sm-12 col-md-5 col-lg-6 mb-4">

                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-tipoDocumento">Tipo de documento</label>

                            <div class="input-group">

                                <div class="input-icon"><i class="fas fa-search"></i></div>
                                <input disabled id="select-tipoDocumento" type="text"
                                    value="{{$documento->tipodocumento->nome}}" />
                            </div>

                            <button disabled class="br-button circle small" type="button" tabindex="-1" data-trigger>
                                <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="br-list" tabindex="0">
                            <div class="br-item divider" tabindex="-1">
                                <div class="br-radio">
                                    <input name="tipodocumentos_id" id="rb0" type="radio"
                                        value="{{$documento->tipodocumento->id}}" disabled />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-md-5 col-lg-6 mb-4">
                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-cliente">Emissor</label>

                            <div class="input-group">

                                <div class="input-icon"><i class="fas fa-search"></i></div>
                                <input disabled id="select-cliente" type="text" value="{{$documento->cliente->nome}}" />
                            </div>

                            <button disabled class="br-button circle small" onclick="" type="button" tabindex="-1"
                                data-trigger>
                                <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="br-list" tabindex="0">
                            <div class="br-item divider" tabindex="-1">
                                <div class="br-radio">
                                    <input disabled name="clientes" id="rb1" type="radio" name="opcao"
                                        value="{{$documento->cliente->id}}" />
                                    <label for="rb1">$documento->cliente->nome</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="br-textarea">
                        <label for="textarea-documento-descricao">Descrição</label>
                        <textarea disabled id="textarea-documento-descricao" rows="4" maxlength="300" name="descricao"
                            value="{{$documento->descricao}}">{{$documento->descricao}}</textarea>
                        <div class="text-base mt-1">
                            <span class="current"></span>
                        </div>
                    </div>
                </div>
            </div>

            <form class="my-5" action="{{ route('documento.send') }}" method="post">
                @csrf

                <span class="br-divider my-7x"></span>

                <input class="d-none hidden" type="number" name="doc_id" id="doc_id" value="{{$documento->id}}" hidden>

                <div class="br-select mb-4">
                    <div class="br-input">
                        <label for="select-cliente">Destino</label>

                        <div class="input-group">

                            <div class="input-icon"><i class="fas fa-search"></i></div>
                            <input id="select-cliente" type="text" placeholder="Selecione um item" required />
                        </div>

                        <button class="br-button circle small" onclick="" type="button" tabindex="-1" data-trigger>
                            <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                        </button>
                    </div>

                    <div class="br-list" tabindex="0">

                        @foreach($departamentos as $dep)
                        <div class="br-item divider" tabindex="-1">
                            <div class="br-radio">
                                <input name="dep_id" id="dep{{$dep->id}}" type="radio" value="{{$dep->id}}" />
                                <label for="dep{{$dep->id}}">{{$dep->nome}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="br-textarea mb-5">
                    <label for="obs">Observação</label>
                    <textarea rows="4" id="obs" name="obs" maxlength="300"></textarea>
                    <div class="text-base mt-1">
                        <span class="limit">Limite máximo de <strong>300</strong> caracteres</span>
                        <span class="current"></span>
                    </div>
                </div>

        </div>

        <div class="d-flex justify-content-end mb-10xh">
            <x-btn-cancel />
            <button type="submit" class="br-button primary ml-4" type="button" aria-label="Encaminhar">
                <i class="fas fa-share mr-1" aria-hidden="true"></i>Encaminhar
            </button>
        </div>

        </form>


    </main>

    <x-footer-flex />

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
