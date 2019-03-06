

<section id='admin_content'>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<br/><br/><h2> <?php echo $title; ?> </h2>
    <form action="<?php echo base_url() . 'index.php/Admin_galerieVideos/save/'; ?>" method="POST" id="signIn">
        <fieldset>
        <center>
        <div>
            ci-dessous : comment recuperer lien video de youtube <br>
            <img src="<?php echo base_url() ?>img/gallery_wiki.jpg" height="250px" width="500px"/> <br/> <br>
            <img src="<?php echo base_url() ?>img/gallery_wiki2.jpg" height="160px" width="500px"/> <br/> <br/>
            <img src="<?php echo base_url() ?>img/gallery_wiki3.jpg" height="270px" width="500px"/> <br/> <br/>
            </div>
            <!-- Email -->
            <?php echo validation_errors(); ?>

            
            <div>

                    <label>AJOUTER LE LIEN DE LA VIDEO</label><br/>
                    <input type="text" name="url" value="" size="70" placeholder="exple: https://www.youtube.com/embed/WbDVXDUem6M"/> <br/> <br/>

                    <label>AJOUTER PETITE TITRE POUR LA VIDEO</label><br/>
                    <input type="text" name="description" value="" size="70" placeholder="exple: ACAPELLA DE NOEL"/> <br/> <br/>


            </div>
            
            <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
            
            <div><br/><br/><input type="submit" value="Submit" /></div>
            </center>
            
        </fieldset>
    </form>
</section>