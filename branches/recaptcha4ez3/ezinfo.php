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

class recaptchaInfo
{
    function info()
    {
        $return = array(
            'Name' => "reCAPTCHA eZ Publish (3.x) Integration",
            'Version' => "1.1",
            'Author' => "<a href='http://www.stuffandcontent.com'>Bruce Morrison</a>",
            'Copyright' => "Copyright (C) 2008 Bruce Morrison",
            'License' => "GNU General Public License v2.0",
            'Includes the following third-party software' => array( 'Name' => 'PHP Library for reCAPTCHA',
                                                                    'Version' => '1.10',
                                                                    'License' => 'GPL - Mike Crawford &  Ben Maurer 2007',
                                                                    'For more information' => 'http://recaptcha.net/plugins/php/' )
        );
        return $return;
    }
}
?>
