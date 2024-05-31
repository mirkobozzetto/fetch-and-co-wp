const apiKey = "11cfbee9deadcdf07ef5c0bd56714e2b";

function ow_api(lat, lon) {
  const url = `http://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric&lang=fr`;

  $.post(url, function (data, status) {
    var infos = JSON.parse(data);
    console.log(infos);
    // Vous pouvez maintenant utiliser les informations dans `infos` pour afficher les données météorologiques
    // Par exemple, pour afficher la température actuelle :
    console.log(`Température actuelle : ${infos.main.temp}°C`);
    // Pour afficher la description de la météo :
    console.log(`Description de la météo : ${infos.weather[0].description}`);
    // Pour obtenir le code de la condition météorologique :
    const weatherCode = infos.weather[0].id;
    console.log(`Code de la condition météorologique : ${weatherCode}`);
    // Vous pouvez maintenant utiliser ce code pour afficher le pictogramme correspondant
  });
}

// Appel de la fonction pour obtenir les données météorologiques pour Bruxelles
ow_api(50.8503, 4.3517);
