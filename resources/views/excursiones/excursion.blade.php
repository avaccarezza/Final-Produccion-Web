<!DOCTYPE html>

       
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/estilos.css">
  
    <script src="js/app.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
    <title>Casa de campo</title>
</head>
<body>


<div class="fondo">
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1> Casa de campo </h1>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</header>

<!-- menu sandwich -->

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">


                           
    
    <li class="nav-item">
        <a class="nav-link" href="<?=route("web.index")?>">Inicio </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=route("web.excursiones")?>">Excursiones </a>
    </li>
     
    </ul>
    <ul class="navbar-nav mr-0">
    
    <?php
        if(Auth::check()):
    ?>
    <li>
        <a class="nav-link"><?=Auth::user()->usuario ?></a>
    </li>
    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
            </li>
            <?php
                else:
            ?>
    
    
                <li class="nav-item">
                <a class="nav-link " href="<?=route("register"); ?>">Registrarse</a>
                </li>
                <li class="nav-item">
        <a class="nav-link" href="<?=route("login"); ?>">Iniciar Sesion </a>
    </li>
    <?php
        endif;
    ?>

<?php
                if(Auth::check()):
                    if(Auth::user()->id_perfil == "1"):
            ?>
                   
                   <li class="nav-item">
                            <a href="<?= route("excursiones.index");?>" class="nav-link">Panel</a>
                    </li>
            <?php
                    endif;
                endif;
            ?>
                   
                </ul>   
           
        </div><!-- /.navbar-collapse -->
    </nav>

<main>

    


<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="subtit" >Excursiones</h2>
            </div>
        </div>

       
        
        <div class="row">
            <?php
               
               foreach($excursiones as $excursion):
                    
        ?>    
           
                <div class="col-12 col-md-6 my-6">
                    <div class="card-deck">
                        <div class="card border-default">
                            <div class="card-body">
                                <img class="galexc"  src="<?= "$excursion->imagen"; ?>" alt="<?= $excursion->nombre ?>" class="img-fluid">
                                <h3 class="card-title"><?= $excursion->nombre ?></h3>
                                <p class="scrollable">
                                    <?php
                                        echo $excursion->descripcion;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            <?php
                endforeach;
            ?>
        </div>

        
    </div>
</main>


<footer>
    <p>  &copy;2019 - Agustín Vaccarezza</p>          
</footer>
</div>
</div>