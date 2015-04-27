<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel www.theofel.com 2011-2013, ETES GmbH 2010
 * @author     Jan Theofel <jan@theofel.de>, Andreas Schempp <andreas.schempp@etes.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: $
 */

// Frontend modules
$GLOBALS['FE_MOD']['application']['form'] = 'FormRecipient';

// Content element
$GLOBALS['TL_CTE']['includes']['form'] = 'FormRecipient';

// Hooks
$GLOBALS['TL_HOOKS']['processEfgFormData'][] = array('EfpRecipient', 'prepareRecipient');
