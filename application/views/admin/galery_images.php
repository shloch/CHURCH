

<section id='activites'> <br/> <br/>
<center><h2> <?php echo $title; ?> </h2>


<a href="<?php echo base_url().'index.php/Admin_galerieImages/add/'; ?>"  title="Ajouter un membre"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UNE IMAGE DANS LA GALLERY</a><br/><br/>
</center>
	<div class="container">
		

			<?php
				if ($rows == FALSE) {
					echo "<center><br/><br/><h2> AUCUNE PHOTO POUR L'INSTANT !!!</h2></center>";
				} else {

			?>
		   
		        <div class="table-responsive">
		            <table class="table table-condensed table-bordered table-hover table-sm">
		                <thead class="thead-dark">
		                    <tr>
		                        
		                        <th>Description (bref) </th>
		                        <th>Photo</th>
                                <th>Supprimer</th>
		                    </tr>
		                </thead>
		                <tbody>
		                   
		                    
		                    <!-- Multiple events in a single day (note the rowspan) -->
		                    <?php 
                            foreach ($rows as $row) {                               
                            ?>

                            <tr>
		                       
		                        <td class="agenda-activites">
		                            <p><?php echo $row->description; ?></p>
		                        </td>

		                        <td class="agenda-description">
                                     <p><img src="<?php echo base_url().'img/galeryPhoto/'.$row->photo_url;?>" alt="Photo Membre" height="152px" width="231px"/></p>                                     
		                        </td>

                                <td class="agenda-description">
                                    
                                    <a href="<?php echo base_url().'index.php/Admin_galerieImages/delete/'.$row->id; ?>"  title="supprimer"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer"/> </a><br/>
		                        </td>
                            </tr>
                            <?php
                            }
                            ?>
		                </tbody>
		            </table>
		        </div>
			<?php 
				}
			?>
	</div>

</section>
