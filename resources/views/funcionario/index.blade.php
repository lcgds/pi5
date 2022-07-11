<!--PÁGINA DESCONTINUADA-->

<!DOCTYPE html>
<html lang="pt-BR">

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

                            <button onclick="window.location = '{{ url('funcionario/read/'.$func->id); }}'" class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button"
                                aria-label="Visualizar"><i class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button onclick="window.location = '{{ url('funcionario/edit/'.$func->id); }}'" class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Editar"><i
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
                                                <p>Você tem certeza que deseja deletar o Funcionário selecionado?</p>
                                                <p>Essa ação não poderá ser desfeita.</p>
                                            </div>

                                            <div class="br-modal-footer justify-content-center">

                                                <button class="br-button secondary" type="button" id="scrimfechar"
                                                    data-dismiss="scrimexample">Cancelar
                                                </button>

                                                <button
                                                    onclick="window.location = '{{ url('funcionario/destroy/'.$func->id); }}'"
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
