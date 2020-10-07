<?php 
  $tituloPrincipal = "Ejercicio 1";
  $tituloSecundario = "N&uacute;mero Inverso";
  $parrafo = "Elabore un programa que solicite al usuario la introducci&oacute;n de un n&uacute;mero de tres d&iacute;gitos y que lo imprima en orden inverso.";
?>

<aside class="aside1  sombra">
  <div class="card border-light">
    <h5 class="card-header"><?php echo($tituloPrincipal); ?></h5>
    <div class="card-body">
      <h5 class="card-title"><?php echo($tituloSecundario); ?></h5>
      <p class="card-text"><?php echo($parrafo); ?></p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
      Mostrar
      </button> 

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content ">
            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel"><?php echo($tituloPrincipal); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                            
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</aside>
