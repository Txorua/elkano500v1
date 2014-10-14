<?php if (!empty($title)): ?>
<h3><?php //print $title; ?></h3>
<?php endif; ?>

<?php
$tid = '';
foreach ($rows as $id => $row):
  global $language;
  if (!empty($variables['view']->result[$id]->field_field_centenario_term)):
    $next_tid = $variables['view']->result[$id]->field_field_centenario_term[0]['raw']['tid'];
    if ($tid != $next_tid):
      $tid = $next_tid;
?>
    <?php endif; ?>
  <?php endif; ?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 isotope-item tid-<?php print $tid; ?>">
   <?php print $row; ?>
</div>
<?php endforeach; ?>
