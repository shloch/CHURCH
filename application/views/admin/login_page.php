<center>
<link rel="stylesheet" href="<?php echo base_url() ?>css/form.css" media="screen">

<h1>Login  ZONE ADMIN</h1>
 <form action="<?php echo base_url() . 'index.php/admin/signIn'; ?>" method="POST" id="signIn">
    <fieldset>
        <!-- Email -->
        <?php echo validation_errors(); ?>

        
        <div>
                <label>Login</label>
                <input type="text" name="login" value="" size="50" /> <br/> <br/>

                <label>Pass</label>
                <input type="password" name="password" value="" size="50" />
        </div>

        <div><input type="submit" value="Submit" /></div>
         
    </fieldset>
</form>
</center>