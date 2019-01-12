

<section id='activites'>
<center><h2> <?php echo $title; ?> </h2>

<a href="<?php echo base_url().'index.php/Admin_activites/add/'; ?>"  title="Ajouter une activite"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UNE ACTIVITE</a><br/><br/>
</center>
	<div class="container">
		


		    <div class="agenda">
		        <div class="table-responsive">
		            <table class="table table-condensed table-bordered table-hover table-sm">
		                <thead class="thead-dark">
		                    <tr>
		                        <th>Date</th>
		                        <th>Activite</th>
		                        <th>Description</th>
		                    </tr>
		                </thead>
		                <tbody>
		                   
		                    
		                    <!-- Multiple events in a single day (note the rowspan) -->
		                    <?php 
                            foreach ($rows as $row) {
                                $str_dates = explode("/", $row->date_act);
                                $month = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"); 
                            ?>

                            <tr>
		                        <td class="agenda-date" class="active" rowspan="1">
		                            <div class="dayofmonth"> <?php echo $str_dates[0]; ?> </div>
		                            <div class="dayofweek"><?php echo $month[(int)$str_dates[1]]; ?></div>
		                            <div class="shortdate text-muted"><?php echo $str_dates[2]; ?></div>
		                        </td>
		                        <td class="agenda-activites">
		                            <p><?php echo $row->libelle; ?></p>
		                        </td>
		                        <td class="agenda-description">
		                            <p><?php echo $row->description; ?></p>
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
		</div>

	</section>
