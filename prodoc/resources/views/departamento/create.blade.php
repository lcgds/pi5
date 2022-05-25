<!DOCTYPE html>

<html lang="pt-BR">

<x-head />

<body>
    <x-header />

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
                    <span>Cadastrar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Cadastro de Departamento</h2>

        <form class="bg-gray-3 p-5 mb-5" method="POST" action="{{ route('departamento.store') }}">
            @csrf

            <!--<div class="br-input">
                <label class="form-label">Id Departamento</label>
                <input type="text" name="id" class="form-control">
            </div>-->


            <div class="row">

                <div class="col-lg-9 col-md-8 mb-4">
                    <div class="br-input">
                        <label for="input-departamento-nome">Nome do Departamento</label>
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <input id="input-departamento-nome" type="text" name="nome"
                                placeholder="Ex.: Administrativo"></input>
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
                                placeholder="Ex.: ADM"></input>
                        </div>

                    </div>
                </div>

            </div>


            <div class="d-flex justify-content-end">
                <button class="br-button secondary mr-4" type="button">Cancelar</button>
                <button type="submit" class="br-button primary">Cadastrar</button>
            </div>

        </form>
    </main>

</body>

</html>
