<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='./packages/core/main.css' rel='stylesheet' />
<link href='./packages/daygrid/main.css' rel='stylesheet' />
<link href='./packages/timegrid/main.css' rel='stylesheet' />
<link href='./packages/list/main.css' rel='stylesheet' />

<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Theme CSS -->
<link href="../css/freelancer.min.css" rel="stylesheet">
<link href="../css/caja_comentarios.css" rel="stylesheet">
<style>

  html, body {
    overflow: hidden; /* don't do scrollbars */
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
  }

  #calendar {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 10px;
  }
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
  <section>
    <div class="container" style="margin-top: 100px;max-height: 100vh; overflow: scroll;">
      <!-- Portfolio Grid Items -->
      <div class="row">
        <div class="col-lg-12 .col-sm-12" style="text-align: center;">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </section>



 
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/freelancer.min.js"></script>

<script src='./packages/core/main.js'></script>
<script src='./packages/core/locales-all.js'></script>
<script src='./packages/interaction/main.js'></script>
<script src='./packages/daygrid/main.js'></script>
<script src='./packages/timegrid/main.js'></script>
<script src='./packages/list/main.js'></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
<script src="../js/firebase.js"></script>
<script>
  var firebase = conectarFirebase();
  const db = firebase.database();
  var ref = db.ref("eventos");

   var initialLocaleCode = 'es';
   var localeSelectorEl = 'es';
   var calendarEl = document.getElementById('calendar');

   document.addEventListener('DOMContentLoaded', function() {
    window.value = [];
    // arreglo.push({
    //       'title': 'All Day Event',
    //       'start': '2019-09-14'
    //     });  
    ref.on("child_added", function(snapshot){
            var value = snapshot.val();
            var key = snapshot.key;
            window.value.push({
              'title': value.nombre_evento,
              'start': value.fecha_inicio
            });
            
    }); 
    console.log(window.value);

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      locale: initialLocaleCode,
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: window.value
    });

    calendar.render();

    // build the locale selector's options
    calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
      var optionEl = document.createElement('option');
      optionEl.value = localeCode;
      optionEl.selected = localeCode == initialLocaleCode;
      optionEl.innerText = localeCode;
      localeSelectorEl.appendChild(optionEl);
    });

    // when the selected option changes, dynamically change the calendar option
    localeSelectorEl.addEventListener('change', function() {
      if (this.value) {
        calendar.setOption('locale', this.value);
      }
    });

  });

</script>
</body>
</html>
<!-- events: [
        {
          title: 'All Day Event',
          start: '2019-09-13'
        },
        {
          title: 'Long Event',
          start: '2019-08-07',
          end: '2019-08-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-08-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-09-09T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-08-11',
          end: '2019-08-13'
        },
        {
          title: 'Meeting',
          start: '2019-08-12T10:30:00',
          end: '2019-08-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-08-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-08-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-08-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-08-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-08-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-08-28'
        }
      ] -->