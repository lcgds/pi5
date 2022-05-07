<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista Documentos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class = "container mt-5">
    <h1>Cria Documentos</h1>
    <form method="POST" action = "{{ route('documento.store') }}">
        @csrf
        <div class="row">
            <span class="form-label">Id Documento</span>
            <input type="text" name="id" class="form-control">
        </div>
        <div class="row">
            <span class="form-label">Descrição</span>
            <textarea class="form-control" name="descricao"></textarea>
        </div>
        <div class="row">
            <span class="form-label">Status</span>
            <textarea class="form-control" name="Status"></textarea>
        </div>
        <div class="row mt-4">
    <button type="submit" class="btn btn-sucess btn-lg">Salvar</button>
</div>
</form>
</body>
</html>
