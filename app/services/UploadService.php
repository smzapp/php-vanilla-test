<?php
namespace app\services;

/**
 * @author : Samuel Amador
 */
class UploadService {

    private static $maxSize;

    private static $defaultFileName;

    private static $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];


    public static function move($inputName)
    {
        $targetDir = dir_app("/uploads/");

        $fileName = basename($_FILES[$inputName]["name"]);

        $targetFilePath = $targetDir . $fileName;

        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $uniqueFileName = uniqid() . '_' . $fileName;

        $targetFilePath = $targetDir . $uniqueFileName;
        
        if (in_array($fileType, self::$allowedTypes)) {
            if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetFilePath))
            {
                return [
                    'filename' => $fileName,
                    'tmpname' => $_FILES[$inputName]['tmp_name'],
                    'path' => 'uploads/' . $uniqueFileName
                ];
            }
        }

        return [];
    }
}