<?php
  $this->load->helper('pokemon');
?>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/pokedex.js"></script>
<div class="container">         
  <div class='row'>
    <div class='panel panel-primary filterable'>
        <div class='panel-heading'>
          <center><h3 class='panel-title'>Pokédex</h3></center>
        </div>
      <table id="pokedex" class="table">
        <tr class="filter">
          <td><input type='text' id="numero" class='form-control' placeholder='#'></td>
          <td><input type='text' id="poke" class='form-control' placeholder='Name'></td>
          <td><select class='form-control' id="region">
              <option value="Pokédex Nacional" selected="selected">Pokédex Nacional</option>
              <option value="Kanto">Kanto</option>
              <option value="Johto">Johto</option>
              <option value="Hoenn">Hoenn</option>
              <option value="Sinnoh">Sinnoh</option>
              <option value="Teselia">Teselia</option>
              <option value="Kalos">Kalos</option>
            </select></td>
        </tr>
        <tr class="header">
          <th style="width:20%;">Número</th>
          <th style="width:50%;">Nombre</th>
          <th style="width:30%;">Región</th>
        </tr>
        <?php
          mostrar_pokedex();
        ?>
      </table>
    </div>
  </div>
</div>