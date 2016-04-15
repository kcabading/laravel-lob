<?php

/**
*
*
* Copyright (c) 2015 UPWebDesign, LLC.
* http://github.com/upwebdesign/laravel-lob
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*
* @package upwebdesign/laravel-lob
* @author Jesse Vista <jvista@upwebdesign.com>
* @copyright 2015 UPWebDesign, LLC.
* @version dev
* @link http://github.com/upwebdesign/laravel-lob
*
*/

namespace Upwebdesign\Lob;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lob';
    }
}
