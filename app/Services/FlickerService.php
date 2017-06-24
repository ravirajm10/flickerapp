<?php
namespace App\Services;
/**
 * This class do the stuff related to flicker api
 *
 * @author ravirajm
 */
class FlickerService {

    /*
     * Get the recent photos from flicker
     *
     * @return string $output
     */
    public function getRecentPhotos() {
        $apiUrl = "https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=076d0f55c5dbd0982fc4d87f92b8019f&format=json&nojsoncallback=1&auth_token=72157682489158394-7fd7b5a072783f96&api_sig=536532f1085290956bb4de44dda1ceaf";
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_NOBODY, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Flickr PHP Class by PHPology');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
}
