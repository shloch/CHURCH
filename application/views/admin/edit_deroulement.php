

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

    <br/><br/><h2> <?php echo $title; ?> </h2>
    <form action="<?php echo base_url() . 'index.php/Admin_mess_evenement/update_deroulement/'.$row->id.'/'.$calenderID; ?>" method="POST" id="signIn">
        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    <label>Entrer le nom du deroulement</label><br/>
                    <input type="text" name="deroulement" value="<?php echo $row->forme_ordinaire; ?>" size="50" placeholder="EX: MESSES COMPLETES,PSAUMES,COMMUNION"/> <br/> <br/>

            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            <div><br/><br/><input type="submit" value="Submit" /></div>
            
        </fieldset>
    </form>
</section>