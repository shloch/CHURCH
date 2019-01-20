<section id="navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
		  <a class="navbar-brand" href="#">ADMINISTRATION</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mx-auto">

				<li class="nav-item nav-link active">
		        <a class="nav-item" href="<?php echo base_url().'index.php/admin_acceuil'; ?>">ACCEUIL</a>
					</li>
					
		      <li class="nav-item nav-link active">
		        <a class="nav-item" href="<?php echo base_url().'index.php/admin_notre_equipe'; ?>">Notre Equipe</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Qui sommes-nous
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?php echo base_url().'index.php/admin_presentation_chorale'; ?>">Presentation chorale</a>
		          <a class="dropdown-item" href="<?php echo base_url().'index.php/admin_statut_choral'; ?>">Status de la chorale</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="<?php echo base_url().'index.php/admin_reglement'; ?>">Reglement interieur</a>
		        </div>
		      </li>
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php/admin_mess_evenement'; ?>">Mess & Evenements</a>
		      </li>
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php/admin_activites'; ?>">Nos Activites</a>
		      </li>
		      <li class="nav-item nav-link">
		        <a class="nav-item" href="<?php echo base_url().'index.php/Admin_ilsEnParlent'; ?>">Ils en parlent</a>
		      </li>
		      <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="secondNavbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Galerie</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url().'index.php/admin_galerieImages'; ?>">Photos</a>
							<a class="dropdown-item" href="<?php echo base_url().'index.php/admin_galerieVideos'; ?>">Videos</a>
						</div>
		      </li>
		      
		    </ul>
			</div>
		</div>
		</nav>
	</section>