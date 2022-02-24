<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ URL::asset('assets/style.css') }}" rel="stylesheet">
    <title>Faça seu login</title>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action={{Route('usuarios.login')}} method="post">
                            @csrf
                            <h3 class="text-center text-info">Faça seu login</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-info">Usuário:</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-xl" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





    

