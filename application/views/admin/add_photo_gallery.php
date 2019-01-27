

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<br/><br/><h2> <?php echo $title; ?> </h2>
    <form action="<?php echo base_url() . 'index.php/Admin_galerieImages/save/'; ?>" method="POST" id="signIn">
        <fieldset>
        <center>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    <label>AJOUTER PETITE DESCRIPTION POUR L'IMAGE</label><br/>
                    <input type="text" name="description" value="" size="70" placeholder="description"/> <br/> <br/>


            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            
            <div><br/><br/><input type="submit" value="Submit" /></div>
            </center>
            
        </fieldset>
    </form>
</section>