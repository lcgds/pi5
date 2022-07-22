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
                    <a href="{{ Route('tipodocumento.index'); }}">Tipos de Documentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Editar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Detalhes do Tipo de Documentos</h2>

        <form class="bg-gray-3 p-5" method="POST" action="{{route ('tipodocumento.update', $tipodocumento->id) }}">

            @csrf

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="br-input">
                        <label for="input-tipoDocumento-nome" class="form-label">Título</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-file" aria-hidden="true"></i>
                            </div>
                            <input id="input-tipoDocumento-nome" type="text" class="form-control" name="nome"
                                placeholder="Ex.: Memorando" value="{{$tipodocumento->nome}}"></input>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="br-textarea">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" name="descricao"
                            placeholder="Digite aqui a descrição do tipo de documento." rows="4"
                            maxlength="300">{{$tipodocumento->descricao}}</textarea>
                        <div class="text-base mt-1">
                            <span class="limit">Limite máximo de <strong>300</strong> caracteres</span>
                            <span class="current"></span>
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

    <x-footer-fixed/>

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>
