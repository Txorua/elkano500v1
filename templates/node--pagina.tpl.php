<?php
/**
 * Teaser
 */
?>
<?php if ($view_mode == "teaser"): ?>
<article>
  <header class="text-center">
    <h1><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
  </header>
  <div class="row">
      <div class="marco-foto">
        <?php
          $content['field_imagen_resumen'][0]['#item']['attributes'] = array('class' => 'img-responsive center-block');
          print render($content['field_imagen_resumen'][0]);
        ?>
      </div>
  </div>
</article>
<?php endif; ?>

<?php
/**
 * Full
 */
?>
<?php if ($view_mode == "full"): ?>
  <div class="row">
    <?php if (isset($content['field_imagen'][0])): ?>
    <div class="col-xs-4 col-xs-offset-0 col-sm-3 col-sm-offset-0">
    <?php
        $content['field_imagen'][0]['#item']['attributes'] = array('class' => 'img-responsive fondo-marron pull-right');
        print render($content['field_imagen'][0]);
    ?>
    </div>
    <?php endif; ?>
    <?php print render($content); ?>
  </div>
<?php endif; ?>
