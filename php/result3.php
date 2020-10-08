<aside class="resultado3  sombra">
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

          <div class="modal-content">

            <div class="modal-header ">
              <h5 class="modal-title" id="exampleModalLabel"><?php echo($tituloPrincipal); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="#">
              <div class="modal-body" id="ejercicio1">

                <div class="form-group">
                  <label for="exampleInputEmail1">Ingresar Numero</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group ">
                  <label for="exampleInputPassword1">Resultado</label>
                  <input type="number" name="result" class="form-control" id="exampleInputPassword1" value="10">                  
                </div>  

                <button href="mostrar.php" type="submit" class="btn btn-primary">Invertir</button>
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