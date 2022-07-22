<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>
    <x-header />

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
                    <a href="{{ Route('departamento.index'); }}">Departamentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Editar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Detalhes do Departamento</h2>

        <form method="POST" action="{{route ('departamento.update', $departamento->id) }}">

            @csrf

            <div class="bg-gray-3 p-5 mb-5">
                <div class="row">

                    <div class="col-lg-9 col-md-8 mb-4">
                        <div class="br-input">
                            <label for="input-departamento-nome">Nome do Departamento</label>
                            <div class="input-group">
                                <div class="input-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <input id="input-departamento-nome" type="text" name="nome"
                                    placeholder="Ex.: Administrativo" value="{{ $departamento->nome }}"></input>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mb-5">
                        <div class="br-input">
                            <label for="input-departamento-sigla_departamento">Sigla Departamento</label>
                            <div class="input-group">
                                <div class="input-icon">
                                    <i class="fas fa-spell-check"></i>
                                </div>
                                <input id="input-departamento-sigla_departamento" type="text" name="sigla_departamento"
                                    placeholder="Ex.: ADM" value="{{ $departamento->sigla_departamento }}"></input>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-end">
                <x-btn-cancel />
                <x-btn-update />
            </div>

        </form>
    </main>

    <x-footer-fixed />

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
