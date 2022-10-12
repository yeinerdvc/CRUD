<!DOCTYPE html>
<html>
  <head>
    <title>Eliminacion de Aprendices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="divconsulta" class="container">
       <br>
       <div id="div2consulbor">
          <div id="div4" class="div3menu">
            <form name="formulario" role="form" method="post">
              <div class="col-md-12">
                <strong class="regil">Ingrese criterio de busqueda</strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group col-md-5">
                 <input class="form-control" type="number" name="numid" min="9999" max="9999999999" value="" placeholder="IDENTIFICACIÓN"/>
                 </div>
                   <div class="form-group col-md-3">
                   <input class="btn btn-primary" type="submit" value="Eliminar" >
                   <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
                   </div>
                </div>
                <br>
              </div>
            </form>
            <br>
          </div>

          <div id="divconsulta">
          <?php
          if ($_SERVER['REQUEST_METHOD']==='POST')
          {
              include('funciones.php');
              $vnumid=$_POST['numid'];
              $miconexion=conectar_bd('', 'sena_bd');
              $resultado=consulta($miconexion,"select * from aprindices where apre_numid='{$vnumid}'");
              $resultado2=consulta($miconexion,"delete from aprindices where apre_numid='{$vnumid}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  echo  "id: ".$fila->apre_id."<br>"."Tipo de id: ".$fila->apre_tipoid."<br>"."Numero de identificacion: ".$fila->apre_numid.
                  "<br>"."Nombres: ".$fila->apre_nombres."<br>"."Apellidos: ".$fila->apre_apellidos."<br>"."Direccion: ".$fila->apre_direccion.
                  "<br>"."Telefono: ".$fila->apre_telefono."<br>"."Ficha: ".$fila->apre_ficha."<br>";
                  if($resultado2)
                  echo "<br> Datos borrados exitosamente";
              }
            else{
                echo "No existen registros";
                }
            $miconexion->close();
          }?>
          </div>
       </div>
    </div>
  </body>
</html>