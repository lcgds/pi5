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
            @method('PATCH')
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

            <div class="col-lg-4 col-md-5 col-sm-12 ml-lg-4 mb-4">
                    <div class="br-select">
                        <div class="br-input">
                            <label for="select-cliente">Tipo Documento</label>

                            <div class="input-group">

                                <div class="input-icon"><i class="fas fa-search"></i></div>
                                <input id="select-cliente" type="text" placeholder="Selecione um tipo" />
                            </div>

                            <button class="br-button circle small" onclick="" type="button" tabindex="-1" data-trigger>
                                <span class="sr-only">Exibir lista</span><i class="fas fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="br-list" tabindex="0">
                            <div class="br-item divider" tabindex="-1">
                                <div class="br-radio">
                                 <!-- <input id="rb0" type="radio" name="opcao" value="opcao1" />
                                     <label for="rb0">Opção 1</label>
                                    <span class="form-label">TipoDocumento</span> 
               <select class="form-select" name="tipodocumento_nome">-->
                   @foreach($tipodocumentos as $tipodoc)
                    <option value="{{$tipodoc->id}}" @if($tipodoc->id == $documento->tipodocumento_id) selected @endif>
                        {{$tipodocumento->nome}} 
                    </option>
                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            <div class="d-flex justify-content-end">
                <button class="br-button secondary mr-4" type="button">Cancelar</button>
                <button type="submit" class="br-button primary">Editar</button>
            </div>
        </form>
    </main>

</body>

</html>
