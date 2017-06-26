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
    public function getRecentPhotos()
    {
        $apiUrl = "https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=".env('FLICKER_API_KEY')."&per_page=10&format=json&nojsoncallback=1";
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_NOBODY, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $output = curl_exec($ch);
        curl_close($ch);

        return json_decode($output);
    }
}
