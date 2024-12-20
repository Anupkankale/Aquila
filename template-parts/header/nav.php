<?php

/**
 * 
 * Header Naviation template
 * 
 * @package Aqulia
 * 
 */


$menu_class = \AQUILA_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('aquila-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php
  if (function_exists('the_custom_logo')) {
    the_custom_logo();
  }
  ?>
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php

    if (! empty($header_menus) && is_array($header_menus)) {
    ?>
      <ul class="navbar-nav mr-auto">

        <?php

        foreach ($header_menus as $menu_item) {
          if (! $menu_item->menu_item_parent) {

            $child_menu_items = $menu_class->get_get_child_menu_item($header_menus, $menu_item->ID);
            $has_children = ! empty($child_menu_items) && is_array($child_menu_items);

            if (! $has_children) {
        ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                  <?php esc_html($menu_item->title); ?>
                </a>
              </li>
            <?php
            } else {
            ?>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php esc_html($menu_item->title); ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                  foreach ($child_menu_items as $child_menu_items) {
                  ?><a class="dropdown-item" href="<?php echo esc_url($child_menu_items->url); ?>">
                      <?php esc_html($child_menu_items->title); ?>
                    </a>
                  <?php
                  }
                  ?>
                </div>
              </li>
            <?php


            }
            ?>

            </a>
          <?php


          }
          ?>
        <?php
        }

        ?>
  </div>
  </li>
<?php
    }

?>
<?php

?>
</ul>
<?php


?>

<form class="form-inline my-2 my-lg-0">

</form>
</div>
</nav>