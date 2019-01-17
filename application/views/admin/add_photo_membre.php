

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen" name="add_photo">

<br/><br/><h2> <?php echo $title; ?> </h2>
<?php echo form_open_multipart('upload/do_upload/'.$ID);?>


        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            <center>
            <div>
            

                    <label>Ajouter La photo </label><br/>
                    <input type="file" name="userfile" value="" size="50" /> 
            
            </div>
            
            <p class="updateStatus"> <?php echo $error;?> </p><br/>
            <div><br/><input type="submit" value="upload"  /></div>
            </center>
        </fieldset>
    </form>
</section>