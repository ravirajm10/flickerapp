<?php
namespace App\Helpers;

/**
 * This class will do the stuff related with flicker
 *
 * @author ravirajm
 */
class Flicker {

    /*
     * This to will provide the photo url
     * Currently we are fetching middle size photo
     *
     * @param Obj $photo
     * @param string $sizeType
     * @return string $url
     */
    public static function generatePhotoApiUrl($photo, $sizeType = '') {
        $farmId = $photo->farm;
        $serverId = $photo->server;
        $photoId = $photo->id;
        $secretId = $photo->secret;

        if ($sizeType != 'o') {
            return "https://farm" . $farmId . ".staticflickr.com/" . $serverId . "/" . $photoId . "_" . $secretId . "_". $sizeType .".jpg";
        }

        return "https://farm" . $farmId . ".staticflickr.com/" . $serverId . "/" . $photoId . "_" . $secretId . ".jpg";
    }
}
