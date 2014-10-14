<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header class="site-header" role="banner">
  <div class="container">
    <div class="text-right">
      <ul class="header-links list-inline list-unstyled h4">
        <li><span class="glyphicon glyphicon-envelope">&nbsp;</span><a href="contact">contact</a></li>
        <?php if (!empty($language_links)): ?>
        <?php print $language_links; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <span class="visible-xs"><?php print $site_name; ?></span>
        <img src="<?php print $logo; ?>" alt="Elkano 500" class="img-responsive img-circle hidden-xs">
      </a>
      <?php endif; ?>
    </div>
    <div class="collapse navbar-collapse">
      <?php if (!empty($primary_nav)): ?>
      <?php print render($primary_nav); ?>
      <?php endif; ?>
    </div>
  </nav>
</header>

<section>
    <?php print render($page['before_content']); ?>
</section>

<main class="container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?><p class="lead"><?php print $site_slogan; ?></p><?php endif; ?>
    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <?php if (!empty($page['sidebar_first'])): ?>
    <aside class="col-sm-3" role="complementary">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>

  <section>
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if (!empty($title)): ?>
      <h1 class="page-header"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
      <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </section>

  <?php if (!empty($page['sidebar_second'])): ?>
    <aside class="col-sm-3" role="complementary">
      <?php print render($page['sidebar_second']); ?>
    </aside>  <!-- /#sidebar-second -->
  <?php endif; ?>

</main>

<footer class="site-footer">
  <?php print render($page['footer']); ?>
  <div class="container-fluid">

    <div class="row redes-sociales">
      <div class="col-sm-12">
        <ul class="list-inline list-unstyled h1 pull-right">
          <li><a href="#" ><i class="icon-zocial-facebook"></i></a></li>
          <li><a href="#"><i class="icon-zocial-twitter"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-5 col-sm-offset-1">
        <address id="udala">
          <h1 class="footer-heading">Getariako Udala</h1>
          <span class="glyphicon glyphicon-home">&nbsp;</span>Gudarien enparantza 1 20808 GETARIA<br>
          <span class="glyphicon glyphicon-earphone">&nbsp;</span>{{ site.t_ui[page.lang].tel }}: (+34) 943 896 024<br>
          <span class="glyphicon glyphicon-envelope">&nbsp;</span>Email: udala@getaria.org<br>
        </address>
      </div>

      <div class="col-xs-12 col-sm-5 col-sm-offset-1">
        <address id="turismo">
          <h1 class="footer-heading">Getariako Turismoa</h1>
          <span class="glyphicon glyphicon-home">&nbsp;</span>Aldamar Parkea 2 20808 GETARIA<br>
          <span class="glyphicon glyphicon-earphone">&nbsp;</span>{{ site.t_ui[page.lang].tel }}: (+34) 943 140 957<br>
          <span class="glyphicon glyphicon-envelope">&nbsp;</span>Email: turismogetaria@euskalnet.net<br>
        </address>
      </div>
    </div>
  
    <div class="row">
      <div class="col-xs-12">
        <hr>
        <ul class="footer-menu list-inline list-unstyled text-center">
          <li><a href="#">Mapa Web</a></li>
          <li><a href="#">Aviso legal</a></li>
          <li><a href="#">Privacidad</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>

    </div>

  </div>
</footer>