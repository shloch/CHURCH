

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<br/><br/><h2> <?php echo $title; ?> </h2>
    <form action="<?php echo base_url() . 'index.php/Admin_ilsEnParlent/save/'; ?>" method="POST" id="signIn">
        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    <label>Nom du membre</label><br/>
                    <input type="text" name="nom" value="" size="50" /> <br/> <br/>


                    <label>Role dans L'equipe/Elise</label><br/>
                    <input type="text" name="role" value="" size="50" /> <br/> <br/>

                    <label>Message</label><br/>
                    <input type="text" name="msg" value="" size="100"  placeholder="Ajouter message du membre"/>

            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            <div><br/><br/><input type="submit" value="Submit" /></div>
            
        </fieldset>
    </form>
</section>