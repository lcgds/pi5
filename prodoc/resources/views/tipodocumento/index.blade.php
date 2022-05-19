<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>

    <!--Caixa de pergunta-->
    <script>
        function remover(route) {
            if (confirm('Você deseja remover o tipo de documento ?'))
                window.location = route;
        }

    </script>

    <x-header />

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session()->get('success')}}
    </div>
    @endif

    <main class="container-fluid">

        <h2 class="my-5">Lista de Tipos de Documento</h2>

        <div class="br-table" ...>
            <!-- Cabeçalho -->
            <!-- Dados -->
            <table class="tabela">
                <caption>Lista de Tipos de Documento</caption>
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
                            <td>{{$tipodoc->timestamp}}</td>
                            <td>{{$tipodoc->status}}</td>


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
            <button onclick="window.location='{{ url('tipodocumento/create'); }}'" class="br-button primary mt-6"
                type="button">
                Cadastrar tipo de documento
            </button>
        </div>

    </main>
</body>

</html>
