<?php
/**
 * @ Chess League Manager (CLM) Component
 * @Copyright (C) 2008-2026 CLM Team.  All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link https://chessleaguemanager.org
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
if(!defined("DS")){define('DS', DIRECTORY_SEPARATOR);} // fix for Joomla 3.2

use Joomla\CMS\Helper\ModuleHelper;

// Konfiguration wird benötigt
require_once (JPATH_SITE . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR . "com_clm" . DIRECTORY_SEPARATOR . "clm" . DIRECTORY_SEPARATOR . "index.php");

require_once (dirname(__FILE__).DS.'helper.php');

$par_itemid = $params->def('itemid', '');

$link = modCLM_ArchivHelper::getLink($params);
$count = modCLM_ArchivHelper::getCount($params);
$saison = modCLM_ArchivHelper::getSaison($params);
$runden = modCLM_ArchivHelper::getRunde($params);

require(ModuleHelper::getLayoutPath('mod_clm_archiv'));


