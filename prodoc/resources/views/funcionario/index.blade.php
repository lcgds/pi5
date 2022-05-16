<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Lista de Funcionarios</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <h1>Lista de Funcionarios</h1>
    <a href="{{Route('funcionario.create') }}" class="btn btn-lg btn-primary">Criar Funcionario</a>
    <div class="row">
    <table class="tabela table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
    <thead>
        <tbody>
            <!--Pega as informações do banco-->
            @foreach($funcionarios as $func)
            <tr>
                    <td>{{$func->id}}</td>
                    <td>{{$func->nome}}</td>
                    <td>{{$func->email}}</td>
                    <td>{{$func->telefone}}</td>
                    <td> 
                        <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                        <a href="{{ route('funcionario.edit',$func->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="#" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
            </tr>
            @endforeach
                    </tbody>

</table>

</div>
</body>
</html>