<?php

//checks the links if it's a valid Udemy link
function checkLink($url) {
    if (strpos($url, "udemy") !== false) {
        return true;
    } else {
        return false;
    }
    
}

//checks the price on the udemy link
function priceCheck($url) {
    $html = file_get_contents('https://www.udemy.com/course/python-for-beginners-learn-programming-from-scratch/');
preg_match_all('/\€([\d.]+)/', $html, $matches);

if (!empty($matches[1])) {
    foreach ($matches[1] as $price) {
        echo 'Price: $'. $price . '<br>';
    }
} else {
    echo 'No prices were found.';
}
    
}