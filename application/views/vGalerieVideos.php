<section id="galery-video">
		<div class="member-title">
			<h3 class="membres">Galerie Videos</h3>
		</div>

        <?php
        if ($rows == FALSE) {
            echo "<center><br/><br/><h2> AUCUNE VIDEO POUR L'INSTANT !!!</h2></center>";
        } else {
                   
		?>
		   
         <div class="container-fluid pb-video-container">
            <div class="col-md-10 offset-md-1">
                <div class="row pb-row">
                    <?php 
                    
                    foreach ($rows as $row) {                               
                    ?>
                        <div class="col-md-3 pb-video">
                            <iframe class="pb-video-frame" width="100%" height="230" src="<?php echo $row->url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <label class="form-control label-warning text-xs-center"> <?php echo $row->description; ?> </label>
                        </div>
                    <?php
                    } 
                    ?>
                    
                </div>
                
            </div>
        </div> 
        <?php 
        }
        ?>
     
    </section>
    <hr/>


<!------comment section --->
  <?php $this->load->view($comments); ?>
<!------comment section [END]--->