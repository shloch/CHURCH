

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<h1>MODIFICATION DE L'ACTIVITE</h1>
    <form action="<?php echo base_url() . 'index.php/Admin_activites/update/'.$row->id; ?>" method="POST" id="signIn">
        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    <label>Date de l'activites [jj/mm/yyyy]</label><br/>
                    <input type="text" name="date_act" value="<?php echo $row->date_act; ?>" size="50" /> <br/> <br/>


                    <label>Activite</label><br/>
                    <input type="text" name="libelle" value="<?php echo $row->libelle; ?>" size="50" /> <br/> <br/>

                    <label>Description</label><br/>
                    <textarea name="description"> <?php echo $row->description; ?> </textarea>
            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            <div><br/><br/><input type="submit" value="Submit" /></div>
            
        </fieldset>
    </form>
</section>