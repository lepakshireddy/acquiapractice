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
global $user, $language, $theme, $base_url, $language, $is_https, $theme_path;

$image_path = base_path() . path_to_theme() . '/images/';
$path = drupal_get_path_alias();
$protocol = $_SERVER;

$current_url = $base_url . '/' . $path;
if ($is_https) {
  $protocol = "https://";
}
else {
  $protocol = "http://";
}
?>

<div class="container" class="<?php print $classes; ?>">
  <header class="l-header" role="banner">
    <div class="header-wrap">
      <div class="l-branding">
        <a href="<?php print base_path(); ?>" title="Home" rel="home" class="site-logo"><img src="<?php print base_path() . $theme_path; ?>/images/logo.png" alt="Home"></a>
      </div>
      <?php if($logged_in){?>
      <div style="float:right;padding-top:60px;font-size:14px"><span>Welcome <?php  print (isset($_SESSION['userdetails']) && isset($_SESSION['userdetails']['firstName'])?$_SESSION['userdetails']['firstName']:'');?></span> | <a href="<?php print base_path(); ?>user/logout" style="">Logout</a></div>
      <?php }else {?>
      <div style="float:right;padding-top:60px;font-size:14px"><a href="<?php print base_path(); ?>hcp-register" style="">Sign Up</a></div>
      <?php }?>
    </div>
    <div class="l-region l-region--header">
      <!--Banner Start-->
      <div id="banner-wrap" class="banner-wrap-cls">
        <ul><li class="banner1">
            <span data-picture="" data-alt="">
              <span data-src="/sites/default/files/palmflex/images/hero-banner1.jpg"></span>
              <span data-src="/sites/default/files/palmflex/images/mobile/hero-banner1.jpg" data-media="(min-width: 320px)"></span>
              <span data-src="/sites/default/files/palmflex/images/mobile/hero-banner1.jpg" data-media="(min-width: 640px)"></span>
              <span data-src="/sites/default/files/palmflex/images/tablet/hero-banner1.jpg" data-media="(min-width: 768px)"></span>
              <span data-src="/sites/default/files/palmflex/images/hero-banner1.jpg" data-media="(min-width: 1000px)">
                <?php if (drupal_is_front_page()) { ?>
                  <img src="<?php print base_path() . $theme_path; ?>/images/hero-banner1.jpg" alt="">
                <?php }
                else {
                  ?>
                  <img src="<?php print base_path() . $theme_path; ?>/images/BannerSmall.jpg" alt="">
<?php } ?>
              </span>
              <noscript><img src="/sites/default/files/palmflex/images/hero-banner1.jpg" alt="" title="" /></noscript>
            </span>
            <div class="carousal-wrap">
<?php if (drupal_is_front_page()) { ?>
                <div class="carousal-content">
                  <div class="div-position">
                    <p>Brian Jackson, <span>Untitled</span></p>
                    <p>Artwork from Reflections Art in Health</p>
                  </div>
                </div>
<?php } ?>
            </div>
          </li>
        </ul> <?php if (drupal_is_front_page()) { ?>
          <div id="welcome-wrap-bg" style="height:1px;"> </div>
<?php } ?>
      </div><!--Banner End-->  </div>
  </header>
  <?php print render($page['header']); ?>
  <?php if (!empty($tabs)): ?>
    <?php print render($tabs); ?>
  <?php endif; ?>



  <?php if (!empty($action_links)): ?>
    <ul class="action-links"><?php print render($action_links); ?></ul>
<?php endif; ?>
  <!--googleon: all-->
  <div class="l-main">
    <div class="l-content" role="main">
        <?php if (!empty($messages)): ?>
    <?php print render($messages); ?>
  <?php endif; ?>
      <div class="form_wrap_holder">
        <div class="form_wrap">
          <h3><?php print $title; ?></h3>
<?php print render($page['content']); ?>
        </div>
      </div>
    </div>
  </div>
  <!--googleoff: all-->
  <footer class="l-footer" role="contentinfo">
<?php print render($page['footer']); ?>
  </footer>
  <!--googleon: all-->
</div>