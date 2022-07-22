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
                    <a href="{{ Route('tipodocumento.index'); }}">Tipos de Documentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <div class="my-5 d-flex justify-content-between">
            <h2 class="m-0">Lista de Tipos de Documento</h2>

            @if ($tipodocumentos->count()>0)
            <button onclick="window.location='{{ url('tipodocumento/create'); }}'" class="br-button primary mt-6"
                type="button"><i class="fas fa-plus mr-1" aria-hidden="true"></i>
                Cadastrar tipo de documento
            </button>
            @endif
        </div>


        @if ($tipodocumentos->count()>0)
        <table class="mb-5">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data de cadastro</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
                <thead>
                <tbody>
                    <!--Pega as informações do banco-->
                    @foreach($tipodocumentos as $tipodoc)
                    <tr>
                        <td>{{$tipodoc->nome}}</td>
                        <td>{{$tipodoc->descricao}}</td>
                        <td>{{$tipodoc->created_at}}</td>
                        <td>{{$tipodoc->status}}</td>

                        <td>

                            <button onclick="window.location = '{{ url('tipodocumento/read/'.$tipodoc->id); }}'"
                                class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Visualizar"><i
                                    class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button onclick="window.location = '{{ url('tipodocumento/edit/'.$tipodoc->id); }}'"
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
                <h3>Nenhum tipo de documento encontrado!</h3>
                <span>Para cadastrar um tipo de documento basta clicar no botão logo abaixo.</span>
                <button onclick="window.location='{{ url('tipodocumento/create'); }}'"
                    class="d-block br-button primary mt-6" type="button"><i class="fas fa-plus mr-1"
                        aria-hidden="true"></i>
                    Cadastrar
                </button>
            </div>

        </div>
        @endif

    </main>

    @if ($tipodocumentos->count()>5)
        <x-footer-flex/>
    @else
        <x-footer-fixed/>
    @endif

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
