<?php
/**
 * reCAPTCHA extension for eZ Publish
 * Written by Bruce Morrison <bruce@stuffandcontent.com>
 * Copyright (C) 2008. Bruce Morrison.  All rights reserved.
 * http://www.stuffandcontent.com
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 */

class reCAPTCHATemplateOperator {
	
	var $Operators;

	function reCAPTCHATemplateOperator()
	{
		$this->Operators = array( 'recaptcha_get_html' );
	}


	function &operatorList()
	{
		return $this->Operators;
	}

	function namedParameterPerOperator()
	{
		return true;
	}

	function namedParameterList()
	{
		return array( 
			'recaptcha_get_html' => array(), 
		);
	}

	function modify( &$tpl, &$operatorName, &$operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters )
	{
		switch( $operatorName )
		{
			case 'recaptcha_get_html':
		    include_once( 'extension/recaptcha/classes/recaptchalib.php' );

        // Retrieve the reCAPTCHA public key from the ini file                              
        $ini = eZINI::instance( 'recaptcha.ini' );
        $key = $ini->variable( 'Keys', 'PublicKey' );

        // Run the HTML generation code from the reCAPTCHA PHP library 
				$operatorValue = recaptcha_get_html($key);
				break;
		}
	}


};

?>

