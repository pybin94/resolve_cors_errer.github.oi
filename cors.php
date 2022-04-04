<?php
    // [call api] start ------
    $url = "URL"

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE) . "";
    curl_close($ch);
    // ------ [call api] end

    echo ($result);
?>


// 다른 해결 방법

<?php header('Access-Control-Allow-Origin: *')?>
