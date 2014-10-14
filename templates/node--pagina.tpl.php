<?php
/**
 * Teaser
 */
?>
<?php if ($view_mode == "teaser"): ?>
<article>
  <header>
    <h1><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
  </header>
  <div class="row">
    <div class="col-sm-7">
      <div class="lead">
      <?php print render($content['body']); ?>
      <?php hide($content['links']['node']); ?>
        <p class="hidden-xs text-right"><a title="<?php print $node->title; ?>" rel="tag" href="<?php print $node_url; ?>"><span><img src="<?php print base_path() . drupal_get_path('theme', 'elkano500'); ?>/assets/images/flecha.png"></span><?php print t('continuar'); ?>&hellip;</a></p>
      </div>
    </div>

    <div class="col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-0">
      <div class="marco-foto">
        <?php
          $content['field_imagen_resumen'][0]['#item']['attributes'] = array('class' => 'img-responsive');
          print render($content['field_imagen_resumen'][0]);
        ?>
      </div>
    </div>
    <div class="clearfix visible-xs-block"></div>
    <p class="visible-xs text-right"><a title="<?php print $node->title; ?>" rel="tag" href="<?php print $node_url; ?>"><span><img src="<?php print base_path() . drupal_get_path('theme', 'elkano500'); ?>/assets/images/flecha.png"></span><?php print t('continuar'); ?>&hellip;</a></p>
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
