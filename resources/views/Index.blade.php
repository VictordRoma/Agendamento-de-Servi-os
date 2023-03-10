<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'    
            ])
     
        
    </head>

    <body>
           

            <div class="container" >
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Consultar</a>
                </li> 
                </ul>
            </div>
            </nav>
                <form>
                    <h2>Cadatrar - Agendamentos de Potenciais Clientes</h2>
                    <h5>Sistema utilizado para agendamenos de serviços</h5>


                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="(xx)xxxxx-xxxx">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Origem</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Celular">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Date do Contato</label>
                        <input type="datetime-local" class="form-control" id="exampleFormControlInput1">
                    </div>

                    

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Observações</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
