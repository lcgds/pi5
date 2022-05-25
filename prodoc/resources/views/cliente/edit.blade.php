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
                    <a href="{{ Route('cliente.index'); }}">Clientes</a>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Editar</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Edição de Cliente</h2>

        <form method="POST" action="{{route ('cliente.update', $cliente->id) }}">
            @csrf
            <div class="row">
                <span class="form-label">Id Cliente</span>
                <input type="text" name="id" class="form-control" value="{{ $cliente->id }}">
            </div>
            <div class="row">
                <span class="form-label">Nome</span>
                <textarea class="form-control" name="nome"> {{ $cliente->nome }}</textarea>
            </div>
            <div class="row">
                <span class="form-label">CNPJ</span>
                <textarea class="form-control" name="cnpj"> {{ $cliente->cnpj }}</textarea>
            </div>
            <div class="row">
                <span class="form-label">Email</span>
                <textarea class="form-control" name="email"> {{ $cliente->email }} </textarea>
            </div>
            <div class="row">
                <span class="form-label">Telefone</span>
                <textarea class="form-control" name="telefone">{{ $cliente->telefone }}</textarea>
            </div>
            <div class="row mt-4">
                <button type="submit" class="btn btn-sucess btn-lg">Salvar</button>
            </div>
        </form>
    </main>

</body>

</html>
