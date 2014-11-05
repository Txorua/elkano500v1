<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>

  <?php ($classes_array[$id] && $id < 2) ? $classes_array[$id] .= " col-md-6" : $classes_array[$id] .= " col-md-4 con-padding"; ?>

  <?php if ($id == 0 || $id == 2): ?>
  <div class="row">
  <?php endif; ?>

  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>

  <?php if ($id == 1): ?>
  </div>
  <?php endif; ?>

<?php endforeach; ?>
</div>
