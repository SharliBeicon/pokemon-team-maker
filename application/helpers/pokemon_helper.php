<?php
    
    function select_pokemon(){
        $url = "http://pokeapi.co/api/v2/pokemon/?limit=721";
        $json = json_decode(file_get_contents($url), true);
                
        $i = 1;
        $result = "";
                
        foreach($json['results'] as $pokemon){
            $pokenombre = strtoupper(substr($pokemon['name'], 0, 1)).substr($pokemon['name'], 1);
            $region = $i < 152 ? "Kanto" : ($i < 252 ? "Johto" : ($i < 387 ? "Hoenn" : ($i < 494 ? "Sinnoh" : ($i < 650 ? "Teselia" : "Kalos"))));
            
            $result = $result."<option class='poke-option' value='".$i."' data-numero='".$i."' data-poke='".$pokenombre."' data-region='".$region."'>".$pokenombre."</option>";
            
            $i++;
        }
        
        return $result;
    }
    
    function mostrar_pokedex(){
        $base_url = base_url();
        
        $url = "http://pokeapi.co/api/v2/pokemon/?limit=721";
        $json = json_decode(file_get_contents($url), true);
                
        $i = 1;
                
        foreach($json['results'] as $result){
            $pokenombre = strtoupper(substr($result['name'], 0, 1)).substr($result['name'], 1);
            $region = $i < 152 ? "Kanto" : ($i < 252 ? "Johto" : ($i < 387 ? "Hoenn" : ($i < 494 ? "Sinnoh" : ($i < 650 ? "Teselia" : "Kalos"))));
                   
            echo "<tr class='pokemon' data-numero='".$i."' data-poke='".$pokenombre."' data-region='".$region."'><td>".$i."</td>";
                
            echo "<td><a href='".$base_url."/PokeApi/pokemon?id=".$i."'>" .$pokenombre."</a></td>";
                
            echo "<td>".$region."</td></tr>";
                   
            $i++;
        }
        
    }
    
    function imagen_pokemon($id) {
        $url = "http://pokeapi.co/api/v2/pokemon/".$id;
        $json = json_decode(file_get_contents($url), true);
        $sprite = $json['sprites'];
        
        return $sprite['front_default'];
    }
?>