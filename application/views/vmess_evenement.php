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


<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<meta name="description" content="Lwanga Kisito">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/messEvenement.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/index_copy.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title><?php echo $title; ?></title>
  <link rel="icon" type= "image/jpg" href="<?php echo base_url() ?>img/logoIcon.jpg">
</head>
<body>
<?php $this->load->view('design/nav_bar.php'); ?>


      <div class="member-title">
        <h3 class="membres">Mess et Evenements</h3>
      </div>

      <div id='calendar'>
        <div class="container table-responsive">
          <div class="row">
            <!-------JANUARY-------->
            <?php
            $all_months = $this->db_event->selectByMonth(1);
            if ($all_months == TRUE) {
            ?>

            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">JANVIER</th>
                  </tr>
                </thead>
                <tbody>

                   <?php
                  foreach ($all_months as $each_month) {                                     
                  ?>
                  <tr>
                    <th scope="row">
                          <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                          <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                  
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>



            <!-------FEBRUARY-------->
            <?php
            $all_months = $this->db_event->selectByMonth(2);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">FEVERIER</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>


            <!-------MARS-------->
            <?php
            $all_months = $this->db_event->selectByMonth(3);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">MARS</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>



            <!-------AVRIL-------->
            <?php
            $all_months = $this->db_event->selectByMonth(4);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">AVRIL</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>



            <!-------MAI-------->
            <?php
            $all_months = $this->db_event->selectByMonth(5);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">MAI</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>



            <!-------JUIN-------->
            <?php
            $all_months = $this->db_event->selectByMonth(6);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">JUIN</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>


            <!-------JULY-------->
            <?php
            $all_months = $this->db_event->selectByMonth(7);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">JUILLET</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>


            <!-------AOUT-------->
            <?php
            $all_months = $this->db_event->selectByMonth(8);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">AOUT</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>


            <!-------SEPTEMBRE-------->
            <?php
            $all_months = $this->db_event->selectByMonth(9);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">SEPTEMBRE</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>


            <!-------OCTOBRE-------->
            <?php
            $all_months = $this->db_event->selectByMonth(10);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">OCTOBRE</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>


            <!-------NOVEMBRE-------->
            <?php
            $all_months = $this->db_event->selectByMonth(11);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">NOVEMBRE</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>

            <!-------DECEMBRE-------->
            <?php
            $all_months = $this->db_event->selectByMonth(12);
            if ($all_months == TRUE) {
            ?>
            <div class="col-3">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">JOURS</th>
                    <th scope="col">DECEMBRE</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($all_months as $each_month) {              
                                          
                  ?>
                  <tr>
                    <th scope="row">
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'l ') ; ?> <br>
                    <?php echo dateToFrench(date('Y-m-d',$each_month->timestamp),'j') ; ?> <br>
                    
                    </th>

                    <td>
                        <?php 
                        if ($each_month->has_link == 'YES') { 
                        ?>
                            <a href="<?php echo base_url().'index.php/Mess_evenement/detail_event/'.$each_month->id; ?>" > 
                              <?php echo $each_month->celebration; ?> 
                            </a>
                        <?php 
                        } else {
                        ?>
                            <?php echo $each_month->celebration; ?>
                        <?php 
                        }
                        ?>
                    </td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <?php 
            }
            ?>



            
           
            
          </div>
        </div>
      </div>

  <hr />
  
	<!------comment section --->
  <?php $this->load->view($comments); ?>
<!------comment section [END]--->
		
	<section id='footer'>
    <?php $this->load->view('design/footer.php'); ?>
  </section>
    
</body>
</html>
