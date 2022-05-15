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
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/or06FN3Dka5tukK1e9sl16pB3iy.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i>9,7</p> 
                    <span class="card-title">Vingadores</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/original/rjkmN1dniUHVYAtwuV3Tji7FsDO.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i>9,7</p> 
                    <span class="card-title">Venom</span>
                    <p>After finding a host body in investigative reporter Eddie Brock, the alien symbiote must face a new enemy, Carnage, the alter ego of serial killer Cletus Kasady.</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>