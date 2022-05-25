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

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Editar</span>
                </li>
            </ul>
        </div>

        <h1 class="my-5">Editar Documentos</h1>

        <form method="POST" action="{{route ('documento.update', $documento->id) }}">
            @csrf
            <div class="row">
                <span class="form-label">Id</span>
                <input type="text" name="id" class="form-control" value=" {{$documento->id}} ">
            </div>

            <div class="row">
                <span class="form-label">Descrição</span>
                <textarea class="form-control" name="descricao"> {{$tipodocumento->descricao}} </textarea>
            </div>

            <div class="row">
                <span class="form-label">Status</span>
                <textarea class="form-control" name="status"> {{$documento->status}} </textarea>
            </div>

            <div class="d-flex justify-content-end">
                <button class="br-button secondary mr-4" type="button">Cancelar</button>
                <button type="submit" class="br-button primary">Editar</button>
            </div>
        </form>
    </main>

</body>

</html>
