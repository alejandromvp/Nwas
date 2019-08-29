<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mensajes</title>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
</head>
<body>
	<table class="table" id="table_mensajes">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nombre</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>
  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
  <script src="./js/firebase.js"></script>
  <script>
  	$(document).ready(function(){    
        var firebase = conectarFirebase();
        const db = firebase.database();
        var ref = db.ref("Mensajes");
        var index = 0;
        ref.orderByChild("fecha").on("child_added", function(snapshot){
            var value = snapshot.val();
            var key = snapshot.key;
            $("#table_mensajes tbody").append(
                '<tr>'+
                	'<th scope="row">'+index+'</th>'+
      				'<td>'+value.name+'</td>'+
      				'<td>'+value.mensaje+'</td>'+
      				'<td>'+value.email+'</td>'+
      				'<td>'+value.telefono+'</td>'+
      				'<td>'+value.fecha+'</td>'+
    			'</tr>'
            );
            index = index + 1; 
        });
    });
  </script>
</body>
</html>