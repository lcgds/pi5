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
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <div class="my-5 d-flex justify-content-between">
            <h2 class="m-0">Detalhes do Documento</h2>

            <div class="d-flex align-items-center">
                <div class="br-scrim-util foco" id="scrimutilexample" data-scrim="true">

                    <div class="br-modal medium">

                        <div class="br-modal-dialog p-4">

                            <div class="br-modal-content">

                                <div class="text-center br-modal-header">
                                    <i class="fas fa-exclamation fa-8x circle text-warning" aria-hidden="true"></i>
                                </div>

                                <div class="br-modal-body text-center">
                                    <p>Você tem certeza que deseja deletar o Documento selecionado?</p>
                                    <p>Essa ação não poderá ser desfeita.</p>
                                </div>

                                <div class="br-modal-footer justify-content-center">

                                    <button class="br-button secondary" type="button" id="scrimfechar"
                                        data-dismiss="scrimexample">Cancelar
                                    </button>

                                    <button onclick="window.location = '{{ url('documento/delete/'.$documento->id); }}'"
                                        class="br-button primary mt-3 mt-sm-0 ml-sm-3" type="button">Deletar
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-inline scrimutilexemplo">

                    <button class="br-button bg-danger text-pure-0" type="button" aria-label="Encerrar"><i
                            class="fas fa-trash mr-1" aria-hidden="true"></i>Encerrar
                    </button>

                </div>

                <button onclick="window.location = '{{ url('documento/forward/'.$documento->id); }}'"
                    class="br-button secondary ml-4" type="button" aria-label="Encaminhar">
                    <i class="fas fa-share mr-1" aria-hidden="true"></i>Encaminhar
                </button>

                <button onclick="window.location = '{{ url('documento/edit/'.$documento->id); }}'"
                    class="br-button primary ml-4" type="button" aria-label="Editar">
                    <i class="fas fa-edit mr-1" aria-hidden="true"></i>Editar
                </button>
            </div>


        </div>


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

        </div>

        <h3 class="my-6">Dados do Emissor</h3>

        <div class="bg-gray-3 p-5 mb-5">
            <div class="row mb-5">

                <div class="col">
                    <div class="br-input">
                        <label for="input-cnpj">CNPJ</label>
                        <input disabled id="input-cnpj" type="text" value="{{$documento->cliente->cnpj}}" />
                    </div>
                </div>

                <div class="col">
                    <div class="br-input">
                        <label for="input-email">E-mail</label>
                        <input disabled id="input-email" type="text" value="{{$documento->cliente->email}}" />
                    </div>
                </div>

                <div class="col">
                    <div class="br-input">
                        <label for="input-telefone">Telefone</label>
                        <input disabled id="input-telefone" type="text" value="{{$documento->cliente->telefone}}" />
                    </div>
                </div>

            </div>
        </div>


        @if ($ultima_obs)
        <h3 class="my-6">Última atualização</h3>

        <div class="bg-gray-3 p-5 mb-5">
            <div class="br-textarea mb-5">
                <label for="textarea-ultima-atualizacao">Observação</label>
                <textarea disabled rows="4" id="textarea-ultima-atualizacao">{{$ultima_obs->observacao}}</textarea>
            </div>
        </div>

        <span class="br-divider my-10x"></span>

        <h3 class="my-6">Histórico de movimentações</h3>

        <table class="mb-10xh">
            <thead>
                <tr>
                    <th>Remetente</th>
                    <th>Destino</th>
                    <th>Observação</th>
                    <th>Data</th>
                </tr>
            </thead>

            <tbody>
                @foreach($movimentacoes as $mov)
                <tr>
                    <td>{{$mov->users->name}}</td>
                    <td>{{$mov->departamento->nome}}</td>
                    <td>{{$mov->observacao}}</td>
                    <td>{{$mov->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </main>

    @if ($ultima_obs)
        <x-footer-flex />
    @else
        <x-footer-fixed />
    @endif

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
