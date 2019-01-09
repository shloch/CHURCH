	
	<section id='Presentation'>
		<div class="member-title">
		   <h3 class="membres">Presentation de la chorale</h3>
        </div>
        <div class="border border-light textZone">
						<div class="textZoneImage">
                <img src="<?php echo base_url() ?>img/equipe1.jpeg" class="img-fluid img-thumbnail mx-auto d-block" alt="photo de la chorale">
            </div>
            <p class="text-justify">
                    <?php echo $presentation->presentation_text; ?>
             </p>
            <div class="textZoneSecondImage">
                <img src="<?php echo base_url() ?>img/logo.jpeg" class="img-fluid img-thumbnail" alt="logo de la chorale">
            </div>
        </div>

    </section>

    
    <hr />

    <?php $this->load->view($comments); ?>