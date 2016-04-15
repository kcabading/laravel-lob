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

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Lob\Lob;

class LobServiceProvider extends ServiceProvider
{

    public function register()
    {
        $that = $this;
        $this->app->singleton('lob', function() use ($that) {
            return new Lob($this->app['config']->get('laravel-lob::lob.api_key'));
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->package('upwebdesign/laravel-lob');
    }

}