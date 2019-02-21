<footer class="footer_admin">
				
				<a class="media-left" href="<?php echo base_url(); ?>">RETOUR AU SITE</a> |
				<a class="media-left" href="<?php echo base_url().'index.php/Admin/read_messages/'; ?>">LIRE MESSAGES</a> |
				<a href="http://webmail.cpanel-just2000.justhost.com/logout/?locale=en"> PORTAIL EMAIL </a>
				<?php
				$logged = $this->session->userdata('member_id');
				if (isset($logged) && $logged != FALSE) {
					echo '<a href="'.site_url('admin/disconnect').'" title="deconnection"> |DECONNECTION </a>';

				} 	

				?>
				
				<p>&copy; Copyright 2018 </p>
</footer>