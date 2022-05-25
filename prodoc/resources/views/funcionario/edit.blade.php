<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Lista de Funcionarios</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container mt-5">
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
                <a href="{{ Route('funcionario.index'); }}">Funcionários</a>
            </li>

            <li class="crumb" data-active="active">
                <i class="icon fas fa-chevron-right"></i>
                <span>Editar</span>
            </li>
        </ul>
    </div>
    <h1>Editar Funcionarios</h1>
    <form method="POST" action="{{route ('funcionario.update', $funcionario->id) }}">
        @csrf
        <div class="row">
            <span class="form-label">Id funcionario</span>
            <input type="text" name="id" class="form-control" value="{{ $funcionario->id }}">
        </div>
        <div class="row">
            <span class="form-label">Nome</span>
            <textarea class="form-control" name="nome"> {{ $funcionario->nome }} </textarea>
        </div>
        <div class="row">
            <span class="form-label">Email</span>
            <textarea class="form-control" name="email"> {{ $funcionario->email }} </textarea>
        </div>
        <div class="row">
            <span class="form-label">Telefone</span>
            <textarea class="form-control" name="telefone"> {{ $funcionario->telefone }} </textarea>
        </div>
        <div class="row mt-4">
            <button type="submit" class="btn btn-sucess btn-lg">Salvar</button>
        </div>
    </form>
</body>

</html>
