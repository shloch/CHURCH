

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<br/><br/><h2> <?php echo $title; ?> </h2>
    <form action="<?php echo base_url() . 'index.php/Admin_activites/save/'; ?>" method="POST" id="signIn">
        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                  
                    <label>Date de l'activites</label><br/>
                    <input type="text" name="date_act" class="datepicker" size="50" placeholder="Clicker ici pour selectionner le jour"/> <br/> <br/>


                    <label>Activite</label><br/>
                    <input type="text" name="libelle" value="" size="50"  /> <br/> <br/>

                    <label>Description</label><br/>
                    <textarea name="description">  </textarea>
            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            <div><br/><br/><input type="submit" value="Submit" /></div>
            
        </fieldset>
    </form>
</section>