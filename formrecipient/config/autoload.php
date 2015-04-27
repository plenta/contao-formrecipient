<?php

/**
 * PHP version 5
 * @copyright  Christian Barkowsky 2015, Jan Theofel www.theofel.com 2011-2013, ETES GmbH 2010
 * @author     Christian Barkowsky <hallo@christianbarkowsky.de>
 * @author     Jan Theofel <jan@theofel.de>
 * @author     Andreas Schempp <andreas.schempp@etes.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Contao\FormRecipient' => 'system/modules/formrecipient/forms/FormRecipient.php',
	'Contao\EfpRecipient'  => 'system/modules/formrecipient/forms/EfpRecipient.php',
));
