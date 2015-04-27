<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel www.theofel.com 2011-2013, ETES GmbH 2010
 * @author     Jan Theofel <jan@theofel.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: $
 */

// remove regex from recipient field to allow inserttags there
$GLOBALS['TL_DCA']['tl_form']['fields']['recipient']['eval']['rgxp'] = '';
