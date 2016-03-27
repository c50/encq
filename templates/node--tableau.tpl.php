<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  
  <header>
    <?php print render($title_prefix); ?>
    <h3<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h3>
    <?php print render($title_suffix); ?>
  </header>
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    <br /><br />
  </div>

  <div class="clearfix">
 
<!-- 
    <?php print render($content['comments']); ?> -->
  </div>
</article>