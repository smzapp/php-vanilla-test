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
    public static function view($file, $data = [])
    {
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }

        require_once APP_DIR . '/app/views' . $file . '.php';
    }

    public static function with($url, $data = [])
    {
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }

        self::redirect($url);
    }

    
}