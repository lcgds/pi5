<!DOCTYPE html>
<html lang="pt-BR">

<x-head />

<body>

    <!--Caixa de pergunta-->
    <script>
        function remover(route) {
            if (confirm('Você deseja remover o funcionário?'))
                window.location = route;
        }

    </script>

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
                    <a href="{{ Route('funcionario.index'); }}">Funcionários</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Lista de Funcionários</h2>


        <table>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
                <thead>
                <tbody>
                    <!--Pega as informações do banco-->
                    @foreach($funcionarios as $func)
                    <tr>
                        <td>{{$func->nome}}</td>
                        <td>{{$func->email}}</td>
                        <td>{{$func->telefone}}</td>
                        <td>Lorem Ipsum</td> <!-- Departamento -->
                        <td>{{$func->status}}</td>


                        <td>

                            <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button"
                                aria-label="Visualizar"><i class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Editar"><i
                                    class="fas fa-edit" aria-hidden="true"></i>
                            </button>

                            <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Encerrar"><i
                                    class="fas fa-trash" aria-hidden="true"></i>
                            </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>

        <div class="d-flex justify-content-end">
            <button onclick="window.location='{{ url('funcionario/create'); }}'" class="br-button primary mt-6"
                type="button"><i class="fas fa-plus mr-1" aria-hidden="true"></i>
                Cadastrar funcionário
            </button>
        </div>
    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
