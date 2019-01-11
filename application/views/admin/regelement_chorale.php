<section id='admin_content'>


<br/><br/><h2> <?php echo $title; ?> </h2>
<form action="<?php echo base_url() . 'index.php/admin_reglement/update'; ?>" method="POST">
    <textarea name="present_txt"> <?php echo $statut->presentation_text; ?> </textarea><br/><br/>


    <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
    <div class="submit"><input type="submit" value="Submit" /></div>
</form>


</section>

