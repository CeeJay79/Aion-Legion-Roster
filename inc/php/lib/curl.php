<?php

/* Checks for presence of the cURL extension. */
function _iscurlinstalled() {
    if (in_array  ('curl', get_loaded_extensions())) {
        return true;
    }
    else{
        return false;
    }
}

/* Function to use curl like file_get_contents */
function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

?>
