
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
$row = $this->db_table->selectByID($calenderID);
?>


<section id='activites'> <br/> <br/>
<center><h2> <?php echo $title; ?> </h2>

( <?php echo dateToFrench(date('Y-m-d',$row->timestamp),'l j F Y'); ?> ) <br/> <br/>
<a href="<?php echo base_url().'index.php/Admin_mess_evenement/add_deroulement/'.$calenderID; ?>"  title="Ajouter un deroulement"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UN DEROUELEMENT (FORME ORDINAIRE) </a><br/><br/>

	<div class="container">	
            
	</div>
</center>
</section>
