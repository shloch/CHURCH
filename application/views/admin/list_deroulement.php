
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
$row = $this->db_table->selectByID($calenderID); //get all calender (from Mcalender_evenement)
?>


<section id='admin_content'>
<center>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

    <br/><br/><h2> <?php echo $title; ?>  du <?php echo dateToFrench(date('Y-m-d',$row->timestamp),'l j F Y'); ?> </h2>
    
    <a href="<?php echo base_url().'index.php/Admin_mess_evenement/add_deroulement/'.$calenderID; ?>"  title="Ajouter un deroulement"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UN DEROUELEMENT (FORME ORDINAIRE) </a><br/><br/>


    <?php
    foreach ($rows as $r) {
        
    ?>
        <p> 
                <?php echo $r->forme_ordinaire; ?> <a href="#"> </a> 
                <a href="<?php echo base_url().'index.php/Admin_mess_evenement/edit_deroulement/'.$r->id.'/'.$calenderID; ?>" title="modifier Deroulement"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier Deroulement"/> </a> 
                <a href="<?php echo base_url().'index.php/Admin_mess_evenement/delete_deroulement/'.$r->id.'/'.$calenderID; ?>" title="Supprimer Deroulement"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer Deroulement"/> </a>
                <a href="<?php echo base_url().'index.php/Admin_chant/add/'.$r->id.'/'.$calenderID; ?>" title="Ajouter Chant"> <img src="<?php echo base_url(); ?>img/music.jpg" alt="Ajouter chant"/> </a>
               
                            
        </p>
    <?php
    } 
    ?>
</center>
</section>

<!-------table ------->

<?php 
if ($all_chant != FALSE ) {
?>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">DEROULEMENT <br> FORME ORDINAIRE</th>
								<th class="column100 column2" data-column="column2"> CHANTS</th>
								<th class="column100 column3" data-column="column3">REFERENCE</th>
								<th class="column100 column4" data-column="column4">C.D.O <br> PAGE</th>
								<th class="column100 column5" data-column="column5">C.D.O <br> NR</th>
                                <th class="column100 column6" data-column="column6"> MP3 </th>
                                <th class="column100 column6" data-column="column7"> SUPPRIME <br> CHANT </th>
							</tr>
                        </thead>
                        
						<tbody>
                            <?php 
                            foreach ($all_chant as $chant ) {
                            ?>
							<tr class="row100">
                                
                                    <td class="column100 column1" data-column="column1"> <?php echo $chant->deroulement; ?> </td>
                                    <td class="column100 column1" data-column="column2"> <?php echo $chant->nom_chant; ?>  </td>
                                    <td class="column100 column2" data-column="column3"> 
                                        <?php 
                                            if ($chant->lyrics != '0') {
                                                ?>
                                                <a href="<?php echo base_url().'media/'.$chant->lyrics; ?>"> Fichier </a>
                                                <?php
                                            } else {
                                                echo ' -- ';
                                            }
                                        ?> <br>
                                        <a href="<?php echo base_url().'index.php/Admin_chant/edit_lyrics/'.$chant->chantID.'/'.$calenderID; ?>" title="modifier fichier REFERENCE"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier fichier REFERENCE"/> </a> 
                                        <a href="<?php echo base_url().'index.php/Admin_chant/del_chant/reference/'.$chant->chantID.'/'.$calenderID; ?>" title="SUPPRIMER fichier REFERENCE"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="SUPPRIMER fichier REFERENCE"/> </a> 
                                      
                                    </td>
                                    <td class="column100 column3" data-column="column4"> 
                                        <?php 
                                            if ($chant->cdo_page != '0') {
                                                ?>
                                                <a href="<?php echo base_url().'media/'.$chant->cdo_page; ?>"> Fichier </a>
                    
                                                <?php
                                            } else {
                                                echo ' -- ';
                                            }
                                        ?><br>
                                        <a href="<?php echo base_url().'index.php/Admin_chant/edit_cdo_page/'.$chant->chantID.'/'.$calenderID; ?>" title="modifier fichier CDO_PAGE"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier fichier CDO PAGE"/> </a> 
                                        <a href="<?php echo base_url().'index.php/Admin_chant/del_chant/cdo_page/'.$chant->chantID.'/'.$calenderID; ?>" title="SUPPRIMER fichier CDO_PAGE"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="SUPPRIMER fichier CDO PAGE"/> </a> 
                                      
                                    </td>
                                    <td class="column100 column4" data-column="column5"> 
                                        <?php 
                                            if ($chant->cdo_nr != '0') {
                                                ?>
                                                <a href="<?php echo base_url().'media/'.$chant->cdo_nr; ?>"> Fichier </a>
                    
                                                <?php
                                            } else {
                                                echo ' -- ';
                                            }
                                        ?><br>
                                        <a href="<?php echo base_url().'index.php/Admin_chant/edit_cdo_nr/'.$chant->chantID.'/'.$calenderID; ?>" title="modifier fichier CDO_NR"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier fichier CDO NR"/> </a> 
                                        <a href="<?php echo base_url().'index.php/Admin_chant/del_chant/cdo_nr/'.$chant->chantID.'/'.$calenderID; ?>" title="SUPPRIMER fichier CDO_NR"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="SUPPRIMER CDO NR"/> </a> 
                                      
                                    </td>
                                    <td class="column100 column5" data-column="column6"> 
                                        <?php 
                                            if ($chant->mp3 != '0') {
                                                ?>
                                                <a href="<?php echo base_url().'media/'.$chant->mp3; ?>"> audio </a>
                    
                                                <?php
                                            } else {
                                                echo ' -- ';
                                            }
                                        ?><br>
                                        <a href="<?php echo base_url().'index.php/Admin_chant/edit_cdo_mp3/'.$chant->chantID.'/'.$calenderID; ?>" title="modifier fichier mp3"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier fichier mp3"/> </a> 
                                        <a href="<?php echo base_url().'index.php/Admin_chant/del_chant/mp3/'.$chant->chantID.'/'.$calenderID; ?>" title="supprimer fichier mp3"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="SUPPRIMER fichier mp3"/> </a> 
                                      
                                    </td>
                                    <td class="column100 column2" data-column="column3"> 
                                        
                                        <a href="<?php echo base_url().'index.php/Admin_chant/delete/'.$chant->chantID.'/'.$calenderID; ?>" title="SUPPRIMER CE CHANT"> SUPPRIMER CHANT </a> 
                                        
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
	</div>

<?php 
} else {
    echo '<br> <br><br> 
          <center> 
            AUCUN CHANT POUR L\'INSTANT !!!!  <br>
            Pour Ajouter des chants, clicker sur symbol de Music pour chaque DEROULEMENT   <br>
            <br><br>Pour returner a tous les MESSES et EVENEMENT  '; ?> 
            <a href="<?php echo base_url().'index.php/admin_mess_evenement'?>"> CLICKER ICI </a>  
    <?php
    echo '</center>';
}
?>