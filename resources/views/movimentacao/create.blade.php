<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Movimentações</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class = "container mt-5">
    <h1>Cria Movimentações</h1>
    <form method="POST" action = "{{ route('movimentacao.store') }}">;
        @csrf
        <div class="row">
            <span class="form-label">Id mov</span>
            <textarea class="form-control"></textarea>
        </div>
        <div class="row">
            <span class="form-label">Observação</span>
            <textarea class="form-control"></textarea>
        </div>
       
        <div class="row mt-4">
    <button type="submit" class="btn btn-sucess btn-lg">Salvar</button>
</div>
</form>
</body>
</html>