<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Lista de Clientes</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="{{Route('cliente.create') }}" class="btn btn-lg btn-primary">Criar Clientes</a>
<div class="row">
    <table class="tabela table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
    <thead>
        <tbody>
            <!--Pega as informações do banco-->
            @foreach($clientes as $cli)
            <tr>
                    <td>{{ $cli->id }}</td>
                    <td>{{$cli->nome}}a</td>
                    <td>{{$cli->cnpj}}</td>
                    <td>{{$cli->email}}</td>
                    <td>{{$cli->telefone}}</td>
                    <td> 
                        <a hred="#" class="btn btn-sm btn-info">Visualizar</a>
                        <a hred="#" class="btn btn-sm btn-warning">Editar</a>
                        <a hred="#" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
            </tr>
            @endforeach
                    </tbody>

</table>

</div>



</body>
</html>