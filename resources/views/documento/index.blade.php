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
            <h2 class="m-0">Lista de Documentos</h2>

            @if ($documentos->count() > 0)
            <button onclick="window.location='{{ url('documento/create'); }}'" class="br-button primary" type="button">
                <i class="fas fa-plus mr-1" aria-hidden="true"></i>Cadastrar documento
            </button>
            @endif
        </div>

        @if ($documentos->count() > 0)
        <table class="mb-10xh">
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

                        </td>

                    </tr>
                    @endforeach
                </tbody>
        </table>

        @else
        <div class="d-flex flex-fill justify-content-center align-items-center">
            <img class="d-block mr-4" src="{{asset('404.png')}}" alt="Erro 404" />
            <div>
                <h3>Nenhum documento encontrado!</h3>
                <span>Para cadastrar um documento basta clicar no botão logo abaixo.</span>
                <button onclick="window.location='{{ url('documento/create'); }}'"
                    class="d-block br-button primary mt-5" type="button">
                    <i class="fas fa-plus mr-1" aria-hidden="true"></i>Cadastrar
                </button>
            </div>

        </div>
        @endif

    </main>

    @if ($documentos->count() > 7)
        <x-footer-flex />
    @else
        <x-footer-fixed />
    @endif

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
