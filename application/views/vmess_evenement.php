<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="<?php echo base_url() ?>js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>js/jquery-ui-1.12.1.custom/jquery-ui.css">
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  });
  </script>


<section id='activites'>
		<div class="member-title">
			<h3 class="membres">Mess et evenements</h3>
		</div>

	<div class="container">
      <p class="lead">
          Retrouvez tous les program de la chorale!
      </p>
      <p>Date: <input type="text" id="datepicker"></p>
	</div>

	</section>


  <hr />
  
    <!------comment section --->
  <?php // $this->load->view($comments); ?>
  <!------comment section [END]--->
		