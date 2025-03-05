<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body class="body-register">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="navbar-brand text-center mb-6">OTOMIPEDIA</h5>
              <h5 class="card-title text-center mb-5 fw-light fs-5" style="font-family: Lucida Sans">REGISTRO</h5>
                
              <form action="saveregister.php" method="post">
              
                  <div id="Usuarios" class="form-floating mb-3">
                    
                      
                    <tr><td><input type="text" class="form-control" id="nombre" name="nombre" placeholder="Osvaldo Jimenez" style="background-color: white;"/></td>
                    <td><label for="floatingInput" style="font-family: Lucida Sans">nombre</label></td></tr>
                  </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" style="background-color: white;">
                  <label for="floatingInput" style="font-family: Lucida Sans">correo electronico</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control fw-bolder" id="contraseña" name="contraseña" placeholder="Password" style="background-color: white;">
                  <label for="floatingPassword" style="font-family: Lucida Sans" >contraseña</label>
                </div>
                <div class="d-grid">
                  <button name="Regisstrarse" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" style="font-family: Lucida Sans">REGISTRARSE</button>
                  <hr class="my-4">
                  <button class="btn btn-google btn-login text-uppercase fw-bold" style="font-family: Lucida Sans">
                    <a href="index.php">REGRESAR</a> 
                  </button>
                </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>