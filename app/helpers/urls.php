<?php 

/**
 * @return string
 */
function get_request_path()
{
    $baseDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $requestUri = $_SERVER['REQUEST_URI'];
    $path = str_replace($baseDir, '', $requestUri);
    $path = '/' . ltrim($path, '/');
    
    return $path;
}

function base_url($slug)
{
    return BASE_URL . $slug;
}