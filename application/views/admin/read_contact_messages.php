
<?php 
if ($rows == FALSE ) {
    echo '<center><br><br><br>';
    echo '<h2> AUCUN MESSAGE POUR L\'INSTANT';
    echo '</center>';
} else {

?>

<section id='activites'>
		<div class="member-title">
			<h3 class="membres"> MESSAGES NON LUS</h3>
		</div>
	<div class="container">
		<p class="lead">
		    Retrouvez tous les messages envoyer a partir du site
		</p>

		    <hr />

		    <div class="agenda">
		        <div class="table-responsive">
		            <table class="table table-condensed table-bordered table-hover table-sm">
		                <thead class="thead-dark">
		                    <tr>
		                        <th>Nom</th>
		                        <th>email</th>
		                        <th>msg</th>
                                <th>Date</th>
                                <th>Supprimer</th>
		                    </tr>
		                </thead>
		                <tbody>
		                     
		                    
		                    <!-- Multiple events in a single day (note the rowspan) -->
		                    <?php 
                            foreach ($rows as $row) {
                              //  $str_dates = explode("/", $row->date_act);
                                //$month = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"); 
                            ?>

                            <tr>
                                <td class="agenda-activites">
		                            <p><?php echo $row->nom; ?></p>
		                        </td>
		                        <td class="agenda-activites">
		                            <p><?php echo $row->email; ?></p>
		                        </td>
		                        <td class="agenda-description">
		                            <p><?php echo $row->msg; ?></p>
                                </td>
                                <td class="agenda-description">
		                            <p><?php echo date('d-m-Y', $row->date); ?></p>
                                </td>
                                <td class="agenda-description">
		                            <a href="<?php echo base_url().'index.php/Contact/delete_msg/'.$row->id; ?>"> <img src="<?php echo base_url(); ?>img/del.jpeg" /> </a>  
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

<?php 
}
?>

