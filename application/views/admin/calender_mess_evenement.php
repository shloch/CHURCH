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

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen" name="add_photo">

<br/><br/><h2> <?php echo $title; ?> </h2><br/>

<center>

<a href="<?php echo base_url().'index.php/Admin_mess_evenement/add_calender_celebration/'; ?>"  title="Ajouter une celebration dans le Calendrier"> <img src="<?php echo base_url(); ?>img/add.jpeg" alt="+"/> AJOUTER UNE CELEBRATION DANS LE CALENDRIER</a><br/><br/>
</center>

<div> <!---janvier --->            
        <?php
        $all_months = $this->db_table->selectByMonth(1);
        if ($all_months == TRUE) {
            ?>
            <div class="month">      
                <ul><li>Janvier 2019</li></ul>
            </div>
            <?php
            foreach ($all_months as $each_month) {              
                    if ($each_month->has_link == 'YES') {                       
                        ?>
                             <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l j F Y') . ' ----> <a href="'.base_url().'index.php/Admin_mess_evenement/detail_event/'.$each_month->id.'">   <span class="celebration">' .($each_month->celebration) ; ?> </span>  </a> 
                             <a href="<?php echo base_url().'index.php/Admin_mess_evenement/edit/'.$each_month->id; ?>" title="modifier"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier"/> </a> 
                             <a href="<?php echo base_url().'index.php/Admin_mess_evenement/delete/'.$each_month->id; ?>" title="Supprimer"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer"/> </a>
                             <br/> 
                        <?php
                    } else {
                        ?>
                             <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l j F Y') . ' ----> ' .($each_month->celebration) ; ?>   
                             <a href="<?php echo base_url().'index.php/Admin_mess_evenement/edit/'.$each_month->id; ?>" title="modifier"> <img src="<?php echo base_url(); ?>img/edit.jpeg" alt="modifier"/> </a> 
                             <a href="<?php echo base_url().'index.php/Admin_mess_evenement/delete/'.$each_month->id; ?>" title="Supprimer"> <img src="<?php echo base_url(); ?>img/del.jpeg" alt="supprimer"/> </a>
                             <br/>
                        <?php
                    }
        }} 
        ?>      
</div>




<div> <!---fev --->            
        <?php
        $all_months = $this->db_table->selectByMonth(2);
        if ($all_months == TRUE) {
            ?>
            <div class="month">      
                <ul><li>Fevrier 2019</li></ul>
            </div>
            <?php
            foreach ($all_months as $each_month) {              
                    if ($each_month->has_link == 'YES') {                       
                        ?>
                             <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l j F Y') . ' --> <a href="#">   <span class="celebration">' .($each_month->celebration) ; ?> </span>  </a> <br/> 
                        <?php
                    } else {
                        ?>
                           <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l j F Y') . ' --> ' .($each_month->celebration) ; ?>   <br/>
                        <?php
                    }
        }} 
        ?>      
</div>



<div> <!---mars --->            
        <?php
        $all_months = $this->db_table->selectByMonth(3);
        if ($all_months == TRUE) {
            ?>
            <div class="month">      
                <ul><li>Mars 2019</li></ul>
            </div>
            <?php
            foreach ($all_months as $each_month) {              
                    if ($each_month->has_link == 'YES') {                       
                        ?>
                             <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l j F Y') . ' --> <a href="#">   <span class="celebration">' .($each_month->celebration) ; ?> </span>  </a> <br/> 
                        <?php
                    } else {
                        ?>
                           <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l j F Y') . ' --> ' .($each_month->celebration) ; ?>   <br/>
                        <?php
                    }
        }} 
        ?>      
</div>




</section>
