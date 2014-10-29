<?php 
  /**
   * $view
   * $fields
   * $row
   */
?>
<?php if ($row->field_field_foto): ?>
<?php $foto = $row->field_field_foto[0]['raw']; ?>
<a href="<?php print image_style_url('large', $foto['uri']); ?>">
<img class="img-responsive thumbnail" src="<?php print image_style_url('medium_350x233', $foto['uri']); ?>" title="<?php print $foto['title']; ?>" alt="<?php print $foto['alt']; ?>" type="foaf:Image">
</a>
<?php endif; ?>
