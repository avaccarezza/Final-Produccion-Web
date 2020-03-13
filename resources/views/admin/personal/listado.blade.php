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

    <main>
    <section>
    <div class="container my-5">
 
 <h2 class="subtit">Lista del personal</h2>
 <table class="table table-dark">
              
     <a id="boton3" href="<?=route("personal.create")?>" class="btn btn-info  float-right my-1 ml-2 ">Agregar Personal</a>
     
     <thead>
       <tr>
       
       <th>Personal</th>
        <th>Descripcion</th>
        <th>Sueldo</th>
        <th>Imagen</th>
        <th>Acciones</th>
       </tr>
     </thead>
     <tbody>
 <?php
  
   
  foreach($personal as $per):
 
 ?>
       <tr>
       
         <td ><?= $per->nombre; ?></td>
         <td><?= $per->descripcion; ?></td>
         <td><?= $per->sueldo; ?></td>
         
         <td><img width="200" src="<?= $per->imagen ?>" alt="<?= $per->nombre; ?>"></td>
         <td>
             <form action="<?= route("personal.delete", $per->id) ?>" method="post">
             <input type="hidden" name="_token" value="<?= csrf_token() ?>">
             <input type="hidden" name="_method" value="DELETE">
             <button id="boton3"  type="submit" class="btn btn-info my-1">Eliminar Personal </button>
             <br>
             <a id="boton3" href="<?=route("personal.edit",$per->id)?>" class="btn btn-info  float-right my-1 ">Editar Personal</a>
            </form>
             
         </td>
       </tr>
       
       <?php
       
    endforeach;
       ?>
     </tbody>
   </table>
   
    </section>
    </main>


 
    
<footer>
    <p>  &copy;2019 - Agustín Vaccarezza</p>             
</footer>
</div>
</div>
    
    


</body>
</html>