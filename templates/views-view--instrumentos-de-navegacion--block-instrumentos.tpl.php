<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($variables['view']->result as $id => $instrumento): ?>
<article>
  <header>
    <h1><?php print $instrumento->node_title; ?></h1>
  </header>
  <div class="row">
    <div class="col-xs-4 pull-right">
      <img src="<?php print image_style_url('large', $instrumento->field_field_imagen[0]['raw']['uri']); ?>" alt="<?php print $instrumento->field_field_imagen[0]['raw']['alt']; ?>" title="<?php print $instrumento->field_field_imagen[0]['raw']['title']; ?>" class="img-responsive center-block" typeof="foaf:Image">
    </div>
    <div class="col-xs-8">
      <?php print $instrumento->field_description_field[0]['raw']['safe_value']; ?>
    </div>
  </div>
</article>
<?php endforeach; ?>

