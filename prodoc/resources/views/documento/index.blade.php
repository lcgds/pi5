<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>

    <x-header />

    <main class="container">

        <h2 class="my-5">Lista de Documentos</h2>

        <div class="br-table" ...>
            <!-- Cabeçalho -->
            <!-- Dados -->
            <table class="tabela">
                <caption>Lista de Documentos</caption>
                <thead>
                    <tr>
                        <th scope="col">Nº do documento</th>
                        <th scope="col">Tipo de documento</th>
                        <th scope="col">Data de cadastro</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                    <thead>
                    <tbody>
                        <!--Pega as informações do banco-->
                        @foreach($documentos as $doc)
                        <tr>
                            <td>{{$doc->id}}</td>
                            <!--<td>Tipo de documento</td>-->
                            <!--<td>Data de cadastro</td>-->
                            <td>{{$doc->status}}</td>
                            <td>

                            <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Visualizar"><i class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Editar"><i class="fas fa-edit" aria-hidden="true"></i>
                                </button>

                                <button class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Encerrar"><i class="fas fa-trash" aria-hidden="true"></i>
                                </button>
    </main>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            <!-- Rodapé -->

        </div>

        <div class="d-flex justify-content-end">
        <button onclick="window.location='{{ url('documento/create'); }}'"
            class="br-button primary mt-5" type="button">
            Cadastrar documento
        </button>
        </div>

</body>

</html>
