<section id="navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
		  <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>img/logo.png" alt="logo" class="container-fluid"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mx-auto">
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php'; ?>">Accueil<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item nav-link active">
		        <a class="nav-item" href="<?php echo base_url().'index.php/notre_equipe'; ?>">Notre Equipe</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Qui sommes-nous
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?php echo base_url().'index.php/presentation_chorale'; ?>">Presentation chorale</a>
		          <a class="dropdown-item" href="<?php echo base_url().'index.php/statut'; ?>">Status de la chorale</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="<?php echo base_url().'index.php/reglement'; ?>">Reglement interieur</a>
		        </div>
		      </li>
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php/mess_evenement'; ?>">Mess & Evenements</a>
		      </li>
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php/activites'; ?>">Nos Activites</a>
		      </li>
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php/ilsEnParlent'; ?>">Ils en parlent</a>
		      </li>
		      <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="secondNavbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Galerie</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url().'index.php/galerieImages'; ?>">Photos</a>
							<a class="dropdown-item" href="<?php echo base_url().'index.php/galerieVideos'; ?>">Videos</a>
						</div>
		      </li>
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php/contact'; ?>">Contact</a>
		      </li>
		    </ul>
			</div>
		</div>
		</nav>
	</section>