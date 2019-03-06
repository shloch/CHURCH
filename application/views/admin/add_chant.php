
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
//$row = $this->db_table->selectByID($calenderID);
$deroulementID = $row->deroulementID;
$calenderID = $row->calenderID;
?>


<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<br/><br/><h2> <?php echo $title. ' pour "'. $row->deroulement.'"'; ?>  </h2>
   

<br/><br/><h2>  ( du <?php echo dateToFrench(date('Y-m-d',$row->timestamp),'l j F Y'); ?> ) </h2>

    <form action="<?php echo base_url() . 'index.php/Admin_chant/save/'.$calenderID.'/'.$deroulementID; ?>" method="POST" id="signIn">
        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    
                    <label>Entrer le nom du chant</label><br/>
                    <input type="text" name="chant_name" value="" size="50" placeholder="exemples: VIERGE MARIE, Cantique de Syméon"/> <br/> <br/>

                    
            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            <div><br/><br/><input type="submit" value="Valider" /></div>
            
        </fieldset>
    </form>
</section>
