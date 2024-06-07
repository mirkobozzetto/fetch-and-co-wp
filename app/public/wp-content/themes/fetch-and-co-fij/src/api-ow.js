function degreesToCardinalDirection(degrees) {
  let cardinalDirections = ["N", "NE", "E", "SE", "S", "SW", "W", "NW", "N"];
  let index = Math.ceil(((degrees - 22.5) % 360) / 45);
  return cardinalDirections[index];
}

function populateWeatherInfo() {
  const apiKey = "";

  $.get(
    "https://api.openweathermap.org/data/2.5/weather",
    {
      appid: apiKey,
      units: "metric",
      lang: "fr",
      q: "Brussels, BE",
    },
    function (data, status) {
      const temp = data.main.temp;
      const city = data.name;
      const country = data.sys.country;
      const weather = data.weather[0].description;
      const windDirection = data.wind.deg;
      // console.log(data.wind.deg);
      const windSpeed = data.wind.speed;
      const weatherId = data.weather[0].id;
      const iconClass = `owf owf-${weatherId}`;
      const windCardinalDirection = degreesToCardinalDirection(windDirection);

      document.getElementById("weather-icon").className = iconClass;
      document.getElementById("wind-icon-container").style.transform =
        "rotate(" + windDirection + "deg)";
      $("#city-country").html(`${city}, ${country}`);
      $("#weather-description").html(weather);
      $("#temperature").html(`${temp} °C`);

      // $("#wind-direction").html(`NE (${windDirection}°)`);
      document.getElementById("wind-direction").innerHTML =
        windCardinalDirection;

      $("#wind-speed").html(`(${windSpeed} km/h)`);
      // $("#weather-icon").html(`<img src="${iconUrl}" alt="Weather icon" />`);
    }
  );
}

$(document).ready(() => {
  populateWeatherInfo();
});
