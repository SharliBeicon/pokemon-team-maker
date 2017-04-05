$(document).ready(function(){
    
    var
    numberFilter, pokeFilter, regionFilter;
  
    function updateFilters() {
        $('.poke-option').hide().filter(function() {
            var
                self = $(this),
                result = true;
      
            if (numberFilter && (numberFilter != '')) {
                result = result && String(self.data('numero')).startsWith(numberFilter);
            }
            if (pokeFilter && (pokeFilter != '')) {
                result = result && self.data('poke').toLowerCase().startsWith(pokeFilter);
            }
            if (regionFilter && (regionFilter != 'Pokédex Nacional')) {
                result = result && regionFilter === self.data('region');
            }
          
            return result;
        }).show();
   }
    
    $('#numero').on('keyup', function() {
        numberFilter = String(this.value);
        updateFilters();
      });
  
    $('#poke').on('keyup', function() {
        pokeFilter = this.value.toLowerCase();
        updateFilters();
    });
  
    $('#region').change(function() {
        regionFilter = this.value;
        updateFilters();
    });
    
    $('.form-pkmn').change(function() {
        var pokemonId = $(this).val();
        var listaId = $(this).attr("id");
        
        var num = listaId.substr(5,1);
            
        $.getJSON('https://pokeapi.co/api/v2/pokemon/'+pokemonId, function(jd) {
            var sprite = jd.sprites;
            $('#sprite'+num).attr('src',sprite.front_default);
        });
    });
});