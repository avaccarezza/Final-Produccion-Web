<!DOCTYPE html>
<base href="<?= asset("");?>">
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
                    <h1> Panel de control</h1>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</header>

<!-- menu sandwich -->
<div class="fondo">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    
    <ul class="navbar-nav mr-auto">                    
        <li class="nav-item active">
                <img id="logopanel" src="img/logo.png" alt="logo casa de campo">
        </li>    
        <li class="nav-item active">
            <a class="nav-link" href="<?=route("web.index");?>">Casa de Campo</a>
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
                endif;
            ?>
                   
                        <li class="nav-item ">
                            <a href="<?=route("excursiones.index");?>" class="nav-link">PANEL</a>
                        </li>
                    
                </ul>   
            
        </div><!-- /.navbar-collapse -->
            
    </nav>


<div class="container my-5">
<div class="bg-login">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="user_card">
                <div class="d-flex justify-content-center form_container">
                    <form class="form" action="<?= route("personal.store") ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?= csrf_token() ?>">
                        <div class="subtit">
                            <h2>Crear Personal</h2>
                        </div> 
                       
    
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <input type="text" class="form-control" name="nombre" id="nom-exc" placeholder="Nombre de Personal" >                               
                        </div>
                        
                            
                            <div id="textarea" class="d-flex justify-content-center mt-3 login_container">
                                <textarea  name="descripcion"  rows="3" placeholder="  Descripcion"></textarea>
                            </div>
                            
                            <div id="textarea" class="d-flex justify-content-center mt-3 login_container">
                            <input type="text" class="form-control" name="anio_ingreso" id="nom-exc" placeholder="Año de ingreso" >
                            </div>
                           <div id="textarea" class="d-flex justify-content-center mt-3 login_container">
                            <input type="text" class="form-control" name="sueldo" id="nom-exc" placeholder="Sueldo" >
                            </div>
                           

                            <div class="d-flex justify-content-center mt-3 login_container" >
                                <div class="form-group">
                                  
                                  <input accept="image/jpeg" type="file" class="form-control-file" name="imagen" id="imagen" aria-describedby="fileHelpId">
                                  <small id="fileHelpId" class="form-text text-muted">El formato de la imágen debe ser <b>.jpg</b></small>
                                </div>
                            </div>
                            
                        <div class="mt-4">
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button class="boton1" type="submit" >Crear Personal</button>
                                <button class="boton2" type="reset">Limpiar</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <footer>
         <p> &copy;2019 - Agustín Vaccarezza</p>             
    </footer>
</div>
</div>
    
    


</body>
</html>