 
	<section id='equipe'>
		<div class="member-title">
		   <h3 class="membres">Nos Membres</h3>
		</div>

		<?php
				if ($rows == FALSE) {
					echo "<center><br/><br/><h2> AUCUN MEMBRE POUR L'INSTANT !!!</h2></center>";
				} else {
					?>
					
					<div class="card-columns">
					<?php
					foreach ($rows as $row) { 
			    ?>
					
						<div class="card p-3">
								<?php
										if ($row->photo_url == 'NONE') {
										?>
												<img class="card-img-top" src="<?php echo base_url().'img/notre_equipe/default.jpeg';?>" alt="Photo Membre">
										<?php
										} else {
										?>
												<img class="card-img-top" src="<?php echo base_url().'img/notre_equipe/'.$row->photo_url;?>" alt="Photo Membre">
										<?php
										}
								?>
							<div class="card-body">
								<h5 class="card-title"><?php echo $row->nom; ?></h5>
								<hr>
								<p class="card-text"><?php echo $row->role; ?></p>
							</div>
						</div>

				<?php 
					}
				}
				?>

			</div>
	</section>

	<hr />
	<?php $this->load->view($comments); ?>
