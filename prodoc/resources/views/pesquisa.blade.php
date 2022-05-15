<!DOCTYPE html>
<html lang="pt-BR">
<x-head />

<body>
    <x-header />
    <main class="container">
        <h2 class="my-5">Buscar documento</h2>
        <form class="bg-gray-3 p-5 mb-5" action="" method="get">
            @csrf
            <div class="br-input">
                <label for="input-pesquisa" class="form-label">Número identificador do documento</label>
                <div class="input-group">
                    <div class="input-icon"><i class="fas fa-file" aria-hidden="true"></i>
                    </div>
                    <input id="input-cliente-nome" type="text" class="form-control" name="nome"
                        placeholder="Ex.: 012345"></input>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="br-button primary"><i class="fas fa-search" aria-hidden="true"></i>Pesquisar</button>
                </div>
        </form>
    </main>
</body>

</html>
