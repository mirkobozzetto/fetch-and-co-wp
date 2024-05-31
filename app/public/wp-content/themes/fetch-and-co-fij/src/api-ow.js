const apiKey = "11cfbee9deadcdf07ef5c0bd56714e2b";

function ow_api(lat, lon) {
  const url = `http://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric&lang=fr`;

  $.get(url, function (data) {
    console.log(data);
  });
}

// Appel de la fonction pour obtenir les données météorologiques pour Bruxelles
ow_api(50.8503, 4.3517);
