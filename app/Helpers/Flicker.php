<?php

/**
 * This class will do the stuff related with flicker
 *
 * @author ravirajm
 */
class Flicker {

    /*
     * this to will provide the photo url
     *
     * @param array $photo
     * @return string $url
     */
    public function generatePhotoApiUrl($photo) {
        $farmId = $photo['farm'];
        $serverId = $photo['server'];
        $photoId = $photo['id'];
        $secretId = $photo['secret'];

        return "https://farm" . $farmId . ".staticflickr.com/" . $serverId . "/" . $photoId . "_" . $secretId . "_t.jpg";
    }

    /*
     * this to will provide the original photo url
     *
     * @param array $photo
     * @return string $url
     */
    public function generateOriginalPhotoApiUrl($photo) {
        $farmId = $photo['farm'];
        $serverId = $photo['server'];
        $photoId = $photo['id'];
        $secretId = $photo['secret'];

        $originalSecretId = isset($photo['originalsecret']) ? $photo['originalsecret'] : false;
        $originalFormat = isset($photo['originalformat']) ? $photo['originalformat'] : false;

        if ($originalSecretId == false || $originalFormat == false) {
            return "https://farm" . $farmId . ".staticflickr.com/" . $serverId . "/" . $photoId . "_" . $secretId . "_t.jpg";
        }

        return "https://farm" . $farmId . ".staticflickr.com/" . $serverId . "/" . $photoId . "_" . $secretId . "_o.jpg";
    }
}
