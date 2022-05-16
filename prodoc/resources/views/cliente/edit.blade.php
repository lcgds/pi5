<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista de Clientes</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class = "container mt-5">
    <h1>Cria Clientes</h1>
    <form method="POST" action = "{{route ('cliente.update', $cliente->id) }}">
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
</body>
</html>