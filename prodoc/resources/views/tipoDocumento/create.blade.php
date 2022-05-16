<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>
    <x-header />

    <main class="container">
        
        <h2 class="my-5">Cadastrar Tipo de Documento</h2>

        <form method="POST" action="{{ route('tipodocumento.store') }}">
            @csrf
            <div class="row">
                <span class="form-label">Id</span>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="row">
                <span class="form-label">Nome</span>
                <textarea class="form-control" name="nome"></textarea>
            </div>
            <div class="row">
                <span class="form-label">Descrição</span>
                <textarea class="form-control" name="descricao"></textarea>
            </div>

            <div class="d-flex justify-content-end">
                <button class="br-button secondary mr-4" type="button">Cancelar</button>
                <button type="submit" class="br-button primary">Cadastrar</button>
            </div>
        </form>
    </main>

</body>

</html>
