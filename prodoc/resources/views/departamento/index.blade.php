<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Lista de Departamentos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <h1>Lista de Departamentos</h1>
    <a href="{{Route('departamento.create') }}" class="btn btn-lg btn-primary">Criar Departamento</a>

    <div class="row">
    <table class="tabela table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sigla departamento</th>
            </tr>
    <thead>
        <tbody>
            <!--Pega as informações do banco-->
            @foreach($departamentos as $dep)
            <tr>
                    <td>{{ $dep->id }}</td>
                    <td>{{$dep->nome}}</td>
                    <td>{{$dep->sigla_departamento}} </td>
                    <td> 
                        <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                        <a href="{{ route('departamento.edit',$dep->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('departamento.destroy',$dep->id) }}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
            </tr>
            @endforeach
                    </tbody>

</table>

</div>
</body>
</html>