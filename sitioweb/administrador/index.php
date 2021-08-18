<?php
session_start();
if($_POST){
    if (($_POST['usuario']=="alxsoporte")&&($_POST['contrasenia']=="sistema")) {
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="alxsoporte";
        header('Location:inicio.php');
    }
else{
    $mensaje="Error: el usuario o contraseña son incorrectos";
}

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body background="../img/fondo.jpg">
   <div class="container">
       <div class="row">
           <div class="col-md-4">
               
           </div>
           <div class="col-md-4">
               <br/> <br/> <br/>

           <div class="card">
               <div class="card-header">
                   <h3 class="text-center" >Login</h3>
               </div>
               <div class="card-body">
                   <?php if(isset($mensaje)){?>
                   <div class="alert alert-danger" role="alert">
                       <?php echo $mensaje ?>
                   </div>
                   <?php } ?>
                   <form method="POST">
                   <div class = "form-group">
                   <label><h5>Usuario</h5></label>
                   <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario">
                   <small id="emailHelp" class="form-text text-muted">Nunca comparta su usuario o contraseña con nadie</small>
                   </div>

                   <div class="form-group">
                   <label><h5>Contraseña</h5></label>
                   <input type="password" class="form-control" name="contrasenia" placeholder="Ingrese su contraseña">
                   </div>

<!--                    <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                   <label class="form-check-label" for="exampleCheck1">Check me out</label>
                   </div> -->
                   <button type="submit" class="btn btn-primary">Ingresar al Administrador</button>
                   </form>
               </div>
               
           </div>
               
           </div>
           
       </div>
   </div>
  </body>
</html>