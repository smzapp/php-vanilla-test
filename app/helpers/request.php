<?php


/**
 * POST Request
 */
if(!function_exists('post')) {
    function post($index, $sanitize = true) {
        if ($sanitize) {
            return sanitize_str($_POST[$index]);
        }
        return $_POST[$index];
    }
}

/**
 * GET Request
 */
if(!function_exists('get')) {
    function get($index, $sanitize = true) {
        if ($sanitize) {
            return sanitize_str($_GET[$index]);
        }
        return $_GET[$index];
    }
}