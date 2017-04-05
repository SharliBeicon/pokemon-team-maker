

<div class = "container container-poke">
  <h1 align="center">Perfil</h1>
    <div class = "row pkmn-stats">
        <div class = "col-md-3">
            <img src="<?php echo base_url(); ?>/img/perfil.gif"></img>
        </div>
        <div class = "col-md-8">
            <h3><b>Usuario:</b> <?php echo $this->session->userdata('nombre'); ?></h3>
            <h3><b>Email:</b> <?php echo $this->session->userdata('email'); ?></h3>
        </div>
    </div>
  </div>
</div>