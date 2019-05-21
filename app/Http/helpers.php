<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

/**
 * Get pagination per_page default value.
 *
 * @return integer
 */
function getPerPage()
{
    return app()['config']->get('pagination.per_page');
}

/**
 * This function set active link in navigation menu.
 *
 * @param $path
 * @param string $active
 * @return string
 */
function setActive($path, $active = 'active')
{
    return Route::currentRouteNamed($path) ? $active : '';
}

/**
 * Return all supported languages as array.
 *
 * @return array
 */
function languages()
{
    return explode(',', Config::get('app.locales'));
}