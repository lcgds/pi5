<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>

    <x-header />

    <x-alert-message />

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
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Lista de Documentos</h2>

        @if ($documentos->count()>0)
        <table class="tabela">
            <thead>
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Tipo de documento</th>
                    <th scope="col">Emissor</th>
                    <th scope="col">Data de cadastro</th>
                    <!--<th scope="col">Status</th>-->
                    <th scope="col">Ações</th>
                </tr>
                <thead>
                <tbody>
                    <!--Pega as informações do banco-->
                    @foreach($documentos as $doc)
                    <tr>
                        <td>{{$doc->id}}</td>
                        <td>{{$doc->tipodocumento->nome}}</td>
                        <td>{{$doc->cliente->nome}}</td>
                        <td>{{$doc->created_at}}</td>
                        <!--<td>{{$doc->status}}</td>-->

                        <td>
                            <button onclick="window.location = '{{ url('documento/read/'.$doc->id); }}'"
                                class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Visualizar"><i
                                    class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button onclick="window.location = '{{ url('documento/edit/'.$doc->id); }}'"
                                class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Editar"><i
                                    class="fas fa-edit" aria-hidden="true"></i>
                            </button>

                            <div class="br-scrim-util foco" id="scrimutilexample" data-scrim="true">

                                <div class="br-modal medium">

                                    <div class="br-modal-dialog p-4">

                                        <div class="br-modal-content">

                                            <div class="text-center br-modal-header">
                                                <i class="fas fa-exclamation fa-8x circle text-warning"
                                                    aria-hidden="true"></i>
                                            </div>

                                            <div class="br-modal-body text-center">
                                                <p>Você tem certeza que deseja deletar o Documentodestroy selecionado?</p>
                                                <p>Essa ação não poderá ser desfeita.</p>
                                            </div>

                                            <div class="br-modal-footer justify-content-center">

                                                <button class="br-button secondary" type="button" id="scrimfechar"
                                                    data-dismiss="scrimexample">Cancelar
                                                </button>

                                                <button
                                                    onclick="window.location = '{{ url('documento/destroy/'.$doc->id); }}'"
                                                    class="br-button primary mt-3 mt-sm-0 ml-sm-3" type="button">Deletar
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-inline scrimutilexemplo">

                                <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button"
                                    aria-label="Encerrar"><i class="fas fa-trash" aria-hidden="true"></i>
                                </button>

                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
        </table>

        <div class="d-flex justify-content-end">
            <button onclick="window.location='{{ url('documento/create'); }}'" class="br-button primary mt-5"
                type="button">
                <i class="fas fa-plus mr-1" aria-hidden="true"></i>Cadastrar documento
            </button>
        </div>

        @else
            <div class="d-flex flex-fill justify-content-center align-items-center">
                <img class="d-block mr-4" src="{{asset('404.png')}}" alt="Erro 404"/>
                <div>
                    <h3>Nenhum documento encontrado!</h3>
                    <span>Para cadastrar um documento basta clicar no botão logo abaixo.</span>
                    <button onclick="window.location='{{ url('documento/create'); }}'" class="d-block br-button primary mt-5"
                    type="button">
                    <i class="fas fa-plus mr-1" aria-hidden="true"></i>Cadastrar
                    </button>
                </div>
                
            </div>
        @endif


        
    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
