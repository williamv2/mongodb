<!doctype html>
<html lang="en" ng-app="mongodb">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <script src="controlador.js"></script>

    <title>Proyecto Jugadores Mongo!</title>
  </head>
  <body>
  	<div class="container">
  	<div class="row">
  		<div class="col-sm-4">
  			<img src="http://nightdeveloper.net/wp-content/uploads/2014/12/mongo_db.png" style="height: 100px">
  		</div>
  		<div class="col-sm-8">
        <br>
  			<div class="container"><h1>Proyecto Jugadores Mongo!</h1></div>
  		</div>
  	</div>	
    
    </div>
    <div class="container">
     
        <nav class="nav nav-pills nav-justified">
          <a class="nav-item nav-link" href="index.php">Jugadores</a>
          <a class="nav-item nav-link active" href="#">Padres</a>
        </nav>

      <div class="col-md-12">
    	<hr>
          <button type="button" class="btn btn-default btn-md float-right" data-toggle="modal" data-target="#myModalAgree">Agregar</button>
          <h1 class="page-header">Listado Padres</h1>
    	<div ng-controller="controladorpadre" class="table-responsive">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Madre</th>
                    <th>Padre</th>
                   <th colspan="2">Operaciones</th>
                  </tr>
                </thead>
                <tr ng-repeat="pad in padres">
                  <td>{{pad.padres[0]}}</td>
                  <td>{{pad.padres[1]}}</td>
                  <!--<td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalAct" ng-click="selectpadres(pad)"><span class="glyphicon glyphicon-eye-open"></span>Actualizar</button></td>-->
                  <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModaldelet" ng-click="selectpadres(pad)"><span class="glyphicon glyphicon-trash">Eliminar</span></button></td>
                  
                </tr>
              </table>

              <!-- Modal -->
        <div class="modal fade" id="myModalAct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Jugador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="actualizarpad.php">
                  <div class="form-group">
                        <input type="text" class="form-control" id="mnombre" name="mnombre" required="true" ng-model="clickpad.nombres" style="display:none; ">
                        <label>Padres:</label>
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control input-group" id="mmadre" name="mmadre" placeholder="Madre" ng-model="clickpad.padres[0]">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control input-group" id="mpadre" name="mpadre" placeholder="Padre" ng-model="clickpad.padres[1]">
                          </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Actualizar</button>
              </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

                      <!-- Modal -->
        <div class="modal fade" id="myModaldelet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea Eliminar Jugador?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="eliminarpad.php">
                  <div class="form-group">
                        <strong style="color: red;">
                              Vas a eliminar a "{{clickpad.padres[0]}}" y "{{clickpad.padres[1]}}".
                        </strong>
                        <input type="text" class="form-control" id="mmadre" name="mmadre" ng-model="clickpad.padres[0]" style="display:none; ">
                        <input type="text" class="form-control" id="mpadre" name="mpadre" ng-model="clickpad.padres[1]" style="display:none; ">

                  </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
        <div class="modal fade" id="myModalAgree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Padres</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="registrarpad.php">
                  <div class="form-group">
                        
                        <label>Padres:</label>
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control input-group" id="madre" name="madre" placeholder="Madre">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control input-group" id="padre" name="padre" placeholder="Padre">
                          </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Agregar</button>
              </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="myModalAct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Jugador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="actualizarjug.php">
                  <div class="form-group">
                        <label>Nombres:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required="true">
                        <label>Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required="true" >
                        <label>Fecha de Nacimeinto:</label>
                        <input type="date" class="form-control" id="fnaci" name="fnaci" required="true">
                        <label>N° de celular:</label>
                        <input type="number" class="form-control" id="cel" name="cel" min="0" required="true">
                        <label>Ciudad:</label>
                        <input type="text" class="form-control" id="city" name="city" required="true">
                        <label>Pais:</label>
                        <input type="text" class="form-control" id="pais" name="pais" required="true">
                        <br>
                        <label>Padres:</label>
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control input-group" id="madre" name="madre" placeholder="Madre">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control input-group" id="padre" name="padre" placeholder="Padre">
                          </div>
                        </div>
                        <br>
                        <label>Fecha de ingreso:</label>
                        <input type="date" class="form-control" id="fing" name="fing" required="true">
                        <label>Peso:</label>
                        <input type="number" class="form-control" id="peso" name="peso" placeholder="Kg" min="30" max="150" required="true">
                        <label>Estatura:</label>
                        <input type="number" class="form-control" id="estatura" name="estatura" placeholder="cm" min="130" max="220" required="true">
                  </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Agregar</button>
              </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

    <div class="container-fluid" style="display: none;">
	    <form>
		  <div class="form-group">
		  	<label>Nombres</label>
		    <input type="text" class="form-control">
            <label>Apellidos:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required="true" >
            <label>Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="fnaci" name="fnaci" required="true">
            <label>N° de celular:</label>
            <input type="number" class="form-control" id="cel" name="cel" min="0" required="true">
            <label>Ciudad:</label>
            <input type="text" class="form-control" id="city" name="city" required="true">
            <label> Pais:</label>
            <input type="text" class="form-control" id="pais" name="pais" required="true">
            <label>Fecha de ingreso:</label>
            <input type="date" class="form-control" id="fing" name="fing" required="true">
            <label>Peso:</label>
            <input type="number" class="form-control" id="peso" name="peso" placeholder="Kg" min="30" max="150" required="true">
            <label>Estatura:</label>
            <input type="number" class="form-control" id="estatura" name="estatura" placeholder="cm" min="130" max="220" required="true">
                    

            <input type="submit" name="registrar" value="Registrar">
		  </div>
		</form>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>