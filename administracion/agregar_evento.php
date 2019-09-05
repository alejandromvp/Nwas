<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>agregar player</title>
  <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Theme CSS -->
  <link href="../css/freelancer.min.css" rel="stylesheet">
  <link href="../css/caja_comentarios.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Administracion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="agregar_evento.php">Eventos<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Agregar Player</a>
        </li>
      </ul>
    </div>
  </nav>

   <div id="caja_mensajes_div">
        <div id="form">
        <h3 style="margin-top: 15px;">agregar evento: </h3>
        <input type="text" id="titulo" placeholder="Descripcion Evento" class="form-control">
        <input type="text" id="fecha_inicio" placeholder="Agregar fecha evento" class="form-control">
        <input type="submit" value="Enviar" id="enviar" class="btn btn-primary btn-lg btn-block">
        </div>    
        <hr>        
      </div>
        <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
  <script src="../js/firebase.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(document).ready(function(){    
        firebase = conectarFirebase();
        const db = firebase.database();
        var ref = db.ref("eventos");

         $("#enviar").click(function(){   
           var titulo_txt =  $("#titulo").val();
           var fecha_inicio_txt =  $("#fecha_inicio").val();
            if(titulo_txt != "" && fecha_inicio_txt != ""){
                let nuevo_evento = ref.push();
                nuevo_evento.set({
                  nombre_evento: titulo_txt,
                  fecha_inicio :fecha_inicio_txt
                }); 
             $("#titulo").val('');
             $("#fecha_inicio").val('');
            }else{
            alert("porfavor complete todos los campos");     
            }  
         }); 
     });
  </script>
  <script>
    $(function(){
      $("#fecha_inicio").datepicker({
        dateFormat: "yy-mm-dd"
      });
    });
  </script>
</body>
</html>