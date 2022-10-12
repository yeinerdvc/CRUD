<!DOCTYPE html>
<html>
  <head>
    <title>Crear Programa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="div1" class="container">
        <br>
        <div id="div2" >
           <?php session_start(); if(! empty($_SESSION['Tipo_usuario']))  ?> 
           <div id="div3" class="div3menu">
           <?php
             if($_SESSION['Tipo_usuario']=='Admin')
             {
             ?>
             <form id="formulario" role="form" method="post" action="guardado_programa.php">
             <div class="cold-md-12">
               <strong class="regil">Cree el programa</strong>
               <br>
               <label class="regil">Nombre:</label>
               <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" required/>

               <label class="regil">Tipo Programa:</label>
               <div class="form-row">
                <div class="form-group col-xs-2">
                <select class="form-control" name="Tiposprograma"  required>
                  <option value="presencial" selected>Presencial</option>
                  <option value="virtual" >Virtual</option>
                  <option value="mixta" >Mixta</option>
                </select>
                </div>         
                </div>              
                  <br><br>
               <input class="btn btn-primary" type="submit" value="Guardar">
               <input style="width: 15%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
             </div>
             </form>
            <?php
             }
             else
             {
                 echo "No tiene permisos para realizar esta acción";
             }
            ?> 
            <br>
           </div>
        </div>
    </div>
  </body>
</html>