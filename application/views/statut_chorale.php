<section id='Presentation'>
		<div class="member-title">
		   <h3 class="membres">Statuts de la chorale</h3>
        </div>
        <div class="border border-light textZone">
            <?php echo $txt->presentation_text; ?>
            <div class="textZoneSecondImage">
                <img src="<?php echo base_url(); ?>img/logo.jpeg" class="img-fluid img-thumbnail" alt="logo de la chorale">
            </div>
        </div>

    </section>

    <hr />

    <?php $this->load->view($comments); ?>