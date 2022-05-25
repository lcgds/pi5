<!DOCTYPE html>
<html lang="pt-br">

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
                    <a href="{{ Route('documento.index'); }}">Documentos</a>
                </li>

                <li class="crumb">
                    <i class="icon fas fa-chevron-right"></i>
                    <a href="{{ Route('tipodocumento.index'); }}">Tipos de Documentos</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Cadastrar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Cadastro de Tipo de Documento</h2>

        <form class="bg-gray-3 p-5 mb-5" method="POST" action="{{ route('tipodocumento.store') }}">

            @csrf

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="br-input">
                        <label for="input-tipoDocumento-nome" class="form-label">Título</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-file" aria-hidden="true"></i>
                            </div>
                            <input id="input-tipoDocumento-nome" type="text" class="form-control" name="nome"
                                placeholder="Ex.: Memorando"></input>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="br-textarea">
                        <label for="textarea-tipoDocumento-descricao">Descrição</label>
                        <textarea id="textarea-tipoDocumento-descricao"
                            placeholder="Digite aqui a descrição do tipo de documento." rows="4" maxlength="300"></textarea name="descricao">
                        <div class="text-base mt-1">
                            <span class="limit">Limite máximo de <strong>300</strong> caracteres</span>
                            <span class="current"></span>
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
