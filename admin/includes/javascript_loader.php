<?php
/**
 * This file is inserted at the start of the body tag, just above the header menu, and loads most of the admin javascript components
 *
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All 2019 Apr 25 Modified in v1.5.6b $
 */
?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="includes/javascript/jquery.min.js"><\/script>');</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>-->
<script src="includes/javascript/bootstrap.min.js"></script>

<script src="includes/javascript/jquery-ui-i18n.min.js"></script>
<script>
// init datepicker defaults with localization
  $(function () {
    $.datepicker.setDefaults($.extend({}, $.datepicker.regional["<?php echo $_SESSION['languages_code'] == 'en' ? '' : $_SESSION['languages_code']; ?>"], {
      dateFormat: '<?php echo DATE_FORMAT_DATE_PICKER; ?>',
      changeMonth: true,
      changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true,
      showButtonPanel: true
    }));
  });
</script>
<?php if (file_exists('includes/javascript/' . basename($PHP_SELF, '.php') . '.js')) { ?>
  <script src="includes/javascript/<?php echo $file; ?>.js"></script>
<?php } ?>
<?php
if (file_exists(DIR_WS_INCLUDES . 'keepalive_module.php')) {
  require(DIR_WS_INCLUDES . 'keepalive_module.php');
}
require DIR_FS_CATALOG . 'includes/templates/template_default/jscript/jscript_framework.php';
