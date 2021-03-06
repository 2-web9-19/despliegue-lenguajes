<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lenguajes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
  <body>
    <?php include("nav.inc")?>
    <div class="container">
       <div class="jumbotron">
          <h1 class="display-4">Bienvenido!</h1>
          <p class="lead">Aqui encontraras un poco de información sobre algunos lenguajes de programacion que hemos dado en el curso de Desarrollo de aplicaciones Güeb del IES Jovellanos 2018-2019.</p>
        </div>
        <!-- ESTILO IMPLICITO EN ESTA ETIQUETA!!! -->
        <div class="row" style="justify-content: space-around">
            <div class="card" style="width: 18rem;">
              <img src="img/450_1000.png" class="card-img-top" alt="Java logo">
              <div class="card-body">
                <h5 class="card-title">Java</h5>
                <p class="card-text">Lenguaje semicompilado de maquina virtual mas estricto que tu abuela a la hora de vestirte en pleno invierno.</p>
                <a href="java.php" class="btn btn-primary">Leer Mas</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="img/php-27-226042.png" class="card-img-top" alt="PHP logo">
              <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text">Lenguaje interpretado util en entornos web cuya misión es inundarte a Warnings y Notices.</p>
                <a href="php.php" class="btn btn-primary">Leer Mas</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="img/ecmascript-logo-bf5110fcdc155bf03a62c7863573ec65-21213.png" class="card-img-top" alt="EcmaScript logo">
              <div class="card-body">
                <h5 class="card-title">EcmaScript</h5>
                <p class="card-text">También conocido como JavaScript, la razon y la solucion de todos tus problemas, no puedes vivir sin este lenguaje, pero estarias mejor sin el.</p>
                <a href="es.php" class="btn btn-primary">Leer Mas</a>
              </div>
            </div>
        </div>
    </div>
    <?php include("footer.inc")?>
    
  </body>
</html>