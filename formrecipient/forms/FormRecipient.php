<?php

/**
 * PHP version 5
 * @copyright  Christian Barkowsky 2015, Jan Theofel www.theofel.com 2011-2013, ETES GmbH 2010
 * @author     Christian Barkowsky <hallo@christianbarkowsky.de>
 * @author     Jan Theofel <jan@theofel.de>
 * @author     Andreas Schempp <andreas.schempp@etes.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


namespace Contao;


class FormRecipient extends \Form
{
	
	/**
	 * Process form data, store it in the session and redirect to the jumpTo page
	 * @param array
	 */
	protected function processFormData($arrSubmitted, $arrLabels)
	{
		$this->recipient = $this->replaceInsertTags(str_replace(array_map(create_function('$a', 'return "{{form::$a}}";'), array_keys($arrSubmitted)), array_values($arrSubmitted), $this->recipient));
		
		return parent::processFormData($arrSubmitted, $arrLabels);
	}
	
}

