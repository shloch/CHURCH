<center><br/><br/><br/><br/><br/>
        <?php
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            echo '<h2> BIENVENUE DANS LA ZONE D\'ADMINISTRATION </h2>  <br>';

        } 

        if ($unread_msg > 0) {
            echo '<h4> <em><u> <a style="color:#219433;" href="'.base_url() .'index.php/Admin/read_messages/"> VOUS AVEZ '. $unread_msg.' MESSAGE(S) NON-LUS </a> </u></em><h4>';
        }
        echo 'Nous somme le '.date('d-m-Y', time());
        ?>

</center>