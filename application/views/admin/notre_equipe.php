

<section id='activites'> <br/> <br/>
<center><h2> <?php echo $title; ?> </h2>

<a href="<?php echo base_url().'index.php/Admin_notre_equipe/add/'; ?>"  title="Ajouter un membre"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UN MEMBE</a><br/><br/>
</center>
	<div class="container">
		


		   
		        <div class="table-responsive">
		            <table class="table table-condensed table-bordered table-hover table-sm">
		                <thead class="thead-dark">
		                    <tr>
		                        <th>No</th>
		                        <th>Nom </th>
		                        <th>Role</th>
                                <th>Photo</th>
		                    </tr>
		                </thead>
		                <tbody>
		                   
		                    
		                    <!-- Multiple events in a single day (note the rowspan) -->
		                    <?php 
                            foreach ($rows as $row) {                               
                            ?>

                            <tr>
		                        <td class="agenda-date" class="active" rowspan="1">
		                            Membre
		                        </td>

		                        <td class="agenda-activites">
		                            <p><?php echo $row->nom; ?></p>
		                        </td>

		                        <td class="agenda-description">
		                            <p><?php echo $row->role; ?></p>
                                </td>

                                <td class="agenda-description">
                                    <a href="<?php echo base_url().'index.php/Admin_activites/edit/'.$row->id; ?>" title="modifier"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier"/> </a><br/><br/>
                                    <a href="<?php echo base_url().'index.php/Admin_activites/delete/'.$row->id; ?>"  title="supprimer"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer"/> </a><br/>
		                        </td>
                            </tr>
                            <?php
                            }
                            ?>
		                </tbody>
		            </table>
		        </div>
		    </div>

	</section>
