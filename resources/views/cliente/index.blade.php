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
                    <a href="{{ Route('cliente.index'); }}">Clientes</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <div class="d-flex my-5 justify-content-between">
            <h2 class="m-0">Lista de Clientes</h2>

            @if ($clientes->count()>0)
            <button onclick="window.location='{{ url('cliente/create'); }}'" class="br-button primary"
                type="button">
                <i class="fas fa-plus mr-1" aria-hidden="true"></i>Cadastrar cliente
            </button>
            @endif
        </div>

        @if ($clientes->count()>0)
        <table class="mb-10xh">
            <thead>
                <tr>
                    <th scope="col">Razão social</th>
                    <th scope="col">CNPJ</th>
                    <!--
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    -->
                    <th scope="col">Data de cadastro</th>
                    <th scope="col">Status</th>
                    <th scope="col">Quant. de Documentos</th>
                    <th scope="col">Ações</th>
                </tr>
                <thead>
                <tbody>
                    <!--Pega as informações do banco-->
                    @foreach($clientes as $cli)
                    <tr>
                        <td>{{$cli->nome}}</td>
                        <td>{{$cli->cnpj}}</td>
                        <!--
                                <td>{{$cli->email}}</td>
                                <td>{{$cli->telefone}}</td>
                            -->
                        <td>{{$cli->created_at}}</td>
                        <td>{{$cli->status}}</td>
                        <td>{{$cli->documentos->count()}}</td>


                        <td>

                            <button onclick="window.location = '{{ url('cliente/read/'.$cli->id); }}'"
                                class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Visualizar"><i
                                    class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button onclick="window.location = '{{ url('cliente/edit/'.$cli->id); }}'"
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
                <h3>Nenhum cliente encontrado!</h3>
                <span>Para cadastrar um cliente basta clicar no botão logo abaixo.</span>
                <button onclick="window.location='{{ url('cliente/create'); }}'" class="br-button primary mt-6 d-block"
                    type="button">
                    <i class="fas fa-plus mr-1" aria-hidden="true"></i>Cadastrar
                </button>
            </div>

        </div>
        @endif

    </main>

@if ($clientes->count()>7)
    <x-footer-flex/>
@else
    <x-footer-fixed/>
@endif

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
