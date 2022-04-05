// Resolution_1

<?php
    $url = "URL"

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE) . "";
    curl_close($ch);

    echo $result;
?>


// Resolution_2

<?php
    $url = "URL";

    $resString = file_get_contents($url);
    echo $resString;
?>
