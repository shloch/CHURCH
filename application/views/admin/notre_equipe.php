

<section id='activites'> <br/> <br/>
<center><h2> <?php echo $title; ?> </h2>


<a href="<?php echo base_url().'index.php/Admin_notre_equipe/add/'; ?>"  title="Ajouter un membre"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UN MEMBRE</a><br/><br/>
</center>
	<div class="container">
		

			<?php
				if ($rows == FALSE) {
					echo "<center><br/><br/><h2> AUCUN MEMBRE POUR L'INSTANT !!!</h2></center>";
				} else {

			?>
		   
		        <div class="table-responsive">
		            <table class="table table-condensed table-bordered table-hover table-sm">
		                <thead class="thead-dark">
		                    <tr>
		                        <th>Nom</th>
		                        <th>Role </th>
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
                                    <p>
										 <?php echo $row->nom; ?>
									</p>
		                        </td>

		                        <td class="agenda-activites">
		                            <p>
										<?php echo $row->role; ?><br> <br>
										<a href="<?php echo base_url().'index.php/Admin_notre_equipe/edit_member/'.$row->id; ?>"  title="editer"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="Modifier NOM + ROLE"/> Modifier NOM + ROLE</a><br/>
														
									</p>
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
									<a href="<?php echo base_url().'index.php/Admin_notre_equipe/edit_member_img/'.$row->id; ?>"  title="editer"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="Modifier image"/> Modifier IMAGE</a>
										
		                        </td>

                                <td class="agenda-description">
                                    
                                    <a href="<?php echo base_url().'index.php/Admin_notre_equipe/delete/'.$row->id; ?>"  title="supprimer"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer"/> </a><br/>
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
