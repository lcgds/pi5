<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>
    <x-header />

    <main class="container">

        <h1 class="my-5">Cadastro de Cliente</h1>

        <form class="bg-gray-3 p-5 mb-5" method="POST" action="{{ route('cliente.store') }}">
            @csrf
            <p class="text-bold">Informações básicas</p>

            <!--<div class="row">
                <span class="form-label">Id Cliente</span>
                <input type="text" name="id" class="form-control">
            </div>-->

            <div class="row">

                <div class="col-lg-7 col-md-7 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-nome" class="form-label">Razão social</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-building" aria-hidden="true"></i>
                            </div>
                            <input id="input-cliente-nome" type="text" class="form-control" name="nome"
                                placeholder="Ex.: PRO DOC LTDA."></input>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-5 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-check"></i>
                            </div>
                            <input type="text" id="input-cliente-cnpj" class="form-control" name="cnpj"
                                placeholder="Ex.: 00.000.000/0000-00"></input>
                        </div>

                    </div>
                </div>

            </div>

            <p class="text-bold">Dados para contato</p>

            <div class="row">
                <div class="col-lg-8 col-md-8 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-email" class="form-label">E-mail</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-envelope" aria-hidden="true"></i>
                            </div>
                            <input id="input-cliente-email" type="email" class="form-control" name="email"
                                placeholder="Ex.: prodoc@email.com.br"></input>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="br-input">
                        <label for="input-cliente-telefone" class="form-label">Telefone</label>
                        <div class="input-group">
                            <div class="input-icon"><i class="fas fa-phone" aria-hidden="true"></i>
                            </div>
                            <input type="tel" id="input-cliente-telefone" class="form-control" name="telefone"
                                placeholder="Ex.: 99999-9999"></input>
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
