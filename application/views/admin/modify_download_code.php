

<center> <br/><br/>
<img src="<?php echo base_url().'img/logo.png';?>" alt="" > <br>
<h2> ENTRER LE NOUVEAU CODE CI-DESSOUS </h2>
                <form method="POST" action="<?php echo base_url() . 'index.php/Admin_mess_evenement/saveCode/'; ?>">
                    <input name="passcode" placeholder="Code pour voir fichier"> 
                    <input type="submit" value="valider">
                    <br> <em>  </em>
                <form>
            </center>