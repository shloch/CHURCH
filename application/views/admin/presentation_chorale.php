<center>


<h2> Presentation de la Chorale </h2>
<form action="<?php echo base_url() . 'index.php/admin_presentation_chorale/update'; ?>" method="POST">
    <textarea name="present_txt"> <?php echo $presentation->presentation_text; ?> </textarea><br/><br/>


    <p> <?php echo $this->session->flashdata('success'); ?> </p><br/>
    <div><input type="submit" value="Submit" /></div>
</form>


</center>
