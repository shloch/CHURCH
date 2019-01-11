<section id='Presentation'>
		<div class="member-title">
		   <h3 class="membres">Reglement interieur</h3>
        </div>
        <div class="border border-light textZone">
            <h3 class="text-center font-weight-bold">Reglement interieur Concernant</h3>
            <div class="textZoneSecondImage">
                <img src="<?php echo base_url();?>img/logo.jpeg" class="img-fluid img-thumbnail mx-auto d-block" alt="logo de la chorale">
            </div>
            <?php echo $txt->presentation_text; ?>
        </div>

    </section>

    
    <hr />

    <?php $this->load->view($comments); ?>