var map;

function initialize_map(country_data_map) {
  rename_countries();
  map = new Datamap({
    element: document.getElementById("map"),
    fills: {
      HIGH: "red",
      MEDIUM: "orange",
      LOW: "yellow",
      VERY_LOW: "rgb(0,0,0)",
      defaultFill: "grey",
    },

    geographyConfig: {
      popupTemplate: function (geo, data) {
        return display(geo, country_data_map);
      },
    },
    data: set_colors(country_data_map),
  });

  
  window.addEventListener("resize", function (event) {
    map.resize();
  });

  function set_colors(country_data_map) {
    var data = {};
    function set_color(geo, country_data_map) {
      var country_single_data = country_data_map.get(
        correspond_country_name(geo)
      );
      var color = "default_fill";
      if (!country_single_data){

        console.log(geo.properties.name)
      } 
      else{
        var cases = country_single_data.get(LAST_CONFIRMED_INDEX);

        if (cases > 100000) {
          color = "HIGH";
        } else if (cases > 10000) {
          color = "MEDIUM";
        } else if (cases > 100) {
          color = "LOW";
        } else {
          cases = "VERY_LOW";
        }
      }
      return { fillKey: color };
    }

    var countries = Datamap.prototype.worldTopo.objects.world.geometries;

    for (let country of countries) {
      data[country.id] = set_color(country, country_data_map);
    }

    return data;
  }
}

var name_map = new Map();

var correspondance_array = [
  ["United States of America", "us"],
  ["The Bahamas","bahamas"],
  ["Ivory Coast","cote d'ivoire"],
  ["Democratic Republic of the Congo","congo (kinshasa)"],
  ["Republic of the Congo","congo (brazzaville)"],
  ["Northern Cyprus","cyprus"],
  ["Czech Republic","czechia"],
  ["French Guiana","guyana"],
  ["Guinea Bissau","guinea-bissau"],
  ["South Korea","korea, south"],
  ["Macedonia","north macedonia"],
  ["Republic of Serbia","serbia"],
  ["East Timor","timor-leste"],
  ["Taiwan","taiwan*"],
  ["United Republic of Tanzania","tanzania"],
  ["West Bank","west bank and gaza"]
];

function display(geo, country_data_map) {
  text_number_cases = "Nombre de cas";
  text_number_confirmed = "Cas confirmés";
  text_number_deaths = "Nombre de décès";

  country_name = correspond_country_name(geo);

  template =
    "<div class='card popup_info'>" +
    "<div class='card-header strong'>" +
    geo.properties.name +
    "</div>" +
    '<div class="card-body">' +
    "<strong>" +
    text_number_cases +
    " :</strong>" +
    country_data_map
      .get(country_name)
      .get(LAST_INFECTED_INDEX)
      .pretty_display() +
    "<hr>" +
    "<strong>" +
    text_number_confirmed +
    " :</strong>" +
    country_data_map
      .get(country_name)
      .get(LAST_CONFIRMED_INDEX)
      .pretty_display() +
    "<hr>" +
    "<strong>" +
    text_number_deaths +
    " :</strong>" +
    country_data_map.get(country_name).get(LAST_DEATHS_INDEX).pretty_display() +
    "<hr>" +
    "</div>" +
    "</div>";

  return [template].join("");
}

//load_country_list()

function rename_countries() {
  function add_name(geo_name, actual_name) {
    name_map.set(geo_name.toLowerCase(), actual_name);
  }

  for (var couple of correspondance_array) {
    add_name(couple[0], couple[1]);
  }
}
function correspond_country_name(geo) {
  var n = geo.properties.name.toLowerCase();
  if (name_map.has(n)) {
    return name_map.get(n);
  } else {
    return n;
  }
}
