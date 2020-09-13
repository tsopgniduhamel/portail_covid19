get_country_name = function (array_row) {
  return array_row[1].toLowerCase();
};

function sum_cases_by_country(data_map) {
  var country_map = new Map();

  sum_cases_values = function (array1, array2) {
    if (array1.length != array2.length) {
      throw new Error("Taille de tableaux incompatibles");
    }

    result = new Array();
    let start_index = 4;

    for (let index = 0; index < start_index; index++) {
      result[index] = array1[index];
    }

    for (let index = start_index; index < array1.length; index++) {
      result[index] = array1[index] + array2[index];
    }
    return result;
  };

  var current_country = null;

  var data_indexes = [CONFIRMED_INDEX, RECOVERED_INDEX, DEATHS_INDEX];

  for (var data_index of data_indexes) {
    var data_array = data_map.get(data_index);

    for (let index = 0; index < data_array.length; index++) {
      current_country = get_country_name(data_array[index]);
      if (!country_map.has(current_country)) {
        country_map.set(current_country, new Map());
      }

      if (country_map.get(current_country).has(data_index)) {
        country_map
          .get(current_country)
          .set(
            data_index,
            sum_cases_values(
              data_array[index],
              country_map.get(current_country).get(data_index)
            )
          );
      } else {
        current_country = get_country_name(data_array[index]);
        country_map.get(current_country).set(data_index, data_array[index]);
      }
    }
  }
  COUNTRY_LIST = Array.from(country_map.keys());
  return country_map;
}

function find_actual_data_by_country(country_data_map) {
  for (let country of COUNTRY_LIST) {
    country_map = country_data_map.get(country);

    let total_infected = find_last_value(country_map.get(CONFIRMED_INDEX));
    let total_recovered = find_last_value(country_map.get(RECOVERED_INDEX));
    let total_deaths = find_last_value(country_map.get(DEATHS_INDEX));
    let actual_infected = total_infected - total_recovered - total_deaths;

    country_map.set(LAST_CONFIRMED_INDEX, total_infected);
    country_map.set(LAST_RECOVERED_INDEX, total_recovered);
    country_map.set(LAST_DEATHS_INDEX, total_deaths);
    country_map.set(LAST_INFECTED_INDEX, actual_infected);
    
    country_map.set(
      PROGRESSION_CONFIRMED_INDEX,
      calculate_progression(country_map.get(CONFIRMED_INDEX))
    );
    country_map.set(
      PROGRESSION_RECOVERED_INDEX,
      calculate_progression(country_map.get(RECOVERED_INDEX))
    );
    country_map.set(
      PROGRESSION_DEATHS_INDEX,
      calculate_progression(country_map.get(DEATHS_INDEX))
    );
  }
}

function find_last_value(data_array) {
  return data_array[data_array.length - 1];
}

function calculate_progression(data_array) {
  var last_value = data_array[data_array.length - 1];
  var before_last_value = data_array[data_array.length - 2];
  return ((100 * (last_value - before_last_value)) / before_last_value).toFixed(
    2
  );
}

function find_actual_world(country_data_map, world_data_map) {
  var countries_values = Array.from(country_data_map.values());

  var last_infected = 0,
    last_recovered = 0,
    last_confirmed = 0,
    last_deaths = 0;

  var bf_infected = 0,
    bf_recovered = 0,
    bf_confirmed = 0,
    bf_deaths = 0;


  for (var country_value of countries_values) {


    last_confirmed =last_confirmed+ country_value.get(LAST_CONFIRMED_INDEX);
    bf_confirmed =bf_confirmed+ country_value.get(CONFIRMED_INDEX)[
      country_value.get(CONFIRMED_INDEX).length - 2
    ];

    last_infected =last_infected+ country_value.get(LAST_INFECTED_INDEX);

    last_recovered =last_recovered+ country_value.get(LAST_RECOVERED_INDEX);
    
    bf_recovered =bf_recovered+country_value.get(RECOVERED_INDEX)[
      country_value.get(RECOVERED_INDEX).length - 2
    ];

    last_deaths += country_value.get(LAST_DEATHS_INDEX);
    bf_deaths += country_value.get(DEATHS_INDEX)[
      country_value.get(DEATHS_INDEX).length - 2
    ];
  }

  var quators = [
    [
      LAST_CONFIRMED_INDEX,
      PROGRESSION_CONFIRMED_INDEX,
      last_confirmed,
      bf_confirmed,
    ],
    [LAST_DEATHS_INDEX, PROGRESSION_DEATHS_INDEX, last_deaths, bf_deaths],
    [
      LAST_RECOVERED_INDEX,
      PROGRESSION_RECOVERED_INDEX,
      last_recovered,
      bf_recovered,
    ],
  ];

  for (var quator of quators) {
    world_data_map.set(quator[0], quator[3]);
    world_data_map.set(quator[1], local_progression(quator[3], quator[2]));
  }
  world_data_map.set(LAST_INFECTED_INDEX,last_infected)

  function local_progression(vali, valf) {
    return ((100 * (valf - vali)) / vali).toFixed(2);
  }
}
