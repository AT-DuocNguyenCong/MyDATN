<?php

if (!function_exists('isActiveRoute')) {
    
    /**
     * Active menu side bar when route menu is current route
     *
     * @param string $route  route of page
     * @param string $output active or ''
     *
     * @return string
     */
    function isActiveRoute($route, $output = "active")
    {
        if (Route::currentRouteName() == $route) {
            return $output;
        }
    }
}