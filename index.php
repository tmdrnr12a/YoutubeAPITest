<?php

// Your youtube api key
$youtube_api_key = '';

// Target youtube channel id
$channel_id = 'UCdtRAcd3L_UpV4tMXCw63NQ,UC1dG3vI9FfHnH3YgyeKUz_A';

// Youtube url
$url = "https://www.googleapis.com/youtube/v3/channels?key=".$youtube_api_key."&id=".$channel_id."&part=snippet,statistics&fields=items(id,snippet(title,publishedAt,thumbnails(high)),statistics)"; 

echo $url;
echo "<br>";
echo "<br>";

// Show data
$json_data = file_get_contents($url); 
$object_data = json_decode($json_data); 

foreach ($object_data->items as $data){
    $title = $data->snippet->title;
    $subscriberCount = $data->statistics->subscriberCount;

    echo $title." : ".$subscriberCount;
    echo "<br>";
}
?>

