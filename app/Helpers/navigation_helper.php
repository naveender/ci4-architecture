<?php
use CodeIgniter\Router\Exceptions\RedirectException;

if (!function_exists('set_active')) {
    function set_active($controller, $method = null) {
        $uri = service('uri');
        $currentController = $uri->getSegment(1);
        $currentMethod = $uri->getSegment(2);

        if ($method === null) {
            return ($currentController == $controller) ? 'active' : '';
        } else {
            return ($currentController == $controller && $currentMethod == $method) ? 'active' : '';
        }
    }
}