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
