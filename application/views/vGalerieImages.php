<section id="galery">
        <div class="member-title">
            <h3 class="membres">Galery de photos</h3>
        </div>
        <div class="container gallery-container">
              
            <p class="page-description text-center">l'Amour de Dieu en image</p>
                  
            <div class="tz-gallery">
              
                <div class="row">
                <?php
                if ($rows == FALSE) {
					echo "<center><br/><br/><h2> AUCUNE PHOTO POUR L'INSTANT !!!</h2></center>";
				} else {
                    foreach ($rows as $row) { 
				?>
                    <div class="col-md-4">
                      <div class="hovereffect">
                            <a class="lightbox" href="<?php echo base_url().'img/galeryPhoto/'.$row->photo_url;?>">
                            <img src="<?php echo base_url().'img/galeryPhoto/'.$row->photo_url;?>" alt="Park" class="card-img-top">
                            </a>
                            <div class="overlay">
                                
                                 <p> <?php echo $row->description; ?>  </p>
                            </div>
                      </div>
                    </div>
                <?php 
                }}
				
				?>
                  
                     
                </div>
              
            </div>
        </div>
    </section>
  
  <hr />


<!------comment section --->
<?php $this->load->view($comments); ?>
<!------comment section [END]--->