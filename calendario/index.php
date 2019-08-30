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

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
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
 
<div id='calendar-container' style="margin-top: 100px;">
    <div id='calendar'></div>
</div>


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
<script src='./packages/interaction/main.js'></script>
<script src='./packages/daygrid/main.js'></script>
<script src='./packages/timegrid/main.js'></script>
<script src='./packages/list/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      height: 'parent',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      defaultDate: '2019-08-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-08-01',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
        },
        {
          title: 'Mi cumpleaños',
          start: '2019-08-02',
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
          start: '2019-08-16T16:00:00'
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
      ]
    });

    calendar.render();
  });

</script>
</body>
</html>
