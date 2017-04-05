<?php
    $this->load->helper('pokemon');
    $pokemons = select_pokemon();
?>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/builder.js"></script>
<div class="container contain-pkmn" style="width:60%;">
            <div class='row' style="margin: 0 auto; width:90%;">
                <div class='panel panel-primary filterable'>
                  <table id="pokedex" class="table">
                    <tr class="filter">
                      <td><input type='text' id="numero" class='form-control' placeholder='Nº' ></td>
                      <td><input type='text' id="poke" class='form-control' placeholder='Nombre'></td>
                      <td><select class='form-control' id="region">
                          <option value="Pokédex Nacional" selected="selected">Pokedex Nacional</option>
                          <option value="Kanto">Kanto</option>
                          <option value="Johto">Johto</option>
                          <option value="Hoenn">Hoenn</option>
                          <option value="Sinnoh">Sinnoh</option>
                          <option value="Teselia">Teselia</option>
                          <option value="Kalos">Kalos</option>
                        </select></td>
                    </tr>
                  </table>
                </div>
            </div>
            <div class="row" style="margin: 0 auto;">
                <div class="row-pkmn" align="center">
                    <img src="http://pokeapi.co/media/sprites/pokemon/0.png" alt="Pokémon" style="width:96px;" id="sprite1">
                </div>
                
                <div class="row-pkmn" align="center">
                    <img src="http://pokeapi.co/media/sprites/pokemon/0.png" alt="Pokémon" style="width:96px"  id="sprite2">
                </div>
                
                <div class="row-pkmn" align="center">
                    <img src="http://pokeapi.co/media/sprites/pokemon/0.png" alt="Pokémon" style="width:96px"  id="sprite3">
                </div>
                
                <div class="row-pkmn" align="center">
                    <img src="http://pokeapi.co/media/sprites/pokemon/0.png" alt="Pokémon" style="width:96px"  id="sprite4">
                </div>
                
                <div class="row-pkmn" align="center">
                    <img src="http://pokeapi.co/media/sprites/pokemon/0.png" alt="Pokémon" style="width:96px"  id="sprite5">
                </div>
                
                <div class="row-pkmn" align="center">
                    <img src="http://pokeapi.co/media/sprites/pokemon/0.png" alt="Pokémon" style="width:96px"  id="sprite6">
                </div>
            </div>
            <div class="row" style="margin: 0 auto;">
            <form method = "post" action = <?php echo base_url() ?>PokeApi/guardaEquipo>
                <div class="row-pkmn-list" align="center" style="width:120px;">
                    <select class="form-control form-pkmn" name="pokemon1" id="lista1">
                        <option selected disabled value="0">Pokémon</option>
                        <?php
                            echo $pokemons;
                        ?>
                    </select>
                </div>
                
                <div class="row-pkmn-list" align="center" style="width:120px;">
                    <select class="form-control form-pkmn" name="pokemon2" id="lista2">
                        <option selected disabled value="0">Pokémon</option>
                        <?php
                            echo $pokemons;
                        ?>
                    </select>
                </div>
                
                <div class="row-pkmn-list" align="center" style="width:120px;">
                    <select class="form-control form-pkmn" name="pokemon3" id="lista3">
                        <option selected disabled value="0">Pokémon</option>
                        <?php
                            echo $pokemons;
                        ?>
                    </select>
                </div>
                
                <div class="row-pkmn-list" align="center" style="width:120px;">
                    <select class="form-control form-pkmn" name="pokemon4" id="lista4">
                        <option selected disabled value="0">Pokémon</option>
                        <?php
                            echo $pokemons;
                        ?>
                    </select>
                </div>
                
                <div class="row-pkmn-list" align="center" style="width:120px;">
                    <select class="form-control form-pkmn" name="pokemon5" id="lista5">
                        <option selected disabled value="0">Pokémon</option>
                        <?php
                            echo $pokemons;
                        ?>
                    </select>
                </div>
                
                <div class="row-pkmn-list" align="center" style="width:120px;">
                    <select class="form-control form-pkmn" name="pokemon6" id="lista6">
                        <option selected disabled value="0">Pokémon</option>
                        <?php
                            echo $pokemons;
                        ?>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-success" id = "boton">Guardar Equipo</button>
            </form>
            </div>
        </div>
