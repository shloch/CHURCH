<section id='ilsEnParlent'>
		<div class="member-title">
		   <h3 class="membres">Ils Donnent leurs avis</h3>
        </div>
        <h1 class="text-center">Les reactions de nos membres</h1>
        <div class="container">
            <div class="row">
            
                <?php
                    if ($rows == FALSE) {
                        echo "<center><br/><br/><h2> AUCUN MESSAGE POUR L'INSTANT !!!</h2></center>";
                    } else {
                        foreach ($rows as $row) {   
                ?>
                        <!-----------------[start] team-1-------------------------->
                        <div class="col-lg-4">
                        <div class="our-team-main">
                        
                        <div class="team-front">
                            <?php
                                if ($row->photo_url == 'NONE') {
                                ?>
                                   <img src="<?php echo base_url().'img/notre_equipe/default.jpeg';?>" class="img-fluid" alt="Photo Membre" />
                                <?php
                                } else {
                                ?>
                                    <img src="<?php echo base_url().'img/notre_equipe/'.$row->photo_url;?>" alt="Photo Membre" class="img-fluid"/>
                                <?php
                                }
                            ?>
                        <h3><?php echo $row->nom; ?></h3>
                        <p><?php echo $row->role; ?></p>
                        </div>
                        
                        <div class="team-back" style="text-align:justify">
                        <span><?php echo $row->msg; ?></span>
                        </div>
                        
                        </div>
                        </div>
                        <!---------------[end]  team-1--------------------------->
                        <?php
                        }}
                        ?>
                
                
            
            </div>
        </div>

    </section>
<hr/>

<!------comment section --->
  <?php $this->load->view($comments); ?>
<!------comment section [END]--->