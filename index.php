<?php
$url = 'https://radio.ca.reclaim.cloud/public/radio/embed';
$online = 'HTTP/1.1 200 OK';
$headers = @get_headers($url);
if(!$headers || $headers[0] == $online) {
    // Hey we are online
    readfile("online.html");
}
else {
    // Offline
    readfile("offline.html");
    // Uncomment the following line to see what the status currently is
    // echo($headers[0]);
}
?>