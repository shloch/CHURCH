

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<br/><br/><h2> <?php echo $title; ?><br> (<?php echo $row['nom']; ?>)</h2> <br><br>
    <form action="<?php echo base_url() . 'index.php/Admin_notre_equipe/update/'.$row['id']; ?>" method="POST" id="signIn">
        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    <label>Nom du membre</label><br/>
                    <input type="text" name="nom" value="<?php echo $row['nom']; ?>" size="60" /> <br/> <br/>


                    <label>Role dans L'equipe</label><br/>
                    <input type="text" name="role" value="<?php echo $row['role']; ?>" size="60" /> 

            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            <div><br/><br/><input type="submit" value="MODIFIER" /></div>
            
        </fieldset>
    </form>
</section>