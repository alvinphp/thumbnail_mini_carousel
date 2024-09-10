<?php
/* thumbnail_mini_carousel for Joomla!
--------------------------------------------------------------
 * @copyright	Copyright © 2023 - All rights reserved.
 GitHub: https://github.com/alvinalvin
 Developer: Alvin Gil Saldaña
 E-mail: alvin_gil@hotmail.com
 Created: November 2023
 @license		GNU General Public License v2.0
 --------------------------------------------------------------- */
defined('_JEXEC') or die;
// jquery
use Joomla\CMS\HTML\HTMLHelper;
use \Joomla\CMS\Factory;
HTMLHelper::_('jquery.framework');
HTMLHelper::script('https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js');
// root
$eot = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.eot";
$woff = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.woff";
$ttf = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.ttf";
$svg = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.svg";
?>
<!-- style -->
<style media="screen">
@charset "UTF-8";
@font-face {
  font-family: "h-smart-icon";
  src:url("<?php echo $eot ; ?>");
  src:url("<?php echo $eot ; ?>?#iefix") format("embedded-opentype"),
    url("<?php echo $woff ; ?>") format("woff"),
    url("<?php echo $ttf; ?>") format("truetype"),
    url("<?php echo $svg; ?>#h-smart-icon") format("svg");
  font-weight: normal;
  font-style: normal;
}
</style>
<!-- html -->
<div class="container">
  <div class="plugin" style="display:none">
      <ul>
        <?php foreach ($img as $value):?>
          <li>
            <img src="<?php echo $value->image; ?>">
          </li>
        <?php endforeach; ?>
      </ul>
  </div>
</div>
  <!-- script -->
   <script type="text/javascript">
		$('.plugin').hSmartThumbnail();
		$('.plugin').imagesLoaded( function() {
  $('.plugin').css("display", "block");
   });
  </script>
