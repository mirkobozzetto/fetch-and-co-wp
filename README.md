# Prépa des exos pour xles cours du FIJ

## Menu

```php
//menu
function register_my_menu()
{
    register_nav_menus(array(
        'topfr' => 'Menu fr',
    ));
}
add_action('init', 'register_my_menu');
```

devra être présent dans le fichier `functions.php`

et il faudra définir ce code défini par défaut afin de faire fonctionner correctement la redirection de pages dans ce même menu,
du coup ici j'ai défini ce bloc de code dans mon header afin d'afficher correctement mon menu avec mes styles Tailwind

```php
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
```

## Liens utiles:

`
Wordpress
https://www.evernote.com/shard/s482/client/snv?isnewsnv=true&noteGuid=4c9085b2-1129-4c65-8c41-e8fa810b5245&noteKey=7826997b1b1e8a95&sn=https%3A%2F%2Fwww.evernote.com%2Fshard%2Fs482%2Fsh%2F4c9085b2-1129-4c65-8c41-e8fa810b5245%2F7826997b1b1e8a95&title=Wordpress%2Bshare

functions.php
https://www.evernote.com/shard/s482/client/snv?isnewsnv=true&noteGuid=28c944e8-4f18-4d7f-b9e1-926f86744120&noteKey=c69455fb604605cd&sn=https%3A%2F%2Fwww.evernote.com%2Fshard%2Fs482%2Fsh%2F28c944e8-4f18-4d7f-b9e1-926f86744120%2Fc69455fb604605cd&title=functions.php%2Bshare

PHP
https://www.evernote.com/shard/s482/client/snv?isnewsnv=true&noteGuid=49f7fec5-9c3d-460b-983b-2082277572bd&noteKey=ee3223872b53eeba&sn=https%3A%2F%2Fwww.evernote.com%2Fshard%2Fs482%2Fsh%2F49f7fec5-9c3d-460b-983b-2082277572bd%2Fee3223872b53eeba&title=PHP%2B-%2Bshare

ACF
https://www.evernote.com/shard/s482/client/snv?isnewsnv=true&noteGuid=fe2f1e82-0479-4ad3-b84f-bacf21214d14&noteKey=b0204c21e64bd1d3&sn=https%3A%2F%2Fwww.evernote.com%2Fshard%2Fs482%2Fsh%2Ffe2f1e82-0479-4ad3-b84f-bacf21214d14%2Fb0204c21e64bd1d3&title=ACF%2Bshare

Il sera utile une fois le menu du worpress défini de mettre en pplace le code
qui permettra au menu de s'afficher, ce code
`
