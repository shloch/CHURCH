<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<meta name="description" content="Lwanga Kisito">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/messEvenement.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title><?php echo $title; ?></title>
  <link rel="icon" type= "<?php echo base_url() ?>image/jpg" href="img/logoIcon.jpg">
   <!-- calendar links -->
<link href='<?php echo base_url() ?>css/fullcalendar.min.css' rel='stylesheet' />
<link href='<?php echo base_url() ?>css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url() ?>js/moment.min.js'></script>
<script src='<?php echo base_url() ?>js/jquery.min.js'></script>
<script src='<?php echo base_url() ?>js/fullcalendar.min.js'></script>
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2019-01-01',
      navLinks: true, // can click day/week names to navigate views
      //selectable: true,
      selectHelper: true,
      select: function(start, end) {
        var title = prompt('Event Title:');
        var eventData;
        if (title) {
          eventData = {
            title: title,
            start: start,
            end: end
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
        }
        $('#calendar').fullCalendar('unselect');
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'Mess:click pour infos',
          url: 'messEvenement.html',
          start: '2019-01-06',
          color: 'green'
        },
        {
          title: 'Mess:click pour infos',
          url: 'messEvenement.html',
          start: '2019-01-13',
          color: 'green'
        },
        {
          id: 999,
          title: 'Evenement regulier',
          start: '2019-01-09',
          color: 'hotpink'
        },
        {
          id: 999,
          title: 'Evenement regulier',
          start: '2019-01-26',
          color: 'hotpink'
        },
        {
          title: 'Mess:click pour infos',
          url: 'messEvenement.html',
          start: '2019-01-20',
          color: 'green'
        },
        {
          title: 'Mess:click pour infos',
          url: 'messEvenement.html',
          start: '2019-01-27',
          color: 'green'
        },
        {
          title: 'Autres evenement',
          start: '2019-01-17',
          color: 'puple'
        },
        {
          title: 'Autres evenement',
          start: '2019-01-21',
          color: 'puple'
        },
        {
          title: 'Autres evenement',
          start: '2019-01-05',
          color: 'puple'
        },
        {
          title: 'Dinner',
          start: '2018-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'main.html',
          start: '2018-03-28'
        }
      ]
    });

  });

</script>
</head>
<body>
    <?php $this->load->view('design/nav_bar.php'); ?>

    
      <div class="member-title">
        <h3 class="membres">Mess et Evenements</h3>
      </div>

      <div id='calendar'></div>

  <hr />
	
    <!------comment section --->
  <?php $this->load->view($comments); ?>
  <!------comment section [END]--->
		
	<section id='footer'>
      <footer class="footer">
        <a class="media-left" href="contact.html">Contact Rapid</a>
        <span></span>
        <a class="media-left" href="activites.html">Nos activites</a>
        <span></span>
        <a class="media-left" href="selectable.html">Nos programmes</a>
        <div>
          <a href="#"><i class="fa fa-facebook-square" style="font-size:20px;color:#0952a0"></i></a>
                <a href="#"><i class="fa fa-instagram" style="font-size:20px;color:red"></i></a>
                <a href="#"><i class="fa fa-twitter-square" style="font-size:20px;color:#47cad8"></i></a>
          <a href="#"><i class="fa fa-whatsapp" style="font-size:20px;color:#2c7f46"></i></a>
        </div>
        <p>&copy; Copyright 2018 </p>
      </footer>
  </section>
    
</body>
</html>
