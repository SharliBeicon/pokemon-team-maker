<div class="container contain-pkmn" style="width:60%;">

<?php
    $helper = $this->load->helper('pokemon');
    
    $i = 0;
    foreach($data as $equipo){
        $equipo[$i] = explode("-", $equipo['equipo']);
        $id = $equipo['id'];
        ?>
        
    <h3>Equipo <?php echo $i+1;?></h3>
    <div class="row" style="margin: 0 auto;">
        <div class="row-pkmn" align="center">
            <img src="<?php echo imagen_pokemon($equipo[$i][0]) ?>" alt="Pokémon" style="width:96px"  id="sprite1">
        </div>
        
        <div class="row-pkmn" align="center">
            <img src="<?php echo imagen_pokemon($equipo[$i][1]) ?>" alt="Pokémon" style="width:96px"  id="sprite2">
        </div>
        
        <div class="row-pkmn" align="center">
            <img src="<?php echo imagen_pokemon($equipo[$i][2]) ?>" alt="Pokémon" style="width:96px"  id="sprite3">
        </div>
        
        <div class="row-pkmn" align="center">
            <img src="<?php echo imagen_pokemon($equipo[$i][3]) ?>" alt="Pokémon" style="width:96px"  id="sprite4">
        </div>
        
        <div class="row-pkmn" align="center">
          <img src="<?php echo imagen_pokemon($equipo[$i][4]) ?>" alt="Pokémon" style="width:96px"  id="sprite5">
        </div>
        
        <div class="row-pkmn" align="center">
           <img src="<?php echo imagen_pokemon($equipo[$i][5]) ?>" alt="Pokémon" style="width:96px"  id="sprite6">
        </div>
    </div>
    <a href = "<?php echo base_url(); ?>/PokeApi/borrarEquipo?id=<?php echo $id ?>"><button type="button" class="btn btn-danger" id = "boton">Borrar Equipo</button></a>
<?php
$i++; } ?>
</div>
