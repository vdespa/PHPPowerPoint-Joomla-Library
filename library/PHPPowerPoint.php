<?php
/**
 * @package        Joomla.Site
 * @subpackage     phppowerpoint
 *
 * @copyright      Copyright (c) 2015, Valentin Despa. All rights reserved.
 * @author         Valentin Despa - info@vdespa.de
 * @link           http://www.vdespa.de
 *
 * @license        GNU General Public License version 3. See LICENSE.txt or http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

/**
 * This is a wrapper for the PHPOffice/PHPPowerPoint library
 */

$autoloader = JPATH_LIBRARIES . '/phppowerpoint/library/vendor/autoload.php';

if (file_exists($autoloader) === false)
{
	throw new RuntimeException('Could not find the composer autoload file.', 1430937774);
}

require_once $autoloader;