<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>agregar player</title>
  <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
</head>
<body>
   <div id="caja_mensajes_div">
        <div id="form">
        <input type="text" id="nick" placeholder="nick" class="form-control">
        <input type="text" id="img" placeholder="img" class="form-control">
        <input type="text" id="posicion_web" placeholder="posicion_web" class="form-control">
        <input type="text" id="raza" placeholder="raza" class="form-control">
        <input type="text" id="mmr" placeholder="mmr" class="form-control">
        <input type="text" id="id_modal" placeholder="id_modal" class="form-control">
        <input type="submit" value="Enviar" id="enviar" class="btn btn-primary btn-lg btn-block">
        </div>
        <h3 style="margin-top: 15px;">Comentarios: </h3>    
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
  <script>
    $(document).ready(function(){    
        firebase = conectarFirebase();
        const db = firebase.database();
        var ref = db.ref("roster");

         $("#enviar").click(function(){   
           var img_txt =  $("#img").val();
           var nick_txt =  $("#nick").val();
           var posicionweb_txt = $("#posicion_web").val();
           var raza_txt =  $("#raza").val();
           var mmr_txt =  $("#mmr").val();
           var idmodal_txt =  $("#id_modal").val();
            if(img_txt != "" && nick_txt != ""){
                let nuevocomentario = ref.push();
                nuevocomentario.set({
                  img: img_txt,
                  nick :nick_txt,
                  posicion_web: posicionweb_txt,
                  raza: raza_txt,
                  mmr:mmr_txt,
                  id_modal: idmodal_txt
                }); 
             $("#img").val('');
             $("#nick").val('');
             $("#posicion_web").val('');
             $("#raza").val('');
             $("#mmr").val('');
             $("#id_modal").val('');
            }else{
            alert("porfavor complete todos los campos");     
            }  
         }); 
     });
  </script>
</body>
</html>