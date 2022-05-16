<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Lista Tipos Documentos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<h1>Lista Documentos</h1>
    <a href="{{Route('tipodocumento.create') }}" class="btn btn-lg btn-primary">Criar Tipos Documento</a>
    <div class="row">
    <table class="tabela table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
    <thead>
        <tbody>
            <!--Pega as informações do banco-->
            @foreach($tipodocumentos as $tipodoc)
            <tr>
                    <td>{{$tipodoc->id}}</td>
                    <td>{{$tipodoc->nome}}</td>
                    <td>{{$tipodoc->descricao}}</td>
                    <td> 
                        <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                        <a href="{{ route('tipodocumento.edit',$tipodoc->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="#" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
            </tr>
            @endforeach
                    </tbody>

</table>

</div>
</body>
</html>