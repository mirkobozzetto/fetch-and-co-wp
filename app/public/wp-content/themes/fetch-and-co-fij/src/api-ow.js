function populateWeatherInfo() {
  const apiKey = "11cfbee9deadcdf07ef5c0bd56714e2b";

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
      const windSpeed = data.wind.speed;
      const icon = data.weather[0].icon;
      const iconUrl = `http://openweathermap.org/img/wn/${icon}.png`;

      $("#city-country").html(`${city}, ${country}`);
      $("#weather-description").html(weather);
      $("#temperature").html(`${temp}°C`);
      $("#wind-direction").html(`NE (${windDirection}°)`);
      $("#wind-speed").html(`(${windSpeed} km/h)`);
      $("#weather-icon").html(`<img src="${iconUrl}" alt="Weather icon" />`);
    }
  );
}

$(document).ready(() => {
  populateWeatherInfo();
});
