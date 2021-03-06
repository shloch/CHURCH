<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Lwanga Kisito">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <link rel="stylesheet" href="<?php echo base_url() ?>css/messEvenement.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/font_page_anim.css">
      <link href="https://fonts.googleapis.com/css?family=Cabin|Righteous" rel="stylesheet">
	
  <style>
    body {   
    /*background-color: rgb(208, 236, 208);*/
    }

   


    .table-bordered td, .table-bordered th {
    border: 1px solid #989898;
    }

  </style>

	<link rel="stylesheet" href="<?php echo base_url() ?>css/font_page_anim.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin|Righteous" rel="stylesheet">

	 <title><?php echo $title; ?></title>
	 <link rel="icon" type= "image/jpg" href="<?php echo base_url() ?>img/logoIcon.jpg">
</head>

<body>

    <?php $this->load->view('design/nav_bar.php'); ?>

    <!-- ---- include -------->
    <?php $this->load->view($include); ?>
   <!---- end inlclud ---->
   
	<section id='footer'>
        <?php $this->load->view('design/footer.php'); ?>			
	</section>
		

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>

</html>