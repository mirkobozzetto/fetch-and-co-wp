function degreesToCardinalDirection(degrees) {
  let cardinalDirections = ["N", "NE", "E", "SE", "S", "SW", "W", "NW", "N"];
  let index = Math.ceil(((degrees - 22.5) % 360) / 45);
  return cardinalDirections[index];
}

function populateWeatherInfo() {
  const apiKey = "11cfbee9deadcdf07ef5c0bd56714e2b";
  let weatherData = Cookies.get("weatherData");

  if (weatherData) {
    weatherData = JSON.parse(weatherData);
    updateWeatherInfo(weatherData);
  } else {
    $.get(
      "https://api.openweathermap.org/data/2.5/weather",
      {
        appid: apiKey,
        units: "metric",
        lang: "fr",
        q: "Brussels, BE",
      },
      function (data, _) {
        Cookies.set("weatherData", JSON.stringify(data), { expires: 1 / 4 });
        updateWeatherInfo(data);
      }
    );
  }
}

function updateWeatherInfo(data) {
  const temp = data.main.temp;
  const city = data.name;
  const country = data.sys.country;
  const weather = data.weather[0].description;
  const windDirection = data.wind.deg;
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
  document.getElementById("wind-direction").innerHTML = windCardinalDirection;
  $("#wind-speed").html(`(${windSpeed} km/h)`);
}

$(document).ready(() => {
  populateWeatherInfo();
});
