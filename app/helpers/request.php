<?php

if(!function_exists('sanitize_str')) {
    function sanitize_str($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
}

if(!function_exists('post')) {
    function post($index, $sanitize = true) {
        if ($sanitize) {
            return sanitize_str($_POST[$index]);
        }
        return $_POST[$index];
    }
}

if(!function_exists('get')) {
    function get($index, $sanitize = true) {
        if ($sanitize) {
            return sanitize_str($_GET[$index]);
        }
        return $_GET[$index];
    }
}