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
        <a class="nav-link" href="<?=route("web.index");?>">Inicio </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo route("web.excursiones")?>">Excursiones </a>
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

   

    

    




 


<div class="container my-5">
<main>
<div class="caja1">
<h2 class="subtit">La casa</h2>
<div class="row">
    <div class="col-md-6">
        <p>Estamos ubicados en El Bolsón, Río Negro. <br>
            La Casona del Piltri consta de 2 dormitorios, cocina y baño.</p>
        <h3>Esta casa de campo cuenta con: </h3>
            <ul>
                <li>Terraza y jardin</li>
                <li>Vista panorámica</li>
                <li>Bañera con hidromasaje</li>
                <li>TV de pantalla plana</li>
                <li>Pava eléctrica</li>
                <li>Papel higiénico</li>
                <li>Hay estacionamiento gratis privado en el establecimiento.</li>
                <li>¡Wifi gratis!</li>
            </ul>
    </div>
    <div class="col-md-6">
        <img src="img/inicio/casadecampo.jpg" alt="Casa de campo" height="300" width="500">
    </div>
</div>
</div>

<div class="caja2">
    <h2 class="subtit">Actividades</h2>
        <div class="row">
            <div class="col-md-6">
                <p>Desde el momento que comenzás tu viaje la Naturaleza no dejará de sorprenderte, te encontrarás 
                   con el Río Azul, su agua cristalina y el azul como su nombre lo indica te impactará!</p>
                <p>Caminar sobre puentes colgantes observando el río, admirar la inmensidad de la vegetación, despertar
                   en un paraiso donde conforme comienza a salir el sol, se desvela la magia de todo lo que alcanzan 
                   a ver tus ojos y lo que no se ve se percibe.</p>
            </div>
            <div class="col-md-6">
        
                <p>Los amaneceres acompañan los aromas de las plantas de la región y los desayunos de campo, un placer 
                   para dejarse llevar...</p>
                <p>Las caminatas con ese olor tan peculiar del bosque son sensacionales, tenemos guías expertos para
                   realizar excursiones, cabalgatas o podés participar de las tareas que se realizan diariamente en La
                   CASA DE CAMPO, como huerta orgánica, darle la mamadera a los corderitos y mucho más...</p>
                <p>¡Viví la Naturaleza en todo su Explendor!</p>
            </div>
        </div>
</div>   

<div class="caja3">
    <div class="row">
        <div class="col-md-6" >
            <img src="img/inicio/rioazul.jpg" alt="El Río Azul" height="300" width="500">
        </div>
        <div class="col-md-6"  >
            <img src="img/inicio/cabalgata.jpg" alt="Cabalgata" height="300" width="500" >
        </div>
    </div>
</div>

</div>

</main>
    
<footer>
    <p>  &copy;2019 - Agustín Vaccarezza</p>          
</footer>
</div>
</div>
    
    


</body>
</html>