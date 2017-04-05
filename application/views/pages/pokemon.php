<?php
  $id = $_GET['id'];
  $url = "http://pokeapi.co/api/v2/pokemon/".$id;
  $json = json_decode(file_get_contents($url), true);
  $pokenombre = strtoupper(substr($json['name'], 0, 1)).substr($json['name'], 1);
  $sprite = $json['sprites'];
?>

<div class = "container container-poke">
  <h1 align="center"><?php echo $pokenombre; ?></h1>
  <div class = "row pkmn-stats">
    <div class = "col-md-5">
      <h3>Apariencia estándar</h3>
      <?php echo "<img src='".$sprite['front_default']."'>"; 
      if($sprite['front_shiny'] != null)
        echo "<h3>Apariencia shiny</h3><img src='".$sprite['front_shiny']."'>"; ?>
    </div>
    <div class = "col-md-2">
      <h3>Tipos</h3>
      <?php foreach($json['types'] as $type){
        $tipo = $type['type'];
        echo "<img src = 'http://pokemon-putorojo.c9users.io/PokemonTeamMaker/img/types/".$tipo['name'].".gif'><br>";
      } ?>
    </div>
    <div class = "col-md-4">
      <h3>Estadísticas base</h3>
        <?php
          foreach($json['stats'] as $stat){
            $name_stat = $stat['stat'];
            echo "<b>".$name_stat['name']. ": </b>". $stat['base_stat']. "<br>";
          }
          ?>
    </div>
  </div>
</div>