<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Lista Documentos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<h1>Lista Documentos</h1>
    <a href="{{Route('documento.create') }}" class="btn btn-lg btn-primary">Criar Documento</a>
    <div class="row">
    <table class="tabela table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descriçao</th>
                <th>Status</th>
            </tr>
    <thead>
        <tbody>
            <!--Pega as informações do banco-->
            @foreach($documentos as $doc)
            <tr>
                    <td>{{$doc->nome}}a</td>
                    <td>{{$doc->descricao}}</td>
                    <td>{{$doc->status}}</td>
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