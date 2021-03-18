<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currículo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
s</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-5 px-5 sm:pt-0">
    <h1>Novo Currículo</h1>
    <hr>
    <form action="/" method="post" class="col-6 offset-xl-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name"  name="name">
        </div>

        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" id="email"  name="email">
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" id="phone"  name="phone">
        </div>

        <div class="form-group">
            <label for="role">Cargo</label>
            <input type="text" class="form-control" id="role"  name="role">
        </div>

        <div class="form-group">
            <label for="schooling">Escolaridade</label>
            <select class="form-control" name="schooling">
                <option value="{{ null }}">Selecione</option>
                <option>Fundamental Completo</option>
                <option>Ensino Médio Incompleto</option>
                <option>Ensino Médio Completo</option>
                <option>Superior Incompleto</option>
                <option>Superior Completo</option>
                <option>Mestrado</option>
                <option>Doutorado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="observation">Observações</label>
            <textarea type="text" class="form-control" id="observation" name="observation"></textarea>
        </div>

        <div class="form-group">
            <label for="curriculum-file">Currículo</label>
            <input type="file" class="form-control-file" id="curriculum-file" name="curriculum-file" accept="application/pdf, application/msword">
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script>
    $("#phone").mask("(00) 0000-0000");
</script>
</html>
