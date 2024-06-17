<?php
namespace app\library;

class Response {

    public static function redirect($url)
    {
        header("Location: " . BASE_URL . $url);
    }

    /**
     * returns view/ui from controller
     */
    public static function view($file)
    {
        require_once APP_DIR . '/app/views' . $file . '.php';
    }

    public static function withSession($url, $data)
    {

        return self::redirect($url);
    }
}