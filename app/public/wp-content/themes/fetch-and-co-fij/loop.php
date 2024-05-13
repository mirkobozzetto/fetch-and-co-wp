<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch-and-co-fij</title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/src/output.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/src/all.min.css" rel="stylesheet">
  </head>

  <body class="bg-neutral-700">
    <!-- navigation -->
    <div class="flex justify-center p-2 space-x-4">
      <a class="text-white hover:text-blue-400" href="#">Home</a>
      <span class="text-white">|</span>
      <a class="text-white hover:text-blue-400" href="#">Articles</a>
      <span class="text-white">|</span>
      <a class="text-white hover:text-blue-400" href="#">Movies</a>
      <span class="text-white">|</span>
      <a class="text-white hover:text-blue-400" href="#">Map</a>
      <span class="text-white">|</span>
      <a class="text-white hover:text-blue-400" href="#">XML</a>
      <span class="text-white">|</span>
      <!-- recherche -->
      <form>
        <input class="bg-white bg-opacity-50 text-white/90 w-28 focus:outline-none focus:ring-0" type="text">
        <button type="submit">
          <i class="px-3 text-blue-400 fas fa-search"></i>
        </button>
      </form>
    </div>
    <!-- nav end  -->

    <!-- main -->
    <main class="flex flex-col items-center min-h-[80vh] py-36">
      <h1 class="mb-12 text-5xl text-white/60">Un beau texte</h1>
      <div class="flex space-x-4">
        <button class="px-4 py-2 text-black bg-white bg-opacity-90">
          Ajax txt!
        </button>
        <button class="px-4 py-2 text-black bg-white bg-opacity-90">
          Ajax json!
        </button>
        <button class="px-4 py-2 text-black bg-white bg-opacity-90">
          Ajax php!
        </button>
        <button class="px-4 py-2 text-black bg-white bg-opacity-90">
          Ajax JQuery!
        </button>
      </div>
    </main>
    <!-- end main -->

    <!-- footer -->
    <footer class="absolute bottom-0 flex justify-center w-full space-x-2 text-white bg-black">
      <div class="absolute flex items-end justify-center w-16 h-8 transform -translate-x-1/2 bg-black rounded-full rounded-b-none -top-8 left-1/2">
        <span class="text-2xl text-white">☁︎</span>
      </div>
      <!--  -->
      <span>Bruxelles, BE</span>
      <span>|</span>
      <span>brume</span>
      <span>|</span>
      <span>2.3°C</span>
      <span>|</span>
      <span>vent</span>
      <span>↗︎</span>
      <span>NE (50°)</span>
      <span>(3.1 km/h)</span>
    </footer>
    <!-- end footer -->
  </body>
</html>

