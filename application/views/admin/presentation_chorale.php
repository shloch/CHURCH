<section id='admin_content'>


<br/><br/><h2> <?php echo $title; ?> </h2>
<form action="<?php echo base_url() . 'index.php/admin_presentation_chorale/update'; ?>" method="POST">
    <textarea id="present_txt" name="present_txt" rows="15" cols="80" style="width: 80%"> <?php echo $presentation->presentation_text; ?> </textarea><br/><br/>


    <p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>
    <div class="submit"><input type="submit" value="Submit" /></div>
</form>


</section>

