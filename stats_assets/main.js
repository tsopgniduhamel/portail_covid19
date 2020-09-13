const URL_JSON = "http://localhost/covid_megasoft/stats_assets/data_url.json";
const LOCAL_URL_JSON =
  "http://localhost/covid_megasoft/stats_assets/local_data_url.json";
const URL_MAP = new Map();
const DATA_MAP = new Map();
const WORLD_DATA_MAP = new Map();
var COUNTRY_DATA_MAP;
var COUNTRY_LIST;
var TABLE_ITEMS;

/****
 * Load url for downloading datas
 */
function main(is_local, callback) {
  file = is_local ? LOCAL_URL_JSON : URL_JSON;
  var rawFile = new XMLHttpRequest();
  rawFile.overrideMimeType("application/json");
  rawFile.open("GET", file, true);
  rawFile.onreadystatechange = function () {
    if (rawFile.readyState === 4 && rawFile.status == "200") {
      callback(rawFile.responseText, URL_MAP);
    }
  };
  rawFile.send(null);
}

/**
 *
 * Load DEATHS,RECOVERED AND DEADS DATAS
 */
function load_all_indexes() {
  //Chargement de toutes les données
  return new Promise((resolve, reject) => {
    load_index(DEATHS_INDEX)
      .then((data) => {
        load_index(RECOVERED_INDEX)
          .then((data) => {
            load_index(CONFIRMED_INDEX)
              .then((data) => {
                resolve(DATA_MAP);
              })
              .catch((err) => {
                console.log(err);
              });
          })
          .catch((err) => {
            console.log(err);
          });
      })
      .catch((err) => {
        console.log(err);
      });
  });
}

/**
 * Load date for a given variable. e.g load the "Recovered" data
 * @param {*} index
 */
function load_index(index) {
  //Chargement par index puis parsing des résultats
  return new Promise((resolve, reject) => {
    let url = URL_MAP.get(index);
    console.log("Lecture des données de : " + index + ":" + url);
    d4.csv(url).then(function (data_array) {
      DATA_MAP.set(index, data_array);
      resolve(data_array);
    });
  });
}

/**
 * Cast object  datas into arrays
 * Cast string values into number
 * @param {*} data_map
 */
function process_data_map(data_map) {
  function numerify(data_array) {
    var start_index = 4;
    for (let index = 0; index < data_array.length; index++) {
      for (
        let sub_index = 4;
        sub_index < data_array[index].length;
        sub_index++
      ) {
        data_array[index][sub_index] = parseInt(data_array[index][sub_index]);
      }
    }
  }

  arrayfy = function (data_array) {
    for (var index = 0; index < data_array.length; index++) {
      data_array[index] = Object.values(data_array[index]);
    }
  };
  arrayfy(data_map.get(CONFIRMED_INDEX));
  arrayfy(data_map.get(RECOVERED_INDEX));
  arrayfy(data_map.get(DEATHS_INDEX));

  numerify(data_map.get(CONFIRMED_INDEX));
  numerify(data_map.get(RECOVERED_INDEX));
  numerify(data_map.get(DEATHS_INDEX));
}

main(false, function (text, url_map) {
  var data = JSON.parse(text, url_map);

  url_map.set(CONFIRMED_INDEX, data["time_series_19-covid-Confirmed.csv"]);
  url_map.set(RECOVERED_INDEX, data["time_series_19-covid-Recovered.csv"]);
  url_map.set(DEATHS_INDEX, data["time_series_19-covid-Deaths.csv"]);

  console.log(url_map);
  load_all_indexes()
    .then((data) => {
      process_data_map(DATA_MAP);

      /**
       * Données globales par pays
       */
      COUNTRY_DATA_MAP = sum_cases_by_country(DATA_MAP);
      find_actual_data_by_country(COUNTRY_DATA_MAP);
      find_actual_world(COUNTRY_DATA_MAP, WORLD_DATA_MAP);
      console.log(WORLD_DATA_MAP);

      // Show main table
      show_main_table(COUNTRY_DATA_MAP);

      //Show world_data
      show_world_table(WORLD_DATA_MAP);

      //Initialize_map
      initialize_map(COUNTRY_DATA_MAP);
    })
    .catch((err) => console.log(err));
});
