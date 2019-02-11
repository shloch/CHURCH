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
//$row = $this->db_deroulement->selectByID($calenderID); //get all calender (from Mcalender_evenement)

$getDates = $this->db_chant->selectAllByCalenderID($calenderID);
if ($getDates != FALSE) {
    $collectDates = dateToFrench(date('Y-m-d',$getDates[0]->timestamp),'l j F Y');
} else {
    $collectDates = '';
}
?>

<section id='equipe'>
        <?php       
        if ($getDates != FALSE) { //if there's no song for this DEROULEMENT
        ?>

		<div class="member-title">
		   <h3 class="membres">Program de ce Jour (<?php echo $collectDates; ?> )</h3>
		</div>

        
		<div class="container table-responsive">
			<div class="row" id="second-container">
				<div class="col-sm">
					<table class="table table-bordered table-sm table-hover">
						<thead>
							<tr>
								<th scope="col">DEROULEMENT /<br> FORME ORDINAIRE <br> </th>
								<th scope="col">CHANTS</th>
								<th scope="col">PDF</th>
								<th scope="col"> SOPRANO <br> TENOR</th>
								<th scope="col">ALTO <br> BASSE</th>
                                <th scope="col">MP3</th>
							</tr>
						</thead>
						<tbody>

                            <?php 
                            if ($rows != FALSE) {
                            foreach ($rows as $deroulement ) {
                            ?>
							<tr class="table-light">
                                
                                <?php 
                                $allChant = $this->db_chant->selectAll_ByCalenderID_ByDeroulementID($calenderID, $deroulement->id);
                                if ($allChant != False ) {                              
                                    foreach($allChant as $chant) {                                                     
                                ?>
                                <th scope="row"> <?php echo $deroulement->forme_ordinaire; ?> </th>
                                            <td>
                                                <div class="row"><div class="col"> <?php echo $chant->nom_chant; ?> </div></div>
                                            </td>
                                            <td>
                                                <div class="row"><div class="col">
                                                        <?php
                                                        if ($chant->lyrics != '0') {
                                                        ?>
                                                            <a href="<?php echo base_url().'media/'.$chant->lyrics; ?>"> Fichier </a>
                                                        <?php
                                                        } else {
                                                            echo ' -- ';
                                                        }
                                                        ?>
                                                 </div></div>
                                               
                                            </td>
                                            <td>
                                                <div class="row"><div class="col"> 
                                                        <?php
                                                        if ($chant->cdo_page != '0') {
                                                        ?>
                                                             <a href="<?php echo base_url().'media/'.$chant->cdo_page; ?>"> Fichier </a>         
                                                        <?php
                                                        } else {
                                                            echo ' -- ';
                                                        }
                                                        ?>
                                                </div></div>
                                               
                                            </td>
                                            <td>
                                                <div class="row"><div class="col"> 
                                                        <?php
                                                        if ($chant->cdo_nr != '0') {
                                                        ?>
                                                             <a href="<?php echo base_url().'media/'.$chant->cdo_nr; ?>"> Fichier </a>         
                                                        <?php
                                                        } else {
                                                            echo ' -- ';
                                                        }
                                                        ?>
                                                </div></div>
                                               
                                            </td>
                                            <td>
                                                <div class="row"><div class="col"> 
                                                        <?php
                                                        if ($chant->mp3 != '0') {
                                                        ?>
                                                             <a href="<?php echo base_url().'media/'.$chant->mp3; ?>"> Audio </a>         
                                                        <?php
                                                        } else {
                                                            echo ' -- ';
                                                        }
                                                        ?>
                                                </div></div>
                                                
                                            </td>
                                            </tr>
                                <?php 
                                    }}
                                ?>
							
                            <?php 
                            }}
                            ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    
    <?php
    } else {
    ?>
        <div class="member-title">
		   <h3 class="membres">Program de ce Jour </h3>
		</div>

        <?php
        //$collectDates = '';
        echo '<br> <br><br> 
          <center> 
            AUCUN CHANT POUR L\'INSTANT ENREGISTRER POUR CE JOUR!!!!  <br>
          </center>';
    }
    ?> 
	</section>