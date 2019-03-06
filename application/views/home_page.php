
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Lwanga Kisito">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>css/index.css">
	<!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>css/font_page_anim.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin|Righteous" rel="stylesheet">
	 <title>Chorale Lwanga Kisito</title>
	 <link rel="icon" type= "<?php echo base_url() ?>image/jpg" href="img/logoIcon.jpg">
</head>
<body>

    <?php $this->load->view('design/nav_bar.php'); ?>

	<secton id="carousel">
			<!-- Indicators -->
			<div id="carouselHome" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselHome" data-slide-to="0" class="active"></li>
					<li data-target="#carouselHome" data-slide-to="1"></li>
					<li data-target="#carouselHome" data-slide-to="2"></li>
					<li data-target="#carouselHome" data-slide-to="3"></li>
				</ol>
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo base_url() ?>img/equipe1.jpeg" alt="a microphone" class="container-fluid">
						<div class="carousel-caption">
						<h2>Bienvenue sur le site de Lwanga Kisito</h2>
						<h3>Ici nous chantons pour la gloire du Seigneur</h3>
						<p>Retrouvez-nous chaque vendredi et samedi
à partir de 18h</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url() ?>img/carousel3.jpeg" alt="Second slide" class="container-fluid">
						<div class="carousel-caption">
						<h3>Pour moi, vivre c’est christ </h3>
						<p>oh seigneur, que nous t'aimons</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url() ?>img/carousel2.jpeg" alt="Third slide" class="container-fluid">
						<div class="carousel-caption">
						<h3>Nous te louons eternel des armes</h3>
						<p>ton n'amour nous comble de joie</p>
						</div>
					</div>
					<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo base_url() ?>img/equipe1.jpeg" alt="Second slide" class="container-fluid">
							<div class="carousel-caption">
							<h3>Chanter c'est vivre</h3>
							<p>oh seigneur, que nous t'aimons</p>
							</div>
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
	</section>

		<section id="infos">
			<div id="info-content">
				<div id="container">
					<h2>Les Dernières Infos</h2>
					<p class="main-text"> <?php echo $row['derniere_infos']; ?> </p>
					<div class="card-group">
						<div class="card p-3">
							<img class="card-img-top" src="<?php echo base_url() ?>img/equipe1.jpeg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Adhésion</h5>
								<p class="card-text"> <?php echo $row['recruitement']; ?> </p>
							</div>
						</div>
						<div class="card p-3">
							<img class="card-img-top" src="<?php echo base_url() ?>img/repetitions.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Répetitions</h5>
								<p class="card-text"> <?php echo $row['repetitions']; ?>  </p>
							</div>
						</div>
						<div class="card p-3">
							<img class="card-img-top" src="<?php echo base_url() ?>img/nous_chantons.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Nous Chantons</h5>
								<p class="card-text">  <?php echo $row['nous_chantons']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr />
		<?php $this->load->view($comments); ?>
        
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
