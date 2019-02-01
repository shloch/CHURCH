

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<br/><br/><h2> <?php echo $title; ?> </h2>
    <form action="<?php echo base_url() . 'index.php/Admin_mess_evenement/update/'.$row->id; ?>" method="POST" id="signIn">
        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    <label>Selectioner le jour</label><br/>
                    <input type="text" name="datepicker" value="<?php echo date('Y-m-d',$row->timestamp); ?>" class="datepicker" size="50" placeholder="Clicker ici pour selectionner le jour"/> <br/> <br/>


                    <label>Celebration du Jour</label><br/>
                    <input type="text" name="celebration" value="<?php echo ($row->celebration); ?>" size="50" placeholder="exemples: Ordinaire, Careme, Annonciation, PAQUES"/> <br/> <br/>

                    <label>Aura t'il un lien pour Charger details de ce jour ?</label><br/>

                    <?php 
                    if ($row->has_link == 'NO') {
                        ?>
                        <select name="lien">
                            <option value="NO">NON</option>
                            <option value="YES">OUI</option>
                        </select>
                        <?php 
                    } else {
                        ?>
                        <select name="lien">
                            <option value="YES">OUI</option>
                            <option value="NO">NON</option>     
                        </select>
                        <?php 
                    }
                    ?>
                    
            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            <div><br/><br/><input type="submit" value="Modifier" /></div>
            
        </fieldset>
    </form>
</section>
