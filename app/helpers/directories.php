<?php

function dir_views($file)
{
    return APP_DIR . "/app/views/" . $file . '.php';
}

function dir_app($path = '')
{
    return APP_DIR . $path;
}

function dir_config($file)
{
    return APP_DIR . "/config/" . $file . '.php';
}