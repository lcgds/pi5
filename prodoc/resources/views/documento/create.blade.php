<!DOCTYPE html>
<html lang="pt-BR">

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
                    <a href="{{ Route('documento.index'); }}">Documentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Cadastrar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Cadastro de Documento</h2>

        <form class="bg-gray-3 p-5 mb-5 container-fluid" method="POST" action="{{ route('documento.store') }}">
            @csrf

            <!--<div class="row">
                <span class="form-label">Id Documento</span>
                <input type="text" name="id" class="form-control">
            </div>-->

            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-9 mb-4">
                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-tipoDocumento">Tipo de documento</label>

                            <div class="input-group">

                                <div class="input-icon"><i class="fas fa-search"></i></div>
                                <input id="select-tipoDocumento" type="text" placeholder="Selecione um item" />
                            </div>

                            <button class="br-button circle small" type="button" tabindex="-1" data-trigger>
                                <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                            </button>
                        </div>

                        @foreach($tipodocumentos as $tipodoc)
                        
                            <div class="br-list" tabindex="0">
                                <div class="br-item divider" tabindex="-1">
                                    <div class="br-radio">
                                        <input id="rb0" type="radio" name="opcao" value="{{$tipodoc->id}}" />
                                        <label for="rb0">{{$tipodoc->nome}}</label>
                                    </div>
                                </div>
                            </div>
                        
                        @endforeach 

                    </div>

                </div>

                <div class="col-lg-1 col-md-1 col-sm-1 pt-sm-5 mb-4">
                    <button onclick="window.location = '{{ url('tipodocumento'); }}'" class="br-button circle small"
                        type="button"><i class="fas fa-edit" aria-hidden="true"></i>
                    </button>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-12 ml-lg-4 mb-4">
                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-cliente">Emissor</label>

                            <div class="input-group">

                                <div class="input-icon"><i class="fas fa-search"></i></div>
                                <input id="select-cliente" type="text" placeholder="Selecione um item" />
                            </div>

                            <button class="br-button circle small" onclick="" type="button" tabindex="-1" data-trigger>
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

            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 mb-4">
                    <div class="br-textarea">
                        <label for="textarea-documento-descricao">Descrição</label>
                        <textarea id="textarea-documento-descricao" placeholder="Digite aqui a descrição do documento."
                            rows="4" maxlength="300" name="descricao"></textarea>
                        <div class="text-base mt-1">
                            <span class="limit">Limite máximo de <strong>300</strong> caracteres</span>
                            <span class="current"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 d-flex justify-content-end">
                    <button class="br-button secondary mr-4" type="button">Cancelar</button>
                    <button type="submit" class="br-button primary">Cadastrar</button>
                </div>    
            </div>
        </form>
    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>

</body>

</html>
