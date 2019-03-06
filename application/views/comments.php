
<?php 
$AllRows = $this->comments->selectAll();
?>

<section id="comment-box">
				<center><?php echo 'Ajouter un commentaire' ; ?></center>
				<div class="container pb-cmnt-container">
					<div class="row">
							
							<div class="col-md-6 offset-md-3">
								<form action="<?php echo base_url() . 'index.php/Comments/save/'; ?>" method="POST">
									<div class="card card-info">					
											<input type="text" placeholder="Prenom" name="prenom">
											<div class="card-block">
												
												<textarea placeholder="Vos commentaires ici!" name="msg" class="pb-cmnt-textarea"></textarea>
											</div>
											
											<!--reserved for the CAPTCHA----------------------->
											
											<div>

													<input type="hidden" value="<?php echo $CAPTCHA['word'] ?>"    name="captchaWord" > 
													
													
													<input type="text" value=""    name="captchaInput" placeholder="Recopier text de l'image"/>
													<?php
													echo $CAPTCHA['image'] . ' ';
													//echo $CAPTCHA['word'];
													?>

											</div>
											<button class="btn btn-outline-success float-xs-right" type="submit">Partagez</button>
									</div>
								</form>
									
							</div>
					</div>
			</div>
		</section>

		
		
		<section id="comment-display">
				<div class="container">
					<div class="row">
							<div class="col-md-8">
								
									<h1> <?php echo ($AllRows == FALSE) ? '' : 'Les Commentaires' ; ?>  </h1>
								
								<div class="comments-list">
										

										<?php
											
											if ( $AllRows != FALSE ) {
											foreach ($AllRows as $row) {						
											?>
														<div class="media">
															<p class="pull-right"><small><?php echo $row->comment_date; ?></small></p>
															<a class="media-left" href="#">
																<img src="<?php echo base_url() ?>img/commenter.png">
															</a>
															<div class="media-body">
																	
																<h4 class="media-heading user_name"><?php echo $row->prenom; ?></h4>
																<?php echo $row->msg; ?>
															</div>
														</div>
												
											<?php
												}
											}

										?>
										


								</div>
									
									
									
							</div>
					</div>
			</div>
		</section>
