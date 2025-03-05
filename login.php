<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body class="body-login">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="navbar-brand text-center mb-6">OTOMIPEDIA</h5>
              <h5 class="card-title text-center mb-5 fw-light fs-5" style="font-family: Lucida Sans">INICIAR SESION</h5>

              <form id="login" name="login" action="loginval.php" method="post" autocomplete="off">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" style="background-color: white;">
                  <label for="floatingInput" style="font-family: Lucida Sans">correo electronico</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control fw-bolder" id="contraseña" name="contraseña"  placeholder="Password" style="background-color: white;">
                  <label for="floatingPassword" style="font-family: Lucida Sans" >contraseña</label>
                </div>
  
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" style="font-family: Lucida Sans">INICIAR SESION</button>
                </div>
                <div class="form-check mb-3">
                    <br>
                    <label style="font-family: Lucida Sans">
                      ¿Aun no tienes una cuenta? <a href="register.php" style="color:rgb(141, 141, 141);" class="navbar-brand text-center mb-6">REGISTRATE</a>
                    </label>
                  </div>
                
                <hr class="my-4">
                <div class="d-grid mb-2">
                  <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit" style="font-family: Lucida Sans">
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