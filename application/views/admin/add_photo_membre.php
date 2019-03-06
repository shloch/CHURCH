

<section id='admin_content'>

<br/><br/><h2> <?php echo $title; ?> </h2><br/>
<?php echo form_open_multipart('upload/do_upload/'.$ID);?>


        <fieldset>
            <!-- Email -->
            <?php echo validation_errors(); ?>
            <center>
            <div>
            dimensions max : 
            largeur : 1024 px
            hauteur : 768 px <br>
            Poid max : 860Kb
            </div>
            
            <div>          
                    <label>Ajouter La photo </label><br/>
                    <input type="file" name="userfile" value="" size="50" /> 
            
            </div>
            
            <p class="updateStatus"> <?php echo $error;?> </p><br/>

            <p> <a href="<?php echo base_url().'index.php/Admin_notre_equipe/'; ?>" title="Sauter cette Etappe"> <img src="<?php echo base_url(); ?>img/next.jpg" alt="modifier"/> SAUTER CETTE ETAPE POUR PLUS TARD</a><br/><br/> </p>
            
            <div><br/><input type="submit" value="upload"  /></div>
            </center>
        </fieldset>
    </form>
</section>