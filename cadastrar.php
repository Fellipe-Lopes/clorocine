<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    <title>Clorocine</title>
</head>
<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="galeria.php">Galeria</a></li>
            <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-extended purple lighten-3 center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content purple darken-1">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#test1">Todos</a></li>
            <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
            <li class="tab"><a href="#test3">Favoritos</a></li>
        </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Cadastrar filmes</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" require>
                            <label for="titulo">Titulo do filme</label>
                        </div>
                    </div>

                    <!--input sinopse-->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                     <!--input nota-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                            <label for="nota">nota</label>
                        </div>
                    </div>

                    <!--input capa do filme-->
                    <form action="#">
                        <div class="file-field input-field">
                        <div class="btn purple light-3">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                        </div>
                    </form>
        

                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light  btn grey" href="galeria.php">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn purple">Confirmar</a>
                </div>
            </div>
        </div>
    </div>