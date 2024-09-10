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
use \Joomla\CMS\Helper\ModuleHelper;
use \Joomla\CMS\Factory;
$doc = JFactory::getDocument();
$images	= $params->get("images");
$img = (array) $images ;
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_thumbnail_mini_carousel/assets/css/h-smart-thumbnail.css");
$doc->addScript(JURI::root()."modules/mod_thumbnail_mini_carousel/assets/js/h-smart-thumbnail.min.js");
require JModuleHelper::getLayoutPath('mod_thumbnail_mini_carousel', $params->get('layout', 'default'));
