<?php

require_once 'function.php';

$event = filter_input(INPUT_POST, 'event', FILTER_SANITIZE_SPECIAL_CHARS);
$urls = filter_input(INPUT_POST, 'urls', FILTER_SANITIZE_URL);
$message = '';

if($event === 'send') {
    trim($urls);
    $urlArray = explode(',', $urls);
    if(!empty($urlArray[0])) {
        if(count($urlArray) <= 10) {
            foreach ($urlArray as $url) {
                if(checkLink($url)) {
                    $message = priceCheck($url);
                } else {
                    $message .= '<strong>Not Udemy link!</strong><br>' . $url . '<br>';
                }
            }
        } else {
            $message .= '<strong>Too much URLs! Please only provide 10!</strong>';
        }
    } else {
       $message .= '<strong>Plese provide the URL(s)!</strong>'; 
    }

    
        
        

}