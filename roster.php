<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>New Angels - Starcraft 2</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="./css/caja_comentarios.css" rel="stylesheet">
   <style>
    .imagen{
      -webkit-transition:all .9s ease; /* Safari y Chrome */
      -moz-transition:all .9s ease; /* Firefox */
      -o-transition:all .9s ease; /* IE 9 */
      -ms-transition:all .9s ease; /* Opera */
      width:100%;
       }
    .imagen:hover
      {
      -webkit-transform:scale(1.25);
      -moz-transform:scale(1.25);
      -ms-transform:scale(1.25);
      -o-transform:scale(1.25);
      transform:scale(1.25);
      }
    #portfolio{
      margin-top:50px;
}
  </style>
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
       <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" alt="starcraft logo" width="120px" height="80px"></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./index.php">Inicio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="noticias/index.php">Noticias</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Roster</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="calendario/index.php">Calendario Eventos</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Quienes Somos</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contactanos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
  <!-- Portfolio Section -->
  <section class="page-section-roster portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase mb-0" style="color: #403a05;">Roster</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row" id="items_player">
        <!-- Los player se agregan con javascript -->
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Localizacion</h4>
          <p class="lead mb-0">Tarsonis
            <br><!-- Clark, MO 65243 --></p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Nuestras Redes Sociales</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/newAngels2/" target="_blank">
            <i class="fab fa-fw fa-facebook-f">
            </i>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/channel/UCKYC18Otfm2VaGgwjMX_gHQ">
            <i class="fab fa-youtube"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
            <img class="masthead-avatar mb-5" src="img/zealot.png" alt="">
        </div>

      </div>
    </div>
  </footer>

<!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 .col-sm-12">
             <small>New Angels &copy; 2019 </small>
        </div>
        <div class="col-lg-3 .col-sm-12">
             <div class="text-white">developed by 
              <a href="https://www.facebook.com/alejandro17a" style="color:#DC4323;">AlejandroMVP</a>
             </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->

  <div id="items-modals">

  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
  <script src="../../js/moment_español.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
  <script src="./js/firebase.js"></script>
  <script>
     $(document).ready(function(){    
        var firebase = conectarFirebase();
        const db = firebase.database();
        var ref = db.ref("roster");
        //napshot.key
        ref.orderByChild("posicion_web").on("child_added", function(snapshot){
            var value = snapshot.val();
            var key = snapshot.key;
            var ref_comentario = db.ref("roster/"+key+"/comentarios");
            $("#items_player").append(
                '<div class="col-md-6 col-lg-4">'+
                  '<h3 class="roster_title">'+value.nick+'</h3>'+
                  '<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#'+value.id_modal+'">'+
                    '<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">'+
                     ' <div class="portfolio-item-caption-content text-center text-white">'+
                        '<i class="fas fa-plus fa-3x"></i>'+
                      '</div>'+
                    '</div>'+
                    '<img class="img-fluid" src="img/roster/'+value.img+'" alt="" style="width: 300px;height: 300px;">'+
                  '</div>'+
                '</div>'
            ); 
            var funcion ='<input type="submit" class="btn btn-primary" value="Publicar comentario" id="enviar"' + "onclick = list_comentarios('"+key+"');  " +'>';
            var comentario = "";
            ref_comentario.orderByChild("fecha").on("child_added", function(snapshot){
            var value = snapshot.val();
                comentario = comentario.concat('<div"><p>Fecha mensaje:<b style="color:#403a05"> '+(value.fecha)+'</b><p/><p>Nickname:<b style="color:#403a05">'+value.nick+'</b><p/><p>Mensaje: <b style="color:#403a05">'+value.mensaje+'</b><p/><hr>');
       
            });


            $("#items-modals").append(
            '<div class="portfolio-modal modal fade" id='+value.id_modal+' tabindex="-1" role="dialog" aria-labelledby="'+value.id_modal+'Label" aria-hidden="true">'+
              '<div class="modal-dialog modal-xl" role="document">'+
                '<div class="modal-content">'+
                  '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                    '<span aria-hidden="true">'+
                      '<i class="fas fa-times"></i>'+
                    '</span>'+
                  '</button>'+
                  '<div class="modal-body text-center">'+
                    '<div class="container">'+
                      '<div class="row justify-content-center">'+
                        '<div class="col-lg-8">'+
                          '<h2 class="portfolio-modal-title title_modal text-uppercase mb-0">'+value.nick+'</h2>'+
                          '<div class="divider-custom">'+
                            '<div class="divider-custom-line"></div>'+
                            '<div class="divider-custom-icon">'+
                              '<i class="fas fa-star"></i>'+
                            '</div>'+
                            '<div class="divider-custom-line"></div>'+
                          '</div>'+
                          '<img class="img-fluid" src="img/roster/'+value.img+'" alt="" style="width: 300px;height: 300px;"><br><br>'+
                          '<p class="mb-5" style="font-weight: bold;">'+value.raza+' - '+value.mmr+ ' MMR</p>'+
                          '<div id="caja_mensajes_div">'+
                            '<div id="form">'+
                            '<input type="text" id="'+key+'nick" placeholder="nick" class="form-control">'+
                            '<input type="text" id="'+key+'mensaje" placeholder="Comentario" class="form-control">'+
                             '<input type="text" id="key_id" name="custId" value="'+key+'" hidden>'+
                            funcion+
                             
                              '<h3 style="margin-top: 15px;">Comentarios: </h3>'+
                             '<div id="'+key+'" class="comentaios_list">'+comentario+'</div>'+    
                              '<hr>'+ 
                              '<button class="btn btn-primary" href="#" data-dismiss="modal">'+
                              '<i class="fas fa-times fa-fw"></i>'+
                              'Cerrar'+
                              '</button>'+
                            '</div>'+       
                          '</div>'+
                          
                        '</div>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'
            );
        });

     });
  </script>

  <script>

     function list_comentarios(key){
      const db = firebase.database();
      var key = key;
      var ref2 = db.ref("roster/"+key+"/comentarios");
      var mensaje_txt =  $("#"+key+"mensaje").val();
      var nick_txt =  $("#"+key+"nick").val();
      var fecha_txt = moment().format('MMMM Do YYYY, h:mm:ss a'); // agosto 23º 2019, 4:03:49 pm //
      if(mensaje_txt != "" && nick_txt != ""){
            let nuevocomentario = ref2.push();
            nuevocomentario.set({
                mensaje: mensaje_txt,
                nick :nick_txt,
                fecha: fecha_txt
            }); 
            $("#"+key+"mensaje").val('');
            $("#"+key+"nick").val('');
      }else{
            alert("porfavor complete todos los campos");     
            }

      var comentario = "";
      var ref_reset_comentario = db.ref("roster/"+key+"/comentarios");
      $('#'+key).empty();
      ref_reset_comentario.orderByChild("fecha").on("child_added", function(snapshot){
          var value = snapshot.val();
          comentario = comentario.concat('<div><p>Fecha mensaje:<b style="color:#403a05"> '+(value.fecha)+'</b><p/><p>Nickname: <b style="color:#403a05">'+value.nick+'</b><p/><p>Mensaje: <b style="color:#403a05">'+value.mensaje+'</b><p/><hr>');
      });
      $('#'+key).append(comentario);
     }
  </script>
</body>

</html>
