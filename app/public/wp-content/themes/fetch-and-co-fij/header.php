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
<?php
function print_custom_menu()
{
    $nomMenu       = "topfr";
    $menuLocations = get_nav_menu_locations();
    $menuID        = $menuLocations[$nomMenu];
    $primaryNav    = wp_get_nav_menu_items($menuID);

    foreach ($primaryNav as $navItem) {
        echo '<a class="text-white hover:text-blue-400" href="' .
        $navItem->url . '" title="' .
        $navItem->title . '">' . $navItem->title . '</a>';
        echo '<span class="text-white">|</span>';
    }
}
print_custom_menu();
?>
      <!-- recherche -->
      <form>
        <input class="bg-white bg-opacity-50 text-white/90 w-28 focus:outline-none focus:ring-0" type="text">
        <button type="submit">
          <i class="px-3 text-blue-400 fas fa-search"></i>
        </button>
      </form>
    </div>
    <!-- nav end  -->
