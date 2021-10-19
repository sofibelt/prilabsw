<!-- para ayuda: https://styde.net/copiar-plantillas-de-html-y-css-estaticas-a-laravel-6/-->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--FRAMEWORK BOOTSTRAP Para el estilo de la pagina-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Los iconos tipo solid de fontawesome-->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solic.css">-->
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!--Nuestro css-->
    <link rel="stylesheet" href="/statics/css/style.css" />
    <!--Nuestro javascript-->
    <script src="/statics/javascript/usuario.js"></script>
    <meta charset="utf-8">
    <title>pagina web</title>
  </head>
  <body>
    <div class="modal-dialog text-center">
      <div class="col-sm-12 main-section"><!--utilize tres cuartos de toda la pantalla-->
        <div class="modal-content"><!--crea una liniesita al rededor del div-->
          <div class="col-12 user-img">
             <img src="/statics/img/user" alt="profile Pic" height="200" width="200">
          </div>
          <form class="col-12" method="POST">
            @csrf
            <div class="form-group" id="user-group">
              <input name="nom" type="text" class="form-control" placeholder="Nombre de usuario">
            </div>
            <div class="form-group" id="contrasena-group">
              <input name='con' type="password" class="form-control" placeholder="Contraseña">
            </div>

            <button  class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>Ingresar</button><!--fas fas-sign-in-alt: esto nos saca esa cosita rara al lado de ingresar-->
          </form>
          <div class="col-12 forgot">
              <a href="#">Recordar contraseña</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
