

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen" name="add_photo">

<br/><br/><h2> <?php echo $title; ?> </h2>
<?php echo form_open_multipart('upload/do_upload2/'.$ID);?>


        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            <center>
            <div>
            

                    <label>Ajouter La photo </label><br/>
                    <input type="file" name="userfile" value="" size="50" /> 
            
            </div>
            
            <p class="updateStatus"> <?php echo $error;?> </p><br/>

            <p> <a href="<?php echo base_url().'index.php/Admin_ilsEnParlent/'; ?>" title="Sauter cette Etappe"> <img src="<?php echo base_url(); ?>img/next.jpg" alt="modifier"/> SAUTER CETTE ETAPE POUR PLUS TARD</a><br/><br/> </p>
            
            <div><br/><input type="submit" value="upload"  /></div>
            </center>
        </fieldset>
    </form>
</section>