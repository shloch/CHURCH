

<section id='activites'> <br/> <br/>
<center><h2> <?php echo $title; ?> </h2>


<a href="<?php echo base_url().'index.php/Admin_galerieVideos/add/'; ?>"  title="Ajouter une video"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UNE VIDEO DANS LA GALLERY</a><br/><br/>
</center>
	<div class="container">
		

			<?php
				if ($rows == FALSE) {
					echo "<center><br/><br/><h2> AUCUNE VIDEO POUR L'INSTANT !!!</h2></center>";
				} else {

			?>
		   
		        <div class="table-responsive">
		            <table class="table table-condensed table-bordered table-hover table-sm">
		                <thead class="thead-dark">
		                    <tr>
		                        
		                        <th>Description (bref) </th>
		                        <th>url</th>
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
                                     <p><a href="<?php echo $row->url;?>" alt="lien"> <?php echo $row->url ;?>  </a></p>                                     
		                        </td>

                                <td class="agenda-description">
                                    
                                    <a href="<?php echo base_url().'index.php/Admin_galerieVideos/delete/'.$row->id; ?>"  title="supprimer"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer"/> </a><br/>
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
