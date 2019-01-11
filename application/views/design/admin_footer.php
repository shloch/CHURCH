<footer class="footer_admin">
				
				<a class="media-left" href="<?php echo base_url(); ?>">RETOUR AU SITE</a> |
				
				<?php
				$logged = $this->session->userdata('member_id');
				if (isset($logged) && $logged != FALSE) {
					echo '<a href="'.site_url('admin/disconnect').'" title="deconnection"> |DECONNECTION </a>';

				} 

				?>
				
				<p>&copy; Copyright 2018 </p>
</footer>