<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Formrecipient
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'FormRecipient' => 'system/modules/formrecipient/FormRecipient.php',
	'EfpRecipient'  => 'system/modules/formrecipient/EfpRecipient.php',
));
