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
		<div class="member-title">
			<h3 class="membres">Nos Activites du mois</h3>
		</div>
	<div class="container">
		<p class="lead">
		    Retrouvez tous les program de la chorale!
		</p>

		    <hr />

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


  <hr />
	
    <!------comment section --->
  <?php $this->load->view($comments); ?>
  <!------comment section [END]--->
		