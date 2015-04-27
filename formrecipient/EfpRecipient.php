<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * PHP version 5
 * @copyright  Jan Theofel www.theofel.com 2011-2013, ETES GmbH 2010
 * @author     Jan Theofel <jan@theofel.de>, Andreas Schempp <andreas.schempp@etes.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: $
 */

class EfpRecipient extends Controller
{
	
	public function prepareRecipient($arrSubmitted, $arrFiles, $intOldId, &$arrForm)
	{
		$arrForm['formattedMailRecipient'] = $this->replaceInsertTags(str_replace(array_map(create_function('$a', 'return "{{form::$a}}";'), array_keys($arrSubmitted)), array_values($arrSubmitted), $arrForm['formattedMailRecipient']));
		
		return $arrSubmitted;
	}
}

