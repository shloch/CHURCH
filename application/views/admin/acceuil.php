
<center> 
<br/>
<br/><br/><h2> <?php echo $title; ?> </h2>
 
<?php echo validation_errors(); ?>
<p class="updateStatus"> <?php echo $this->session->flashdata('success'); ?> </p><br/>

<form method="POST" action="<?php echo base_url() . 'index.php/Admin_acceuil/update/'.$row['id']; ?>">
DERNIERE INFOS <br/>
<textarea cols="60" rows="8" name="derniere_infos"><?php echo $row['derniere_infos']; ?></textarea> <br/><br/><br/>

RECRUITEMENT <br/>
<textarea cols="60" rows="5" name="recruitment"> <?php echo $row['recruitement']; ?> </textarea> <br/><br/><br/>

REPETITIONS <br/>
<textarea cols="60" rows="5" name="repetition"> <?php echo $row['repetitions']; ?> </textarea> <br/><br/><br/>


NOUS CHANTONS <br/>
<textarea cols="60" rows="5" name="nous_chantons"> <?php echo $row['nous_chantons']; ?>  </textarea> <br/><br/><br/>

<br/><br/><input type="submit" value="METTRE A JOUR" /></div>
</center>