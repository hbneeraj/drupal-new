<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
<ul class="linkone">
<?php foreach ($rows as $id => $row): ?>
  <li>
    <?php print $row; ?>
  </li>
<?php endforeach; ?>
</ul>