<center><br/><br/><br/><br/><br/>
        <?php
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            echo '<h2> BIENVENUE DANS LA ZONE D\'ADMINISTRATION </h2>';

        } 

        ?>

</center>