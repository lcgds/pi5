<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>

    <script>
        function remover(route) {
            if (confirm('Você deseja remover o cliente ?'))
                window.location = route;
        }

    </script>

    <x-header />

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session()->get('success')}}
    </div>
    @endif

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
                    <a href="{{ Route('cliente.index'); }}">Clientes</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Lista de Clientes</h2>

        <div class="br-table" ...>
            <!-- Cabeçalho -->
            <!-- Dados -->
            <table class="tabela">
                <caption>Lista de Clientes</caption>
                <thead>
                    <tr>
                        <th scope="col">Razão social</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data de cadastro</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                    <thead>
                    <tbody>
                        <!--Pega as informações do banco-->
                        @foreach($clientes as $cli)
                        <tr>
                            <td>{{$cli->nome}}</td>
                            <td>{{$cli->cnpj}}</td>
                            <td>{{$cli->email}}</td>
                            <td>{{$cli->telefone}}</td>
                            <td>{{$cli->timestamp}}</td>
                            <td>{{$cli->status}}</td>

                            <td>

                                <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button"
                                    aria-label="Visualizar"><i class="fas fa-eye" aria-hidden="true"></i>
                                </button>

                                <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button"
                                    aria-label="Editar"><i class="fas fa-edit" aria-hidden="true"></i>
                                </button>

                                <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button"
                                    aria-label="Encerrar"><i class="fas fa-trash" aria-hidden="true"></i>
                                </button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            <!-- Rodapé -->

        </div>

        <div class="d-flex justify-content-end">
            <button onclick="window.location='{{ url('cliente/create'); }}'" class="br-button primary mt-6"
                type="button">
                Cadastrar cliente
            </button>
        </div>

    </main>


</body>

</html>
