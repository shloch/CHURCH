

<section id='activites'> <br/> <br/>
<center><h2> <?php echo $title; ?> </h2>


<a href="<?php echo base_url().'index.php/Admin_ilsEnParlent/add/'; ?>"  title="Ajouter un membre avec son message"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UN MEMBRE AVEC SON MESSAGE</a><br/><br/>
</center>
	<div class="container">
		

			<?php
				if ($rows == FALSE) {
					echo "<center><br/><br/><h2> AUCUN MESSAGE POUR L'INSTANT !!!</h2></center>";
				} else {

			?>
		   
		        <div class="table-responsive">
		            <table class="table table-condensed table-bordered table-hover table-sm">
		                <thead class="thead-dark">
		                    <tr>
		                        <th>Nom</th>
		                        <th>Role </th>
                                <th>msg</th>
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
		                        <td class="agenda-date" class="active" rowspan="1">
                                    <p><?php echo $row->nom; ?></p>
		                        </td>

		                        <td class="agenda-activites">
		                            <p><?php echo $row->role; ?></p>
                                </td>
                                
                                <td class="agenda-activites">
		                            <p><?php echo $row->msg; ?></p>
		                        </td>

		                        <td class="agenda-description">
                                    <?php
                                        if ($row->photo_url == 'NONE') {
                                            //echo $row->photo_url
                                        ?>
                                            <p><img src="<?php echo base_url().'img/notre_equipe/default.jpeg';?>" alt="Photo Membre" height="152px" width="231px"/></p>
                                        <?php
                                        } else {
                                        ?>
                                            <p><img src="<?php echo base_url().'img/notre_equipe/'.$row->photo_url;?>" alt="Photo Membre" height="152px" width="231px"/></p>
                                        <?php
                                        }
                                    ?>
		                        </td>

                                <td class="agenda-description">
                                    
                                    <a href="<?php echo base_url().'index.php/Admin_ilsEnParlent/delete/'.$row->id; ?>"  title="supprimer"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer"/> </a><br/>
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
