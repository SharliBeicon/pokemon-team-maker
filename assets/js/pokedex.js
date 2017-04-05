$(document).ready(function(){
  var
    numberFilter, pokeFilter, regionFilter;
  
  function updateFilters() {
    $('.pokemon').hide().filter(function() {
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
  
  jQuery('#region').change( function() {
    regionFilter = this.value;
    updateFilters();
  });
});