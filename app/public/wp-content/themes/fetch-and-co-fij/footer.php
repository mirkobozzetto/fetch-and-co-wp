<!-- footer -->
<footer class="absolute bottom-0 flex justify-center w-full space-x-2 text-white bg-black">
  <div
    class="absolute flex items-end justify-center w-16 h-8 transform -translate-x-1/2 bg-black rounded-full rounded-b-none -top-8 left-1/2">
    <i style="font-size: xx-large;" id="weather-icon"></i>
  </div>
  <!--  -->
  <span id="city-country">Bruxelles, BE</span>
  <span>|</span>
  <span id="weather-description">brume</span>
  <span>|</span>
  <span id="temperature">2.3°C</span>
  <span>|</span>
  <span>vent</span>
  <span id="wind-icon-container">
    <span class="text-lg" id="wind-icon">↑</span>
  </span>
  <span id="wind-direction"></span>
  <span id="wind-speed"></span>
</footer>

<!-- end footer -->
</body>
<?php wp_footer(); ?>

</html>