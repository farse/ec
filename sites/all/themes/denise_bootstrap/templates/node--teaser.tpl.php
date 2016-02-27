<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
  </header>

  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);

  ?>

  <?php if (!empty($content['links']) && strlen($content['body']['#items'][0]['safe_value']) > 600): ?>
    <footer>
      <?php //dpm($content['links']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>



</article> <!-- /.node -->
