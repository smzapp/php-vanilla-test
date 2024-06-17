<?php 

function get_session($key)
{
     if (isset($_SESSION[$key])) {
        $data = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $data;
    }

    return null;
}


function has_session($key)
{
     if (isset($_SESSION[$key])) {
        return true;
    }

    return false;
}