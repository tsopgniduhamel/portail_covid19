function progression_print(x) {
  if (x < 0) return " ("+x+" %)";
  else return " (+" + x+ " %)";
}

function show_main_table(source_data_map) {
  var row = "";
  REGION_LIST = Array.from(source_data_map.keys());
  for (var region of REGION_LIST) {
    row +=
      "<tr>" +
    
      '<td class="country table_info">' +
      region +
      "</td>" +
    
    
      '<td class="infected table_info">' +
      source_data_map.get(region).get(LAST_INFECTED_INDEX).pretty_display() +
      "</td>" +
    
    
      '<td class="confirmed table_info">' +
      source_data_map.get(region).get(LAST_CONFIRMED_INDEX).pretty_display()  +
      progression_print(source_data_map.get(region).get(PROGRESSION_CONFIRMED_INDEX)) +
      "</td>" +
    
      '<td class="deaths table_info">' +
      source_data_map.get(region).get(LAST_DEATHS_INDEX).pretty_display()  +
      progression_print(source_data_map.get(region).get(PROGRESSION_DEATHS_INDEX)) +
      "</td>" +
    
      '<td class="recovered table_info">' +
      source_data_map.get(region).get(LAST_RECOVERED_INDEX).pretty_display()  +
      progression_print(source_data_map.get(region).get(PROGRESSION_RECOVERED_INDEX)) +
      "</td>";

    ("</tr>");
  }

  $("#main_table tbody").html(row);
  $("#main_table").DataTable({
    "responsive": true,
    language: {
      lengthMenu: "Afficher _MENU_ par page",
      zeroRecords: "",
      info: "Total",
      search: "Rechercher",
      infoEmpty: "Donénes indisponibles",
      infoFiltered: "(Filtré parmi _MAX_  lignes)",
    },
  });
  
}

function show_world_table(source_data_map) {

    
    $("#world_infected").html(source_data_map.get(LAST_INFECTED_INDEX).pretty_display()  )

    $("#world_confirmed").html(source_data_map.get(LAST_CONFIRMED_INDEX).pretty_display() 
         +progression_print(source_data_map.get(PROGRESSION_CONFIRMED_INDEX)))

    $("#world_deaths").html(source_data_map.get(LAST_DEATHS_INDEX).pretty_display() +
        progression_print(source_data_map.get(PROGRESSION_DEATHS_INDEX)) )

    $("#world_recovered").html(source_data_map.get(LAST_RECOVERED_INDEX).pretty_display()  
        +progression_print(source_data_map.get(PROGRESSION_RECOVERED_INDEX)))








}
