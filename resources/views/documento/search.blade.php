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

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Buscar documento</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Buscar documento</h2>
        <form class="bg-gray-3 p-5 mb-5" action="{{ url('/pesquisadocumento') }}" method="get">
            @csrf
            <div class="br-input">
                <label for="input-pesquisa" class="form-label">Número identificador do documento</label>
                <div class="input-group">
                    <div class="input-icon"><i class="fas fa-file" aria-hidden="true"></i>
                    </div>
                    <input id="input-cliente-nome" type="text" class="form-control" type="search" name="pesquisa" placeholder="Ex.: 012345">
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="br-button primary"><i class="fas fa-search" aria-hidden="true"></i>Pesquisar</button>
            </div>
        </form>

        {{-- @if ($documentos->count() > 0) --}}
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
                            <button onclick="window.location = '{{ url('documento/read/'.$doc->id); }}'" class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Visualizar"><i class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button onclick="window.location = '{{ url('documento/edit/'.$doc->id); }}'" class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Editar"><i class="fas fa-edit" aria-hidden="true"></i>
                            </button>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
        </table>
    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>