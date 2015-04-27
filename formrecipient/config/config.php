<?php

/**
 * PHP version 5
 * @copyright  Christian Barkowsky 2015, Jan Theofel www.theofel.com 2011-2013, ETES GmbH 2010
 * @author     Christian Barkowsky <hallo@christianbarkowsky.de>
 * @author     Jan Theofel <jan@theofel.de>
 * @author     Andreas Schempp <andreas.schempp@etes.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


// Frontend modules
$GLOBALS['FE_MOD']['application']['form'] = 'FormRecipient';

// Content element
$GLOBALS['TL_CTE']['includes']['form'] = 'FormRecipient';

// Hooks
$GLOBALS['TL_HOOKS']['processEfgFormData'][] = array('EfpRecipient', 'prepareRecipient');
