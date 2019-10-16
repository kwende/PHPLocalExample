<?php
    require __DIR__ . '/vendor/autoload.php';
    $inst = dirname(__FILE__) . '/vendor/InstagramScraper/InstagramScraper.php';
    require_once($inst); 
    $inst = dirname(__FILE__) . '/vendor/Unirest/Unirest.php';
    require_once($inst); 

    echo 'Hello, World!';
    
    Unirest\Request::verifyPeer(false); 

    $post_url = "https://www.instagram.com/p/B3etAunnjuA";

    $instagram = new \InstagramScraper\Instagram();
    $post = $instagram->getMediaByUrl($post_url);
    echo $nonPrivateAccountMedias[0]->getLink();
?>