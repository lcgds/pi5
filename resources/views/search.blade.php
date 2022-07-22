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
                    <div onclick="window.location = '{{Route('dashboard')}}'" class="br-button circle">
                        <span class="sr-only">
                            Painel inicial
                        </span>
                        <i class="icon fas fa-home"></i>
                    </div>
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
                    <input id="input-cliente-nome" type="text" class="form-control" type="search" name="pesquisa"
                        placeholder="Ex.: 012345">
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="br-button primary"><i class="fas fa-search"
                        aria-hidden="true"></i>Pesquisar</button>
            </div>
        </form>
    </main>

    <x-footer-fixed/>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
