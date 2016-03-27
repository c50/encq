<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($main_menu): ?>
    <nav class="navigation clearfix">
      <div class="primary-menu inline">
        <?php print '<h2 class="element-invisible">Main menu</h2>';?>
        <?php
    $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    print drupal_render($main_menu_tree);
    ?>
    </div>
    </nav>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>