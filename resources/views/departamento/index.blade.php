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
                    <a href="{{ Route('departamento.index'); }}">Departamentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Consultar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Lista de Departamentos</h2>

        @if ($departamentos->count()>0)
        <table class="tabela">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sigla</th>
                    <th scope="col">Data de cadastro</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
                <thead>
                <tbody>
                    <!--Pega as informações do banco-->
                    @foreach($departamentos as $dep)
                    <tr>
                        <td>{{$dep->nome}}</td>
                        <td>{{$dep->sigla_departamento}}</td>
                        <td>{{$dep->created_at}}</td>
                        <td>{{$dep->status}}</td>


                        <td>

                            <button onclick="window.location = '{{ url('departamento/read/'.$dep->id); }}'"
                                class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Visualizar"><i
                                    class="fas fa-eye" aria-hidden="true"></i>
                            </button>

                            <button onclick="window.location = '{{ url('departamento/edit/'.$dep->id); }}'"
                                class="br-button circle mt-3 mt-sm-0 ml-sm-3" type="button" aria-label="Editar"><i
                                    class="fas fa-edit" aria-hidden="true"></i>
                            </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>

        <div class="d-flex justify-content-end">
            <button onclick="window.location='{{ url('departamento/create'); }}'" class="br-button primary mt-6"
                type="button"><i class="fas fa-plus mr-1" aria-hidden="true"></i>
                Cadastrar departamento
            </button>
        </div>
        @else 
        <div class="d-flex flex-fill justify-content-center align-items-center">
                <img class="d-block mr-4" src="{{asset('404.png')}}" alt="Erro 404"/>
                <div>
                    <h3>Nenhum departamento encontrado!</h3>
                    <span>Para cadastrar um departamento basta clicar no botão logo abaixo.</span>
                    <button onclick="window.location='{{ url('departamento/create'); }}'" class="d-block br-button primary mt-6"
                type="button"><i class="fas fa-plus mr-1" aria-hidden="true"></i>
                Cadastrar
            </button>
                </div>
                
            </div>
        @endif

    </main>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
