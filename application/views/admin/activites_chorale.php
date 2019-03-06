
<?php 
// Convert a date or timestamp into French.
// from==> https://www.lucidar.me/en/web-dev/in-php-how-to-display-date-in-french/
function dateToFrench($date, $format) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}

?>



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
								<th></th>
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
		                        <td class="agenda-date" class="active" rowspan="1">
		                            <div class="dayofmonth"> <?php echo dateToFrench(date('Y-m-d',$row->date_act),'j')  ; ?> </div>
		                            <div class="dayofweek"> <?php echo dateToFrench(date('Y-m-d',$row->date_act),'F')  ; ?>  </div>
		                            <div class="shortdate text-muted"> <?php echo dateToFrench(date('Y-m-d',$row->date_act),'Y')  ; ?>  </div>
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
