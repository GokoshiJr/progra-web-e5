<?php   
  $tituloPrincipal = "Ejercicio 1";
  $tituloSecundario = "N&uacute;mero Inverso";
  $parrafo = "Elabore un programa que solicite al usuario la introducci&oacute;n de un n&uacute;mero de tres d&iacute;gitos y que lo imprima en orden inverso.";  
?>

<aside class="aside1 sombra">
  <div class="card border-light">
    <h5 class="card-header"><?php echo($tituloPrincipal) ?></h5>
    <div class="card-body">
      <h5 class="card-title"><?php echo($tituloSecundario) ?></h5>
      <p class="card-text"><?php echo($parrafo) ?></p>      
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
        Mostrar
      </button>      
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel"><?php echo($tituloPrincipal) ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
              <div class="modal-body" id="ejercicio1" style="font-size: 40px;">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingrese un n&uacute;mero</label>
                  <input type="number" name="result" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="" style="font-size: 30px;">                  
                </div>                
                <button type="submit" class="btn btn-primary">Invertir</button>
              </div>
            </form> 
            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</aside>
