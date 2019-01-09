<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Lwanga Kisito">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>css/equipe.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/quiSommeNous.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/activites.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/ilsEnParlent.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/galerieImages.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/galerieVideos.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/contact.css">
	
<!-- Calender CSS -->
    <link href='<?php echo base_url();?>css/fullcalendar.min.css' rel='stylesheet' />
    <link href='<?php echo base_url();?>css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link href="<?php echo base_url();?>css/messEvenement.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Calender CSS {end} -->


	 <title><?php echo $title; ?></title>
	 <link rel="icon" type= "<?php echo base_url() ?>image/jpg" href="img/logoIcon.jpg">
</head>

<body>

        <?php
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $this->load->view('design/admin_nav_bar.php'); 
        } 

        ?>
    

    <center>
        <?php
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            echo '<b><u><a href="'.site_url('admin/disconnect').'" title="deconnection"> DECONNECTION </a></u><b>';

        } 

        ?>
    </center>
    <!-- ---- include -------->
    <?php $this->load->view($include); ?>
   <!---- end inlclud ---->
   
	<section id='footer'>
        <?php $this->load->view('design/admin_footer.php'); ?>			
	</section>
		

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!--
    <script src="<?php echo base_url() ?>js/jquery.validate.js"></script>
    <script src="<?php echo base_url() ?>js/forms.js"></script> 
    -->
    

    <!-----TinyMCE ----->
    <script src="<?php echo base_url() ?>js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    
</body>

</html>